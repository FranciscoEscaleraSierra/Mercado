<?php

namespace App\Providers;

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
        'App\Models\Producto' => 'App\Policies\SupervisorProductoPolicy',
        'App\Models\Usuario' => 'App\Policies\SupervisorUsuarioPolicy',
        'App\Models\Categorias' => 'App\Policies\SupervisorCategoryPolicy',
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();

        Gate::define('categorias', function (Usuario $usuario){
            return $usuario->roles == 'Supervisor';
        });
    }
}
