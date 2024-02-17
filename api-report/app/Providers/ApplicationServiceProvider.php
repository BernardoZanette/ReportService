<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Application\Concretes as Concretes;
use App\Application\Contracts as Contracts;

class ApplicationServiceProvider extends ServiceProvider {
    
    public function register() {
        $this->app->singleton(Contracts\IReportApplication::class, Concretes\ReportApplication::class);
    }

}