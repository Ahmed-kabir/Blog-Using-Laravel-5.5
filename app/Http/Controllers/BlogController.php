<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Tag;
use App\Category;
use App\Blog;
use DB;

class BlogController extends Controller
{
   
   public function index(){
        $tag= Tag::where('publication_status',1)->get();
        $category= Category::where('publication_status',1)->get();
        return view('blog.add_blog',['tags'=>$tag,'categories'=>$category]);
    }
    public function save_blog(Request $request){
    $image=$request->file('blog_image');
    $name=$image->getClientOriginalName();
    $path='public/productimage/';
    
    $image->move($path,$name);
    $imageurl=$path.$name;
    $blog=new Blog();
    $blog->blog_name=$request->blog_name;
    $blog->author_name=$request->author_name;
    $blog->categoryId=$request->categoryId;
    $blog->tagId=$request->tagId;
    $blog->blog_short_description=$request->blog_short_description;
    $blog->blog_Long_description=$request->blog_Long_description;
    $blog->blog_image=$imageurl;
    $blog->publication_status=$request->publication_status;
    $blog->save();
    return back()->with('message','blog save successfully');
    }
    public function manage_blog(){
        //$blog= Blog::where('publication_status',1)->get();
        $blog=DB::table('blogs')
                ->join('categories','blogs.categoryId','=','categories.id')
                ->join('tags','blogs.tagId','=','tags.id')
                ->select('blogs.id','blogs.blog_name','blogs.author_name','categories.category_name','tags.tag_name','blogs.publication_status')
                ->get();
        return view('blog.manage_blog',['blogs'=>$blog]);
    }
    public function edit_blog($id){
       $category= Category::where('publication_status',1)->get();
       $tag= Tag::where('publication_status',1)->get();
       $blog= Blog::where('id',$id)->first();
       return view('blog.edit_blog',['categories'=>$category,'tags'=>$tag,'blogs'=>$blog]);
    }
    public function update_blog(Request $request){
        $imageurl=$this->chkimage($request);
        $blog=new Blog();
       
        $blog->blog_name=$request->blog_name;
        $blog->author_name=$request->author_name;
        $blog->categoryId=$request->categoryId;
        $blog->tagId=$request->tagId;
        $blog->blog_short_description=$request->blog_short_description;
        $blog->blog_Long_description=$request->blog_Long_description;
         $blog->blog_image=$imageurl;
        $blog->publication_status=$request->publication_status;
        
        $blog->save();
        return redirect('manage/blog')->with('message','data updatesd successfully');
        
    }
    private function chkimage($request){
       
        $blogbyid= Blog::where('id',$request->blogId)->first();
        $image=$request->file('blog_image');
        if($image){
        unlink($blogbyid->blog_image);
        $name=$image->getClientOriginalName();
        $path='public/productimage/';
        
        $image->move($path,$name);
        $imageurl=$path.$name;
        
        }
        else{
            $imageurl=$blogbyid->blog_image;
            
        }
       return $imageurl;
        
    }
    public function delete_blog($id){
       $blog=Blog::find($id); 
       $blog->delete();
       return back()->with('message','data deleted successfully');
    }
}
