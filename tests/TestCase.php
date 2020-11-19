<?php

namespace Tests;

use Illuminate\Foundation\Testing\TestCase as BaseTestCase;

abstract class TestCase extends BaseTestCase
{

    /*
    public function setUp(): void
    {
        parent::setUp();
        config(['app.url' => 'http://localhost/blog/public']);
    }
    */
    //protected $baseUrl = 'http://localhost/blog/public';

    use CreatesApplication;

    protected function signIn($user = null)
    {
        $user = $user ?: create('App\User');
        $this->actingAs($user);

        return $this;
    }
}
