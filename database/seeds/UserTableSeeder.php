<?php

use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $data = [
            [
        		'name' => 'Thanh Hao',
        		'email' => 'nthao.18ce@sict.udn.vn',
        		'password' => bcrypt('1234'),
        	],
        ];
        DB::table('users') -> insert($data);
    }
}
