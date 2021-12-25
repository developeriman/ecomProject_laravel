<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;
use Illuminate\Support\Facades\DB;
use File; 

class FrontendController extends Controller
{
    public function index(){
            $featured_products =Product::where('trending','0')->take(15)->get();
            $trending_category =Category::where('popular','1')->take(15)->get();
            return view('admin.frontend.index',
            ['featured_products'=>$featured_products,'trending_category'=>$trending_category]);
    }
    
    public function category(){
        $category =Category::where('status','0')->get();
        return view('admin.frontend.category',['category'=>$category]);
    }

    public function viewcategory($slug){
        if(Category::where('slug',$slug)->exists()){
            $category=Category::where('slug',$slug)->first(); 
            $products =Product::where('cate_id',$category->id)->where('status',0)->get();
            return view('admin.frontend.products.index',['category'=>$category,'products'=>$products]);
        }
        else{
            return redirect('/dashboard')->with('status','slug doesnot exits');
        }
    }

    public function productview($cate_slug,$prod_slug)
    {
        if(Category::where('slug',$cate_slug)->exists())
        {
          if(Product::where('slug',$prod_slug)->exists())
          {
            $products =Product::where('slug',$prod_slug)->get();
         
            return view('admin.frontend.products.view',compact('products'));
           }  
          else{
             return redirect('/dashboard')->with('status','The link was broken');
            }
        }
         else{
             return redirect('/dashboard')->with('status','No such category founded');
        }
    }
}