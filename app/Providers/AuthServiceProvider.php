<?php

namespace App\Providers;

use App\Models\Usuario;
use App\Policies\UsuarioPolicy;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;

class AuthServiceProvider extends ServiceProvider
{
/**
* The policy mappings for the application.
*
* @var array
*/
    protected $policies = [
        Usuario::class => UsuarioPolicy::class,
    ];


/**
* Register any authentication / authorization services.
*/
public function boot(): void
{
$this->registerPolicies();

// Aquí puedes definir Gates adicionales si es necesario
}
}


