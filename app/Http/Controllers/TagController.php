<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Tag;

class TagController extends Controller
{
    public function index(){
        return view('tag.add_tag');
    }
    public function save_tag(Request $request){
        $tag=new Tag();
        $tag->tag_name=$request->tag_name;
        $tag->tag_description=$request->tag_description;
        $tag->publication_status=$request->publication_status;
        $tag->save();
        return back()->with('message','data seved successfully');
        
    }
    public function manage_tag(){
        $tag= Tag::all();
        return view('tag.manage_tag',['tags'=>$tag]);
    }
    public function edit_tag($id){
         $tag= Tag::where('id',$id)->first();
    return view('tag.edit_tag',['tags'=>$tag]);
    }
    public function update_tag(Request $request){
         $tag= Tag::find($request->tagId);
        $tag->tag_name=$request->tag_name;
        $tag->tag_description=$request->tag_description;
        $tag->publication_status=$request->publication_status;
        $tag->save();
        return redirect('/manage/tag')->with('message','data updated successfully');
    }
    public function delete_tag($id){
        $tag= Tag::find($id);
        $tag->delete();
        return redirect('manage/tag')->with('mesage','data delted successully');
    }
}
