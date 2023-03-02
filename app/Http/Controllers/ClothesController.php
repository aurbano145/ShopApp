<?php

namespace App\Http\Controllers;

use App\Models\Clothes;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Pagination\Paginator;
use App\Classes\PaginationTool;
use App\Classes\NewPaginationTool;

class ClothesController extends Controller {
    const ITEMS_PER_PAGE = 10;
    const ORDER_BY = 'clothes.name';
    const ORDER_TYPE = 'asc';

    private function getOrder($orderArray, $order, $default) {
        $value = array_search($order, $orderArray);
        if(!$value) {
            return $default;
        }
        return $value;
    }

    private function getOrderBy($order) {
        return $this->getOrder($this->getOrderBys(), $order, self::ORDER_BY);
    }

    private function getOrderBys() {
        return [
            'clothes.name'           => 'b1',
            'genres.name'       => 'b2',
            'categories.name'       => 'b3',
            'brands.name'       => 'b4',
        ];
    }

    private function getOrderType($order) {
        return $this->getOrder($this->getOrderTypes(), $order, self::ORDER_TYPE);
    }

    private function getOrderTypes() {
        return [
            'asc'  => 't1',
            'desc' => 't2',
        ];
    }

    private function getOrderUrls($oBy, $oType, $q, $route) {
        $urls = [];
        $orderBys = $this->getOrderBys();
        $orderTypes = $this->getOrderTypes();
        foreach($orderBys as $indexBy => $by) {
            foreach($orderTypes as $indexType => $type) {
                if($oBy == $indexBy && $oType == $indexType) {
                    $urls[$indexBy][$indexType] = url()->full() . '#';
                } else {
                    $urls[$indexBy][$indexType] = route($route, [
                                                            'orderby'   => $by,
                                                            'ordertype' => $type,
                                                            'q'         => $q]);
                }
            }
        }
        return $urls;
    }
    
    function index(Request $request) {
        //consulta, ordenación y tipo de ordenación
        $q = $request->input('q', '');
        $orderby = $this->getOrderBy($request->input('orderby'));
        $ordertype = $this->getOrderType($request->input('ordertype'));
        
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
        
        //dd($clotheses);
        return view('clothes.simple', ['order'  => $this->getOrderUrls($orderby, $ordertype, $q, 'clothes.simple'),
                                    'q'     => $q,
                                    'url'   => url('clothes'),
                                    'clotheses' => $clotheses]);
    }
    
    public function show(Clothes $clothes) {
        return view('clothes.simple-single', ['clothes' => $clothes]);
    }
}
