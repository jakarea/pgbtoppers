<?php

namespace Database\Seeders;

use App\Models\Role;
use Illuminate\Database\Seeder;

class RoleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        if (!Role::where('name', 'Beheerder')->exists()) {
            $role = new Role();
            $role->name = 'Beheerder';
            $role->code = 'admin';
            $role->description = 'leeg';
            $role->guard_name = 'web';

            $role->save();
        }

        if (!Role::where('name', 'Zorgverlener')->exists()) {
            $role = new Role();
            $role->name = 'Zorgverlener';
            $role->code = 'zorgverlener';
            $role->description = 'leeg';
            $role->guard_name = 'web';
            $role->save();
        }

        if (!Role::where('name', 'Zorgvragers')->exists()) {
            $role = new Role();
            $role->name = 'Zorgvrager';
            $role->code = 'zorgvrager';
            $role->description = 'leeg';
            $role->guard_name = 'web';
            $role->save();
        }

        if (!Role::where('name', 'Intake teamlid')->exists()) {
            $role = new Role();
            $role->name = 'Intake teamlid';
            $role->code = 'intake_lid';
            $role->description = 'leeg';
            $role->guard_name = 'web';
            $role->save();
        }
    }
}
