<?php

use App\Task;
use Illuminate\Database\Seeder;

class TaskTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        factory(Task::class)->times(50)->create(); // si funciona 
        // Task::factory()->times(50)->create(); // no funciona

        /* DB::table('tasks')->insert([
            'title' => 'Desarrollador back-end',
            'description' => 'Lorem ipsum dolor sit amet',
        ]);*/
    }
}
