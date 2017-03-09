<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\College;
use App\Degree;
use App\Religion;
use App\Status;

class FormCandidateServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        view()->composer('candidate.form', function($view) {
            $view->with('college_list', College::pluck('college_name', 'id'));
            $view->with('degree_list', Degree::pluck('lastest_degree', 'id'));
            $view->with('religion_list', Religion::pluck('religion_name', 'id'));
            $view->with('status_list', Status::pluck('marital_status', 'id'));
        });
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
