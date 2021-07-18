<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Cart;
use App\Models\Order;
use App\Models\User;
use Session;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;



class ProductController extends Controller
{
    public function aki(){

        $data=Product::all();
        return view('product',['Products'=>$data]);
    }

    public function detail($id){

        $data= Product::find($id);
        return view('detail',['products'=>$data]);
    }

    public function search(Request $request){
 $data=Product::where('name','like', '%'.$request->input('q').'%')->get();
 return view('search',['Products'=>$data]);

    }

    public function addtocart(Request $request){

        if($request->session()->has('user')){

$cart= new Cart;

$cart->user_id=$request->session()->get('user')['id'];
$cart->product_id=$request->product_id;
$cart->save();
return redirect('/');
        }
        else{

            return redirect ('/login');
        }
    }


    static function cartItem(){
        $user_id=Session::get('user')['id'];
        return Cart::where('user_id',$user_id)->count();
    }
    public function cartlist(){
      $user_id=Session::get('user')['id'];
      $data = DB::table('cart')
        ->join('products','cart.product_id','products.id')
        ->select('products.*','cart.id as cart_id')
        ->where('cart.user_id',$user_id)
        ->get();
return view('cartlist',['sheri'=>$data]);

    }

    public function removecart($id){

        Cart::destroy($id);
        return redirect ('cartlist');
    }
    public function ordernow(){
      $user_id=Session::get('user')['id'];
       $data= DB::table('cart')
        ->join('products','cart.product_id','products.id')
        ->where('cart.user_id',$user_id)
        ->sum('products.price');
 return view('ordernow',['sheri'=>$data]);

    }
public function orderplace(Request $request){
    $user_id=Session::get('user')['id'];
    $allcart=Cart::where('user_id',$user_id)->get();
    foreach($allcart as $cart){


        $orders=new Order;

        $orders->product_id=$cart['product_id'];
        $orders->user_id=$cart['user_id'];
        $orders->address=$request->address;
        $orders->status="pending";
        $orders->payment_method=$request->payment;
        $orders->payment_status="pending";
        $orders->save();
    }

 Cart::where('user_id',$user_id)->delete();
 return redirect('/');

}
public function myorders(){

      $user_id=Session::get('user')['id'];
       $data= DB::table('orders')
        ->join('products','orders.product_id','products.id')
        ->where('orders.user_id',$user_id)
        ->get();
 return view('myorders',['myorder'=>$data]);

    
}

public function register(Request $request){


    $register=new User;

    $register->name=$request->name;
    $register->email=$request->email;
    $register->password=Hash::make($request->password);
    $register->save();

    return redirect('/');
    // return redirect('register')->back()->with('success', 'your form has been register');
}
}






