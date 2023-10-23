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
    // login form start here
    public function login_form(){
            return view('home');
    }

    // page summary function
    public function page_summary(){
        if(Auth::check()){
            $data = Addpage::paginate(4);
            return view('pagesummary', compact('data'));
        }
        return redirect("/login-form")->with('error','Opps! You do not have access');
    }

    // add page function
    public function add_page(){
        if(Auth::check()){
            return view('addpage');
        }
        return redirect("/login-form")->with('error','Opps! You do not have access');
    }

    // category summary function
    public function category_summary(){
        if(Auth::check()){
            $data = Addcategory::paginate(4);
            return view('categorysummary', compact('data'));
        }
        return redirect("/login-form")->with('error','Opps! You do not have access');
    }

    // add category function
    public function add_category(){
        if(Auth::check()){
            return view('addcategory');
        }
        return redirect("/login-form")->with('error','Opps! You do not have access');
    }

    // product summary start here
    public function product_summary(){
        if(Auth::check()){
            $products=Addproduct::with('category')->paginate(4);
            return view('productsummary',compact('products'));
        }
        return redirect("/login-form")->with('error','Opps! You do not have access');
    }

    // add product function
    public function add_product(){
        if(Auth::check()){
            $data = Addcategory::all();
            return view('addproduct', compact('data'));
        }
        return redirect("/login-form")->with('error','Opps! You do not have access');
    }

    // reset password function
    public function password(){
        if(Auth::check()){
            return view('changepassword');
        }
        return redirect("/login-form")->with('error','Opps! You do not have access');
    }

}
