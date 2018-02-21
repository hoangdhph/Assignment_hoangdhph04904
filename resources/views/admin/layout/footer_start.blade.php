
<!-- Footer -->
<footer class="footer text-center">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <?php echo date("Y"); ?> &copy; Uplon - Coderthemes.com
            </div>
        </div>
    </div>
</footer>
<!-- End Footer -->


</div> <!-- container -->




<!-- Right Sidebar -->
<div class="side-bar right-bar">
    <div class="nicescroll">
        <ul class="nav nav-pills nav-justified text-xs-center">
            <li class="nav-item">
                <a href="#home-2"  class="nav-link active" data-toggle="tab" aria-expanded="false">
                    Activity
                </a>
            </li>
            <li class="nav-item">
                <a href="#messages-2" class="nav-link" data-toggle="tab" aria-expanded="true">
                    Settings
                </a>
            </li>
        </ul>

        <div class="tab-content">
            <div class="tab-pane fade active show" id="home-2">
                <div class="timeline-2">
                    <div class="time-item">
                        <div class="item-info">
                            <small class="text-muted">5 minutes ago</small>
                            <p><strong><a href="#" class="text-info">John Doe</a></strong> Uploaded a photo <strong>"DSC000586.jpg"</strong></p>
                        </div>
                    </div>

                    <div class="time-item">
                        <div class="item-info">
                            <small class="text-muted">30 minutes ago</small>
                            <p><a href="" class="text-info">Lorem</a> commented your post.</p>
                            <p><em>"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam laoreet tellus ut tincidunt euismod. "</em></p>
                        </div>
                    </div>

                    <div class="time-item">
                        <div class="item-info">
                            <small class="text-muted">59 minutes ago</small>
                            <p><a href="" class="text-info">Jessi</a> attended a meeting with<a href="#" class="text-success">John Doe</a>.</p>
                            <p><em>"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam laoreet tellus ut tincidunt euismod. "</em></p>
                        </div>
                    </div>

                    <div class="time-item">
                        <div class="item-info">
                            <small class="text-muted">1 hour ago</small>
                            <p><strong><a href="#" class="text-info">John Doe</a></strong>Uploaded 2 new photos</p>
                        </div>
                    </div>

                    <div class="time-item">
                        <div class="item-info">
                            <small class="text-muted">3 hours ago</small>
                            <p><a href="" class="text-info">Lorem</a> commented your post.</p>
                            <p><em>"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam laoreet tellus ut tincidunt euismod. "</em></p>
                        </div>
                    </div>

                    <div class="time-item">
                        <div class="item-info">
                            <small class="text-muted">5 hours ago</small>
                            <p><a href="" class="text-info">Jessi</a> attended a meeting with<a href="#" class="text-success">John Doe</a>.</p>
                            <p><em>"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam laoreet tellus ut tincidunt euismod. "</em></p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="tab-pane fade" id="messages-2">

                <div class="row m-t-10">
                    <div class="col-8">
                        <h5 class="m-0">Notifications</h5>
                        <p class="text-muted m-b-0"><small>Do you need them?</small></p>
                    </div>
                    <div class="col-4 text-right">
                        <input type="checkbox" checked data-plugin="switchery" data-color="#1bb99a" data-size="small"/>
                    </div>
                </div>

                <div class="row m-t-10">
                    <div class="col-8">
                        <h5 class="m-0">API Access</h5>
                        <p class="m-b-0 text-muted"><small>Enable/Disable access</small></p>
                    </div>
                    <div class="col-4 text-right">
                        <input type="checkbox" checked data-plugin="switchery" data-color="#1bb99a" data-size="small"/>
                    </div>
                </div>

                <div class="row m-t-10">
                    <div class="col-8">
                        <h5 class="m-0">Auto Updates</h5>
                        <p class="m-b-0 text-muted"><small>Keep up to date</small></p>
                    </div>
                    <div class="col-4 text-right">
                        <input type="checkbox" checked data-plugin="switchery" data-color="#1bb99a" data-size="small"/>
                    </div>
                </div>

                <div class="row m-t-10">
                    <div class="col-8">
                        <h5 class="m-0">Online Status</h5>
                        <p class="m-b-0 text-muted"><small>Show your status to all</small></p>
                    </div>
                    <div class="col-4 text-right">
                        <input type="checkbox" checked data-plugin="switchery" data-color="#1bb99a" data-size="small"/>
                    </div>
                </div>

            </div>
        </div>
    </div> <!-- end nicescroll -->
</div>
<!-- /Right-bar -->




</div> <!-- End wrapper -->



<!-- jQuery  -->
<script src="{{asset('assets_admin/js/jquery.min.js')}}"></script>
<script src="{{asset('assets_admin/js/popper.min.js')}}"></script><!-- popper for Bo')}}otstrap -->
<script src="{{asset('assets_admin/js/bootstrap.min.js')}}"></script>
<!-- Jquery validate -->
<script src="{{asset('assets_admin/plugins/jquery-validation/dist/jquery.validate.min.js')}}"></script>
<script src="{{asset('assets_admin/plugins/jquery-validation/dist/additional-methods.min.js')}}"></script>
<script src="{{asset('assets_admin/js/custom-validate-method.js')}}"></script>

<script src="{{asset('assets_admin/js/waves.js')}}"></script>
<script src="{{asset('assets_admin/js/jquery.nicescroll.js')}}"></script>
<script src="{{asset('assets_admin/plugins/switchery/switchery.min.js')}}"></script>

<!-- file uploads js -->
<script src="{{asset('assets_admin/plugins/fileuploads/js/dropify.min.js')}}"></script>
<!-- Counter Up  -->
<script src="{{asset('assets_admin/plugins/waypoints/lib/jquery.waypoints.min.js')}}"></script>
<script src="{{asset('assets_admin/plugins/counterup/jquery.counterup.min.js')}}"></script>


<!-- KNOB JS -->
<!--[if IE]>
<script type="text/javascript" src="assets/plugins/jquery-knob/excanvas.js"></script>
<![endif]-->
<script src="{{asset('assets_admin/plugins/jquery-knob/jquery.knob.js')}}"></script>


<script type="text/javascript" src="{{asset('assets_admin/plugins/multiselect/js/jquery.multi-select.js')}}"></script>
<!-- Peity chart js -->
<script src="{{asset('assets_admin/plugins/peity/jquery.peity.min.js')}}"></script>

<!-- Sweet Alert js -->
<script src="{{asset('assets_admin/js/bootbox.min.js')}}"></script>

<!-- App js -->
<script src="{{asset('assets_admin/js/jquery.core.js')}}"></script>
<script src="{{asset('assets_admin/js/jquery.app.js')}}"></script>

<script type="text/javascript" src="{{asset('tinymce/tinymce.min.js')}}"></script>

<script type="text/javascript" src="{{asset('fine-uploader/fine-uploader.min.js')}}"></script>


