<?php

use Illuminate\Support\Facades\Route;
use App\Mail\ProjectRegistered;
use App\Models\Project;
use App\Models\User;

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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/request', \App\Http\Livewire\RequestProject::class);

Route::get('/volunteer', \App\Http\Livewire\ProjectList::class);

Route::get('/volunteer/project/{project}', \App\Http\Livewire\ProjectVolunteer::class);

# admin site
Route::middleware(['auth:sanctum', 'verified'])->group(function () {
    Route::get('/admin/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    Route::get('/admin/users', \App\Http\Livewire\Admin\Users::class)->name('admin.users');

    Route::get('/admin/categories', \App\Http\Livewire\Admin\Categories::class)->name('admin.categories');

    Route::get('/admin/regions', \App\Http\Livewire\Admin\Regions::class)->name('admin.regions');

    Route::get('/admin/project_dates', \App\Http\Livewire\Admin\ProjectDates::class)->name('admin.project_dates');

    Route::get('/admin/projects', \App\Http\Livewire\Admin\Projects::class)->name('admin.projects');

    Route::get('/admin/volunteers', \App\Http\Livewire\Admin\Volunteers::class)->name('admin.volunteers');

    Route::get('/admin/projects/{project}', \App\Http\Livewire\Admin\ProjectDetails::class)->name('admin.project_details');

    Route::get('/admin/projects/sheet/{project}', function(Project $project) {
        $proj = Project::find($project->id)->first();
        view()->share('project', $proj);

        $evaluator = "None";
        if ($project->evaluator_id) {
            $eval = User::find($project->evaluator_id)->first();
            $evaluator = $eval->name;
        }
        view()->share('evaluator', $evaluator);

        $pdf = Barryvdh\DomPDF\Facade::loadView('admin.project_sheet', [$proj, $evaluator]);
//        return $pdf->download('test.pdf');
        return $pdf->stream();
    });
});

Route::get('/testmail', function () {
    $proj = Project::first();

    Mail::to('achegedus@gmail.com')->send(new ProjectRegistered($proj));
    return view('welcome');
});
