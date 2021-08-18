<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Database\QueryException;
use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;

class ServiceController extends Controller {
    public function addToService( Request $request ) {
        try {
            $this->validate( $request, [
                'services_title'       => 'required|string|max:255',
                'services_description' => 'required|string|max:255',
                'services_number'      => 'required|string|max:255',
                'services_icon'        => 'required|string|max:255',

            ] );
            $serviceCreate = Service::create( [
                'services_title'       => $request->services_title,
                'services_description' => $request->services_description,
                'services_number'      => $request->services_number,
                'services_icon'        => $request->services_icon,
            ] );
            return response()->json( 'success', 200 );
        } catch ( ValidationException $exception ) {
            return response()->json( $exception->errors(), 422 );
        } catch ( QueryException | \Exception $ex ) {
            return response()->json( [], 406 );
        }
    }
}
