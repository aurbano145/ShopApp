<?php

namespace App\Http\Controllers;

use App\Models\Clothes;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\Auth;

class AjaxClothesController extends Controller {

    const ITEMS_PER_PAGE = 10;
    const ORDER_BY = 'clothes.name';
    const ORDER_TYPE = 'asc';

    function index(Request $request) {
        return view('ajax.index');
    }
    
    function fetchData(Request $request) {
        //consulta, ordenación y tipo de ordenación
        sleep(1);
        $q = $request->input('q', '');
        $orderby = $request->input('orderby', 'clothes.name');
        $ordertype = $request->input('ordertype', 'asc');
        
        //construcción de la consulta
        $clothes = DB::table('clothes')
                    ->join('genres', 'genres.id', '=', 'clothes.idgenre')
                    ->join('categories', 'categories.id', '=', 'clothes.idcategory')
                    ->join('brands', 'brands.id', '=', 'clothes.idbrand')
                    ->select('clothes.*',
                                'genres.name as genre',
                                'categories.name as category', 
                                'brands.name as brand');

        //agregando condición a la consulta, si la hay
        if($q != '') {
            $clothes = $clothes->where('clothes.name', 'like', '%' . $q . '%')
                            ->orWhere('genres.name', 'like', '%' . $q . '%')
                            ->orWhere('categories.name', 'like', '%' . $q . '%')
                            ->orWhere('brands.name', 'like', '%' . $q . '%');
        }

        //agregando el orden a la consulta
        $clothes = $clothes->orderBy($orderby, $ordertype);
        if($orderby != self::ORDER_BY) {
            $clothes = $clothes->orderBy(self::ORDER_BY, self::ORDER_TYPE);
        }

        //ejecutar la consulta, usando la paginación
        $clotheses = $clothes->paginate(self::ITEMS_PER_PAGE)->withQueryString();
        
        return response()->json([
            'clotheses' => $clotheses,
            'csrf' => csrf_token(),
            'user' => Auth::user(),
        ], 200);
    }
}