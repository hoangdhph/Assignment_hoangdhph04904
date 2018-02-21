@extends('admin.layout.index')
@section('content')
<!-- Page-Title -->
                <div class="row">
                    <div class="col-sm-12">
                        <div class="btn-group pull-right m-t-15">
                            <button type="button" class="btn btn-custom dropdown-toggle waves-effect waves-light"
                                    data-toggle="dropdown" aria-expanded="false">Settings <span class="m-l-5"><i
                                    class="fa fa-cog"></i></span></button>
                            <div class="dropdown-menu dropdown-menu-right">
                                <a class="dropdown-item" href="#">Action</a>
                                <a class="dropdown-item" href="#">Another action</a>
                                <a class="dropdown-item" href="#">Something else here</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#">Separated link</a>
                            </div>

                        </div>
                        <h4 class="page-title">Danh sách Products</h4>
                    </div>
                </div>
                <!-- end row -->


                <div class="row">
                    <div class="col-12">
                        <div class="card-box">

                            <div class="row">
                                <div class="col-sm-12 col-xs-12 col-md-12">
                                    <div class="p-20">
                                        <table class="table">
                                            <thead>
                                            <tr>
                                                <th>id</th>
                                                <th>Title</th>
                                                <th>Short_desc</th>
                                                <th>Content</th>
                                                <th>Category</th>
                                                <th>Author</th>
                                                <th></th>
                                                <th><a class="btn btn-primary" href="{{route('addpost')}}">Thêm</a></th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            @foreach ($posts as $p)
                                            <tr>
                                                <th scope="row">{{$p->id}}</th>
                                                <td>{{$p->title}}</td>
                                                <td>{{$p->short_desc}}</td>
                                                <td>{{$p->content}}</td>
                                                <td>
                                                    @php
                                                        $cate = $p->getCate();
                                                    @endphp
                                                    @if($cate != null)
                                                        {{$cate->name}}
                                                    @endif
                                                </td>
                                                <td>{{$p->author}}</td>
                                                <td><a class="btn btn-warning" href="edit/{{$p->id}}">Sửa</a></td>
                                                <td><a class="btn btn-danger" href="delete/{{$p->id}}">Xóa</a></td>
                                            </tr>
                                            @endforeach
                                        </table>
                                    </div>  
                                </div>
                            </div>
                            <div class="text-center">
                                {{$posts->links()}}
                            </div>
                            
                        </div>
                    </div>
                </div>
@endsection