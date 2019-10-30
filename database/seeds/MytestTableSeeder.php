<?php

use Illuminate\Database\Seeder;

class MytestTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         for($i=0; $i<10; $i++){
            DB::table('mytest')->insert([
                'name' => 'user' . $i,
                'age' => 20 .$i,
                'email' => 'user'. $i .'@gmail.com'
            ]);
        }
    }
}
