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