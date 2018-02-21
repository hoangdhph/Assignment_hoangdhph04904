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
                        <h4 class="page-title">Product List</h4>
                    </div>
                </div>
                <!-- end row -->


                <div class="row">
                    <div class="col-12">
                        <div class="card-box">

                            <div class="row">
                                <div class="table-rep-plugin">
                                <div class="table-responsive" data-pattern="priority-columns">
                                    <table id="tech-companies-1" class="table table-striped table-bordered" style="text-align:center">
                                        <thead class="thead-default">
                                            <tr>
                                                <th>ID</th>
                                                <th>Name</th>
                                                <th>Category</th>
                                                <th style="text-align:center">Content</th>
                                                <th>Price</th>
                                                <th>Sale</th>
                                                <th>Image</th>
                                                <th>Author</th>
                                                <th></th>
                                                <th><a class="btn btn-primary" href="{{route('addproduct')}}"><i class="fa fa-plus"></a></th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                                @foreach($product as $pro)
                                                    <tr>
                                                        <th scope="row">{{$pro->id}}</th>
                                                        <td>{{$pro->product_name}}</td>
                                                        <td>
                                                            {{$pro->getCate()->name}}
                                                        </td>
                                                        <td>{{$pro->description}}</td>
                                                        <td>{{$pro->price}}</td>
                                                        <td>{{$pro->sale_price}}</td>
                                                        <td><img style="width: 200px; " src="{{asset("upload/$pro->image_link")}}"></td>
                                                        <td>
                                                            {{$pro->getUser()->name}}
                                                        </td>
                                                        <td><a class="btn btn-warning" href="edit/{{$pro->id}}"><i class="fa fa-pencil"></i></a></td>
                                                        <td><a class="btn btn-danger" href="delete/{{$pro->id}}"><i class="fa fa-remove"></i></a></td>
                                                    </tr>
                                                @endforeach

                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
@endsection