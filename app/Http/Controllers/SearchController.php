<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Session;
use App\Models\Product;

class SearchController extends Controller
{
    public function index(Product $product)
    {
        return view('search.index')
            ->with('products', $product->paginate(30));
    }
    
    
    public function result(Request $request)
    {
        $search_raw = $request->input('search_input');
        Session::put('search_input', $search_raw);
        
        //全角or半角スペース区切りのワードをand検索
        $search_array = preg_split('/\s+/u', $search_raw);
        $query = Product::query();
        foreach ($search_array as $search) {
            $query->where('name', 'LIKE', "%${search}%");
        }
        
        return view('search.result', [
            'searched_products' => $query->paginate(30),
            'search' => $search_raw,
        ]);
    }
    
    
    public function result_get(Request $request, Product $product)
    {
        $search = Session::get('search_input');
        
        return view('search.result', [
                'searched_products' => $product->paginate(30),
                'search' => $search,
        ]);
    }
}
