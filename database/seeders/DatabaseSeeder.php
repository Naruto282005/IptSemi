<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Member;
use App\Models\Trainer;
use App\Models\Session;

class DatabaseSeeder extends Seeder
{
    public function run(): void {
        $members = Member::factory(10)->create();
        $trainers = Trainer::factory(5)->create();

        Session::factory(20)->create();
    }
}
