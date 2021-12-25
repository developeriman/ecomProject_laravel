<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use File; 

class CategoryController extends Controller
{
    public function index(){
        $category =Category::all();
        return view('admin.category.index',['category'=>$category]);
    }
     public function add(){
        return view('admin.category.add');
    }
    public function insert(Request $request){
        $category =new Category(); 
        $request->validate([
                'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            ]);
        if($request->hasFile('image')){
            $file =$request->file('image');
            $ext =$file->getClientOriginalExtension();
            $fileName =time().'.'.$ext; 
            $file->move('assets/upload/category',$fileName);
            $category->image =$fileName; 
        }
            $category->name =$request->input('name');
            $category->slug =$request->input('slug');
            $category->description =$request->input('description');
            $category->status =$request->input('status')==TRUE ?'1':'0';
            $category->popular =$request->input('popular')==TRUE ?'1':'0';
            $category->meta_title =$request->input('meta_title');
            $category->meta_keywords =$request->input('meta_keywords');
            $category->meta_descrip =$request->input('meta_descrip');
            $category->save();
        return redirect('/dashboard')->with('status','Category added successfully');   

    }
    public function edit($id){
        $category =Category::find($id);
        return view('admin.category.edit',['category'=>$category]);
    }
    public function update(Request $request,$id){
        $category =Category::find($id);

        if($request->hasFile('image')){
            $path ='assets/upload/category/'.$category->image;
            if(File::exists($path)){
                File::delete($path);
            } 

            $file =$request->file('image');
            $ext =$file->getClientOriginalExtension();
            $fileName =time().'.'.$ext; 
            $file->move('assets/upload/category',$fileName);
            $category->image =$fileName; 
        }
            $category->name =$request->input('name');
            $category->slug =$request->input('slug');
            $category->description =$request->input('description');
            $category->status =$request->input('status')==TRUE ?'1':'0';
            $category->popular =$request->input('popular')==TRUE ?'1':'0';
            $category->meta_title =$request->input('meta_title');
            $category->meta_keywords =$request->input('meta_keywords');
            $category->meta_descrip =$request->input('meta_descrip');
            $category->update();
            return redirect('dashboard')->with('status','Category Updated Successfully');
    }
    public function destroy($id){
           $category =Category::find($id);
           if($category->image){
                $path ='assets/upload/category/'.$category->image;
                if(File::exists($path)){
                    File::delete($path);
                } 
           }
           $category->delete();
    return redirect('dashboard')->with('status','Category Deleted Successfully');

         
    }
} 
