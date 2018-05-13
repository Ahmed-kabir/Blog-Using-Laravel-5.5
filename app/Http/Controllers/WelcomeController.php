<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Blog;
use App\Category;

class WelcomeController extends Controller
{
    public function index(){
        $blog= Blog::where('publication_status',1)->paginate(3);
        //$golpo=Blog::paginate(2);
        return view('frontend.maincontent',['blogs'=>$blog]);
    }
    public function blog_detail($id){
        $blog= Blog::where('id',$id)->first();
        return view('blog.details',['blogs'=>$blog]);
    }
}
