

```bash
docker exec -it lamp-php74 bash
```



```bash
docker exec -it lamp-php74 php artisan 
```


```bash
docker exec -it lamp-php74 cd blog && php artisan migrate
```

```
php artisan config:cache
php artisan migrate


php artisan make:model Reply -mc

```


# Forum 
1. Thread
2. Reply
3. Users



A. Thread is created by a user
B. A Reply belongs to a thread, and belongs to a users.code 

```bash
php artisan tinker
factory('App\Thread', 50)->create()
```



php artisan tinker
$threads = factory('App\Thread', 50)->create();
$threads->each(function($thread){ factory('App\Reply', 10)->create(['thread_id' => $thread->id]); });

 
 ```bash
 docker exec -it lamp-php74 bash
 cd blog
 php ./vendor/bin/phpunit
 ```



 ```bash
php artisan config:cache
php artisan config:clear
php artisan migrate:refresh
php artisan tinker
$threads = factory('App\Thread', 50)->create();
$threads->each(function($thread){ factory('App\Reply', 10)->create(['thread_id' => $thread->id]); });
exit
./vendor/bin/phpunit
 ```
