<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Domain\Concretes as Concretes;
use App\Domain\Contracts as Contracts;

class DomainServiceProvider extends ServiceProvider {
    
    public function register() {
        $this->app->singleton(Contracts\IReportDomain::class, Concretes\ReportDomain::class);
    }

}