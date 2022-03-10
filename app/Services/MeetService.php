<?php

namespace App\Services;


use App\Models\Slot;
use App\Models\Employe;
use Illuminate\Support\Collection;

class MeetService
{
    /**
     * On regarde pour chaque slot si la function isSlotOK donne un résultat positif
     * 
     * @param int[] $employeeIds
     */
    public static function findSlot(array $employesIds): ?Slot
    {
        $slots = Slot::all();
        $employes = Employe::find($employesIds); // Recupérer les employés concernés
                
        foreach ($slots as $slot) {
            if (!self::isSlotOK($slot, $employes)){
                continue;
            }
            return $slot;
        }

        return null;
    }

    /**
     * On regarde si le slot est un slot dispo chez chaque employé 
     *
     * @param Slot $slot
     * @param Collection $employes
     * @return boolean
     */
    private static function isSlotOK(Slot $slot, Collection $employes): bool
    {
        foreach ($employes as $employe) {
            if (!$employe->slots->contains($slot)){
                return false;
            }

            if (!self::isEmployeeFreeAtSlot($slot, $employe)){
                return false;
            }
        }
        return true; 
    }

    /**
     * On vérifie si l'employé est déjà pris pour ce créneau, si oui, le créneau n'est pas valide
     *
     * @param Slot $slot
     * @param [type] $employe
     * @return boolean
     */
    public static function isEmployeeFreeAtSlot(Slot $slot, $employe)
    {
        $employeMeets = $employe->meets; // - on récupère les réunions de l'employé

        foreach ($employeMeets as $employeeMeet) {  // - pour chaque réunion, on récupère le créneau de la réunion
            $meetSlot = $employeeMeet->slot;
            if ($slot->id === $meetSlot->id) {  // - si le créneau est le même que le créneau que l'on est en train de valider
                                                //   --> créneau pas valide car l'employé est déjà en réunion
                                                // - sinon, on continue, le créneau est potentiellement valide
                
                return false;
            }
        }
        return true;
    }
}