<?php

namespace App\Http\Controllers;

use App\Models\Fservice;

class HomeController extends Controller {
    public function showServiceList() {
        $showServiceList = Fservice::get( ['id', 'service_title', 'service_description', 'service_image'] );
        return response()->json( $showServiceList, 200 );
    }

}
