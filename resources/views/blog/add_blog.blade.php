@extends('admin.dashboard')
@section('main')
<head>
 <h3 class="text-center text-success"></h3>
</head>

 
<body>
   
    
  {!!Form::open(['url'=>'/save/blog','method'=>'POST','enctype'=>'multipart/form-data'])!!}
  
  <h3 class="text-success text-center">{{Session::get('message')}}</h3>
 
        <div class="form-group">
            <label for="product">Blog Name</label>
            <input id="product_name" name="blog_name" class="form-control" type="text">
        </div>
  
        <div class="form-group">
            <label for="product">Author Name</label>
            <input id="product_price" name="author_name" class="form-control" type="text">
        </div>
  
        <div class="form-group">
            <label for="status">Category Name</label>
            <select  name="categoryId" class="form-control">
                <option>Select Category Name</option>
               @foreach ($categories as $category) 
                <option value="{{$category->id}}">{{$category->category_name}}</option>
                @endforeach
            </select>
        </div>
  
        <div class="form-group">
            <label for="status">Tag Name</label>
            <select  name="tagId" class="form-control">
                <option>Select tag Name</option>
                @foreach($tags as $tag)
                <option value="{{$tag->id}}">{{$tag->tag_name}}</option>
                @endforeach
            </select>
        </div>
        
        <div class="form-group">
            <label for="product">Blog Short Description</label>
            <textarea id="blog_short_description" name="blog_short_description" class="form-control" rows="3"></textarea>
        </div>
  
        <div class="form-group">
            <label for="product">Blog Long Description</label>
            <textarea id="blog_Long_description" name="blog_Long_description" class="form-control" rows="5"></textarea>
        </div>
        <div class="form-group">
            <label for="productimage">Blog Image</label>
            <input id="product_image" name="blog_image" class="form-control" type="file" accept="image/*">
        </div>
        <div class="form-group">
            <label for="status">Publication status</label>
            <select id="publication_status" name="publication_status" class="form-control">
                <option value="">Select one option</option>
                <option value="1">Published</option>
                <option value="0">Unpublished</option>
            </select>
        </div>
        
        <button type="submit" class="btn btn-primary">Save blog Info</button>
         {!!Form::close()!!}
      
</body>

</html>
@endsection