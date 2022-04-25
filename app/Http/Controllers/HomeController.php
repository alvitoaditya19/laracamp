<?php

namespace App\Http\Controllers;

use App\Models\Checkout;
use Illuminate\Http\Request;
use Auth;

class HomeController extends Controller
{
    public function dashboard()
    {
        // $checkouts = Checkout::with('Camp')->whereUserId(Auth::id()->get());
        // $checkouts = Checkout::with('Camp')->where('user_id', Auth::id())->get();
        // return view('user.dashboard',[
        //     'checkouts'=> $checkouts
        // ]);

        switch (Auth::user()->is_admin) {
            case true:
                return redirect(route('admin.dashboard'));
                break;
            
            default:
                return redirect(route('user.dashboard'));
                break;
        }
    }
}
