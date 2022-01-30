<?php

namespace App\Http\Controllers;

use App\Models\product;
use ApiChef\PayHere\Payment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;


class CheckoutController extends Controller
{
    
    public function show(product $product, Request $request)
    {
        $payment = Payment::make($product, $request->user(), $product->p_price);

        return view('checkout')->with('payment' ,$payment);
    }

    public function success(Request $request)
    {
        $payment = Payment::findByOrderId($request->get('order_id'));
        
        $product = $payment->payable;
        // $product->decrement('p_qty');

        $products = Product::all();
        Session::flash('payment_status', 'success'); 
        return view('home',compact('products'));

    }

    public function cancelled(Request $request)
    {
        $payment = Payment::findByOrderId($request->get('order_id'));
        
        /** @var Product $product */
        $product = $payment->payable;

        // perform the side effects of cancelled payment

        // redirect to payment cancelled page

        $products = Product::all();
        Session::flash('payment_status', 'faild'); 
        return view('home',compact('products'));
    }


}
