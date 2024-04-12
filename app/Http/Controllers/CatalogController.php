<?php

namespace App\Http\Controllers;
use App\Models\Product;
use Request;

use DB;

use mysql_xdevapi\Table;

class CatalogController extends Controller
{

    public function home()
    {
        return redirect('catalog');
    }

    public function index()
    {
        $product = Product::all();
        return view('pages/catalog')->with(['product' => $product]);
    }

    public function list()
    {
        $product = Product::all();
        return view('pages/catalog')->with(['product' => $product]);
    }

    public function find(){

        if (isset($_GET['submit'])) {

            $title = Request::get('title');
            $description = Request::get('description');
            $productType = Request::get('type');


            $data = DB::table('product');

            if($productType != ''){
                $data = $data->where('product.type', $productType);
            }

            if($title != ''){ //select from title
                $data = $data->where('product.title', $title);
            }

            if($description != ''){
                $data = $data->where('product.description', $description);
            }

            if (($productType) == '' and ($title) == '' and ($description) == ''){
                $product = Product::all();
                return view('pages/catalog')->with(['product' => $product]);

            }else{
                $data = $data->get();
                return view('pages/catalog')->with(['product' => $data]);
            }
        }
    }

    public function search(\Illuminate\Http\Request $request){ //full text search
        $searchData = $request->searchData;
        $search = $request->input('searchData');

        if ($search !== null) {
            $words = explode(' ', $search);
            $ts_query = implode(' | ', $words);
            $items = Product::whereRaw('search @@ to_tsquery(?)', [$ts_query])
                ->orderByRaw('ts_rank(search, to_tsquery(?)) DESC', [$ts_query])->get();
        }
        else{
            $items = Product::all();
        }
        return view('pages/catalog', ['product' => $items]);
    }

    public function openProduct($id){

        $product = Product::find($id);
        $reviews = DB::table('review')->where('product_id', '=', $id)->get();
        return view('pages/product-details', compact('product', 'reviews'));
    }

    public function getProduct($id){
        $product = Product::find($id);
        return view('pages/add_review', ['product' => $product]);
    }
}