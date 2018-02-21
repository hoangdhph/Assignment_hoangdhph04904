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
                                    <div class="card-content">
                                        <h4 class="card-title">Thêm loại tin</h4>
                                        <div class="col-sm-2"></div>
                                        <div class="form-group label-floating col-sm-9">
                                            <div class="row">
                                                <div class="col-lg-5 col-md-12 col-sm-3">
                                                    <select class="selectpicker" data-style="select-with-transition" multiple title="Choose City" data-size="7">
                                                        <option disabled> Choose city</option>
                                                        <option value="2">Paris </option>
                                                        <option value="3">Bucharest</option>
                                                        <option value="4">Rome</option>
                                                        <option value="5">New York</option>
                                                        <option value="6">Miami </option>
                                                        <option value="7">Piatra Neamt</option>
                                                        <option value="8">Paris </option>
                                                        <option value="9">Bucharest</option>
                                                        <option value="10">Rome</option>
                                                        <option value="11">New York</option>
                                                        <option value="12">Miami </option>
                                                        <option value="13">Piatra Neamt</option>
                                                        <option value="14">Paris </option>
                                                        <option value="15">Bucharest</option>
                                                        <option value="16">Rome</option>
                                                        <option value="17">New York</option>
                                                        <option value="18">Miami </option>
                                                        <option value="19">Piatra Neamt</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-content row">
                                            <div class="col-sm-2"></div>
                                        <div class="form-group label-floating col-sm-9">
                                            <label for="usr">Name:</label>
                                            <input type="text" class="form-control" id="usr">
                                        </div>
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