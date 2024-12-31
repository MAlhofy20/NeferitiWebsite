<?php

namespace App\Http\Controllers\Dashboard;

use Illuminate\Http\Request;
use App\Functions\ChannexService;
use App\Http\Controllers\Controller;
use App\Models\PropertyChannelsToken;

class ChannelsController extends Controller
{
    protected $channexService;

    public function __construct(ChannexService $channexService)
    {
        $this->channexService = $channexService;
    }
    public function index($propertyId)
    {
        // $token = PropertyChannelsToken::where('property_id', $propertyId)->first();
        // if($token){
        //     $token = $token->token;
        // }else {
            $groupId = auth()->user()->group_id;
            $username = auth()->user()->name;    
            $token = $this->channexService->generateChannelsToken($propertyId, $groupId, $username);
            $chunnel_token = new PropertyChannelsToken();
            $chunnel_token->user_id = auth()->user()->id;
            $chunnel_token->property_id = $propertyId;
            // dd($token);
            $chunnel_token->token = $token['data']['token'];
            $chunnel_token->save();

            $token = $token['data']['token'];
        // }

        if($token['errors'] ?? false) {
            return redirect()->route('dashboard.properties.index')->with('error', __('dashboard.Failed to generate token'));
        }


        $property = $this->channexService->getPropertyById($propertyId)['data'];
        return view('dashboard.properties.channels', [
            'property' => $property['attributes'],
            'token' => $token,
        ]);
    }
}
