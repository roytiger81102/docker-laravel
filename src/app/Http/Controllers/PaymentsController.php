<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Stripe\StripeClient;

class PaymentsController extends Controller
{
    public function index()
    {
        return view('welcome');
    }

    public function charge(Request $request)
    {
        $stripe = new StripeClient(
            env('STRIPE_SECRET_KEY'),
        );
        $stripe->charges->create([
            'amount' => 150,
            'currency' => 'jpy',
            'source' => 'tok_mastercard',
            'description' => 'Stripeデモを作ってみた',
        ]);
        return back();
    }

}
