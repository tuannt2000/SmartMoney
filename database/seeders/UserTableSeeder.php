<?php

namespace Database\Seeders;

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
        for($i = 1; $i <= 5;$i++)
        {
        	\DB::table('users')->insert(
	        	[
	        		'firstname' => 'User',
                    'lastname' => $i,
	            	'email' => 'user_'.$i.'@gmail.com',
                    'quyen'=> 'user',
	            	'password' => bcrypt('123456'),
	            	'created_at' => new \DateTime(),
	        	]
        	);
        }

        \DB::table('users')->insert(
            [
                'firstname' => 'Nguyễn Hữu',
                'lastname' => "Tuấn",
                'email' => 'tuan.nh184221@sis.hust.edu.vn',
                'quyen'=> 'admin',
                'password' => bcrypt('123456'),
                'created_at' => new \DateTime(),
            ]
        );
    }
}
