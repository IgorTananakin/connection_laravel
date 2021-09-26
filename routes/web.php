<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    // return view('welcome');
    $directors=\App\Models\Director::all();
    $films=\App\Models\Director::all();
    $authors=\App\Models\Author::all();
    // $books=\App\Models\Book::all();
    // foreach ($directors as $director){
    //     echo 'Director name: '.$director['name'].'<br>';
    //     echo 'Film name: '.$director->film['name'].'<br>';
    //     echo '<br>';
    // }
    // foreach ($films as $film){
    //     echo 'Film name: '.$film['name'].'<br>';
    //     echo 'Director name: '.$film->director['name'].'<br>';
    //     echo '<br>';
    // }

    //1 ко многим
    // foreach ($authors as $author){
    //     echo 'author name: '.$author['name'].'<br>';
    //     echo 'author books name: '.'<br>';
    //     foreach($author->books as $book){
    //     echo $book['title'].'<br>';
    //     }
    // }

    //многие ко многим

    $cinemas=\App\Models\Cinema::all();
    foreach ($cinemas as $cinema){
        echo 'Cinema: '.$cinema['name'].'<br>';
        echo 'Movies';
        foreach($cinema->movies as $movie){
        echo $movie['name'].'<br>';
        }
    }

});
