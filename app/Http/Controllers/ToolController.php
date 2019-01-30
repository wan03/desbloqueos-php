<?php

namespace App\Http\Controllers;

use App\Tool;
use App\Group;
use App\Http\Resources\GroupResource;
use App\Http\Resources\GroupCollection;
use App\Http\Resources\ToolResource;
use Illuminate\Http\Request;
use App\Util\UnlockBase;

class ToolController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return GroupResource::collection(Group::paginate());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(UnlockBase $UnlockBase)
    {
        //
         //
        // Send request to external api and store in database. Will include updating.
        // dd($UnlockBase);
        $XML = $UnlockBase::CallAPI('GetTools');
        // if (is_string($XML)) {
        /* Parse the XML stream */
        // $Data = UnlockBase::ParseXML($XML);
        $temp = simplexml_load_string($XML);
        $json = json_encode($temp);
        $Tools = json_decode($json, true);
        // return $Tools;
        foreach ($Tools['Group'] as $group) {
            $Group = Group::firstorCreate(['groupID' => $group['ID'], 'groupName' => $group['Name']]);
            if (isset($group['Tool']['0'])) {
                foreach ($group['Tool'] as $tool) {
                    $Group->tools()->create([
                        'toolID'=> $tool['ID'],
                        'toolName' => $tool['Name'],
                        'toolCredits' => $tool['Credits'],
                         'toolSMS' => $tool['SMS'],
                         'toolMessage' => isset($tool['Message']) ? $tool['Message'] : null,
                         'toolDeliveryMin' => isset($tool['Delivery.Min']) ? $tool['Delivery.Min'] : null,
                         'toolDeliveryMax' => isset($tool['Delivery.Max']) ? $tool['Delivery.Max'] : null,
                         'toolDeliveryUnit' => $tool['Delivery.Unit'],
                         'toolRequiresNetwork' => $tool['Requires.Network'],
                         'toolRequiresMobile' => $tool['Requires.Provider'],
                         'toolRequiresProvider' => $tool['Requires.Mobile'],
                         'toolRequiresPIN' => $tool['Requires.PIN'],
                         'toolRequiresType' => $tool['Requires.Type'],
                         'toolRequiresKBH' => $tool['Requires.KBH'],
                         'toolRequiresMEP' => $tool['Requires.MEP'],
                         'toolRequiresPRD' => $tool['Requires.PRD'],
                         'toolRequiresLocks' => $tool['Requires.Locks'],
                         'toolRequiresSN' => $tool['Requires.SN'],
                         'toolRequiresSecRO' => $tool['Requires.SecRO'],
                         'toolRequiresServiceTag' => $tool['Requires.ServiceTag'],
                         'toolRequiresICloudEmail' => $tool['Requires.ICloudEmail'],
                         'toolRequiresICloudPhone' => $tool['Requires.ICloudPhone'],
                         'toolRequiresICloudUDID' => $tool['Requires.ICloudUDID'],
                         ]);
                }
            } else {
                $tool = $group['Tool'];
                $Group->tools()->create([
                    'toolID'=> $tool['ID'],
                    'toolName' => $tool['Name'],
                    'toolCredits' => $tool['Credits'],
                     'toolSMS' => $tool['SMS'],
                     'toolMessage' => isset($tool['Message']) ? $tool['Message'] : null,
                     'toolDeliveryMin' => isset($tool['Delivery.Min']) ? $tool['Delivery.Min'] : null,
                     'toolDeliveryMax' => isset($tool['Delivery.Max']) ? $tool['Delivery.Max'] : null,
                     'toolDeliveryUnit' => $tool['Delivery.Unit'],
                     'toolRequiresNetwork' => $tool['Requires.Network'],
                     'toolRequiresMobile' => $tool['Requires.Provider'],
                     'toolRequiresProvider' => $tool['Requires.Mobile'],
                     'toolRequiresPIN' => $tool['Requires.PIN'],
                     'toolRequiresType' => $tool['Requires.Type'],
                     'toolRequiresKBH' => $tool['Requires.KBH'],
                     'toolRequiresMEP' => $tool['Requires.MEP'],
                     'toolRequiresPRD' => $tool['Requires.PRD'],
                     'toolRequiresLocks' => $tool['Requires.Locks'],
                     'toolRequiresSN' => $tool['Requires.SN'],
                     'toolRequiresSecRO' => $tool['Requires.SecRO'],
                     'toolRequiresServiceTag' => $tool['Requires.ServiceTag'],
                     'toolRequiresICloudEmail' => $tool['Requires.ICloudEmail'],
                     'toolRequiresICloudPhone' => $tool['Requires.ICloudPhone'],
                     'toolRequiresICloudUDID' => $tool['Requires.ICloudUDID'],
                     ]);
            }
            echo $Group;
            // }
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
        return GroupResource::collection(Group::all());
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Tool  $tool
     * @return \Illuminate\Http\Response
     */
    public function show(Tool $tool, Request $request)
    {
        // Return specific network
        // TODO make sure this is validated
        $id = $request->input('id');

        return NetworkResource(find($id));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Tool  $tool
     * @return \Illuminate\Http\Response
     */
    public function edit(Tool $tool)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Tool  $tool
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Tool $tool)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Tool  $tool
     * @return \Illuminate\Http\Response
     */
    public function destroy(Tool $tool)
    {
        //
    }
}
