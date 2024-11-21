<?php

namespace App\Http\Controllers;

use App\Models\Account;
use App\Models\Bank;
use Illuminate\Http\Request;

class AccountController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    protected $pathImage;
    public function __construct()
    {
        $this->pathImage = 'images/bank/';
    }

    public function index()
    {
        $this->setTitle('Accounts');
        $account = Account::all();
        $pathImg = $this->pathImage;
        return view('admin.account.index', compact('account','pathImg'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $bank = Bank::all();
        $this->setTitle('Accounts');
        return view('admin.account.addOrEdit', compact('bank'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validate = $request->validate([
            'user_id' => 'nullable',
            'bank_id' => 'required',
            'account_name' => 'required',
            'status' => 'nullable',
        ]);
        $validate['user_id'] = 1;

        Account::create($validate);
        return redirect()->route('account.index')->with('success', 'Successfully Add Data');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $this->setTitle('Accounts');
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Account $account)
    {
        $this->setTitle('Accounts');
        $bank = Bank::all();
        return view('admin.account.addOrEdit', compact('bank', 'account'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Account $account)
    {
        $validate = $request->validate([
            'user_id' => 'nullable',
            'bank_id' => 'required',
            'account_name' => 'required',
            'status' => 'nullable',
        ]);
        $validate['user_id'] = 1;
        $account->update($validate);

        return redirect()->route('account.index')->with('success', 'Successfully Add Data');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
