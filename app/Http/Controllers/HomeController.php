<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\Fservice;
use App\Models\Service;

class HomeController extends Controller {
    public function showServiceList() {
        $showServiceList  = Fservice::get( ['id', 'service_title', 'service_description', 'service_image'] );
        $getaboutListShow = About::first();
        $getServicesList  = Service::get( ['id', 'services_title', 'services_description', 'services_number', 'services_icon'] );
        return response()->json( ['getservices' => $getServicesList, 'services' => $showServiceList, 'abouts' => $getaboutListShow], 200 );
    }

    // public function search( Request $request ) {
    //     $search = $request->query( 'category_name' );
    //     if ( $search ) {
    //         $search  = $this->removeSpecialChar( $search );
    //         $contact = Contact::select( '*' )
    //             ->with( ['category' => function ( $category ) use ( $search ) {
    //                 $category = $category->where( 'cat_name', 'like', "$search%" );
    //             }] )->paginate();
    //         return response()->json( ['contacts' => $contact], 200 );
    //     }
    //     return response()->json( ['contacts' => []], 200 );

    // }

    // private function removeSpecialChar( $str ) {
    //     return str_replace( [';', 'drop', 'truncate', 'alter'], '', urldecode( $str ) );
    // }
}
