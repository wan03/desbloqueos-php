<?php

namespace App\Http\Controllers;

use App\Order;
use App\Charge;
use App\User;
use App\Http\Resources\OrderResource;
use App\Http\Resources\User as UserResource;
use Illuminate\Http\Request;
use App\Util\UnlockBase;
use Stripe\Stripe;

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
        $price = $request->input('price');
        $name = $request->input('name');
        $tool = $request->input('tool');
        //TODO Stripe call

       $stripeCharge = Stripe\Charge::create([
            'amount' => $price,
            'currency' => 'dop',
            'source' => 'COMNIGFROMFRONTEND',
            'description' => 'Charge for ' . $name . $tool,
            ]);
            if(isset($stripeCharge['id'])){

            $XML = UnlockBase::CallAPI('PlaceOrder', array(/* Put your parameters here */));
                $temp = simplexml_load_string($XML);
                $json = json_encode($temp);
                $result = json_decode($json, true);

                if (isset($result['ID'])) {
                //TODO Store charge in DB and make API call and return success in json
                // TODO put order info in db
        $Order = Order::create([
            'chargeId' => $stripeCharge['id'],
            'unlockBaseId' => $result['ID'],
            'name' => $name,
            'email' => $request->input('email'),
            'phone' => empty($request->input('phone')) ? null : $request->input('phone'),
            'type' => $request->input('type'),
            'country' => $request->input('country'),
            'network' => $request->input('network'),
            'tool' => $tool,
            'credits' => $request->input('credits'),
            'price' => $price,
            'IMEI' => $request->input('IMEI'),
            'model' => $request->input('model'),
        ]);
        $id = $request->input('userId');
        if ($id){
        $user = User::findOne($id);
        $user->order()->associate($Order);
        $user->save();
        }

            return $result;
        } else {
            return toJson(['message' => 'There was an error processing your order, we will reach out to you within 24 hours. For more information contact support@desbloqueatucel.com']);
        }

        } else {
            //TODO Return error this is a placeholder as it should be the error returning from Stripe.
            return toJson(['message' => 'There was an error processing your order, we will reach out to you within 24 hours. For more information contact support@desbloqueatucel.com']);
        }

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function show(Order $Order)
    {
        //Return orders of a single user
        $id = Auth::id();
        if ($id) {
            $user = User::findOne($id);
            return UserResource($user);
        } else {
            //TODO Return an error?
        }

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
