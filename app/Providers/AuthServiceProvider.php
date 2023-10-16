<?php

namespace App\Providers;
use App\Models\User;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Gate;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array<class-string, class-string>
     */
    protected $policies = [
        // 'App\Models\Model' => 'App\Policies\ModelPolicy',
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();

        Gate::define("adminmetier", function(User $user){
            if (($user->hasRole(1))||($user->hasRole(2))||($user->hasRole(3)))
                return $user->hasDroit(1);
        });

        Gate::define("simpledemandeuradmin", function(User $user){
            if ($user->hasRole(0))
                return $user->hasDroit(1);
        });
        Gate::define("simpledemandeur", function(User $user){
            if ($user->hasRole(0))
                return true;
        });
        Gate::define("simplemetier", function(User $user){
            if(($user->hasRole(1))||($user->hasRole(2))||($user->hasRole(3))){
                return true;
            }
        });


    }
}
