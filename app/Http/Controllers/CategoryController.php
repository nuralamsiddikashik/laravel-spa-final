<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class CategoryController extends Controller {

    public function categoryList() {
        $categoriesList = Category::get();
        return response()->json( $categoriesList, 200 );
    }

    public function addCategory( Request $request ) {
        try {
            $this->validate( $request, [
                'cat_name' => 'required|string|max:255',
            ] );
            $addCategory = Category::create( [
                'cat_name' => $request->cat_name,
                'slug'     => Str::slug( $request->cat_name ),
            ] );
            return response()->json( 'success', 200 );
        } catch ( ValidationException $exception ) {
            return response()->json( $exception->errors(), 422 );
        } catch ( QueryException | \Exception $ex ) {
            return response()->json( [], 406 );
        }
    }
}
