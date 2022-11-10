<?php

namespace App\Providers;

use App\Models\User;
use App\Models\Blog;
use Illuminate\Support\Facades\Gate;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The model to policy mappings for the application.
     *
     * @var array<class-string, class-string>
     */
    // protected $policies = [
    //     'App\Models\Post' => 'App\Policies\PostPolicy',
    // ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();

        //
        Gate::define('isMember', function(User $user) {
            return $user->id !== 0;
        });
    }
}
