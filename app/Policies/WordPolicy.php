<?php

namespace App\Policies;

use App\User;
use App\Word;
use Illuminate\Auth\Access\HandlesAuthorization;

class WordPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view any models.
     *
     * @param  \App\User  $user
     * @return mixed
     */
    public function viewAny(User $user)
    {
        //
    }

    /**
     * Determine whether the user can view the model.
     *
     * @param  \App\User  $user
     * @param  \App\Word  $word
     * @return mixed
     */
    public function view(User $user, Word $word)
    {
        //
    }

    /**
     * Determine whether the user can create models.
     *
     * @param  \App\User  $user
     * @return mixed
     */
    public function create(User $user)
    {
        //
    }

    /**
     * Determine whether the user can update the model.
     *
     * @param  \App\User  $user
     * @param  \App\Word  $word
     * @return mixed
     */
    public function update(User $user)
    {
        return in_array($user->email, [
            'komsomolradio@gmail.com'
        ]);
    }

    /**
     * Determine whether the user can delete the model.
     *
     * @param  \App\User  $user
     * @param  \App\Word  $word
     * @return mixed
     */
    public function delete(User $user)
    {
        return in_array($user->email, [
            'email' => 'komsomolradio@gmail.com'
        ]);
    }

    /**
     * Determine whether the user can restore the model.
     *
     * @param  \App\User  $user
     * @param  \App\Word  $word
     * @return mixed
     */
    public function restore(User $user, Word $word)
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the model.
     *
     * @param  \App\User  $user
     * @param  \App\Word  $word
     * @return mixed
     */
    public function forceDelete(User $user, Word $word)
    {
        //
    }
}
