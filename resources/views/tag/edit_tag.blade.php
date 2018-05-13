@extends('blog.dash')
@section('main')
</hr>
<div class="row">
<div class="col-lg-12">

</hr>
<div class="well">
<!--<form class="form-horizontal" action="" method="post" enctype="multipart/form-data">-->

  <h3 class="text-center text-success">{{Session::get('message')}}</h3>
{!!Form::open(['url'=>'/update/tag','method'=>'POST','class'=>'form-horizontal','name'=>'edittagForm'])!!}
  <div class="form-group">
<label for="" class="col-sm-2 control-label">category Name</label>
<div class="col-sm-10">
<input type="text" value="{{$tags->tag_name}}" class="form-control" name="tag_name">
<input type="hidden" value="{{$tags->id}}" class="form-control" name="tagId">

<span class="text-danger">{{$errors->has('categoryName')? $errors->first('categoryName'):''}}</span>
</div>
</div>

<div class="form-group">
<label for="" class="col-sm-2 control-label">Description</label>
<div class="col-sm-10">
<input type="text" value="{{$tags->tag_description}}" class="form-control" name="tag_description">
 <span class="text-danger">{{$errors->has('tag_description')? $errors->first('tag_description'):''}}</span>
</div>
</div>

<div class="form-group">
  <label for="sel1" class="col-sm-2 control-label" >Publication Status</label>
 <div class="col-sm-10">
  <select class="form-control" name="publication_status">
    <option>Select Publication Status</option>
    <option value="1">Publish</option>
    <option value="0">UnPublish</option>
  </select>
</div>
</div>


<div class="form-group">

<div class="col-sm-offset-2 col-sm-10">
<button type="submit" name="btn" class="btn btn-success btn-block">Update</button>
</div>
</div>
{!!Form::close()!!}

  
</div>
</div>
</div>
<script>
 document.forms['edittagForm'].elements['publication_status'].value={{$tags->publication_status}}


</script>
@endsection