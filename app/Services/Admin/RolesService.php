<?php
namespace App\Services;

use App\Models\Role;
class RolesService {

    public function getAllRoles() {
        return Role::orderby('name', 'desc')->get();
    }
}
