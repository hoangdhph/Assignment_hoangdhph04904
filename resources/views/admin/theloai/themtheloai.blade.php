@extends('admin.layout.index')

@section('content')
<div class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card">
                                <form id="RegisterValidation" action="" method="">
                                    <div class="card-header card-header-icon" data-background-color="rose">
                                        <i class="material-icons">mail_outline</i>
                                    </div>
                                    <div class="card-content row">
                                        <h4 class="card-title">Thêm thể loại</h4><br><br>
                                        <div class="col-sm-2"></div>
                                        <div class="form-group col-sm-9">
                                            <label for="usr">Name:</label>
                                            <input type="text" class="form-control" id="usr">
                                        </div>
                                    </div>
                                    <div class="form-footer text-right col-sm-11">
                                        <button type="submit" class="btn btn-rose btn-fill">Submit</button>
                                        <button type="submit" class="btn btn-rose btn-fill">Cancel</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
@endsection