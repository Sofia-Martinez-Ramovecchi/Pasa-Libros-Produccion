<?php
namespace App\Policies;



use App\Models\Usuario;

class UsuarioPolicy
{
    public function viewProfile(Usuario $authUser, Usuario $user): bool
    {
        return $authUser->id === $user->id || $authUser->hasRole('admin');
    }
}


