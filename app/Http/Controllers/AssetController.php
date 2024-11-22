<?php

namespace App\Http\Controllers;

use App\Models\asset;
use Illuminate\Http\Request;

class AssetController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $this->setTitle('Asset');
        $asset = asset::all();
        return view('admin.asset.index', compact('asset'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $this->setTitle('Asset');
        return view('admin.asset.addOrEdit');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validate = $request->validate([
            'user_id' => 'nullable',
            'name' => 'required',
            'value' => 'required',
            'purchase_date' => 'required',
        ]);
        $validate['user_id'] = 1;

        asset::create($validate);
        return redirect()->route('asset.index')->with('success', 'Successfully create data');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(asset $asset)
    {
        $this->setTitle('Asset');
        return view('admin.asset.addOrEdit', compact('asset'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, asset $asset)
    {
        $validate = $request->validate([
            'user_id' => 'nullable',
            'name' => 'required',
            'value' => 'required',
            'purchase_date' => 'required',
        ]);
        $validate['user_id'] = 1;
        $asset->update($validate);
        return redirect()->route('asset.index')->with('success', 'Successfully update data');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(asset $asset)
    {
        $asset->delete();
        return redirect()->back()->with('success', 'Successfully delete data');
    }
}
