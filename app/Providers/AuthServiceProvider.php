<?php

namespace App\Providers;

use App\Models\Cita;
use App\Models\Team;
use App\Models\User;
use App\Policies\CitaPolicy;
use App\Policies\TeamPolicy;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Gate;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
        Team::class => TeamPolicy::class,
        Cita::class => CitaPolicy::class,
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();

        Gate::define('update-cita', function(User $user, Cita $cita) {
            if ( $user->admin ) {
                return true;
            } else {
                return $user->id === $cita->user_id;
            }
        });

        Gate::define('view-servicio', function(User $user) {
            if ( $user->admin ) {
                return true;
            }
        });
        Gate::define('add-servicio', function(User $user) {
            if ( $user->admin ) {
                return true;
            }
        });
        Gate::define('update-servicio', function(User $user) {
            if ( $user->admin ) {
                return true;
            }
        });
        
    }
}
