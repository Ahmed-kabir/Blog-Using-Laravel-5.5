@extends('frontend.master')
@section('kabir')
<head>
    <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>

<div id="main">

    <article class="post">
        <?php $i = 1; ?>
        @foreach($blogs as $blog)

        <div class="primary">

            <h2><a href="index.html">{{$blog->blog_name}}</a></h2>

            <p class="post-info"><span>Author</span> <a href="index.html"></a><a href="index.html">{{$blog->author_name}}</a></p>

            <div class="image-section">
                <img src="{{asset($blog->blog_image)}}" alt="image post" height="206" width="498"/>
            </div>

            <p>
                {{asset($blog->blog_short_description)}}
            </p>



            <p><a class="more" href="{{url('/blog-detail/'.$blog->id)}}">Continue Reading &raquo;</a></p>
            

        </div>
        


        <aside>

            <p class="dateinfo">JAN<span>31</span></p>

            <div class="post-meta">
                <h4>Post Info</h4>
                <ul>
                    <li class="user"><a href="#">{{$blog->author_name}}</a></li>
                    <li class="time"><a href="#">12:30 PM</a></li>
                    <li class="comment"><a href="#">2 Comments</a></li>
                    <li class="permalink"><a href="#">Permalink</a></li>
                </ul>
            </div>

        </aside>
        @endforeach
        <p></p>
  



    </article>
<ul class="pagination pagination">
    {{$blogs->links()}}
<!--    <li><a href="#">1</a></li>
    <li><a href="#">2</a></li>
    <li><a href="#">3</a></li>
    <li><a href="#">4</a></li>
    <li><a href="#">5</a></li>-->
  </ul>




    <!-- /main -->

</div>

 



@endsection