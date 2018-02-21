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
                        <h4 class="page-title">Add</h4>
                    </div>
                </div>
                <!-- end row -->


                <div class="row">
                    <div class="col-md-12">
                        <div class="card-box">

                            <h4 class="header-title m-t-0 m-b-30">Add category</h4>

                            <div class="row">
                                <div class="col-lg-12 col-sm-12 col-xs-12 col-md-12">
                                    <form action="{{route('addcate')}}" method="post" id="cate-form" data-parsley-validate novalidate>
                                        {{csrf_field()}}
                                        <div class="row">
                                            <div class="col-md-6">
                                            <fieldset class="form-group">
                                                <label>Name</label>
                                                <input type="text" class="form-control"
                                                        placeholder="Name" name="name" required id="cateName">
                                            </fieldset>
                                            <fieldset class="form-group input-relative">
                                                <label >Slug</label>
                                                <input type="text" class="form-control"
                                                      placeholder="Slug" name='slug' required value="{{$model->slug}}" id="slug">
                                                <button type="button" class="btn btn-primary bt-position" style="position: absolute;top: 31px; right: 2px;height: 34px;cursor: pointer;">
                                                    <i class="fa fa-plus"></i>
                                                </button>
                                            </fieldset>
                                            <fieldset class="form-group">
                                                    <div class="card-box">
                                                        <h4 class="header-title m-t-0 m-b-30">Image</h4>
                                                        <input type="file" class="dropify" data-height="150" name="image"/>
                                                    </div>
                                            </fieldset>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="row">
                                                <div class="form-control">
                                                    <h4 class="header-title m-t-0 m-b-30">Description</h4>
                                                    <textarea></textarea>
                                                </div>
                                                
                                            </div>
                                        </div>
                                        </div>
                                        
                                        
                                        <button type="submit" class="btn btn-primary pull-right">Submit</button>
                                    </form>
                                    <input type="hidden" name="" id="ajaxToken" value="{{csrf_token()}}">
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
            $('.bt-position').on('click', function(){
                var cateName = $('#cateName').val();
                cateName = cateName.trim();
                if(cateName == "" || cateName == null){
                    return false;
                }
                $.ajax({
                    url: "{{route('getSlug')}}",
                    method: "post",
                    data: {
                        value: cateName,
                        _token: $('#ajaxToken').val()
                    },
                    dataType: "JSON",
                    success: function (rs){
                        $('#slug').val(rs.data);
                    }
                });
            });
            $('#cate-form').validate({
                rules: {
                    name: {
                        required: true,
                        checkExisted: {
                            requestUrl: "{{route('cate.checkname')}}",
                            modelId: {{$model->id}}
                        },
                    },
                    slug: {
                        required: true,
                        checkExisted: {
                            requestUrl: "{{route('cate.checkslug')}}",
                            modelId: {{$model->id}}
                        }
                    }
                },
                messages: {
                    name: {
                        required: 'Please enter category name'
                    },
                    slug: {
                        required: 'Please enter category slug',
                        checkExisted: 'The path already exists'
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