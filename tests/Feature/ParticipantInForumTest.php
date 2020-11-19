<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Tests\TestCase;


class ParticipantInForumTest extends TestCase
{
    use DatabaseMigrations;

    /** @test */
    function unauthenticated_user_may_not_add_replies()
    {
        $this->expectException('Illuminate\Auth\AuthenticationException');
        $this->post('threads/1/replies', []);
    }


    /** @test */
    function an_authenticated_user_may_participate_in_forum()
    {
        $user = factory('App\User')->create();
        $this->signIn($user);

        $thread = factory('App\Thread')->create();
        $reply = factory('App\Reply')->create();
        $this->post($thread->path()  . '/replies', $reply->toArray());
        $this->get($thread->path())
            ->assertSee($reply->body);
    }
}
