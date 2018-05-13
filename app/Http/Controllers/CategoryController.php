<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;

class CategoryController extends Controller
{
    public function index(){
        return view('category.add_category');
    }
    public function save_category(Request $request){
        $category=new Category();
        $category->category_name=$request->category_name;
        $category->category_description=$request->category_description;
        $category->publication_status=$request->publication_status;
        $category->save();
        return back()->with('message','data saved successfully');
    }
    public function manage_category(){
        $category= Category::all();
        return view('category.manage_category',['categories'=>$category]);
    }
    public function edit_category($id){
        $category= Category::where('id',$id)->first();
    return view('category.edit_category',['categories'=>$category]);
    }
    public function update_category(Request $request){
        $category= Category::find($request->categoryId);
        $category->category_name=$request->category_name;
        $category->category_description=$request->category_description;
        $category->publication_status=$request->publication_status;
        $category->save();
        return redirect('/manage/category')->with('message','data updated successfully');
    }
    public function delete_category($id){
    $category= Category::find($id);
    $category->delete();
    return redirect('manage/category')->with('message','dala deleted successfully');
    }

}
