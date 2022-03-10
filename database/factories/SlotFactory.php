<?php

namespace Database\Factories;

use App\Models\Slot;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Slot>
 */
class SlotFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            //
        ];
    }

    protected $model = Slot::class;

    public function addSlots()
    {
        $slot1 = Slot::factory()->create([
            'day' => '1',
            'hour' => '9'
        ]);

        $slot2 = Slot::factory()->create([
            'day' => '1',
            'hour' => '10'
        ]);

        $slot3 = Slot::factory()->create([
            'day' => '1',
            'hour' => '11'
        ]);

        $slot4 = Slot::factory()->create([
            'day' => '1',
            'hour' => '13'
        ]);

        $slot5 = Slot::factory()->create([
            'day' => '1',
            'hour' => '14'
        ]);

        $slot6 = Slot::factory()->create([
            'day' => '1',
            'hour' => '15'
        ]);

        $slot7 = Slot::factory()->create([
            'day' => '1',
            'hour' => '16'
        ]);

        $slot8 = Slot::factory()->create([
            'day' => '2',
            'hour' => '9'
        ]);

        $slot9 = Slot::factory()->create([
            'day' => '2',
            'hour' => '10'
        ]);

        $slot10 = Slot::factory()->create([
            'day' => '2',
            'hour' => '11'
        ]);

        $slot11 = Slot::factory()->create([
            'day' => '2',
            'hour' => '13'
        ]);

        $slot12 = Slot::factory()->create([
            'day' => '2',
            'hour' => '14'
        ]);

        $slot13 = Slot::factory()->create([
            'day' => '2',
            'hour' => '15'
        ]);

        $slot14 = Slot::factory()->create([
            'day' => '2',
            'hour' => '16'
        ]);

        $slot15 = Slot::factory()->create([
            'day' => '3',
            'hour' => '9'
        ]);

        $slot16 = Slot::factory()->create([
            'day' => '3',
            'hour' => '10'
        ]);

        $slot17 = Slot::factory()->create([
            'day' => '3',
            'hour' => '11'
        ]);

        $slot18 = Slot::factory()->create([
            'day' => '3',
            'hour' => '13'
        ]);

        $slot19 = Slot::factory()->create([
            'day' => '3',
            'hour' => '14'
        ]);

        $slot20 = Slot::factory()->create([
            'day' => '3',
            'hour' => '15'
        ]);

        $slot21 = Slot::factory()->create([
            'day' => '3',
            'hour' => '16'
        ]);

        $slot22 = Slot::factory()->create([
            'day' => '4',
            'hour' => '9'
        ]);

        $slot23 = Slot::factory()->create([
            'day' => '4',
            'hour' => '10'
        ]);

        $slot24 = Slot::factory()->create([
            'day' => '4',
            'hour' => '11'
        ]);

        $slot25 = Slot::factory()->create([
            'day' => '4',
            'hour' => '13'
        ]);

        $slot26 = Slot::factory()->create([
            'day' => '4',
            'hour' => '14'
        ]);

        $slot27 = Slot::factory()->create([
            'day' => '4',
            'hour' => '15'
        ]);

        $slot28 = Slot::factory()->create([
            'day' => '4',
            'hour' => '16'
        ]);

        $slot29 = Slot::factory()->create([
            'day' => '5',
            'hour' => '9'
        ]);

        $slot30 = Slot::factory()->create([
            'day' => '5',
            'hour' => '10'
        ]);

        $slot31 = Slot::factory()->create([
            'day' => '5',
            'hour' => '11'
        ]);

        $slot32 = Slot::factory()->create([
            'day' => '5',
            'hour' => '13'
        ]);

        $slot33 = Slot::factory()->create([
            'day' => '5',
            'hour' => '14'
        ]);

        $slot34 = Slot::factory()->create([
            'day' => '5',
            'hour' => '15'
        ]);

        $slot35 = Slot::factory()->create([
            'day' => '5',
            'hour' => '16'
        ]);
    }
}
