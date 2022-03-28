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

        //return SiteSettingsResource::collection(SiteSettings::all());
    }

    public function get($id)
    {
        //return response()->json(SiteSettings::with(['site_id']), 200);
        //return 'test_1';
        //return SiteSettingsResource::collection(SiteSettings::all());
        return new SiteSettingsResource(SiteSettings::findOrFail($id));
    }

    /*
    public function show(SiteSettings $SiteSettings)
    {
        return new SiteSettingsResource($SiteSettings);
    }
    */
    public function show($id)
    {
        return new SiteSettingsResource(SiteSettings::where('site_id', $id)->first());
    }





}
