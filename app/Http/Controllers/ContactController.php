<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller {

    public function addContact( Request $request ) {
        try {
            $this->validate( $request, [
                'name'    => 'required|string|max:255',
                'email'   => 'required|string|max:255',
                'phone'   => 'required|string|max:255',
                'website' => 'required|string|max:255',
                'message' => 'required|string|max:255',
            ] );
            $addToContact = Contact::create( [
                'name'    => $request->name,
                'email'   => $request->email,
                'phone'   => $request->phone,
                'website' => $request->website,
                'message' => $request->message,
            ] );
            return response()->json( 'success', 200 );
        } catch ( ValidationException $exception ) {
            return response()->json( $exception->errors(), 422 );
        } catch ( QueryException | \Exception $ex ) {
            return response()->json( [], 406 );
        }
    }
}
