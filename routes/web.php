<?php
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/about', function () {
    return view('about');
});

//route parameters
Route::get("/helo/{name}/{age}",function($name,$age){
    return "hello ".$name. ",you are ".$age ." years old";

});

//passing data to the view laravel
Route::get("/user",function(){
    return view('user')->with('name',"vishnu");

});

//route parameter with view using array
Route::get("/user1",function(){
    return view('user1', ['name'=>'vishnu','reg'=>12306579]);

});


Route::get('/student-form', function () {
    return view('student');
});


Route::get('/login-form', function () {
    return view('login');
});


Route::post('/login-form', function (Request $request) {
    $username=$request->username;
    $password=$request->password;

    return "username:".$username;
});


Route::get('/login',function(){
    return view('/login2');

});


Route::post('/login',function(Request $request){
    $correctUsername="vishnu";
    $correctPassword="123";

    if($request->username==$correctUsername && $request->password==$correctPassword){
        return "hello welcome ".$correctUsername;
    }else{
        return "invalid credintials";
    }
});

Route::get('/user',function(){
    return response()->json([
        'name'=>'vishnu',
        'age'=>22
    ]);
});


Route::get('/home',function(){
    return "home page";
})->name('home');


Route::get('/test',function(){
    return response("hello")->header('X-Header','MyValue');
});

Route::get('/test', function () {
    return response("hello")
        ->header('X-Header-1', 'Value1')
        ->header('X-Header-2', 'Value2')
        ->header('X-Header-3', 'Value3');
});


//set-cookie
Route::get('/setcookie',function(){
    return response("cookie-set")->cookie('name','vishnu',10);
});

//get-cookie
Route::get('/getcokkie',function(){
    return request()->cookie('name');
});


use App\Http\Controllers\HomeController;
Route::get('/',[HomeController::class, 'index']);


// use App\Http\Middleware\CheckUserRole;

// Route::middleware([CheckUserRole::class])->group(function(){
//     Route::get('/admin',function(){
//         return "admin panel";

//     });
// });




use App\Http\Controllers\PostController;

// Resource (your style)
Route::resource('/products/all', PostController::class);

// Manual routes (fixed)
Route::get('/products/create', [PostController::class, 'create']);
Route::post('/products', [PostController::class, 'store']);
Route::get('/products/{id}', [PostController::class, 'show']);
Route::get('/products/{id}/edit', [PostController::class, 'edit']);
Route::put('/products/{id}', [PostController::class, 'update']);
Route::delete('/products/{id}', [PostController::class, 'destroy']);

//blade template example+php output+js+css
Route::get('/b',function(){
    return view('b');
});

//template inheritance using blade+exctending layout+yield

Route::get('/hom',function(){
    return view('hom');
});

use App\Http\Middleware\CheckUserRole;
Route::get('/admin',function(){
    return "admin panel";
})->middleware(CheckUserRole::class);



//agecheck middleware
use App\Http\Middleware\ageCheck;

Route::get('/agecheck/{age}',function($age){
    return "access granted";
})->middleware(ageCheck::class);