<?php

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

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| Preview route
|--------------------------------------------------------------------------
|
| Route for prismic.io preview functionality
|
*/

Route::get('/preview', function (Request $request) {
    $token = $request->input('token');
    if (!isset($token)) {
        return abort(400, 'Bad Request');
    }
    $url = $request->attributes->get('api')->previewSession($token, $request->attributes->get('linkResolver'), '/');
    return response(null, 302)->header('Location', $url);
});

Route::get('/index', function () {
    // Render the page
    return view ('index');
});

Route::get('lang/{locale}', function ($locale) {
    session()->put('locale', $locale);
    return redirect()->back();
});
// In routes/web.php

// Get page by UID
Route::get('/aus/{uid}', function ($uid, Request $request) {
    // Query the API
    $document = $request->attributes->get('api')->getByUID('aus',$uid);

    // Display the 404 page if no document is found
    if (!$document) {
        return view('404');
    }

    // Render the page
    return view ('aus', ['document' => $document]);
});
// In routes/web.php

// Get page by UID
Route::get('/aus_r/{uid}', function ($uid, Request $request) {
    // Query the API
    $document = $request->attributes->get('api')->getByUID('aus_r',$uid);

    // Display the 404 page if no document is found
    if (!$document) {
        return view('404');
    }

    // Render the page
    return view ('aus_r', ['document' => $document]);
});


// In routes/web.php

// Get page by UID
Route::get('/covid-19/{uid}', function ($uid, Request $request) {
    // Query the API
    $document = $request->attributes->get('api')->getByUID('covid-19',$uid);

    // Display the 404 page if no document is found
    if (!$document) {
        return view('404');
    }

    // Render the page
    return view ('covid-19', ['document' => $document]);
});

// In routes/web.php

// Get page by UID
Route::get('/india/{uid}', function ($uid, Request $request) {
    // Query the API
    $document = $request->attributes->get('api')->getByUID('india',$uid);

    // Display the 404 page if no document is found
    if (!$document) {
        return view('404');
    }

    // Render the page
    return view ('india', ['document' => $document]);
});



// In routes/web.php

// Get page by UID
Route::get('/india_r/{uid}', function ($uid, Request $request) {
    // Query the API
    $document = $request->attributes->get('api')->getByUID('india_r',$uid);

    // Display the 404 page if no document is found
    if (!$document) {
        return view('404');
    }

    // Render the page
    return view ('india_r', ['document' => $document]);
});



// In routes/web.php

// Get page by UID
Route::get('/page/{uid}', function ($uid, Request $request) {
    // Query the API
    $document = $request->attributes->get('api')->getByUID('page', $uid);

    // Display the 404 page if no document is found
    if (!$document) {
        return view('404');
    }

    // Render the page
    return view('page', ['document' => $document]);
});

/*
|--------------------------------------------------------------------------
| Index route
|--------------------------------------------------------------------------
*/

Route::get('/', function () {
    return redirect('/index');
});


Route::get('/home', function () {
    return view('home');
});
/*
|--------------------------------------------------------------------------
| Tutorial route
|--------------------------------------------------------------------------
*/

Route::get('/index', function () {
    return view('index');
});

/*
|--------------------------------------------------------------------------
| 404 Page Not Found
|--------------------------------------------------------------------------
*/

Route::get('/{path}', function () {
    return view('404');
});



