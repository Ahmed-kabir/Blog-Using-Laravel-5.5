@extends('admin.dashboard')
@section('main')
<html>
<head>
 <h3 class="text-center text-success"></h3>
</head>

 
<body>
   
    
  {!!Form::open(['url'=>'/update/blog','method'=>'POST','enctype'=>'multipart/form-data','name'=>'ediproductForm'])!!}
  
  <h3 class="text-success text-center">{{Session::get('message')}}</h3>
 
        <div class="form-group">
            <label for="product">Blog Name</label>
            <input id="product_name" value="{{$blogs->blog_name}}" name="blog_name" class="form-control" type="text">
            <input id="productId" value="{{$blogs->id}}" name="blogId" class="form-control" type="hidden">
        </div>
  
        <div class="form-group">
            <label for="product">Author Name</label>
            <input id="product_name" value="{{$blogs->author_name}}" name="author_name" class="form-control" type="text">
            <input id="productId" value="{{$blogs->id}}" name="blogId" class="form-control" type="hidden">
        </div>
        <div class="form-group">
            <label for="product">Category Name</label>
            <select  name="categoryId" id="categoryId" class="form-control">
                <option>Select Category Name</option>
                @foreach($categories as $category)
                <option value="{{$category->id}}">{{$category->category_name}}</option>
                @endforeach
            </select>
        </div>
  
        <div class="form-group">
            <label for="status">tag Name</label>
            <select  name="tagId" class="form-control">
                <option>Select Tag Name</option>
                @foreach($tags as $tag)
                <option value="{{$tag->id}}">{{$tag->tag_name}}</option>
                @endforeach
            </select>
            </div>

            

        
        <div class="form-group">
            <label for="product">Blogct Short Description</label>
            <textarea class="form-control" id="product_short_description"  name="blog_short_description"  rows="3">{{$blogs->blog_short_description}}</textarea>
        </div>
  
        <div class="form-group">
            <label for="product Long Description">Blog Long Description</label>
            <textarea id="product_Long_description" value="" name="blog_Long_description" class="form-control" rows="5">{{$blogs->blog_Long_description}}</textarea>
        </div>
<!--        <div class="form-group">
            <label for="productimage">Blog Image</label>
            <input id="product_image" name="blog_image" class="form-control" type="file" accept="image/*">
            <img src="{{asset($blogs->product_image)}}" alt="{{$blogs->blog_name}}">
        </div>-->
        <div class="form-group">
            <label for="productimage">Blog Image</label>
            
            <th><img src="{{asset($blogs->blog_image)}}" width="200px" alt="{{$blogs->blog_name}}"</th>
            <input id="blog_image" name="blog_image" class="form-control" type="file" accept="image/*">
        </div>

        <div class="form-group">
            <label for="status">Publication status</label>
            <select id="publication_status" name="publication_status" class="form-control">
                <option value="">Select one option</option>
                <option value="1">Published</option>
                <option value="0">Unpublished</option>
            </select>
        </div>
        
        <button type="submit" class="btn btn-primary">Update Product Info</button>
         {!!Form::close()!!}
         
     
      
</body>
<script>
  document.forms['ediproductForm'].elements['publication_status'].value={{$blogs->publication_status}}
  document.forms['ediproductForm'].elements['categoryId'].value={{$category->id}}
  document.forms['ediproductForm'].elements['tagId'].value={{$tag->id}}

  


</script>

</html>
@endsection