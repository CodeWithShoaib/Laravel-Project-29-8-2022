

<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FrontendController;
use App\Http\Controllers\HeaderController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\FeedbackController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\ShowcaseController;
use App\Http\Controllers\TeamController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\PortfolioController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ItemsController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\MessageController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\NewsletterController;
use App\Http\Controllers\FooterController;
use App\Http\Controllers\Auth\LoginController;
use Illuminate\Support\Facades\Mail;

Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get("/master",function (){
return view('admin.dashboard');
});
Route::get('index',function(){
return view('Frontend.index');
});
Route::get('/',[FrontendController::class,'home'])->name('home');
Route::get('about',[FrontendController::class,'about'])->name('about');
Route::get('blog',[FrontendController::class,'blog'])->name('blog');
Route::get('contact',[FrontendController::class,'contact'])->name('contact');
Route::get('portfolio',[FrontendController::class,'portfolio'])->name('portfolio');
Route::get('services',[FrontendController::class,'services'])->name('services');
Route::get('shop',[FrontendController::class,'shop'])->name('shop');
Route::get('header',[FrontendController::class,'header'])->name('header');



Route::prefix("/admin")->name('admin.')->group(function(){
Route::get("/master",function (){
return view('admin.dashboard');
})->name('dashboard');
Route::get('/header',[HeaderController::class,'edit'])->name('header');
Route::post('/header',[HeaderController::class,'update'])->name('update');


// cms foor footer
Route::get('/footer',[FooterController::class,'edit'])->name('footer');
Route::post('/footer',[FooterController::class,'update'])->name('Footerupdate');

//  update for home
Route::get('/index',[IndexController::class,'index'])->name('homeAdd');
Route::post('index',[IndexController::class,'update'])->name('homeUpdate');
// update for about
Route::get('/about/index',[AboutController::class,'index'])->name('about');
Route::post('/about/index',[AboutController::class,'update'])->name('aboutUpdate');
//  Route::resources("digital",DigitalController::class);
Route::resource('C_Feedback', FeedbackController::class);
Route::get('Feedback',[FeedbackController::class,"showList"])->name('showList');

Route::resource('news', NewsController::class);
Route::get('newsList',[NewsController::class,"showList"])->name('newsList');

Route::resource('blogs', BlogController::class);
Route::get('blogsList',[BlogController::class,"showList"])->name('blogsList');
// Route::post('/blogsearch',[BlogController::class,"search"])->name('blog.search');

Route::resource('showcase', ShowcaseController::class);
Route::get('showcaseList',[ShowcaseController::class,"showList"])->name('showcaseList');

// update for service
Route::get('admin/service/index',[ServiceController::class,'index'])->name('service');
Route::post('admin/service/index',[ServiceController::class,'update'])->name('serviceUpdate');

// update for service
Route::get('admin/portfolio/index',[PortfolioController::class,'index'])->name('portfolio');
Route::post('admin/portfolio/index',[PortfolioController::class,'update'])->name('portfolioUpdate');

Route::resource('items', ItemsController::class);
Route::get('itemsList',[ItemsController::class,"showList"])->name('itemsList');


// update for service
Route::get('admin/product/index',[ProductController::class,'index'])->name('product');
Route::post('admin/product/index',[ProductController::class,'update'])->name('productUpdate');

Route::resource('team', TeamController::class);
Route::get('teamList',[TeamController::class,"showList"])->name('teamList');

Route::post("/message",[MessageController::class,"create"])->name('message.post');
Route::post("/newsletter",[NewsletterController::class,"create"])->name('news.letter');

Route::get('/subscription',[NewsletterController::class,'index'])->name('subscription');
Route::get('/subscription/delete/{id}',[NewsletterController::class,'delete'])->name('subscription.delete');

// for conatc

Route::get('/contact',[ContactController::class,'edit'])->name('contact.edit');
Route::post('/contact',[ContactController::class,'update'])->name('contact.update');

Route::post('.login/successfull',[LoginController::class,'show'])->name('homepage');


});


