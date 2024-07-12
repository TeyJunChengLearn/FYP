<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TestController;
use App\Http\Controllers\ForumController;
use App\Http\Controllers\LandingController;
use App\Http\Controllers\DesignTestController;
use App\Http\Controllers\LoginRegisterController;
use App\Http\Controllers\PaginationTestController;

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

Route::get('/', [LandingController::class,'index']);

Route::get('/Loginregister',[LoginRegisterController::class,'index'])->name('loginRegister.index');

Route::post('/register',[LoginRegisterController::class,'register'])->name('loginRegister.register');

Route::post('/login',[LoginRegisterController::class,'login'])->name('loginRegister.login');

Route::get('/logout',[LoginRegisterController::class,'logout'])->name('loginRegister.logout');

Route::post('/register/petowner',[LoginRegisterController::class,'registerPetowner'])->name('loginRegister.register.petowner');

Route::get('register/animerescuer',[LoginRegisterController::class,'registerAnimalRescuerIndex'])->name('loginRegister.register.animalRescuer.Index');

Route::post('register/animerescuer',[LoginRegisterController::class,'registerAnimalRescuerFunction'])->name('loginRegister.register.animalRescuer.function');

Route::get('/test',[TestController::class,'index']);

Route::get('/forum',[ForumController::class,'index'])->name('forum.index');

Route::get('/forum/category/{categoryId}',[ForumController::class,'forumCategoryIndex'])->name('forumCategory.index');

Route::post('/forum/category/{categoryId}',[ForumController::class,'forumCategoryAddPost'])->name('forumCategory.add');

Route::get('/forum/category/{categoryId}/{forumId}',[ForumController::class,'forumWithCategoryPostIndex'])->name('forumCategoryPost.index');

Route::post('/forum/category/comment/add',[ForumController::class,'forumPostAddComment'])->name('forumCategoryComment.add');

Route::get('/forum/announcement',[ForumController::class,'forumAnnouncementIndex'])->name('forumAnnouncement.index');

Route::get('/forum/lostnfound',[ForumController::class,'forumLostnfoundIndex'])->name('forumLostnFound.index');

Route::post('/forum/lostnfound/add',[ForumController::class,'forumLostnfoundAdd'])->name('forumLostnFound.Add');

Route::get('/forum/lostnfound/{lostnFoundId}',[ForumController::class,'forumLostnfoundDetailsIndex'])->name('forumLostnFoundDetails.index');

Route::get('/paginationdisplayall',[PaginationTestController::class,'ShowDefaultDesign']);

Route::get('/paginationdesign',[PaginationTestController::class,'designPaginationtemplate']);

Route::get('/designtest',[DesignTestController::class,'index']);


