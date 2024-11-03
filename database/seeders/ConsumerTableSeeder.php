<?php

namespace Database\Seeders;


use DateTime;
use App\Models\Consumer;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;


class ConsumerTableSeeder extends Seeder
{

    
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $c = new Consumer;
        $c->name = "Gary";
        $c->email = "gary.anderson@gmail.com";
        $c->date_of_birth = new DateTime('14.11.1985');
        $c->save();

        Consumer::factory()->count(50)->create();
    }
}
