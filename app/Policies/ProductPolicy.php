<?php

namespace App\Policies;

use App\User;
use App\Model\Product;
use Illuminate\Auth\Access\HandlesAuthorization;

class ProductPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view the product.
     *
     * @param  \App\User  $user
     * @param  \App\Model\Product  $product
     * @return mixed
     */
    public function view(User $user)
    {
        return false;

//        foreach ($user->roles as $role) {
//            if ($role->id == 1) {
//                return true;
//            }else{
//                return false;
//            }
//        }

    }

    /**
     * Determine whether the user can create products.
     *
     * @param  \App\User  $user
     * @return mixed
     */
    public function create(User $user)
    {
//        return false;
        return $user->hasAccess(['product.create']);
    }

    /**
     * Determine whether the user can update the product.
     *
     * @param  \App\User  $user
     * @param  \App\Model\Product  $product
     * @return mixed
     */
    public function update(User $user, Product $product)
    {
        //
    }

    /**
     * Determine whether the user can delete the product.
     *
     * @param  \App\User  $user
     * @param  \App\Model\Product  $product
     * @return mixed
     */
    public function delete(User $user, Product $product)
    {
        //
    }

    /**
     * Determine whether the user can restore the product.
     *
     * @param  \App\User  $user
     * @param  \App\Model\Product  $product
     * @return mixed
     */
    public function restore(User $user, Product $product)
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the product.
     *
     * @param  \App\User  $user
     * @param  \App\Model\Product  $product
     * @return mixed
     */
    public function forceDelete(User $user, Product $product)
    {
        //
    }
}
