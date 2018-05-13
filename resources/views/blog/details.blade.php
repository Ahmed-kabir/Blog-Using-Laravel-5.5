@extends('frontend.master')
@section('kabir')

<div id="main">

                    <article class="post">
                        

                        <div class="primary">

                            <h2><a href="index.html">{{$blogs->blog_name}}</a></h2>

                            <p class="post-info"><span>Author</span> <a href="index.html"></a><a href="index.html">{{$blogs->author_name}}</a></p>

                            <div class="image-section">
                                <img src="{{asset($blogs->blog_image)}}" alt="image post" height="206" width="498"/>
                            </div>

                            <p>
                                {{asset($blogs->blog_Long_description)}}
                            </p>

                            

                            

                        </div>
                           

                        <aside>

                            <p class="dateinfo">JAN<span>31</span></p>

                            <div class="post-meta">
                                <h4>Post Info</h4>
                                <ul>
                                    <li class="user"><a href="#">Erwin</a></li>
                                    <li class="time"><a href="#">12:30 PM</a></li>
                                    <li class="comment"><a href="#">2 Comments</a></li>
                                    <li class="permalink"><a href="#">Permalink</a></li>
                                </ul>
                            </div>

                        </aside>
                             

                    </article>

                    

                    <!-- /main -->
                </div>

@endsection