<?php

namespace App\Http\Controllers;

use App\Models\Fservice;
use Illuminate\Database\QueryException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Validation\ValidationException;

class FserviceController extends Controller {

    public function showServiceListForHome() {
        $showServiceList = Fservice::get( ['id', 'service_title', 'service_description'] );
        return response()->json( $showServiceList, 200 );
    }

    public function addServiceForHomePage( Request $request ) {

        try {
            $this->validate( $request, [
                'service_title'       => 'required|string|max:255',
                'service_description' => 'required|string|max:255',
                'service_image'       => 'required|mimes:jpeg,png,jpg|max:2048',
            ] );
            if ( $request->hasFile( 'service_image' ) ) {
                $service_image_name = time() . '_' . uniqid() . '.' . $request->service_image->getClientOriginalExtension();
                $request->service_image->move( public_path( 'storage/service' ), $service_image_name );
                $service_image = '/storage/service/' . $service_image_name;
            }
            $serviceItem = Fservice::create( [
                'service_title'       => $request->service_title,
                'service_description' => $request->service_description,
                'service_image'       => $service_image,
            ] );
            return response()->json( 'success', 200 );
        } catch ( ValidationException $exception ) {
            return response()->json( $exception->errors(), 422 );
        } catch ( QueryException | \Exception $ex ) {
            return response()->json( [], 406 );
        }
    }

    public function editServiceItem( $id ) {
        $editServiceItemList = Fservice::findOrFail( $id );
        return response()->json( $editServiceItemList );
    }

    public function updateServiceList( Request $request, $id ) {
        try {

            $this->validate( $request, [
                'service_title'       => 'required|string|max:255',
                'service_description' => 'required|string|max:255',
                'service_image'       => 'sometimes|image|mimes:jpeg,jpg,png|max:2048',
            ] );
            $serviceListUpdate = Fservice::findOrFail( $id );
            if ( $request->hasFile( 'service_image' ) ) {
                $service_image_name = time() . '_' . uniqid() . '.' . $request->service_image->getClientOriginalExtension();
                $request->service_image->move( public_path( 'storage/service' ), $service_image_name );
                $service_image = '/storage/service/' . $service_image_name;
            }
            $serviceListUpdate->update( [
                'service_title'       => $request->service_title,
                'service_description' => $request->service_description,
                'service_image'       => $service_image ?? $serviceListUpdate->service_image,
            ] );
            return response()->json( $serviceListUpdate, 200 );
        } catch ( ValidationException $exception ) {
            return response()->json( $exception->errors(), 422 );
        } catch ( QueryException | \Exception $ex ) {
            Log::info( 'update error', [$ex] );
            return response()->json( [], 406 );
        }
    }

    public function serviceDelete( $id ) {
        $deleteServiceList = Fservice::findOrFail( $id );
        if ( $deleteServiceList ) {
            $serviceImage     = $deleteServiceList->service_image;
            $serviceImagePath = public_path( $serviceImage );
            if ( $serviceImage && file_exists( $serviceImagePath ) ) {
                unlink( $serviceImagePath );
            }
            $deleteServiceList->delete();
        }
        return response()->json( 'success delete' );
    }
}
