<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;


class SystemRoleSeeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         // This is for Role Name
          Role::create(['name' => 'SYSADMIN']);
          Role::create(['name' => 'SYSTESTER']);
          Role::create(['name' => 'SYSDEVELOPER']);
          Role::create(['name' => 'SYSCOKER']);
          Role::create(['name' => 'SYSCALLCENTER']);
          Role::create(['name' => 'SYSFINAINCE']);
    }
}
