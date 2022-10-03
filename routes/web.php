<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SSO\SSOController;
use App\Http\Controllers\ManageContactController;
use App\Http\Livewire\ManageContact;

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


Route::get("/sso/login", [SSOController::class, 'getLogin'])->name("sso.login");
Route::get("/callback", [SSOController::class, 'getCallback'])->name("sso.callback");
Route::get("/sso/connect", [SSOController::class, 'connectUser'])->name("sso.connect");

Route::get('/', ManageContact::class)->name('index');
Route::get('/qrcode', [ManageContactController::class, 'qrcode'])->name('qrcode');

Route::group([
    "middleware" => ["auth"],
], function(){
    Route::get("/create_contact", [ManageContactController::class, 'createContact'])->name("create.contact");
    Route::get("/view_contact", [ManageContactController::class, 'viewContact'])->name("view.contact");

    Route::get("/edit_contact", [ManageContactController::class, 'editGetContact'])->name("edit.get.contact");
    Route::post("/edit_contact", [ManageContactController::class, 'editPostContact'])->name("edit.post.contact");

    Route::get("/certified_contact/{id}", [ManageContactController::class, 'certifiedContact'])->name("certified");
    Route::get("/uncertified_contact/{id}", [ManageContactController::class, 'uncertifiedContact'])->name("uncertified");

    Route::get("/signal_contact/{email}", [ManageContactController::class, 'signalContact'])->name("signal.contact");

    Route::get("/ask_vue_service", [ManageContactController::class, 'askVueService'])->name("ask.vue.service");
    Route::post("/ask_new_service", [ManageContactController::class, 'askNewService'])->name("ask.new.service");

    Route::post("/logout",[SSOController::class,"logout"])->name("logout");
});
