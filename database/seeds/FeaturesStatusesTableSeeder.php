<?php

use Illuminate\Database\Seeder;
use App\Models\FeaturesStatus;

class FeaturesStatusesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
	    FeaturesStatus::create(['status' => 'Planned']);
	    FeaturesStatus::create(['status' => 'In progress']);
	    FeaturesStatus::create(['status' => 'Ready', 'is_closed' => true]);
    }
}
