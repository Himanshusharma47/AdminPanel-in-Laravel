<?php

namespace App\Http\Controllers;

use App\Models\Addcategory;
use App\Models\Addpage;
use App\Models\Addproduct;
use App\Models\Login;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\session;

use function Ramsey\Uuid\v1;

class ViewController extends Controller
{
    // loginForm start here
    public function loginForm()
    {
            return view('home');
    }

    // pageSummary function
    public function pageSummary()
    {
        if(Auth::check()) {
            $data = Addpage::paginate(4);

            return view('pagesummary', compact('data'));
        }

        return redirect("/login-form")->with('error', 'Opps! You do not have access');
    }

    // addPage function
    public function addPage()
    {
        if(Auth::check()) {

            return view('addpage');
        }

        return redirect("/login-form")->with('error', 'Opps! You do not have access');
    }

    // categorySummary function
    public function categorySummary()
    {
        if(Auth::check()) {
            $data = Addcategory::paginate(4);

            return view('categorysummary', compact('data'));
        }

        return redirect("/login-form")->with('error', 'Opps! You do not have access');
    }

    // addCategory function
    public function addCategory()
    {
        if(Auth::check()) {

            return view('addcategory');
        }

        return redirect("/login-form")->with('error', 'Opps! You do not have access');
    }

    // productSummary start here
    public function productSummary()
    {
        if(Auth::check()) {
            $products=Addproduct::with('category')->paginate(4);

            return view('productsummary', compact('products'));
        }

        return redirect("/login-form")->with('error', 'Opps! You do not have access');
    }

    // addProduct function
    public function addProduct()
    {
        if(Auth::check()) {
            $data = Addcategory::all();

            return view('addproduct', compact('data'));
        }

        return redirect("/login-form")->with('error', 'Opps! You do not have access');
    }

    // reset password function
    public function password()
    {
        if(Auth::check()) {

            return view('changepassword');
        }

        return redirect("/login-form")->with('error', 'Opps! You do not have access');
    }

}
