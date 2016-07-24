<?php

use Illuminate\Database\Seeder;

class TaskStatusesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table ( 'task_statuses' )->insert ( array (
            array (
                'id' => '1',
                'value' => 'Created'
                ),
            array (
                'id' => '2',
                'value' => 'Started'
                ),
            array (
                'id' => '3',
                'value' => 'Done'
                ),
            array (
                'id' => '4',
                'value' => 'Paused'
                ),
            array (
                'id' => '5',
                'value' => 'Cancelled'
                )
            ));
    }
}
