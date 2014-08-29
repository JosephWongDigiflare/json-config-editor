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
	echo "test";
	// $game = Game::find(1);
	//    echo $game->name;
	//echo $game;
});

Route::get('jkma', function() {
	return View::make('jkma');	
});

Route::post('jkma', function() {
  $data = Input::all();
  var_dump($data);
  
  echo $data['text_filename'];
  
  $myfile = fopen("/home/action/data/newfile.txt", "w") or die("Unable to open file!");
  $txt = "John Doe\n";
  fwrite($myfile, $txt);
  $txt = "Jane Doe\n";
  fwrite($myfile, $txt);
  fclose($myfile);
  
	return View::make('jkma');	
});

Route::get('editor', function() {
  return View::make('editor');
});

Route::get('test', function()
{
  var_dump(DB::select('select * from test'));
});
Route::post('test', function()
{
  var_dump(DB::select('select * from test'));
});

Route::get('questions', function()
{
  return View::make('hello');
});

// Example with blade templating
Route::get('example', function()
{
    return URL::asset('img/logo.png');
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

// Example where a condition is applied
Route::get('save/{princess}', function($princess)
{
    return "Sorry, {$princess} is in another castle. :(";
})->where('princess', '[A-Za-z]+');

// Example with route encapsulation
Route::group(array('before' => 'onlybrogrammers'), function()
{

    // First Route
    Route::get('/first', function() {
        return 'Dude!';
    });

    // Second Route
    Route::get('/second', function() {
        return 'Duuuuude!';
    });

    // Third Route
    Route::get('/third', function() {
        return 'Come at me bro.';
    });

});

// Example now prfixes books in front of everything
Route::group(array('prefix' => 'books'), function()
{

    // First Route
    Route::get('/first', function() {
        return 'The Colour of Magic';
    });

    // Second Route
    Route::get('/second', function() {
        return 'Reaper Man';
    });

    // Third Route
    Route::get('/third', function() {
        return 'Lords and Ladies';
    });

});


// Example domain based routing
Route::group(array('domain' => 'myapp.dev'), function()
{
    Route::get('my/route', function() {
        return 'Hello from myapp.dev!';
    });
});

Route::group(array('domain' => 'another.myapp.dev'), function()
{
    Route::get('my/route', function() {
        return 'Hello from another.myapp.dev!';
    });
});

Route::group(array('domain' => 'third.myapp.dev'), function()
{
    Route::get('my/route', function() {
        return 'Hello from third.myapp.dev!';
    });
});

// Example Url generation

Route::get('/current/url', function()
{
	return URL::current(); // strips get params, use URL::full()
});
