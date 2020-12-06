<?php

use App\Models\User;

use App\Http\Controllers\PostController;
use App\Models\Post;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {

    $faker = Faker\Factory::create();

    $user = User::create([
        'name' => $faker->name,
        'email' => $faker->email,
        'password' => bcrypt($faker->text(10)),
    ]);

    $user->posts()->create([
        'title' => $faker->text(10),
        'body' => $faker->text(200),
    ]);


});

Route::get('/posts', [PostController::class, 'index']);
Route::get('/posts/create', [PostController::class, 'create']);
Route::get('/posts/{id}', [PostController::class, 'show']);
Route::post('/posts', [PostController::class, 'store']);
Route::get('/posts/{id}/edit', [PostController::class, 'edit']);
Route::post('/posts/{id}/edit', [PostController::class, 'update']);
Route::get('/posts/{id}/delete', [PostController::class, 'destroy']);

