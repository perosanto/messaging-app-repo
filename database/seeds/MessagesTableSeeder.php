<?php
/**
 * Created by PhpStorm.
 * User: Petar
 * Date: 6/3/2015
 * Time: 11:34 PM
 */

use Illuminate\Database\Seeder;

class MessagesTableSeeder extends Seeder {

    public function run()
    {
        DB::table('messages2')->delete();       //clear the table before populating

        $msg = array(
            ['id' => 1, 'title' => 'Message 1 title',  'receivers2_id' => 1, 'description' => 'I hope you win final four'],           //random data to populate messages2 table
            ['id' => 2, 'title' => 'Message 2 title',  'receivers2_id' => 1, 'description' => 'I hope you win final eight'],
            ['id' => 3, 'title' => 'Message 3 title',  'receivers2_id' => 1, 'description' => 'I hope you win final sixteen'],
            ['id' => 4, 'title' => 'Message 4 title',  'receivers2_id' => 1, 'description' => 'I hope you win finals'],
            ['id' => 5, 'title' => 'Message 5 title',  'receivers2_id' => 1, 'description' => 'I hope you lose'],
            ['id' => 6, 'title' => 'Message 6 title',  'receivers2_id' => 2, 'description' => 'Real Madrid has better basketbal team'],
            ['id' => 7, 'title' => 'Message 7 title',  'receivers2_id' => 2, 'description' => 'I dont like basketbal, only Rafa'],
        );

        DB::table('messages2')->insert($msg);     //run the seeder
    }

}