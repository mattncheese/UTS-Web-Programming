<?php

namespace App\Http\Controllers;

use App\Models\Transaction;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProductController extends Controller
{
    //

    public function buy(Request $req)
    {
        $id = $req->coffeeId;
        $transaction = new Transaction();
        $transaction->userId = Auth::user()->id;
        $transaction->coffeeId = $id;
        $transaction->save();

        // Add User Point
        $addPoint = floor($transaction->coffee->price / 10000);
        $user = User::where('id', '=', $transaction->userId)->first();
        if ($user) {
            $user->point = $user->point + $addPoint;
            $user->save();
        }

        return redirect('/');
    }
}
