<?php

namespace App\Http\Controllers;

use App\Models\Meet;
use App\Models\Slot;
use App\Models\Employe;
use Illuminate\Http\Request;
use App\Services\MeetService;

class MeetController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {  
        $meets = Meet::all();
        $slots = Slot::all();
        $employes = Employe::all();
        return view('home', ['slots' => $slots, 'employes' => $employes, 'meets' => $meets ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    { 
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $request->validate([
            'name' => ['required', 'unique:meets'],
            'employes' => ['required'],
        ]);

        $slot = MeetService::findSlot($request->employes);
        if ($slot) {
            $meet = Meet::create([
                'name' => $request->name,
                'slot_id' => $slot->id   
            ]);
        }
        else{
            return 'Pas de créneau dispo';
        }
        
        $meet->employes()->sync($request->employes);

        return redirect()->action([MeetController::class, 'index'], ['id' => $slot->id]);


    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
