      @extends('layouts.app')
      @section('form-data')
       <div class="row">
            <div class="col-md-6 col-sm-6 col-xs-12">
               <div class="panel panel-info">
                        <div class="panel-heading">
                          EDIT POST
                        </div>
                        <div class="panel-body">
                            <form role="form" action="{{url('perform/update')}}" method="POST">
                                 @csrf
                                        <div class="form-group">
                                            <label>Post Title</label>
                                            <input class="form-control" type="text"  name="title" value="{{$posts->title}}" />
                                            <input type="hidden" name="id" value="{{$posts->id}}">
                                            <p class="help-block">your post title.</p>
                                        </div>
                                 <div class="form-group">
                                            <label>Tags</label>
                                            <input class="form-control" type="text" name="tags" value="{{$posts->tags}}" />
                                     <p class="help-block">Post Tags.</p>
                                        </div>
                                            <div class="form-group">
                                            <label>Contents</label>
                                            <textarea name="contents" class="form-control" rows="3">{{$posts->content}}</textarea>
                                        </div>
                                  
                                 
                                        <input type="submit"  class="btn btn-info" value="update"> 

                                    </form>
                            </div>
                        </div>

                        @endsection