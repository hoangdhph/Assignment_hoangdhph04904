@extends('admin.layout.index')
@section('content')
<!-- Page-Title -->
                <div class="row">
                    <div class="col-md-12">
                        
                        <br>
                        <div class="btn-group pull-right m-t-15">

                            <div class="row">
                              <form class="navbar-form col-md-12" role="search" method="get" action="" id="filterForm">
                                <div class="row">
                                    <div class="page-size form-group col-md-4" >
                                    <select id="pageSize" class="form-control" name="pagesize">
                                        @foreach(getPageSizeList() as $pa)
                                        <option @if($pageSize == $pa)
                                                    selected
                                                @endif
                                         value="{{$pa}}">{{$pa}}</option>
                                        @endforeach
                                    </select>
                                    </div>
                                    <div class="form-group add-on col-md-8">
                                        <div class="row">
                                            <input class="form-control col-md-12 input-relative" placeholder="Search" name="keyword" type="text" value="{{$keyword}}">
                                             <button class="btn btn-primary bt-position" type="submit"><i class="zmdi zmdi-search "></i></button>
                                        </div>        
                                    </div>
                                </div>
                                
                                
                              </form>
                              
                            </div>
                            
                        </div>
                        <h4 class="page-title">Category List</h4>
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
                                            <tr style="text-align: center;">
                                                <th><button class="btn btn-danger"> <i class="fa fa-trash"></i></button></th>
                                                <th>id</th>
                                                <th>Name</th>
                                                <th>Paren Category</th>
                                                <th>Slug</th>
                                                <th></th>
                                                <th><a href="{{route('addcate')}}" class="btn btn-primary"><i class="fa fa-plus"></i></a></th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            @foreach($cate as $ca)
                                            <tr style="text-align: center;">
                                                <th><input type="checkbox" name="deleteall[]"></th>
                                                <th scope="row">{{$ca->id}}</th>
                                                <td>{{$ca->name}}</td>
                                                <td></td>
                                                <td>{{$ca->slug}}</td>
                                                <td><a href="edit/{{$ca->id}}" class="btn btn-warning"><i class="fa fa-pencil"></i></a></td>
                                                <td><a href="javascript:;" onclick="confirmDelete('delete/{{$ca->id}}')" class="btn btn-danger waves-effect waves-light"><i class="fa fa-trash-o"></i></a></td>
                                                <!--  -->
                                            </tr>
                                            @endforeach
                                            </tbody>
                                        </table>
                                        <br>
                                        <td class="pull-right">
                                            {{$cate->links()}}
                                        </td>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
@endsection
 @section('js')
    <script type="text/javascript">
        $(document).ready(function () {
            $('#pageSize').on('change', function(){
                $('#filterForm').submit();
            });
        });
    </script>
    <script type="text/javascript">
        function confirmDelete(url){
            bootbox.confirm({
            message: "Are you sure?",
            buttons: {
                confirm: {
                    label: 'Yes',
                    className: 'btn-success'
                },
                cancel: {
                    label: 'No',
                    className: 'btn-danger'
                }
            },
            callback: function (result) {
                if(result){
                    window.location.href = url;
                }
            }
        });
        }
    </script>
@endsection