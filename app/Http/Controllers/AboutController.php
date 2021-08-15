<?php

namespace App\Http\Controllers;

use App\Models\About;
use Illuminate\Database\QueryException;
use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;

class AboutController extends Controller {

    public function addAboutList() {
        $addAboutShowList = About::first();
        return response()->json( $addAboutShowList );
    }
    public function addToAbout( Request $request ) {
        try {
            $this->validate( $request, [
                'about_title'       => 'required|string|max:255',
                'about_subtitle'    => 'nullable|string|max:255',
                'about_description' => 'nullable|string|max:255',
                'about_image'       => 'sometimes|image|mimes:jpeg,jpg,png|max:2048',
            ] );
            $addToAboutSection = About::first();
            if ( $request->hasFile( 'about_image' ) ) {
                $about_imge_name = time() . '_' . uniqid() . '.' . $request->about_image->getClientOriginalExtension();
                $request->about_image->move( public_path( 'storage/about' ), $about_imge_name );
                $about_image = '/storage/about/' . $about_imge_name;
            }
            $addToAboutSection->update( [
                'about_title'       => $request->about_title,
                'about_subtitle'    => $request->about_subtitle,
                'about_description' => $request->about_description,
                'about_image'       => $about_image ?? $addToAboutSection->about_image,
            ] );
            return response()->json( 'success', 200 );
        } catch ( ValidationException $exception ) {
            return response()->json( $exception->errors(), 422 );
        } catch ( QueryException | \Exception $ex ) {
            Log::info( 'update error', [$ex] );
            return response()->json( [], 406 );
        }
    }
}
