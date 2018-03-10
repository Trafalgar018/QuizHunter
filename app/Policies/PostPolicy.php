<?php

namespace App\Policies;

use App\Questionary;
use App\User;
use Illuminate\Auth\Access\HandlesAuthorization;
use Illuminate\Support\Facades\Auth;

class PostPolicy
{
    use HandlesAuthorization;
        /**
         * Determine whether the user can delete the questionary.
         *
         * @param  \App\User  $user
         * @param  \App\Questionary  $questionary
         * @return mixed
         */
        public function delete(User $user, Questionary $questionary)
    {
        dd("hola");
        return $user->id == $questionary->user_id;
    }

}
