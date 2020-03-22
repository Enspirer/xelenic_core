@extends('backend.layouts.app')

@section('title', app_name() . ' | ' . __('strings.backend.dashboard.title'))
<script src="https://cdn.ckeditor.com/4.14.0/standard/ckeditor.js"></script>
<script>tinymce.init({selector:'textarea'});</script>
@section('content')
    <a href="{{route('admin.blog')}}" class="btn btn-primary pull-right">Return Back</a> <br><br>

    <div class="card">
        <form action="{{route('admin.create')}}" method="post" enctype="multipart/form-data">
            {{csrf_field()}}
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Name</label>
                            <input type="text" class="form-control" name="blog_title" value="{{$blog_details->blog_title}}">
                            <input type="hidden" class="form-control" name="blog_id" value="{{$blog_details->id}}">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Slug</label>
                            <input type="text" class="form-control" name="slug" value="{{$blog_details->slug}}">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Description</label>
                            <textarea type="text" class="form-control" name="description">{{$blog_details->description}}</textarea>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>File</label>
                            <input type="file" class="form-control-file" name="thumbs_img" value="{{$blog_details->thums_img}}">
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <textarea id="editor" class="form-control" name="blog_body">{{$blog_details->body}}</textarea>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Save changes</button>
            </div>
        </form>

    </div>





    <script>
        CKEDITOR.replace('blog_body', {
            filebrowserUploadUrl: "{{route('admin.upload_images', ['_token' => csrf_token() ])}}",
            filebrowserUploadMethod: 'form'
        });
    </script>
@endsection


