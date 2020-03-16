@extends('backend.layouts.app')

@section('title', app_name() . ' | ' . __('strings.backend.dashboard.title'))
    @include('backend.dialogs.blog_create_dialog')
<script src="https://cdn.ckeditor.com/4.14.0/standard/ckeditor.js"></script>
<script>tinymce.init({selector:'textarea'});</script>
@section('content')
    <button class="btn btn-primary pull-right" data-toggle="modal" data-target="#blog_create">Create Blog</button> <br><br>
    <div class="card">
        <table class="table">
            <thead>
            <tr>
                <th>Title</th>
                <th>Description</th>
                <th>Author</th>
                <th>Created at</th>
            </tr>
            </thead>
            <tbody>

            @foreach($blogs as $blog)
                <tr>
                    <td>{{$blog->blog_title}}</td>
                    <td>{{$blog->description}}</td>
                    <td>{{$blog->created_at}}</td>
                    <td class="btn-td"><div class="btn-group" role="group" aria-label="User Actions">
                            <a href="http://127.0.0.1:8000/admin/auth/user/1" data-toggle="tooltip" data-placement="top" title="" class="btn btn-info" data-original-title="View">
                                <i class="fas fa-eye"></i>
                            </a>

                            <a href="http://127.0.0.1:8000/admin/auth/user/1/edit" data-toggle="tooltip" data-placement="top" title="" class="btn btn-primary" data-original-title="Edit">
                                <i class="fas fa-edit"></i>
                            </a>
                            <a href="{{route('admin.delete',$blog->id)}}" data-toggle="tooltip" data-placement="top" title="" class="btn btn-danger" data-original-title="Delete">
                                <i class="fas fa-trash"></i>
                            </a>
                        </div>
                    </td>
                </tr>
            @endforeach

            </tbody>
        </table>
        @if(count($blogs) == 0)
            <h2 style="text-align: center;color: #969696;font-size: 23px;padding: 13px;">Blog Data not found</h2>
        @else

        @endif
    </div>
    <script>
        CKEDITOR.replace('blog_body', {
            filebrowserUploadUrl: "{{route('admin.upload_images', ['_token' => csrf_token() ])}}",
            filebrowserUploadMethod: 'form'
        });
    </script>
@endsection


