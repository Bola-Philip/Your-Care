<?php

namespace App\Providers;

// use Illuminate\Support\Facades\Gate;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Gate;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The model to policy mappings for the application.
     *
     * @var array<class-string, class-string>
     */
    protected $policies = [
        //
    ];

    /**
     * Register any authentication / authorization services.
     */
    public function boot(): void
    {
        $this->registerPolicies();

        Gate::define('manger-permission', function ($admin) {
            return $admin->permission === '1';
        });

        Gate::define('supervisor-permission', function ($admin) {
            return $admin->permission === '2';
        });

        Gate::define('parser-permission', function ($admin) {
            return $admin->permission === '3';
        });

    }
}
