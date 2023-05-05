<?php

namespace App\Http\Controllers;

use App\Models\Coffee;
use App\Models\CoffeeCategory;
use App\Models\Transaction;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ViewController extends Controller
{
    public function homePage()
    {
        LoginController::login();
        return view('page/home');
    }

    public function productPage()
    {
        LoginController::login();

        $coffees = Coffee::all();
        $categories = CoffeeCategory::all();
        $category = -1;
        return view('page/product', compact('category', 'categories', 'coffees',));
    }




    public function productPageWithCategory(Request $req)
    {
        LoginController::login();
        $category = $req->category;

        $coffees = Coffee::where('categoryId', '=',  $category)->get();
        $categories = CoffeeCategory::all();
        $category = $req->category;
        return view('page/product', compact('category', 'categories', 'coffees'));
    }

    public function transactionPage()
    {
        LoginController::login();
        $transactions = Transaction::where('userId', '=', Auth::user()->id)->get();
        return view('page/transaction', compact('transactions'));
    }


    
}
