<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    protected $table = 'roles';


    public function hasAccess($permissions)
    {
        foreach ($permissions as $permission) {
            if ($this->hasPermission($permission))
                return true;
        }
        return false;
    }

    private function hasPermission($permission)
    {
        $listPermission = json_decode($this->permissions);
        foreach ($listPermission as $permit => $status) {
            if ($permit == $permission && $status == true)
                return true;
        }

        return false;
    }
}
