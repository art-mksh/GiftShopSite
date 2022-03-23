<?php

namespace App\Http\Controllers;

use App\Models\SiteSettings;
use App\Http\Resources\SiteSettingsResource;
use Illuminate\Http\Request;

class SiteSettingsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
    */

    public function index(){
        //console.log('index');
        //return 'test_2';
                return SiteSettingsResource::collection(SiteSettings::all());
    }

    public function get()
    {
        //return response()->json(SiteSettings::with(['site_id']), 200);
        return 'test_1';
    }





}
