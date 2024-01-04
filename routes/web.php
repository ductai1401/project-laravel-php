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
class Task{
    public function __construct(
        public int $id,
        public string $title,
        public string $description,
        public string $long_description,
        public bool $comleted,
        public string $createed_at,
        public string $update_at
        )
        {}
    }
    $tasks = [
        new Task(1, 'ABC', '123456', '1.....5', false, '2023-12-26', '2023-12-26'),
        new Task(1, 'XYZ', '678890', '1.....5', false, '2023-12-26', '2023-12-26')
    ];
Route::get('/', function () use ($tasks) {
        return view('pages.index');
    })->name('index');
    Route::get('/Checkout', function () use ($tasks) {
        return view('pages.checkout');
    })->name('checkout');

    Route::get('/About', function () use ($tasks) {
        return view('pages.about');
    });
    Route::get('/Blog-single', function () use ($tasks) {
        return view('pages.blog-single');
    })->name('blog-single');
    Route::get('/Blog-list', function () use ($tasks) {
        return view('pages.Blog-list');
    })->name('blog-list');
    Route::get('/Contact', function () use ($tasks) {
        return view('pages.contact');
    })->name('contact');

    Route::get('/Login', function () use ($tasks) {
        return view('pages.login');
    })->name('login');

    Route::get('/Cart', function () use ($tasks) {
        return view('pages.cart');
    })->name('cart');

    Route::get('/Product', function () use ($tasks) {
        return view('pages.product');
    })->name('product');

    Route::get('/Product_Detail', function () use ($tasks) {
        return view('pages.productDetail');
    })->name('product-detail');

//admin page
Route::group(['prefix'=>'admin', 'as'=>'admin.','namespace'=>'admin'], function(){
    Route::get('/', function(){
        return view('admin.layouts.app');
    });

    Route::get('/user-list', function () {

        return view('admin.users.user-list');
    });
    
    Route::get('/Categories', function(){
        return view('admin.Categories.Categorie-list');
    });

    Route::get('/Product', function () {

        return view('admin.product.product-list');
    });



    Route::get('/404', function () {
    
        return view('admin.layouts.404Page');
    })->name('404Page');
    Route::get('/Animations', function () {
    
        return view('admin.layouts.animations');
    })->name('animations');
    Route::get('/BankPage', function () {
    
        return view('admin.layouts.blankPage');
    })->name('blankPage');
    Route::get('/Border', function () {
    
        return view('admin.layouts.borders');
    })->name('borders');
    Route::get('/button', function () {
        return view('admin.layouts.Button');
    })->name('button');
    Route::get('/Cards', function () {
        return view('admin.layouts.cards');
    })->name('cards');
    Route::get('/Chart', function () {
    
        return view('admin.layouts.charts');
    })->name('charts');
    Route::get('/Color', function () {
    
        return view('admin.layouts.colors');
    })->name('colors');
    Route::get('/forgotPassword', function () {
    
        return view('admin.layouts.forgotPassword');
    })->name('forgotPassword');
    Route::get('/Login', function () {
    
        return view('admin.layouts.login');
    })->name('login');
    Route::get('/Other', function () {
    
        return view('admin.layouts.other');
    })->name('other');
    Route::get('/Register', function () {
    
        return view('admin.layouts.register');
    })->name('register');
    Route::get('/Tables', function () {
    
        return view('admin.layouts.tables');
    })->name('tables');
    

    });


// Route::get('/', function () use ($tasks) {
//     return view('layouts.app',['task'=> $tasks]);
// });
// Route::get('/product', function () use ($tasks) {
//      return view('product',['task'=> $tasks]);
// });
// Route::get('/contactus', function () {
//     return view('contactus');
// });
// Route::get('/product', function () {
//     return view('product');
// });
// Route::get('/hello', function () {
//     return view('hello');
// });
// Route::get('/hallo', function () {
//     return redirect() -> route('hello');
// });
// Route::get('/product/{id}', function($id){
//     return view("viewProduct",['id'=>$id]);
// })-> name('product.show');

// Route::get('/hello1', function () {
//     return 'hello1';
// })-> name('hello1');
// Route::get('/hello2', function () {
//     return 'hello2';
// })-> name('hello2');
// Route::get('/hallo', function () {
//     return redirect('hello1');
// });
// Route::fallback(function () {
//     return "error 404";
// });

Auth::routes();

// Route::get('/login', [App\Http\Controllers\HomeController::class, 'index'])->name('login');
