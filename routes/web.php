<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Gate;
use App\Http\Controllers\RaffleController;
use App\Http\Controllers\TicketController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\SubsController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\WinnerController;
use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\ContactController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::resource('admin', AdminController::class)
    ->only(['index', 'store', 'update'])
    ->middleware('auth', 'verified');

Route::resource('raffles', RaffleController::class)
    ->only(['index', 'create', 'store', 'show', 'edit', 'update', 'destroy'])
    ->middleware('auth', 'verified');

Route::get('/raffles/{raffle}', [RaffleController::class, 'show'])->name('raffles.show');

Route::resource('user', UserController::class)
    ->only(['index', 'update'])
    ->middleware('auth', 'verified');

Route::resource('tickets', TicketController::class)
    ->only(['index', 'store'])
    ->middleware('auth', 'verified');

Route::resource('winners', WinnerController::class)
    ->only(['index'])
    ->middleware('auth', 'verified');

Route::get('/raffles/{raffle}/edit', [RaffleController::class, 'editRaffle'])->name('raffles.editRaffle');

Route::post('/raffles/{raffle}/edit', [RaffleController::class, 'updateTracking'])->name('raffles.updateTracking');

Route::get('/raffles/{raffle}/enter', [RaffleController::class, 'enterRaffleModal'])->name('raffles.enterRaffleModal');

Route::post('/checkNumbers', [RaffleController::class, 'checkNumbers'])->name('raffles.checkNumbers');


Route::post('/subscribe', [SubsController::class, 'store'])->name('subscribe');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::get('/profile', [ProfileController::class, 'show'])->name('profile.show');
    Route::post('/profile', [ProfileController::class, 'uploadImage'])->name('profile.uploadImage');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::get('/user-info', [ProfileController::class, 'userInfo'])->name('profile.userInfo');
    Route::get('/user-update-form', [ProfileController::class, 'userUpdateForm'])->name('profile.userUpdateForm');

    Route::get('/user-transactions', [ProfileController::class, 'userTransactions'])->name('profile.userTransactions');
    
    Route::get('/raffles/{raffle}/claim', [RaffleController::class, 'claimModal'])->name('raffles.claimModal');
    Route::post('/raffles/{raffle}/claim', [RaffleController::class, 'claimRafflePrize'])->name('raffle.claimRafflePrize');
    
    Route::get('/buy-tickets', [UserController::class, 'showPurchaseTicketsForm'])->name('purchaseTickets');
    Route::post('/buy-tickets', [UserController::class, 'addTickets'])->name('user.addTickets'); 
});

// All website routes
// Home four dark
Route::get('/', [WelcomeController::class, 'indexFourDark'])->name('welcome');

//Route::get('/', [WelcomeController::class, 'welcome'])->name('welcome');

Route::get('/raffles', [RaffleController::class, 'darkIndex'])->name('raffles.index');

// Winner Dark
Route::get('/winners', [WinnerController::class, 'darkIndex'])->name('winners.index');

// test facebook post route
Route::get('/fbpost', [WinnerController::class, 'fbpost'])->name('fbpost');

// Contact Page Dark
Route::get('/contact', [ContactController::class, 'contact'])->name('contact');
Route::post('/contact', [ContactController::class, 'submitForm'])->name('contact.submitForm');

// Terms and Conditions
Route::get('/terms', [WelcomeController::class, 'terms'])->name('terms');

// About page
Route::get('/about', [WelcomeController::class, 'about'])->name('about');

// Privacy Page
Route::get('/privacy', [WelcomeController::class, 'privacy'])->name('privacy');

// FAQ Page
Route::get('/faq', [WelcomeController::class, 'faq'])->name('faq');



require __DIR__ . '/auth.php';
