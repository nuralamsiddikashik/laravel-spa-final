<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\Fservice;

class HomeController extends Controller {
    public function showServiceList() {
        $showServiceList  = Fservice::get( ['id', 'service_title', 'service_description', 'service_image'] );
        $getaboutListShow = About::first();
        return response()->json( ['services' => $showServiceList, 'abouts' => $getaboutListShow], 200 );
    }

}
