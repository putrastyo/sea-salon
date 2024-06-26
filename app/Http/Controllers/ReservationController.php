<?php

namespace App\Http\Controllers;

use App\Models\Branch;
use App\Models\Reservation;
use App\Models\Service;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ReservationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        if(auth()->user()->role == 'admin') {
            $reservations = Reservation::all();
        } else {
            $reservations = Reservation::where('name', 'like', '%'.auth()->user()->fullname.'%')->get();
        }
        return view('customer.reservation.index', compact('reservations'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $branches = Branch::all();
        $services = Service::all();

        return view('customer.reservation.create', compact(['branches', 'services']));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'phone' => 'required|numeric',
            'branch_id' => 'required|numeric|exists:branches,id',
            'service_id' => 'required|numeric|exists:services,id',
            'date' => 'required',
        ]);
        if($validator->fails()){
            return redirect()->back()->withErrors($validator)->withInput();
        }
        Reservation::create([
            'name' => $request->name,
            'phone' => $request->phone,
            'branch_id' => $request->branch_id,
            'service_id' => $request->service_id,
            'date' => $request->date,
        ]);

        return redirect()->route('reservation.index')->with('success', 'Reservation created successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Reservation $reservation)
    {
        $reservation->delete();

        return redirect()->route('reservation.index')->with('success', 'Reservation deleted successfully');
    }
}
