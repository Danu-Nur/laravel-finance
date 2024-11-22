<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Type;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $this->setTitle('Category');
        $category = Category::all();
        return view('admin.category.index', compact('category'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $this->setTitle('Category');
        $type = Type::all();
        return view('admin.category.addOrEdit', compact('type'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validate = $request->validate([
            'type_id' => 'required',
            'name' => 'nullable',
        ]);
        Category::create($validate);
        return redirect()->route('category.index')->with('success', 'Successfully add data');
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
    public function edit(Category $category)
    {
        $this->setTitle('Category');
        $type = Type::all();
        return view('admin.category.addOrEdit', compact('type','category'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Category $category)
    {
        $validate = $request->validate([
            'type_id' => 'required',
            'name' => 'nullable',
        ]);
        $category->update($validate);
        return redirect()->route('category.index')->with('success', 'Successfully edit data');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Category $category)
    {
        $category->delete();
        return redirect()->back()->with('success', 'Successfully delete data');
    }
}
