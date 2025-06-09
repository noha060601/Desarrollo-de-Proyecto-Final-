<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RolesPermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Create roles estos roles seran publicados en los controladores que se crearan extensiones blade para luego ser llamado en routes por la definicion resource 
        $adminRole =Role::create(['name' => 'admin']);
        $alumnoRole =Role::create(['name' => 'alumno']);
        $profesorRole =Role::create(['name' => 'profesor']);
        $apoderadoRole =Role::create(['name' => 'apoderado']);
        // Create permissions
    }
}
