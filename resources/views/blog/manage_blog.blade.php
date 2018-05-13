@extends('admin.dashboard')
@section('main')
</hr>

<h3 class="text-center text-success">{{Session::get('message')}}</h3>
</hr>
  <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            DataTables
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                                <thead>
                                    <tr>
                                        <th>Id</th>
                                        <th>Blog Name</th>
                                        <th>Author name</th>
                                        <th>Category Name</th>
                                        <th>Tag Name</th>
                                        <th>Publication Status</th>
                                        
                                       <th>Actions</th>
                                       
                                    </tr> 
                  </thead>
                  <tbody>
                      
                      @foreach ($blogs as $blog)  
                      <tr>
                           
                            
                          <th scope="row">{{$blog->id}}</th>
                          <td>{{$blog->blog_name}}</td>
                          <td>{{$blog->author_name}}</td>
                          <td>{{$blog->category_name}}</td>
                          <td>{{$blog->tag_name}}</td>
                          
                          
                          
                           
                          
                           
                            
                            
                            
                            <td>{{$blog->publication_status ==1?'Published': 'UnPublished'}}</td>
                         
                         <td>
                             <a href="{{url('/blog_view/'.$blog->id)}}" class="btn btn-info"title="blog View">
                                <span class="glyphicon glyphicon-info-sign"></span></a>
                                <a href="{{url('/edit/blog/'.$blog->id)}}" class="btn btn-success"title="blog update">
                                <span class="glyphicon glyphicon-edit"></span></a>
                                <a href="{{url('/delete/blog/'.$blog->id)}}" class="btn btn-danger"title="blog delete" onclick="return confirm('Are You sure to delete this');">

                                <span class="glyphicon glyphicon-trash"></span></a>
                               
                        </td>



                          </tr>
                     
                          
                       @endforeach
                        </tbody>
                </table>
            
              </div>
              <div class="panel-footer">
                <div class="row">
                  <div class="col col-xs-4">Page 1 of 5
                  </div>
                  <div class="col col-xs-8">
                    <ul class="pagination hidden-xs pull-right">
                      <li><a href="#">1</a></li>
                      <li><a href="#">2</a></li>
                      <li><a href="#">3</a></li>
                      <li><a href="#">4</a></li>
                      <li><a href="#">5</a></li>
                    </ul>
                    <ul class="pagination visible-xs pull-right">
                        <li><a href="#">«</a></li>
                        <li><a href="#">»</a></li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>

</div></div></div>
@endsection