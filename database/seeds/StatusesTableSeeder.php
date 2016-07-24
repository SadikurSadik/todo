<?php

use Illuminate\Database\Seeder;

class StatusesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table ( 'statuses' )->insert ( array (
            array (
                'id' => '1',
                'value' => 'Active'
            ),
            array (
                'id' => '2',
                'value' => 'Inactive'
            )
        ));
    }
}
