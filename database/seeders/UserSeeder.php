<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $user = User::create([
            'name'      => 'Kepala Sekolah',
            'username'  => 'kepsek',
            'email'     => 'kepsek@sch.id',
            'role'      => 'Admin',
            'status'    => 'Aktif',
            'password'  => bcrypt('Bismillah')
        ]);

        $user->assignRole('Admin');

        $this->command->info('Data User ' . $user->name . ' has been saved.');

        $user = User::create([
            'name'      => 'PPDB',
            'username'  => 'PPDB',
            'email'     => 'PPDB@sch.id',
            'role'      => 'PPDB',
            'status'    => 'Aktif',
            'password'  => bcrypt('Bismillah')
        ]);

        $user->assignRole('PPDB');

        $this->command->info('Data User ' . $user->name . ' has been saved.');


        $user = User::create([
            'name'      => 'staf',
            'username'  => 'bendahara',
            'email'     => 'staf@sch.id',
            'role'      => 'Staf',
            'status'    => 'Aktif',
            'password'  => bcrypt('Bismillah')
        ]);

        $user->assignRole('Staf');

        $this->command->info('Data User ' . $user->name . ' has been saved.');



        $user = User::create([
            'name'      => 'murid',
            'username'  => 'murid',
            'email'     => 'murid@sch.id',
            'role'      => 'Murid',
            'status'    => 'Aktif',
            'password'  => bcrypt('Bismillah')
        ]);

        $user->assignRole('Murid');

        $this->command->info('Data User ' . $user->name . ' has been saved.');
    }
}
