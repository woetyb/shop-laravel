<?php

namespace App;

use App\Model\Role;
use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *n
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

	public function user_address()
	{
		return $this->hasMany('App\Model\UserAddress', 'user_id', 'id');
    }

    public function roles()
    {
        return $this->belongsToMany(Role::class, 'user_role');
    }




    public function isSuperAdmin()
    {
        return $this->roles()->where('name', 'Administrator')->count() == 1;
    }

    public function getUserRoles()
    {
        return $this->roles()->get();
    }

    public function hasAccess($permissions)
    {
        foreach ($this->roles as $role) {
            if ($role->hasAccess($permissions)) {
                return true;
            }
        }

        return false;
    }

    public function inRole(string $roleSlug)
    {
        return $this->roles()->where('slug', $roleSlug)->count() == 1;
    }

}
