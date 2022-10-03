<?php

use App\Models\Course;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\ReviewController;
use App\Http\Controllers\CoursesController;
use App\Http\Controllers\ContactsController;
use App\Http\Controllers\QuestionsController;
use App\Http\Controllers\Admin\AdminHomeController;
use App\Http\Controllers\Admin\AdminNewsController;
use App\Http\Controllers\Admin\AdminGroupController;
use App\Http\Controllers\Admin\AdminUsersController;
use App\Http\Controllers\Admin\AdminQuestionController;
use App\Http\Controllers\Course\CourseExamController;
use App\Http\Controllers\Admin\AdminReviewsController;
use App\Http\Controllers\Admin\AdminTeacherController;
use App\Http\Controllers\Course\CourseGroupController;
use App\Http\Controllers\Admin\AdminRecordingController;
use App\Http\Controllers\Course\CourseIndividualController;
use App\Http\Controllers\Admin\AdminCoursesController;

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

// Админ панель
Route::get('/adminpanel', [AdminHomeController::class, 'index'])->name('index');

// Роуты для страниц админ панели
Route::get('/', [MainController::class, 'home'])->name('home');
Route::resource('teacher', AdminTeacherController::class);
Route::resource('news', AdminNewsController::class);
Route::resource('review', AdminReviewsController::class);
Route::resource('users', AdminUsersController::class);
Route::resource('recording', AdminRecordingController::class);
Route::resource('groups', AdminGroupController::class);
Route::resource('courses', AdminCoursesController::class);
Route::resource('questions', AdminQuestionController::class);
Auth::routes();

// Роуты для сраниц
Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/about', [MainController::class, 'about'])->name('about');
Route::get('/new', [NewsController::class, 'index'])->name('new');
Route::get('/contact', [ContactsController::class, 'index'])->name('contact');
Route::get('/reviews', [ReviewController::class, 'review'])->name('review');

// Роуты для страниц курсов
Route::get('/group', [CourseGroupController::class, 'index'])->name('group');
Route::get('/individual', [CourseIndividualController::class, 'index'])->name('individual');
Route::get('/exam', [CourseExamController::class, 'index'])->name('exam');

// Запись на курс и в группу
Route::post('/signUp', [CoursesController::class, 'signUp'])->name('signUpForCource');

// Оставить отзыв
Route::post('/addreview', [ReviewController::class, 'index'])->name('addreview');

// Оставить вопрос
Route::resource('question', QuestionsController::class);
