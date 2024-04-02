<script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
<script type="text/javascript">
$( document ).ready(function() {
   setTimeout(function() {

   $('.alert-danger').fadeOut(3000);

   }, 500);
     setTimeout(function() {

   $('.alert-success').fadeOut(3000);

  }, 3000);
});
</script>

<script src="{{url('admin/plugins/jquery/jquery.min.js')}}"></script>
<script src="{{url('admin/js_admin/lazyload.js')}}"></script>
<script src="{{url('admin/js_admin/moment.min.js')}}"></script>
<script src="{{url('admin/js_admin/bootstrap-datetimepicker.min.js')}}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.blockUI/2.70/jquery.blockUI.js"></script>
<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
<!-- Bootstrap -->
<script src="{{url('admin/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<!-- overlayScrollbars -->
<script src="{{url('admin/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js')}}"></script>
<!-- AdminLTE App -->
<script src="{{url('admin/dist/js/adminlte.js')}}"></script>

<!-- OPTIONAL SCRIPTS -->
<script src="{{url('admin/dist/js/demo.js')}}"></script>

<!-- PAGE PLUGINS -->
<!-- jQuery Mapael -->
<script src="{{url('admin/plugins/jquery-mousewheel/jquery.mousewheel.js')}}"></script>
<script src="{{url('admin/plugins/raphael/raphael.min.js')}}"></script>
<script src="{{url('admin/plugins/jquery-mapael/jquery.mapael.min.js')}}"></script>
<script src="{{url('admin/plugins/jquery-mapael/maps/usa_states.min.js')}}"></script>
<!-- ChartJS -->
<script src="{{url('admin/plugins/chart.js/Chart.min.js')}}"></script>
<script src="{{url('admin/plugins/summernote/summernote-bs4.min.js')}}"></script>

<script src="{{url('admin/js_admin/message.js')}}"></script>

<!-- PAGE SCRIPTS -->
<!-- <script src="{{asset('dist/js/pages/dashboard2.js')}}"></script> -->
<script src="{{url('admin/js_admin/message.js')}}"></script>

@yield('after-scripts')
