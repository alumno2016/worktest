<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Task;
use DateTime;

class TaskSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Task::create([
            'user_id' => 1,
            'task' => "open_market",
            'info' => "Open market and put the posters",
            'date_start' => new DateTime("2022-03-25"),
            'date_end' => new DateTime("2022-03-26"),
        ]);
    }
}
