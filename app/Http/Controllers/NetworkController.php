<?php

namespace App\Http\Controllers;

use App\Network;
use App\Country;
use App\Http\Resources\CountryResource;
use App\Http\Resources\CountryCollection;
use App\Http\Resources\NetworkResource;
use Illuminate\Http\Request;
use App\Util\UnlockBase;

class NetworkController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // Get from database and send as json
        $Countries = Country::paginate(15);

        return CountryResource::collection($Countries);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(UnlockBase $UnlockBase)
    {
        // Send request to external api and store in database. Will include updating.
        // dd($UnlockBase);
        $XML = $UnlockBase::CallAPI('GetNetworks');
        if (is_string($XML)) {
            /* Parse the XML stream */
            // $Data = UnlockBase::ParseXML($XML);
            $temp = simplexml_load_string($XML);
            $json = json_encode($temp);
            $Networks = json_decode($json, true);
            // return $Networks;
            foreach ($Networks['Country'] as $country) {
                $Country = Country::firstorCreate(['countryID' => $country['ID'], 'countryName' => $country['Name']]);
                // $Country->countryID = $country['ID'];
                // $Country->countryName = $country['Name'];
                // $Country->save();
                if (isset($country['Network']['0'])) {
                    foreach ($country['Network'] as $network) {
                        $Network = Network::firstorCreate(['networkID'=> $network['ID'], 'networkName' => $network['Name']]);
                        $Country->networks()->sync($Network, false);
                    }
                // unset($country);
// unset($network);
                } else {
                    $Network = Network::firstorCreate(['networkID'=> $network['ID'], 'networkName' => $network['Name']]);
                    $Country->networks()->sync($Network, false);
                    // new Network(['networkID'=> $network['ID'], 'networkName' => $network['Name']])
                }
                echo $Country;
            }
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function all(Request $request)
    {
        //
        $Countries = Country::all();

        return CountryResource::collection($Countries);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Network  $network
     * @return \Illuminate\Http\Response
     */
    public function show(Network $network)
    {
        //Probably wont be used but keeping for now.
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Network  $network
     * @return \Illuminate\Http\Response
     */
    public function edit(Network $network)
    {
        //Probably wont be used but keeping for now.
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Network  $network
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Network $network)
    {
        //Probably wont be used but keeping for now.
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Network  $network
     * @return \Illuminate\Http\Response
     */
    public function destroy(Network $network)
    {
        //Probably wont be used but keeping for now.
    }
}
