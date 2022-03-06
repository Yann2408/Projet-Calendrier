<?php

namespace Database\Seeders;

use App\Models\Slot;
use App\Models\Employe;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        $employes = Employe::factory(10)
        ->create();

        $slot1 = Slot::factory()->create([
            'day' => 'Lundi',
            'hour' => '9'
        ]);

        $slot2 = Slot::factory()->create([
            'day' => 'Lundi',
            'hour' => '10'
        ]);

        $slot3 = Slot::factory()->create([
            'day' => 'Lundi',
            'hour' => '11'
        ]);

        $slot4 = Slot::factory()->create([
            'day' => 'Lundi',
            'hour' => '13'
        ]);

        $slot5 = Slot::factory()->create([
            'day' => 'Lundi',
            'hour' => '14'
        ]);

        $slot6 = Slot::factory()->create([
            'day' => 'Lundi',
            'hour' => '15'
        ]);

        $slot7 = Slot::factory()->create([
            'day' => 'Lundi',
            'hour' => '16'
        ]);

        $slot8 = Slot::factory()->create([
            'day' => 'Mardi',
            'hour' => '9'
        ]);

        $slot9 = Slot::factory()->create([
            'day' => 'Mardi',
            'hour' => '10'
        ]);

        $slot10 = Slot::factory()->create([
            'day' => 'Mardi',
            'hour' => '11'
        ]);

        $slot11 = Slot::factory()->create([
            'day' => 'Mardi',
            'hour' => '13'
        ]);

        $slot12 = Slot::factory()->create([
            'day' => 'Mardi',
            'hour' => '14'
        ]);

        $slot13 = Slot::factory()->create([
            'day' => 'Mardi',
            'hour' => '15'
        ]);

        $slot14 = Slot::factory()->create([
            'day' => 'Mardi',
            'hour' => '16'
        ]);

        $slot15 = Slot::factory()->create([
            'day' => 'Mercredi',
            'hour' => '9'
        ]);

        $slot16 = Slot::factory()->create([
            'day' => 'Mercredi',
            'hour' => '10'
        ]);

        $slot17 = Slot::factory()->create([
            'day' => 'Mercredi',
            'hour' => '11'
        ]);

        $slot18 = Slot::factory()->create([
            'day' => 'Mercredi',
            'hour' => '13'
        ]);

        $slot19 = Slot::factory()->create([
            'day' => 'Mercredi',
            'hour' => '14'
        ]);

        $slot20 = Slot::factory()->create([
            'day' => 'Mercredi',
            'hour' => '15'
        ]);

        $slot21 = Slot::factory()->create([
            'day' => 'Mercredi',
            'hour' => '16'
        ]);

        $slot22 = Slot::factory()->create([
            'day' => 'Jeudi',
            'hour' => '9'
        ]);

        $slot23 = Slot::factory()->create([
            'day' => 'Jeudi',
            'hour' => '10'
        ]);

        $slot24 = Slot::factory()->create([
            'day' => 'Jeudi',
            'hour' => '11'
        ]);

        $slot25 = Slot::factory()->create([
            'day' => 'Jeudi',
            'hour' => '13'
        ]);

        $slot26 = Slot::factory()->create([
            'day' => 'Jeudi',
            'hour' => '14'
        ]);

        $slot27 = Slot::factory()->create([
            'day' => 'Jeudi',
            'hour' => '15'
        ]);

        $slot28 = Slot::factory()->create([
            'day' => 'Jeudi',
            'hour' => '16'
        ]);

        $slot29 = Slot::factory()->create([
            'day' => 'vendredi',
            'hour' => '9'
        ]);

        $slot30 = Slot::factory()->create([
            'day' => 'vendredi',
            'hour' => '10'
        ]);

        $slot31 = Slot::factory()->create([
            'day' => 'vendredi',
            'hour' => '11'
        ]);

        $slot32 = Slot::factory()->create([
            'day' => 'vendredi',
            'hour' => '13'
        ]);

        $slot33 = Slot::factory()->create([
            'day' => 'vendredi',
            'hour' => '14'
        ]);

        $slot34 = Slot::factory()->create([
            'day' => 'vendredi',
            'hour' => '15'
        ]);

        $slot35 = Slot::factory()->create([
            'day' => 'vendredi',
            'hour' => '16'
        ]);

        $slots = Slot::all();

        Employe::all()->each(function ($employe) use ($slots) {
            $employe->slots()->attach(
                $slots->random(rand(1, 35))->pluck('id')->toArray()
            );
        });

    }
}
