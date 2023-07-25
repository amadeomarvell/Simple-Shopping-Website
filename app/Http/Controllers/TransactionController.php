<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Transaction;
use App\Models\Cart;

class TransactionController extends Controller
{
    public function checkout(Request $request)
{
    $cartId = $request->input('cart_id');

    // Fetch the cart data for the checked-out product
    $checkedOutProduct = Cart::find($cartId);

    // Move the cart data to the transactions table
    Transaction::create([
        'product_id' => $checkedOutProduct->product_id,
        'cart_id' => $checkedOutProduct->id, // Store the cart_id in the transaction
        'product_name' => $checkedOutProduct->product_name,
        'product_price' => $checkedOutProduct->product_price,
        'product_desc' => $checkedOutProduct->product_desc,
        'cart_qty' => $checkedOutProduct->cart_qty,
        'status' => $checkedOutProduct->status,
        'total_price' => $checkedOutProduct->total_price,
        // Add any other relevant data for transactions
    ]);

    // Delete the checked-out product from the cart
    $checkedOutProduct->delete();

    // Redirect back or to a success page after the checkout process
    return redirect('/transaction')->with('success', 'Checkout successful!');
}


public function transaction(){
    // Retrieve all transactions from the database.
    $transactions = Transaction::all();

    // Check if $transactions is not null before using count().
    if (!is_null($transactions)) {
        return view('transaction', [
            "transactions" => $transactions
        ]);
    } else {
        // Handle the situation when there are no transactions.
        // For example, you can display a message or redirect to another page.
        return view('no_transactions_found');
    }
}
}
