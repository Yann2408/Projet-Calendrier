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
            'day' => 'lundi',
            'hour' => '09:00:00'
        ]);

        $slot2 = Slot::factory()->create([
            'day' => 'lundi',
            'hour' => '10:00:00'
        ]);

        $slot3 = Slot::factory()->create([
            'day' => 'lundi',
            'hour' => '11:00:00'
        ]);

        $slot4 = Slot::factory()->create([
            'day' => 'lundi',
            'hour' => '13:00:00'
        ]);

        $slot5 = Slot::factory()->create([
            'day' => 'lundi',
            'hour' => '14:00:00'
        ]);

        $slot6 = Slot::factory()->create([
            'day' => 'lundi',
            'hour' => '15:00:00'
        ]);

        $slot7 = Slot::factory()->create([
            'day' => 'lundi',
            'hour' => '16:00:00'
        ]);

        $slot8 = Slot::factory()->create([
            'day' => 'mardi',
            'hour' => '09:00:00'
        ]);

        $slot9 = Slot::factory()->create([
            'day' => 'mardi',
            'hour' => '10:00:00'
        ]);

        $slot10 = Slot::factory()->create([
            'day' => 'mardi',
            'hour' => '11:00:00'
        ]);

        $slot11 = Slot::factory()->create([
            'day' => 'mardi',
            'hour' => '13:00:00'
        ]);

        $slot1mardi = Slot::factory()->create([
            'day' => 'mardi',
            'hour' => '14:00:00'
        ]);

        $slot13 = Slot::factory()->create([
            'day' => 'mardi',
            'hour' => '15:00:00'
        ]);

        $slot14 = Slot::factory()->create([
            'day' => 'mardi',
            'hour' => '16:00:00'
        ]);

        $slot15 = Slot::factory()->create([
            'day' => 'mercredi',
            'hour' => '09:00:00'
        ]);

        $slot16 = Slot::factory()->create([
            'day' => 'mercredi',
            'hour' => '10:00:00'
        ]);

        $slot17 = Slot::factory()->create([
            'day' => 'mercredi',
            'hour' => '11:00:00'
        ]);

        $slot18 = Slot::factory()->create([
            'day' => 'mercredi',
            'hour' => '13:00:00'
        ]);

        $slot19 = Slot::factory()->create([
            'day' => 'mercredi',
            'hour' => '14:00:00'
        ]);

        $slot20 = Slot::factory()->create([
            'day' => 'mercredi',
            'hour' => '15:00:00'
        ]);

        $slot21 = Slot::factory()->create([
            'day' => 'mercredi',
            'hour' => '16:00:00'
        ]);

        $slot22 = Slot::factory()->create([
            'day' => 'jeudi',
            'hour' => '09:00:00'
        ]);

        $slot23 = Slot::factory()->create([
            'day' => 'jeudi',
            'hour' => '10:00:00'
        ]);

        $slot24 = Slot::factory()->create([
            'day' => 'jeudi',
            'hour' => '11:00:00'
        ]);

        $slot25 = Slot::factory()->create([
            'day' => 'jeudi',
            'hour' => '13:00:00'
        ]);

        $slot26 = Slot::factory()->create([
            'day' => 'jeudi',
            'hour' => '14:00:00'
        ]);

        $slot27 = Slot::factory()->create([
            'day' => 'jeudi',
            'hour' => '15:00:00'
        ]);

        $slot28 = Slot::factory()->create([
            'day' => 'jeudi',
            'hour' => '16:00:00'
        ]);

        $slot29 = Slot::factory()->create([
            'day' => 'vendredi',
            'hour' => '09:00:00'
        ]);

        $slot30 = Slot::factory()->create([
            'day' => 'vendredi',
            'hour' => '10:00:00'
        ]);

        $slot31 = Slot::factory()->create([
            'day' => 'vendredi',
            'hour' => '11:00:00'
        ]);

        $slot32 = Slot::factory()->create([
            'day' => 'vendredi',
            'hour' => '13:00:00'
        ]);

        $slot33 = Slot::factory()->create([
            'day' => 'vendredi',
            'hour' => '14:00:00'
        ]);

        $slot34 = Slot::factory()->create([
            'day' => 'vendredi',
            'hour' => '15:00:00'
        ]);

        $slot35 = Slot::factory()->create([
            'day' => 'vendredi',
            'hour' => '16:00:00'
        ]);

        $slots = Slot::all();

        Employe::all()->each(function ($employe) use ($slots) {
            $employe->slots()->attach(
                $slots->random(rand(3, 6))->pluck('id')->toArray()
            );
        });

    }
}
