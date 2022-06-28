<?php

namespace App\Http\Controllers;

use App\Models\Checkout;
use App\Models\History;
use App\Models\Order;
use App\Models\Post;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $orders = Order::where('user_id', auth()->user()->id)->where('status', 0)->first();
        if($orders) {
            $checkouts = Checkout::where('order_id', $orders->id)->get();
            return view('orders', compact('checkouts', 'orders'),[
                "title" => "Checkout",
            ]);
        }

        $checkouts = null;
        return view('orders',compact('checkouts', 'orders'),[
            "title" => "Checkout",
        ]);
       
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.orders.create',[
            "title" => "Create Order",
        ]);
    }

    public function order(Request $request, $id)
    {
        $post = Post::where('id', $id)->first();

        if($request->quantity > $post->stock)
        {
            return redirect()->back()->with('error', 'Maaf, stok tidak mencukupi');
        }

        $validateOrder = Order::where('user_id', auth()->user()->id)->where('status', 0)->first();
        if(empty($validateOrder)) {
            $order = new Order;
            $order->user_id = auth()->user()->id;
            $order->status = '0';
            $order->total_price = $post->price * $request->quantity;
            $order->save();
        }
        
        $newOrder = Order::where('user_id', auth()->user()->id)->where('status', 0)->first();
        $validate_new_order = Checkout::where('post_id', $id)->where('order_id', $newOrder->id)->first();
        
        if(empty($validate_new_order)) {
            $checkout = new Checkout;
            $checkout->post_id = $post->id;
            $checkout->order_id = $newOrder->id;
            $checkout->quantity = $request->quantity;
            $checkout->price = $post->price * $request->quantity;
            $checkout->save();
        } else {
            $checkout = Checkout::where('post_id', $id)->where('order_id', $newOrder->id)->first();
            $checkout->quantity += $request->quantity;
            $checkout->price += $post->price * $request->quantity;
            $checkout->update();
        }
        
        $validateOrder['total_price'] += $post->price * $request->quantity;
        $validateOrder->update();
        
        Alert::success('Success', 'Product added successfully');
        return redirect('/posts/'.$post->slug);
    }

    public function confirm()
    {
        $order = Order::where('user_id', auth()->user()->id)->where('status', 0)->first();
        $checkouts = Checkout::where('order_id', $order->id)->get();
        foreach($checkouts as $checkout) {
            $history = new History;
            $history->user_id = auth()->user()->id;
            $history->post_id = $checkout->post_id;
            $history->quantity = $checkout->quantity;
            $history->price = $checkout->price;
            $history->save();
        }
        $order->status = 1;
        $order->update();

        Alert::success('Success', 'Order confirmed successfully');
        return redirect('/');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $checkout = Checkout::where('id', $id)->first();
        $order = Order::where('id', $checkout->order_id)->first();

        $order->total_price -= $checkout->price;
        $order->update();

        $checkout->delete();
        Alert::success('Success', 'Product deleted successfully');
        return redirect('/orders');
    }
}
