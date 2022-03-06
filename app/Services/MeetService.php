<?php

namespace App\Services;

use App\Models\Slot;
use App\Models\Employe;
use Illuminate\Database\Eloquent\Collection;

class MeetService
{
    /**
     * @param int[] $employeeIds
     */
    public static function findSlot(array $employesIds): ?Slot
    {
        // dd($employes);
        $slots = Slot::all();
        $employes = Employe::find($employesIds); // Recupérer les employés concernés

        // dd($employes);

        foreach ($slots as $slot) {
            if (!self::isSlotOK($slot, $employes)) {
                continue;
            }

            return $slot;
        }

        return null;
    }

    private static function isSlotOK(Slot $slot, Collection $employes): bool
    {
        foreach ($employes as $employe) {
            if (!$employe->slots->contains($slot)) {
                return false;
            }
        }

        return true;
    }
}