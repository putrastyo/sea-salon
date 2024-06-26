<?php

namespace App\Http\Controllers;

use App\Models\Branch;
use App\Models\Service;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class BranchController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $branches = Branch::with('branchDetails')->get();
        return view('admin.branches.index', compact('branches'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $services = Service::all();
        return view('admin.branches.create', compact('services'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'location' => 'required',
            'open_hour' => 'required',
            'close_hour' => 'required',
            'services' => 'required|array',
            'services.*' => 'required|numeric|exists:services,id',
        ]);
        if($validator->fails()){
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $branch = new Branch();
        $branch->name = $request->name;
        $branch->location = $request->location;
        $branch->open_hour = $request->open_hour;
        $branch->close_hour = $request->close_hour;
        $branch->save();

        foreach ($request->services as $service) {
            $branch->branchDetails()->create([
                'service_id' => $service
            ]);
        }

        return redirect()->route('branches.index')->with('success', 'Branch created successfully');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $branch = Branch::with('branchDetails')->find($id);
        $services = Service::all();
        return view('admin.branches.edit', compact(['branch', 'services']));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Branch $branch)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'location' => 'required',
            'open_hour' => 'required',
            'close_hour' => 'required',
            'services' => 'required|array',
            'services.*' => 'required|numeric|exists:services,id',
        ]);
        if($validator->fails()){
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $branch->name = $request->name;
        $branch->location = $request->location;
        $branch->open_hour = $request->open_hour;
        $branch->close_hour = $request->close_hour;
        $branch->save();

        return redirect()->route('branches.index')->with('success', 'Branch updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Branch $branch)
    {
        $branch->delete();

        return redirect()->route('branches.index')->with('success', 'Branch deleted successfully');
    }
}
