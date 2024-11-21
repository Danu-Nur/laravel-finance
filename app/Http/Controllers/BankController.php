<?php

namespace App\Http\Controllers;

use App\Models\Bank;
use App\Traits\ImageUploadTraits;
use Illuminate\Http\Request;

class BankController extends Controller
{
    use ImageUploadTraits;
    protected $pathImage;

    public function __construct()
    {
        $this->pathImage = 'images/bank/';
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $this->setTitle('Banks');
        $bank = Bank::all();
        $pathImg = $this->pathImage;
        return view('admin.bank.index', compact('bank', 'pathImg'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $this->setTitle('Banks');
        return view('admin.bank.addOrEdit');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validate = $request->validate([
            'name' => 'required',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,webp|max:2048',
            'type' => 'required'
        ]);

        if ($request->hasFile('image')) {
            $imagePath = $this->uploadImage($request, 'image', $validate['name'] . '_' . $validate['type'], $this->pathImage);
            $validate['image'] = $imagePath;
        }

        Bank::create($validate);
        return redirect()->route('bank.index')->with('success', 'Success add data');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $this->setTitle('Banks');
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Bank $bank)
    {
        $this->setTitle('Banks');
        $pathImg = $this->pathImage;
        return view('admin.bank.addOrEdit', compact('bank', 'pathImg'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Bank $bank)
    {
        $validate = $request->validate([
            'name' => 'required',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,webp|max:2048',
            'type' => 'required'
        ]);

        if ($request->hasFile('image')) {
            $imagePath = $this->updateImage($request, 'image', $validate['name'] . '_' . 'desktop', $this->pathImage, $bank->image);
            $validate['image'] = $imagePath;
        }

        $bank->update($validate);
        return redirect()->route('bank.index')->with('success', 'Success Update data');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
