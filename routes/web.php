<?php

use App\Http\Controllers\Admin\BlogPostController;
use App\Http\Controllers\Admin\HomeContentController;
use App\Http\Controllers\AppointmentController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ZipcodeController;
use App\Models\Appointment;
use App\Models\BlogPost;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\PricingContentController;
use App\Http\Controllers\Admin\WhatWeTakeContentController;
use App\Http\Controllers\Admin\ReviewsController;

Route::get('/', function () {
    return view('welcome');
})->name('welcome');

Route::get('/newbooking', function (Illuminate\Http\Request $request) {
    $availableTimes = \App\Models\AvailableBookingTimes::all();
    $postalCode = $request->query('postal_code', '');
    return view('newbooking', compact('availableTimes', 'postalCode'));
})->name('newbooking');

Route::post('/zipcode/check', [ZipcodeController::class, 'check'])->name('zipcode.check');
Route::post('/appointments/store', [AppointmentController::class, 'store'])->name('appointments.store');

Route::get('/dashboard', function () {
    if (Auth::check() && Auth::user()->is_admin) {
        return redirect()->intended(route('adminpanel', absolute: false));
    }
    $user = Auth::user();
    $appointments = Appointment::where('user_id', $user->id)->latest()->get();
    return view('dashboard', ['appointments' => $appointments]);
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/adminpanel', function () {
    $appointments = Appointment::all();
    return view('adminpanel', ['appointments' => $appointments]);
})->middleware(['auth', 'verified'])->name('adminpanel');
Route::post('/appointments/update-status', [AppointmentController::class, 'updateStatus'])->name('appointments.updateStatus');
Route::post('/check-appointment-availability', [AppointmentController::class, 'checkAppointmentAvailability'])->name('appointments.check.availability');

Route::prefix('admin')->middleware(['auth'])->group(function () {
    Route::get('home-content', [App\Http\Controllers\Admin\HomeContentController::class, 'index'])->name('admin.home-content.index');
    Route::resource('home-content', App\Http\Controllers\Admin\HomeContentController::class)->except(['index']);
    Route::resource('blog-posts', App\Http\Controllers\Admin\BlogPostController::class)->names('admin.blog-posts');
    Route::resource('pricing-content', PricingContentController::class)->names('admin.pricing-content');
    Route::resource('what-we-take-content', WhatWeTakeContentController::class)->names('admin.what-we-take-content');
    });
    Route::prefix('admin')->middleware('auth')->group(function () {
        Route::get('/reviews', [ReviewsController::class, 'index'])->name('admin.reviews.index');
        Route::get('/reviews/create', [ReviewsController::class, 'create'])->name('admin.reviews.create');
        Route::post('/reviews', [ReviewsController::class, 'store'])->name('admin.reviews.store');
        Route::get('/reviews/{review}/edit', [ReviewsController::class, 'edit'])->name('admin.reviews.edit');
        Route::put('/reviews/{review}', [ReviewsController::class, 'update'])->name('admin.reviews.update');
        Route::delete('/reviews/{review}', [ReviewsController::class, 'destroy'])->name('admin.reviews.destroy');
    });
// Route::get('/admin/blogs/{id}/edit', [BlogPostController::class, 'edit'])->name('admin.blog-posts.edit');
// Route::post('/admin/blogs/{id}', [BlogPostController::class, 'update'])->name('admin.blog-posts.update');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/blog', function () {
    $posts = BlogPost::latest()->paginate(5);
    return view('main.blogs', compact('posts'));
})->name('blogposts.index');

Route::get('/blog/{id}', function ($id) {
    $post = \App\Models\BlogPost::findOrFail($id);
    return view('main.single-blog', compact('post'));
})->name('blogposts.show');

// Pages
Route::get('/home-solutions', function () {
    return view('pages.home-solutions');
})->name('home-solutions');

Route::get('/New-Brunswick', function () {
    return view('pages.New-Brunswick');
})->name('New-Brunswick');

Route::get('/Perth-Amboy', function () {
    return view('pages.Perth-Amboy');
})->name('Perth-Amboy');

Route::get('/South-Amboy', function () {
    return view('pages.South-Amboy');
})->name('South-Amboy');

Route::get('/East-Orange', function () {
    return view('pages.East-Orange');
})->name('East-Orange');

Route::get('/Elizabeth', function () {
    return view('pages.Elizabeth');
})->name('Elizabeth');

Route::get('/Linden', function () {
    return view('pages.Linden');
})->name('Linden');

Route::get('/Plainfield', function () {
    return view('pages.Plainfield');
})->name('Plainfield');

Route::get('/Summit', function () {
    return view('pages.Summit');
})->name('Summit');

Route::get('/Newark', function () {
    return view('pages.Newark');
})->name('Newark');

Route::get('/Orange', function () {
    return view('pages.Orange');
})->name('Orange');

Route::get('/Irvington', function () {
    return view('pages.Irvington');
})->name('Irvington');

Route::get('/what-we-do', function () {
    return view('pages.what-we-do');
})->name('what-we-do');

Route::get('/locations', function () {
    return view('pages.locations');
})->name('locations');

Route::get('/reviews', function () {
    return view('pages.reviews');
})->name('reviews');

Route::get('/faq', function () {
    return view('pages.faq');
})->name('faq');

Route::get('/moving', function () {
    return view('pages.moving');
})->name('moving');

Route::get('/renovation', function () {
    return view('pages.renovation');
})->name('renovation');

Route::get('/storagep', function () {
    return view('pages.storage');
})->name('storagep');

Route::get('/disaster', function () {
    return view('pages.disaster');
})->name('disaster');

Route::get('/property-management', function () {
    return view('pages.property-management');
})->name('property-management');

Route::get('/professional-services', function () {
    return view('pages.professional-services');
})->name('professional-services');

Route::get('/retail-hospitality', function () {
    return view('pages.retail-hospitality');
})->name('retail-hospitality');

Route::get('/construction-manufacturing', function () {
    return view('pages.construction-manufacturing');
})->name('construction-manufacturing');

Route::get('/education-healthcare', function () {
    return view('pages.education-healthcare');
})->name('education-healthcare');

Route::get('/business-solutions', function () {
    return view('pages.business-solutions');
})->name('business-solutions');

Route::get('/pricing', function () {
    return view('pages.pricing');
})->name('pricing');

Route::get('/what-we-take', function () {
    return view('pages.what-we-take');
})->name('what-we-take');

Route::get('/repurpose-sustainability', function () {
    return view('pages.repurpose-sustainability');
})->name('repurpose-sustainability');

Route::get('/careers', function () {
    return view('pages.careers');
})->name('careers');

Route::get('/furniture', function () {
    return view('pages.furniture');
})->name('furniture');

Route::get('/televisions', function () {
    return view('pages.televisions');
})->name('televisions');

Route::get('/appliances', function () {
    return view('pages.appliances');
})->name('appliances');

Route::get('/Household', function () {
    return view('pages.Household');
})->name('household');

Route::get('/contact-us', function () {
    return view('pages.contact-us');
})->name('contact-us');

Route::post('/contact/send', [ContactController::class, 'send'])->name('contact.send');

require __DIR__ . '/auth.php';