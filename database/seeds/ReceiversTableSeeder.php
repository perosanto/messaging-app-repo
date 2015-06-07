<?php
/**
 * Created by PhpStorm.
 * User: Petar
 * Date: 6/3/2015
 * Time: 11:34 PM
 */

use Illuminate\Database\Seeder;
#use Illuminate\Support\Facades\DB;

class ReceiversTableSeeder extends Seeder {

    public function run()
    {
        DB::table('receivers2')->delete();      //clearing table before populaing

        $rec = array(
            ['id' => 1, 'name' => 'Receiver 1', 'username' => 'user1', 'email' => 'user1@holaluz.com', 'password' => 'milorad', 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['id' => 2, 'name' => 'Receiver 2', 'username' => 'user2', 'email' => 'user2@holaluz.com', 'password' => 'milorad', 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['id' => 3, 'name' => 'Receiver 3', 'username' => 'user3', 'email' => 'user3@holaluz.com', 'password' => 'milorad', 'created_at' => new DateTime, 'updated_at' => new DateTime]
        );

        DB::table('receivers2')->insert($rec);  //run the seeder
    }

}