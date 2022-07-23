<?php


namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class TaskStatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $task_statuses = ['archived', 'open', 'new', 'pending', 'done'];
        foreach ($task_statuses as $key => $value) {
            DB::table('tast_status')->insert([
                'id' => $key,
                'name' => $value,
            ]);
        }
    }
}
