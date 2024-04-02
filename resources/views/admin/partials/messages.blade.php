 @if($errors->any())
 	@foreach ($errors->all() as $error)
 		<div class="alert alert-danger">{{ $error }}</div>
 	@endforeach
 @endif
 @if(session('message'))
 	<div class="alert alert-success">{{ session('message') }}</div>
 @endif

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

</script>

