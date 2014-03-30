<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|'
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

// app/routes.php

Route::get('/', function()
{
    return View::make('simple');
});


Route::get('test', function()
{
  var_dump(DB::select('select * from test'));
});

Route::get('questions', function()
{
  return View::make('hello');
});

// Example showing how to pass values from url to site
Route::get('/books/{genre?}', function($genre = null)
{
  if ($genre == null) return 'books index';
  return "Books in the {$genre} category.";
});

//Example to Redirect routes
Route::get('first', function()
{
    return Redirect::to('second');
});

Route::get('second', function()
{
    return 'Second route.';
});

// Example with HTTP headers
Route::get('custom/response', function()
{
    $response = Response::make('Hello world!', 200);
    $response->headers->set('our key', 'our value');
    return var_dump($response->headers);
});

// Example with JSON Responses
Route::get('markdown/response', function()
{
  // $data = array('iron', 'man', 'rocks');
  
  $data['name'] = array('iron', 'man', 'rocks');
    return Response::json($data);
});

// Example to download a file with return code 418 and custom header iron: man
Route::get('file/download', function()
{
    $file = 'path_to_my_file.pdf';
    return Response::download($file, 418, array('iron', 'man'));
});

// Example dealing with filters
Route::get('/birthday', array(
    'before' => 'birthdaybefore',
    'after' => 'birthdayafter',
    function()
    {
       return View::make('hello');
    }
));