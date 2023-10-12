<?php

namespace App\Http\Controllers;
use App\Models\Addpage;
use App\Models\Login;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\session; 

use function Ramsey\Uuid\v1;

class ViewController extends Controller
{
    public function login_form(){
        return view('home');
    }

    public function page_summary(){
        $data = Addpage::paginate(4);
        return view('pagesummary', compact('data'));
    }
    
    public function add_page(){
        if(Auth::check()){
            return view('addpage');
        }
        return redirect("/login-form")->with('error','Opps! You do not have access');
    }

    public function category_summary(){
        return view('categorysummary');
    }

    public function add_category(){
        return view('addcategory');
    }

    public function product_summary(){
        return view('productsummary');
    }

    public function add_product(){
        return view('addproduct');
    }
    
    public function change_password(){
        return view('changepassword');
    }
}
