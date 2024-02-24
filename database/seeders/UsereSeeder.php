<?php

namespace Database\Seeders;

use App\Models\Usere;
use App\Models\Userss;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UsereSeeder  extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Usere::query()->create([
            'name'=>'sara',
            'age'=>'24',
            'job'=>'study'
        ]);
    }
}
