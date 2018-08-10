<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        App\User::insert([
            [
                'name'      => 'Putu',
                'email'     => 'putu@yahoo.com',
                'password'  => Hash::make('putu123'),
                'created_at'  => Carbon\Carbon::now('Asia/Singapore')
            ],
            [
                'name'      => 'Made',
                'email'     => 'made@yahoo.com',
                'password'  => Hash::make('made123'),
                'created_at'  => Carbon\Carbon::now('Asia/Singapore')
            ],
            [
                'name'      => 'Nyoman',
                'email'     => 'nyoman@yahoo.com',
                'password'  => Hash::make('nyoman123'),
                'created_at'  => Carbon\Carbon::now('Asia/Singapore')
            ],
            [
                'name'      => 'Ketut',
                'email'     => 'ketut@yahoo.com',
                'password'  => Hash::make('ketut123'),
                'created_at'  => Carbon\Carbon::now('Asia/Singapore')
            ],
            [
                'name'      => 'Dono',
                'email'     => 'dono@yahoo.com',
                'password'  => Hash::make('dono123'),
                'created_at'  => Carbon\Carbon::now('Asia/Singapore')
            ],
            [
                'name'      => 'Indro',
                'email'     => 'indro@yahoo.com',
                'password'  => Hash::make('indro123'),
                'created_at'  => Carbon\Carbon::now('Asia/Singapore')
            ],
            [
                'name'      => 'Kasino',
                'email'     => 'kasino@yahoo.com',
                'password'  => Hash::make('kasino123'),
                'created_at'  => Carbon\Carbon::now('Asia/Singapore')
            ],
        ]);
    }
}
