<?php

use App\Http\Controllers\Home\HomeAboutController;
use App\Http\Controllers\Home\HomeContactController;
use App\Http\Controllers\Home\HomeServiceController;
use App\Http\Controllers\Home\HomeSliderController;
use App\Http\Controllers\Home\HomeTestimonialController;
use App\Http\Controllers\Home\MultiImageController;
use App\Http\Controllers\Home\UserController;
use App\Models\Home\HomeSlider;
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
Route::get('/phpinfo', function() {
    return phpinfo();
});

Route::get('/', function () {
    // $sliders = HomeSlider::latest()->get();
    return view('frontend.index');
});

Route::get('/about', function () {
    return view('frontend.pages.about');
})->name('about.page');

Route::get('/team', function () {
    return view('frontend.pages.team');
})->name('team.page');

Route::get('/contact', function () {
    return view('frontend.pages.contact');
})->name('contact.page');

Route::get('/project', function () {
    return view('frontend.pages.project');
})->name('project.page');

Route::get('/services', function () {
    return view('frontend.pages.services');
})->name('services.page');

Route::get('/building', function () {
    return view('frontend.pages.building');
})->name('building.page');

Route::get('/eletrical', function () {
    return view('frontend.pages.eletrical');
})->name('eletrical.page');

Route::get('/interiors', function () {
    return view('frontend.pages.interiors');
})->name('interiors.page');

Route::get('/manufacturing', function () {
    return view('frontend.pages.water');
})->name('manufacturing.page');


Route::get('/agriculture', function () {
    return view('frontend.pages.agriculture');
})->name('agriculture.page');


Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('admin.index');
    })->name('dashboard');
});

Route::get("user/logout", [UserController::class, "userLogout"])->name("logout");

// Route::get('/dashboard', function () {
//     return view('admin.index');
// })->name('dashboard')->middleware('adams');


// Home Slider route

Route::get("/admin/home/slider", [HomeSliderController::class, "index"])->name("admin.home.slider");

Route::get("/admin/add/slider", [HomeSliderController::class, "create"])->name("admin.add.slider");
Route::post("/admin/store/slider", [HomeSliderController::class, "store"])->name("admin.store.slider");


Route::get("/admin/edit/slider/{id}", [HomeSliderController::class, "edit"])->name("admin.edit.slider");
Route::post("/admin/update/slider/{id}", [HomeSliderController::class, "update"])->name("admin.update.slider");

Route::get("/admin/delete/slider/{id}", [HomeSliderController::class, "destroy"])->name("admin.delete.slider");

// Home About route
Route::get("/admin/home/about", [HomeAboutController::class, "index"])->name("admin.home.about");
Route::get("/admin/add/about", [HomeAboutController::class, "create"])->name("admin.add.about");
Route::post("/admin/store/about", [HomeAboutController::class, "store"])->name("admin.store.about");


Route::get("/admin/edit/about/{id}", [HomeAboutController::class, "edit"])->name("admin.edit.about");
Route::post("/admin/update/about/{id}", [HomeAboutController::class, "update"])->name("admin.update.about");

Route::get("/admin/delete/about/{id}", [HomeAboutController::class, "destroy"])->name("admin.delete.about");

// Home Service route
Route::get("/admin/home/service", [HomeServiceController::class, "index"])->name("admin.home.service");
Route::get("/admin/add/service", [HomeServiceController::class, "create"])->name("admin.add.service");
Route::post("/admin/store/service", [HomeServiceController::class, "store"])->name("admin.store.service");


Route::get("/admin/edit/service/{id}", [HomeServiceController::class, "edit"])->name("admin.edit.service");
Route::post("/admin/update/service/{id}", [HomeServiceController::class, "update"])->name("admin.update.service");

Route::get("/admin/delete/service/{id}", [HomeServiceController::class, "destroy"])->name("admin.delete.service");

// Home Service route
Route::get("/admin/home/testimonial", [HomeTestimonialController::class, "index"])->name("admin.home.testimonial");
Route::get("/admin/add/testimonial", [HomeTestimonialController::class, "create"])->name("admin.add.testimonial");
Route::post("/admin/store/testimonial", [HomeTestimonialController::class, "store"])->name("admin.store.testimonial");


Route::get("/admin/edit/testimonial/{id}", [HomeTestimonialController::class, "edit"])->name("admin.edit.testimonial");
Route::post("/admin/update/testimonial/{id}", [HomeTestimonialController::class, "update"])->name("admin.update.testimonial");

Route::get("/admin/delete/testimonial/{id}", [HomeTestimonialController::class, "destroy"])->name("admin.delete.testimonial");



// Multi Image Route
Route::get('/all/image', [MultiImageController::class, 'index'])->name('admin.home.portifolio');
Route::post('/add/image', [MultiImageController::class, 'store'])->name('admin.store.portifolio');
Route::get("/admin/delete/testimonial/{id}", [MultiImageController::class, "destroy"])->name("admin.delete.portifolio");


// Contact Route
Route::get('/admin/contact', [HomeContactController::class, 'index'])->name('admin.contact');
Route::get('/create/contact', [HomeContactController::class, 'create'])->name('admin.create.contact');
Route::post('/add/contact', [HomeContactController::class, 'store'])->name('admin.store.contact');
Route::get('/edit/contact/{id}', [HomeContactController::class, 'edit'])->name('admin.edit.contact');
Route::post('/update/contact/{id}', [HomeContactController::class, 'update'])->name('admin.update.contact');

Route::get('/delete/contact/{id}', [HomeContactController::class, 'destroy'])->name('admin.delete.contact');

Route::get('/admin/message', [HomeContactController::class, 'AdminMessage'])->name('admin.message');
Route::get('/delete/message/{id}', [HomeContactController::class, 'AdminDeleteMessage'])->name('delete.message');

