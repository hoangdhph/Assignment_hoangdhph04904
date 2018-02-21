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

                            <h4 class="header-title m-t-0 m-b-30">Add Product</h4>

                            <div class="row">
                                <div class="col-lg-12 col-sm-12 col-xs-12 col-md-12">
                                    <form action="{{route('addproduct')}}" method="post" enctype="multipart/form-data" novalidate="">
                                        {{csrf_field()}}
                                        @if (session('msg'))
                                            <div class="alert alert-danger">
                                                <strong>Danger!</strong> {{session('msg')}}
                                            </div>
                                        @endif
                                        <div class="row">
                                            <div class="col-md-6">
                                            <fieldset class="form-group">
                                                <label>Categories</label>
                                                <select class="form-control" id="exampleSelect1" name="cate_id" >
                                                    @foreach($cate as $ca)
                                                        <option value="{{$ca->id}}">{{$ca->name}}</option>
                                                    @endforeach                                               
                                                </select>
                                            </fieldset>
                                            <fieldset class="form-group">
                                                @if( count($errors) > 0)
                                                        <p class="alert alert-danger col-12">{{$errors->first('product_name')}}</p>
                                                @endif
                                                <label for="exampleInputEmail1">Product Name</label>
                                                <input type="text" class="form-control" id="exampleInputEmail1"
                                                       placeholder="Product name" name="product_name" value="{{old('product_name')}}">
                                            </fieldset>
                                            <fieldset class="form-group">
                                                @if( count($errors) > 0)
                                                        <p class="alert alert-danger col-12">{{$errors->first('price')}}</p>
                                                @endif
                                                <label for="exampleInputPassword1">Price</label>
                                                <input type="number" class="form-control"
                                                        placeholder="Price" name="price" value="{{old('price')}}">
                                            </fieldset>
                                            <fieldset class="form-group">
                                                @if( count($errors) > 0)
                                                        <p class="alert alert-danger col-12">{{$errors->first('sale_price')}}</p>
                                                @endif
                                                <label for="exampleInputPassword1">Sale Price</label>
                                                <input type="number" class="form-control"
                                                       id="exampleInputPassword1" placeholder="Sale Price" name="sale_price" value="{{old('sale_price')}}">
                                            </fieldset>
                                            <fieldset class="form-group">
                                                <label for="exampleTextarea">Description</label>
                                                        <textarea class="form-control" id="exampleTextarea"
                                                                  rows="3" name="description">{{old('description')}}</textarea>

                                            </fieldset>
                                            </div>

                                            <div class="col-md-6">
                                                <div class="row">
                                                    <div class="col-sm-12">
                                                        <div class="card-box">
                                                        <fieldset class="form-group">
                                                            <h4 class="header-title m-t-0 m-b-30">Images</h4>

                                                            <input type="file" class="dropify" data-height="300" name="image"/>
                                                        </fieldset>
                                                        </div>
                                                    </div><!-- end col -->

                                                    <div class="col-sm-12">
                                                        <div class="card-box">
                                                        <fieldset class="form-group">
                                                            <h4 class="header-title m-t-0 m-b-30">Gallery</h4>
                                                            <button type="button" class="btn btn-primary waves-effect waves-light" id="btn-addimages">Add images</button>
                                                            <p></p>
                                                            <div class="addimages row">
                                                                <div class="image_upload col-md-4" >
                                                                    <input type="file" name="images[]" id="img" onchange="readURL(this)">
                                                                    <label for="img" class="dropify-wrapper">
                                                                        <img src="">
                                                                        <button type="button" class="dropify-clear">Remove</button>
                                                                    </label>
                                                                    <input type="text" name="images_text[]" class="form-control">
                                                                </div>
                                                            </div>
                                                        </fieldset>
                                                        </div>
                                                    </div>
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
    function readURL(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();
                reader.onload = function (e) {
                    $(input).siblings('label').children('img').show();
                    $(input).siblings('label').children('img').attr('src', e.target.result);
                };

                reader.readAsDataURL(input.files[0]);
            }
        }
    $(document).ready(function(){
        $('.image_upload button').click(function(){
            $(this).siblings('img').attr('src', '');
        });
        $('#btn-addimages').click(function(){
            var i = $('.image_upload').length + 1;
            $('.addimages').append('<div class="image_upload" ><input type="file" name="images[]" id="img'+i+'" onchange="readURL(this)"><label class="dropify-wrapper" for="img'+i+'"><img src=""></label><input type="text" name="images_text[]" class="form-control"></div>');
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
