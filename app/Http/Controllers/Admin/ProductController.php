<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;
use Illuminate\Support\Facades\DB;
use File; 

class ProductController extends Controller
{
    public function index(){
        $product =Product::all();
        return view('admin.product.index',['product'=>$product]);

        // $product = DB::table('products')
        //     ->join('categories', 'products.cate_id', '=', 'categories.id')
        //     ->select('products.*','categories.*')->get();    

    }
    public function add(){
        $category =Category::all();
        return view('admin.product.add',['category'=>$category]);
    }
    public function insert(Request $request){
         $product= new Product();
         $request->validate([
                'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            ]);
        if($request->hasFile('image')){
            $file =$request->file('image');
            $ext =$file->getClientOriginalExtension();
            $fileName =time().'.'.$ext; 
            $file->move('assets/upload/products',$fileName);
            $product->image =$fileName; 
        }
            $product->cate_id =$request->input('cate_id');
            $product->name =$request->input('name');
            $product->slug =$request->input('slug');
            $product->small_description =$request->input('small_description');
            $product->description =$request->input('description');
            $product->original_price =$request->input('original_price');
            $product->selling_price =$request->input('selling_price');
            $product->qty =$request->input('qty');
            $product->tax =$request->input('tax');
            $product->status =$request->input('status')==TRUE ?'1':'0';
            $product->trending =$request->input('trending')==TRUE ?'1':'0';
            $product->meta_title =$request->input('meta_title');
            $product->meta_keywords =$request->input('meta_keywords');
            $product->meta_description =$request->input('meta_description');
            $product->save();
            return redirect('dashboard')->with('status','Product Updated Successfully');
    }
    public function edit($id){

        $product =Product::find($id);
        return view('admin.product.edit',['product'=>$product]);
    }

    public function updates(Request $request ,$id){
        $product= Product::find($id);
         $request->validate([
                'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            ]);
        if($request->hasFile('image')){
                $path ='assets/upload/products/'.$product->image;
                if(File::exists($path)){
                    File::delete($path);
                } 
            $file =$request->file('image');
            $ext =$file->getClientOriginalExtension();
            $fileName =time().'.'.$ext; 
            $file->move('assets/upload/products',$fileName);
            $product->image =$fileName;
        }
            $product->cate_id =$request->input('cate_id');
            $product->name =$request->input('name');
            $product->slug =$request->input('slug');
            $product->small_description =$request->input('small_description');
            $product->description =$request->input('description');
            $product->original_price =$request->input('original_price');
            $product->selling_price =$request->input('selling_price');
            $product->qty =$request->input('qty');
            $product->tax =$request->input('tax');
            $product->status =$request->input('status')==TRUE ?'1':'0';
            $product->trending =$request->input('trending')==TRUE ?'1':'0';
            $product->meta_title =$request->input('meta_title');
            $product->meta_keywords =$request->input('meta_keywords');
            $product->meta_description =$request->input('meta_description');
            $product->update();
            return redirect('dashboard')->with('status','Product Added Successfully');
    }
    public function destroy($id){
            $product =Product::find($id);
            if($product->image){
            $path ='assets/upload/products/'.$product->image;
            if(File::exists($path)){
                File::delete($path);
            } 
           }
           $product->delete();
           return redirect('dashboard')->with('status','product Deleted Successfully');
    }
 
    
}
