<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Categoria;

class CategoriaController extends Controller
{
    public function getCategoria(){
        
        return response()->json( Categoria::all(),200);
    }

    public function getCategoriaId( $id ){

        $categoria = Categoria::find( $id );

        if( is_null( $categoria ) ){

            return response()->json(["mensaje" => "Registro no encontrado"],404);
        }
        else{

            return response()->json( $categoria,200);
        }
    }

    public function insertCategoria( Request $request ){

        $categoria = Categoria::create($request->all());

        return response()->json( $categoria,200);
    }

    public function updateCategoria( Request $request, $id ){

        $categoria = Categoria::find( $id );

        if( is_null( $categoria ) ){

            return response()->json(["mensaje" => "Registro no encontrado"],404);
        }
        else{

            $categoria->update( $request->all() );
            return response()->json( $categoria,200);
        }
    }

    public function deleteCategoria( $id ){

        $categoria = Categoria::find( $id );

        if( is_null( $categoria ) ){

            return response()->json(["mensaje" => "Registro no encontrado"],404);
        }
        else{

            $categoria->delete();
            return response()->json( ["mensaje" => "Registro eliminado"],200);
        }
    }
}
