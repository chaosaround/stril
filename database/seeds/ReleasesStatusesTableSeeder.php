<?php

use Illuminate\Database\Seeder;
use App\Models\ReleasesStatus;

class ReleasesStatusesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
	    ReleasesStatus::create(['status' => 'Planned']);
	    ReleasesStatus::create(['status' => 'In progress']);
	    ReleasesStatus::create(['status' => 'Released', 'is_closed' => true]);
    }
}