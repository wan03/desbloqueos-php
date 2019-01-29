<?php

namespace App\Http\Controllers;

use App\Mobile;
use App\Brand;
use App\Http\Resources\BrandResource;
use App\Http\Resources\BrandCollection;
use App\Http\Resources\MobileResource;
use Illuminate\Http\Request;
use App\Util\UnlockBase;

class MobileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return new BrandCollection(Brand::paginate());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(UnlockBase $UnlockBase)
    {
        //
        // Send request to external api and store in database. Will include updating.
        // dd($UnlockBase);
        $XML = $UnlockBase::CallAPI('GetMobiles');
        // if (is_string($XML)) {
        /* Parse the XML stream */
        // $Data = UnlockBase::ParseXML($XML);
        $temp = simplexml_load_string($XML);
        $json = json_encode($temp);
        $Mobiles = json_decode($json, true);
        // return $Networks;
        foreach ($Mobiles['Brand'] as $brand) {
            $Brand = Brand::firstorCreate(['brandID' => $brand['ID'], 'brandName' => $brand['Name']]);
            if (isset($brand['Mobile']['0'])) {
                foreach ($brand['Mobile'] as $mobile) {
                    // $Mobile = Mobile::firstorCreate(['mobileID'=> $mobile['ID'], 'mobileName' => $mobile['Name'], 'mobilePhoto' => $mobile['Photo']]);
                    $Brand->mobiles()->create(['mobileID'=> $mobile['ID'], 'mobileName' => $mobile['Name'], 'mobilePhoto' => $mobile['Photo']]);
                }
            } else {
                // $Mobile = Mobile::firstorCreate(['mobileID'=> $mobile['ID'], 'mobileName' => $mobile['Name'], 'mobilePhoto' => $mobile['Photo']]);
                $Brand->mobiles()->create(['mobileID'=> $mobile['ID'], 'mobileName' => $mobile['Name'], 'mobilePhoto' => $mobile['Photo']]);
            }
            echo $Brand;
            // }
        }
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
     * @param  \App\Mobile  $mobile
     * @return \Illuminate\Http\Response
     */
    public function show(Mobile $mobile)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Mobile  $mobile
     * @return \Illuminate\Http\Response
     */
    public function edit(Mobile $mobile)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Mobile  $mobile
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Mobile $mobile)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Mobile  $mobile
     * @return \Illuminate\Http\Response
     */
    public function destroy(Mobile $mobile)
    {
        //
    }
}
