<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SiteController extends Controller
{
    public function index()
    {
        return view('site.index');
    }
    public function about()
    {
        return view('site.about');
    }
    public function minneapolis()
    {
        return view('site.minneapolis');
    }
    public function services()
    {
        return view('site.services');
    }
    public function lawn_mowing_lawn_care()
    {
        return view('site.lawn_mowing_lawn_care');
    }
    public function commercial_lawn_service()
    {
        return view('site.commercial_lawn_service');
    }
    public function snow_removal()
    {
        return view('site.snow-removal');
    }
    public function lawn_maintenance()
    {
        return view('site.lawn-maintenance');
    }
    public function yard_trimming_and_blowing()
    {
        return view('site.yard-trimming');
    }
    public function spring_and_fall_cleanup()
    {
        return view('site.spring_and_fall_cleanup');
    }
    public function dethatching()
    {
        return view('site.dethatching');
    }
    public function yard_aeration()
    {
        return view('site.yard-aeration');
    }
    public function hedge_trimming()
    {
        return view('site.hedge_trimming');
    }
    public function mulching_garden_maintenance_planting()
    {
        return view('site.mulching-garden-maintenance-planting');
    }
    public function snow_plowing()
    {
        return view('site.snow_plowing');
    }
    public function contact_us()
    {
        return view('site.contact_us');
    }
}
