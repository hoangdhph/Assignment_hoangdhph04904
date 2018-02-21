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
                        <h4 class="page-title">Thêm</h4>
                    </div>
                </div>
                <!-- end row -->


                <div class="row">
                    <div class="col-md-12">
                        <div class="card-box">

                            <h4 class="header-title m-t-0 m-b-30">Thêm sản phẩm</h4>

                            <div class="row">
                                <div class="col-lg-12 col-sm-12 col-xs-12 col-md-12">
                                    <form action="{{route('addpost')}}" method="post" enctype="multipart/form-data">
                                        {{csrf_field()}}
                                        <div class="row">
                                            <div class="col-md-6">
                                            <fieldset class="form-group">Thể loại</label>
                                                <select class="form-control" id="exampleSelect1" name='cate'>
                                                    @foreach ($cate as $ca)
                                                        <option value="{{$ca->id}}">{{$ca->name}}</option>
                                                    @endforeach
                                                </select>
                                            </fieldset>
                                            <fieldset class="form-group">
                                                <label for="exampleInputPassword1">Tiêu đề</label>
                                                <input type="text" class="form-control"
                                                       id="exampleInputPassword1" placeholder="Tiêu đề" name='title'>
                                            </fieldset>
                                            <fieldset class="form-group">
                                                <label for="exampleInputEmail1">Mô tả ngắn</label>
                                                <input type="text" class="form-control" id="exampleInputEmail1"
                                                       placeholder="Tiêu đề ngắn" name="short_desc">
                                            </fieldset>
                                            <fieldset class="form-group">
                                                <label for="exampleTextarea">Nội dung</label>
                                                        <textarea class="form-control" id="exampleTextarea"
                                                            rows="10" name="content"></textarea>
                                            </fieldset>
                                            <fieldset class="form-group">
                                                <label for="exampleInputEmail1">Author</label>
                                                <input type="text" class="form-control" id="exampleInputEmail1"
                                                       placeholder="Tiêu đề ngắn" name="author">
                                            </fieldset>
                                            <fieldset class="form-group">
                                                <label for="exampleInputEmail1">Created_by</label>
                                                <input type="text" class="form-control" id="exampleInputEmail1"
                                                       placeholder="Tiêu đề ngắn" name="created_by">
                                            </fieldset>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="row">
                                                <div class="col-sm-12">
                                                    <div class="card-box">

                                                        <h4 class="header-title m-t-0 m-b-30">Default</h4>

                                                        <input type="file" class="dropify" data-height="300" />
                                                    </div>
                                                </div><!-- end col -->
                                            </div>
                                        </div>
                                        </div>
                                        
                                        
                                        <button type="submit" class="btn btn-primary">Submit</button>
                                    </form>
                                </div><!-- end col -->

                            </div><!-- end row -->
                        </div>
                    </div><!-- end col -->
                </div>
                <!-- end row -->
@endsection

@section('js')
    <script type="text/javascript">
        $(document).ready(function(){
            $('#cate-form').validate({
                rules: {
                    name: {
                        required: true,
                        checkExisted: "{{route('cate.checkname')}}",
                    },
                    slug: 'required'
                },
                messages: {
                    name: {
                        required: 'Please enter category name'
                    },
                    slug: {
                        required: 'Please enter category slug'
                    }
                },
                errorPlacement: function(error, element)
                {
                    $(error).addClass('text-danger');
                    error.insertAfter(element);
                }
            });
        });
    </script>
    <script>
                var resizefunc = [];
    </script>

    <script type="text/javascript">
                $('.dropify').dropify({
                    messages: {
                        'default': 'Drag and drop a file here or click',
                        'replace': 'Drag and drop or click to replace',
                        'remove': 'Remove',
                        'error': 'Ooops, something wrong appended.'
                    },
                    error: {
                        'fileSize': 'The file size is too big (1M max).'
                    }
                });
    </script>
    <script type="text/javascript">
    tinymce.init({
        selector: 'textarea',
        height: 250 ,
        menubar: false,
        plugins: [
            "advlist autolink link image lists charmap print preview hr anchor pagebreak",
            "searchreplace wordcount visualblocks visualchars insertdatetime media nonbreaking",
            "table contextmenu directionality emoticons paste textcolor responsivefilemanager code"
        ],
        image_advtab: true ,
        relative_urls : false,
        remove_script_host : false,
        convert_urls : true,


        external_filemanager_path:"{{asset('filemanager')}}/",
        filemanager_title:"Thư viện" ,
        external_plugins: { "filemanager" : "{{asset('filemanager/plugin.min.js')}}"},
        toolbar: 'insert | undo redo |  styleselect | bold italic backcolor  | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | removeformat | help',
        content_css: [
            '//fonts.googleapis.com/css?family=Lato:300,300i,400,400i',
            '//www.tinymce.com/css/codepen.min.css'
        ]
    });
</script>
@endsection