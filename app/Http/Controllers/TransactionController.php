<?php

namespace App\Http\Controllers;

use App\Models\Account;
use App\Models\Category;
use App\Models\Transaction;
use Illuminate\Http\Request;

class TransactionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $this->setTitle('Transactions');
        $transaction = Transaction::all();
        return view('admin.Transaction.index',compact('transaction'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $this->setTitle('Transactions');
        $account = Account::all();
        $category = Category::all();
        return view('admin.Transaction.addOrEdit',compact('account','category'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validate = $request->validate([
            'user_id' => 'nullable',
            'account_id' => 'nullable',
            'category_id' => 'nullable',
            'type_id' => 'nullable',
            'amount' => 'required',
            'description' => 'required',
            'date' => 'required',
        ]);
        $validate['user_id'] = 1;
        Transaction::create($validate);
        return redirect()->route('transaction.index')->with('success','Successfully create data');
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
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
