 <div class="row">
                <div class="col-md-12">
                    <!-- Advanced Tables -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                             Post List
                             @if (session('status'))
                            <div class="alert alert-success">
                                {{ session('status') }}
                            </div>
                            @endif
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th>Post Title</th>
                                            <th>Tags</th>
                                            <th>Views</th>
                                            <th>Created at</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($all_posts as $post)
                                        <tr class="odd gradeX">
                                            <td>{{$post->title}}</td>
                                            <td>{{$post->tags}}</td>
                                            <td>10 Views</td>
                                            <td class="center">{{$post->created_at}}</td>
                                            <td class="center">
                                                
                                                <button class="btn btn-primary" data-toggle="modal" data-target="#myModal-{{$post->id}}"><i class="fa fa-eye "></i> View Post</button>

                                                <a href="edit/post/{{$post->id}}" class="btn btn-primary"><i class="fa fa-edit "></i> Edit</a>
                                            <a href="/delete/post/{{$post->id}}" class="btn btn-danger"><i class="fa fa-pencil"></i> Delete</a>



                                            </td>
                                        </tr>

                            <div class="modal fade" id="myModal-{{$post->id}}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                            <h4 class="modal-title" id="myModalLabel">{{$post->title}}</h4>
                                        </div>
                                        <div class="modal-body">
                                            {{$post->content}}
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                            <button type="button" class="btn btn-primary">Save changes</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                     <!-- End Modals-->
                                        @endforeach
                                      
                                    </tbody>
                                </table>
                            </div>
                            
                        </div>
                    </div>
                    <!--End Advanced Tables -->
                </div>
            </div>