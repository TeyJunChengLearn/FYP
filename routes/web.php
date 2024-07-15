<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TestController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AdoptController;
use App\Http\Controllers\ForumController;
use App\Http\Controllers\NearbyController;
use App\Http\Controllers\LandingController;
use App\Http\Controllers\DesignTestController;
use App\Http\Controllers\NotificationController;
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

Route::post('/forum/announcement/add',[ForumController::class,'forumAnnouncementAdd'])->name('forumAnnouncement.add');

Route::get('/forum/announcement/details/{announcementId}',[ForumController::class,'forumAnnouncementDetailsIndex'])->name('forumAnnouncementDetails.Index');

Route::post('/forum/announcement/details/comment/add',[ForumController::class,'forumAnnouncementCommentAdd'])->name('forumAnnouncementAdd.add');

Route::get('/forum/lostnfound',[ForumController::class,'forumLostnfoundIndex'])->name('forumLostnFound.index');

Route::post('/forum/lostnfound/add',[ForumController::class,'forumLostnfoundAdd'])->name('forumLostnFound.Add');

Route::get('/forum/lostnfound/{lostnFoundId}',[ForumController::class,'forumLostnfoundDetailsIndex'])->name('forumLostnFoundDetails.index');

Route::post('/forum/lostnfound/comment/add',[ForumController::class,'forumLostnfoundCommentAdd'])->name('forumLostnFoundComment.add');

Route::get('/forum/feedback',[ForumController::class,'forumFeedbackIndex'])->name('forumFeedback.index');

Route::post('/forum/feedback/add',[ForumController::class,'forumFeedbackAdd'])->name('forumFeedback.add');

Route::get('/paginationdisplayall',[PaginationTestController::class,'ShowDefaultDesign']);

Route::get('/paginationdesign',[PaginationTestController::class,'designPaginationtemplate']);

Route::get('/designtest',[DesignTestController::class,'index']);

Route::get('/notifications', [NotificationController::class, 'index'])->name('notifications.index');

Route::get('/notifications/{id}', [NotificationController::class, 'show'])->name('notifications.show');

Route::get('/nearby',[NearbyController::class, 'index'])->name('nearby.index');

Route::get('/adopt',[AdoptController::class, 'index'])->name('adopt.index');

Route::post('/adopt/add',[AdoptController::class, 'adoptedPetAdd'])->name('adopt.add');

Route::get('/adopt/pet/{adoptPetId}',[AdoptController::class, 'petIndex'])->name('adoptPet.index');

Route::get('/user',[UserController::class, 'index'])->name('user.index');

Route::post('/user/update',[UserController::class, 'update'])->name('user.update');

Route::get('/admin/dashboard',[AdminController::class,'dashboardIndex'])->name('admin.dashboard.index');

Route::get('/admin/accounts',[AdminController::class,'adminIndex'])->name('admin.accounts.index');

Route::post('/admin/accounts/add',[AdminController::class,'adminAdd'])->name('admin.accounts.add');

Route::get('/admin/users',[AdminController::class,'usersIndex'])->name('admin.users.index');

Route::get('/admin/forumcategory',[AdminController::class,'forumCategoryIndex'])->name('admin.forumCategory.index');

Route::post('admin/forumcategory/edit',[AdminController::class,'forumCategoryEdit'])->name('admin.forumCategory.edit');

Route::post('admin/forumcategory/add',[AdminController::class,'forumCategoryAdd'])->name('admin.forumCategory.add');

Route::get('/admin/request',[AdminController::class,'requestIndex'])->name('admin.request.index');

Route::get('/admin/request/{requestId}',[AdminController::class,'requestDetailsIndex'])->name('admin.requestDetails.index');

Route::get('/admin/request/{requestId}/approve',[AdminController::class,'requestApprove'])->name('admin.requestApprove');

Route::get('/admin/request/{requestId}/decline',[AdminController::class,'requestDecline'])->name('admin.requestDecline');
