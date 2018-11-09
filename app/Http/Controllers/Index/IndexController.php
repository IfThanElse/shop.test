<?php
/**
 * Created by PhpStorm.
 * User: HeadHunter
 * Date: 08.11.2018
 * Time: 16:56
 */

namespace App\Http\Controllers\Index;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use yii\web\View;
use Illuminate\http\Request;
use App\Product;

class IndexController extends Controller
{

    static function categoryViewer($cat = null, Request $request)
    {
        $minPrice = $request->input('min_price') ? $request->input('min_price') : null;
        $maxPrice = $request->input('max_price') ? $request->input('max_price') : null;
        $color = $request->input('color') ? $request->input('color') : [];

        $products = Product::where(function($query) use ($cat, $minPrice, $maxPrice, $color) {
            if($cat) {
                $category = DB::table('category')->where('title', $cat)->get();
                $query->where('catId', $category[0]->id);
            }

            if(isset($minPrice)){
                $query-> where('price', '>=', $minPrice);
            }

            if(isset($maxPrice)){
                $query-> where('price', '<=', $maxPrice);
            }

            if(count($color) > 0) {
                $query-> whereIn('color', $color);
            }

        })->get();

        return view('category', ['products' => $products]);
    }
}