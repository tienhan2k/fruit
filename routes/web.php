<?php

use App\Http\Livewire\HomeComponent;
use App\Http\Livewire\CheckoutComponent;
use App\Http\Livewire\CartComponent;
use App\Http\Livewire\ShopComponent;
use App\Http\Livewire\NewDetailComponent;
use App\Http\Livewire\AboutComponent;
use App\Http\Livewire\ProductDetailsComponent;
use App\Http\Livewire\NewsComponent;
use App\Http\Livewire\ContactComponent;

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



Route::get('/', HomeComponent::class);

Route::get('/shop', ShopComponent::class);

Route::get('/cart', CartComponent::class);

Route::get('/checkout', CheckoutComponent::class);

Route::get('/contact', ContactComponent::class);

Route::get('/product', ProductDetailsComponent::class);

Route::get('/about', AboutComponent::class);

Route::get('/news', NewsComponent::class);

Route::get('/new-details', NewDetailComponent::class);
