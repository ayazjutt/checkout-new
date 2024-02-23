<?php

namespace App\Http\Controllers;

use App\Models\Country;
use App\Models\Service;
use App\Models\State;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;

    public function index(Request $request)
    {
        $country_code = $request->query('country');
        $state_name = $request->query('state');
        $service_id = $request->query('service');

        $countries = Country::where('active_jurisdiction', true)->orderBy('name', 'asc')->get();

        $country = null;
        if (!empty($country_code)) {
            foreach ($countries as $countryObj)
                if ($countryObj->code === $country_code) $country = $countryObj;
        }

        $states = null;
        if ($country && $country->show_states)
            $states = State::where('country_id', $country->id)->orderby('name', 'asc')->get();

        $state = null;
        if (!empty($states))
            foreach ($states as $stateObj)
                if ($stateObj->name == $state_name)
                    $state = $stateObj;


        $services = null;
        if ($country)
            $services = Service::where('country_id', $country->id)->orderby('name', 'asc')->get();

        return view('welcome2', compact('countries', 'states', 'services', 'country', 'state'));
    }
}
