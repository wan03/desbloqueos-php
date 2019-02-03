<?php

namespace App\Http\Controllers;

use App\Order;
use App\User;
use App\Http\Resources\OrderResource;
use Illuminate\Http\Request;
use App\Util\UnlockBase;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return OrderResource::collection(Order::all());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, UnlockBase $UnlockBase)
    {
        // TODO Get order from request store in db and make API call
        $Order = Order::create([
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'phone' => empty($request->input('phone')) ? null : $request->input('phone'),
            'type' => $request->input('type'),
            'country' => $request->input('country'),
            'network' => $request->input('network'),
            'tool' => $request->input('tool'),
            'credits' => $request->input('credits'),
            'price' => $request->input('price'),
            'IMEI' => $request->input('IMEI'),
            'model' => $request->input('model'),

        ]);
        $id = $request->input('userId');
        if ($id){
        $user = User::findOne($id);
        $user->order()->associate($Order);
        $user->save();
        }
        $XML = UnlockBase::CallAPI('PlaceOrder', array(/* Put your parameters here */));

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function show(Order $order)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function edit(Order $order)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Order $order)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function destroy(Order $order)
    {
        //
    }
}
