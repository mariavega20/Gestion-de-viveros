<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use App\Models\User;
use Spatie\Permission\Models\Role;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $role = Role::create(['name' => 'admin']);

        User::create([
            'name' => 'Maria Jose',
            'email' => 'mariajose@gmail.com',
            'password' => bcrypt('123456789')
        ])->assignRole('admin');

        User::factory(100)->create();
    }
}
