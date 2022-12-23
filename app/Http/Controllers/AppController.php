<?php

namespace App\Http\Controllers;

use App\Models\Account;
use App\Models\Transaction;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AppController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $accounts = Account::all();
        $transactions = DB::table('transactions')->join('accounts', 'transactions.account_id', '=', 'accounts.id')->orderByDesc('transactions.created_at');
        $transactions = $transactions->get();
        $accounts_count = Account::count();
        $transactions_count = Transaction::count();
        return view('index', compact(['accounts', 'transactions', 'accounts_count', 'transactions_count']));
    }
}
