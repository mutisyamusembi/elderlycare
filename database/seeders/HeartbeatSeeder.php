<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Heartrate;

class HeartbeatSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Heartrate::create([
            'heartrate' => '87'
        ]);
    }
}
