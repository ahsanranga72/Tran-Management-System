<?php

use App\Http\Livewire\Admin\AddEventComponent;
use App\Http\Livewire\Admin\AdminShowDonationComponent;
use App\Http\Livewire\Admin\AllEventComponent;
use App\Http\Livewire\Admin\AllRequestComponent;
use App\Http\Livewire\Admin\ApprovedRequestComponent;
use App\Http\Livewire\Admin\CompleteRequestComponent;
use App\Http\Livewire\Admin\DashboardComponent;
use App\Http\Livewire\Admin\DeclinedRequestComponent;
use App\Http\Livewire\Admin\EditEventComponent;
use App\Http\Livewire\Admin\NewRequestComponent;
use App\Http\Livewire\Admin\UpdateDonationSComponent;
use App\Http\Livewire\Admin\UpdateTranRequestComponent;
use App\Http\Livewire\Club\DashboardComponent as ClubDashboardComponent;
use App\Http\Livewire\Club\MyTranComponent;
use App\Http\Livewire\Club\TranRequestComponent;
use App\Http\Livewire\Donar\DashboardComponent as DonarDashboardComponent;
use App\Http\Livewire\Donar\DetailsComponent;
use App\Http\Livewire\Donar\DonateComponent;
use App\Http\Livewire\Donar\DonationComponent;
use App\Http\Livewire\Donar\ShowDonationComponent;
use App\Http\Livewire\Frontend\AboutComponent;
use App\Http\Livewire\Frontend\BlogComponent;
use App\Http\Livewire\Frontend\CausesComponent;
use App\Http\Livewire\Frontend\ContactComponent;
use App\Http\Livewire\Frontend\EventComponent;
use App\Http\Livewire\Frontend\EventDetailComponent;
use App\Http\Livewire\Frontend\HomeComponent;
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

// Route::get('/', function () {
//     return view('admin.dashbord');
// });

Route::get('/', HomeComponent::class)->name('home');
Route::get('/about-us', AboutComponent::class)->name('about');
Route::get('/cause', CausesComponent::class)->name('causes');
Route::get('/blog', BlogComponent::class)->name('blog');
Route::get('/contact-us', ContactComponent::class)->name('contact');
Route::get('/event', EventComponent::class)->name('event');
Route::get('/event/detail/{id}', EventDetailComponent::class)->name('event.details');



// Route for Donar


// Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
//     return view('dashboard');
// })->name('dashboard');

// Route::middleware(['auth:sanc'])
// Route for Admin
Route::middleware(['auth:sanctum', 'verified', 'authadmin'])->group(function(){
    Route::get('/admin/dashboard', DashboardComponent::class)->name('admin.dashboard');
    Route::get('/admin/tranrequest/new', NewRequestComponent::class)->name('admin.newrequest');
    Route::get('/admin/request/all', AllRequestComponent::class)->name('admin.allrequest');
    Route::get('/admin/tranrequest/complete', CompleteRequestComponent::class)->name('admin.completerequest');
    Route::get('/admin/tranrequest/declined', DeclinedRequestComponent::class)->name('admin.declinedrequest');
    Route::get('/admin/tranrequest/approved', ApprovedRequestComponent::class)->name('admin.approvedrequest');
    Route::get('/admin/tran/edit/{tran_slug}', UpdateTranRequestComponent::class)->name('admin.updatetran');
    Route::get('/admin/event/add', AddEventComponent::class)->name('admin.addevent');
    Route::get('/admin/event/edit/{event_slug}', EditEventComponent::class)->name('admin.editevent');
    Route::get('/admin/events/all', AllEventComponent::class)->name('admin.allevent');
    Route::get('/admin/donation/all', AdminShowDonationComponent::class)->name('admin.showdonation');
    Route::get('/admin/donation/update/{donate_id}', UpdateDonationSComponent::class)->name('admin.updatedonations');


});
//Route for Donar
Route::middleware(['auth:sanctum', 'verified', 'authdonar'])->group(function(){
    Route::get('/donar/dashboard', DonarDashboardComponent::class)->name('donar.dashboard');
    Route::get('/donation', DonationComponent::class)->name('donation');
    Route::get('/tran/detail/{id}', DetailsComponent::class)->name('donar.trandetails');
    Route::get('/donar/mydonation', ShowDonationComponent::class)->name('donar.mydonation');
    Route::get('/donar/donate', DonateComponent::class)->name('donar.donate');

});

//Route for Club
Route::middleware(['auth:sanctum', 'verified', 'authclub'])->group(function(){
    Route::get('/club/dashboard', ClubDashboardComponent::class)->name('club.dashboard');
    Route::get('/club/tranrequest/create', TranRequestComponent::class)->name('club.tranrequest.create');
    Route::get('/club/mytrans', MyTranComponent::class)->name('club.mytrans');
});
