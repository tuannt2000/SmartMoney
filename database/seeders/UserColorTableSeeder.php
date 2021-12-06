<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class UserColorTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('user_color')->insert([
            ['created_at' => new \DateTime(),'color' => 'rgb(123, 147, 164)'],
            ['created_at' => new \DateTime(),'color' => 'rgb(208,62,134)'],
            ['created_at' => new \DateTime(),'color' => 'rgb(235,213,193)'],
            ['created_at' => new \DateTime(),'color' => 'rgb(202,25,120)'],
            ['created_at' => new \DateTime(),'color' => 'rgb(252,6,132)'],
            ['created_at' => new \DateTime(),'color' => 'rgb(228,228,228)'],
            ['created_at' => new \DateTime(),'color' => 'rgb(175,175,175)'],
            ['created_at' => new \DateTime(),'color' => 'rgb(230,126,34)'],
            ['created_at' => new \DateTime(),'color' => 'rgb(138,16,0)'],
            ['created_at' => new \DateTime(),'color' => 'rgb(198,217,0)'],
            ['created_at' => new \DateTime(),'color' => 'rgb(163,252,0)'],
            ['created_at' => new \DateTime(),'color' => 'rgb(222,124,32)'],
            ['created_at' => new \DateTime(),'color' => 'rgb(196,208,163)'],
            ['created_at' => new \DateTime(),'color' => 'rgb(252,249,239)'],
            ['created_at' => new \DateTime(),'color' => 'rgb(213,204,171)'],
            ['created_at' => new \DateTime(),'color' => 'rgb(250,243,224)'],
            ['created_at' => new \DateTime(),'color' => 'rgb(241,248,222)'],
            ['created_at' => new \DateTime(),'color' => 'rgb(105,25,0)'],
            ['created_at' => new \DateTime(),'color' => 'rgb(93,150,194)'],
            ['created_at' => new \DateTime(),'color' => 'rgb(167,64,77)'],
            ['created_at' => new \DateTime(),'color' => 'rgb(184,101,112)'],
            ['created_at' => new \DateTime(),'color' => 'rgb(138,1,18)'],
            ['created_at' => new \DateTime(),'color' => 'rgb(58,127,118)'],
            ['created_at' => new \DateTime(),'color' => 'rgb(241,215,202)'],
            ['created_at' => new \DateTime(),'color' => 'rgb(63,149,251)'],
            ['created_at' => new \DateTime(),'color' => 'rgb(204,201,213)'],
            ['created_at' => new \DateTime(),'color' => 'rgb(213,201,204)'],
            ['created_at' => new \DateTime(),'color' => 'rgb(205,201,212)'],
            ['created_at' => new \DateTime(),'color' => 'rgb(10, 49, 126)'],
            ['created_at' => new \DateTime(),'color' => 'rgb(194, 174, 234)'],
        ]);
    }
}
