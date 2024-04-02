<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>{{env('APP_NAME', 'CRM')}}</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{url('admin/plugins/fontawesome-free/css/all.min.css')}}">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- icheck bootstrap -->
    <link rel="stylesheet" href="{{url('admin/plugins/icheck-bootstrap/icheck-bootstrap.min.css')}}">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{url('admin/dist/css/adminlte.min.css')}}">
    <link rel="icon" href="{{url('admin/images/crm.webp')}}">

   
    <!-- Google Font: Source Sans Pro -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
    <style>
        .head_login{
            color: blue;
        }
    </style>
</head>
<body class="hold-transition login-page" 
style="background-image: url('admin/images/crm.webp');background-repeat: no-repeat;background-size:cover;">
<div class="login-box">
   
    <div class="login-logo">
        <a href="#"><b class="head_login"> {{env('APP_NAME', 'CRM')}}</b></a>
    </div>
    <!-- /.login-logo -->

    <div class="card">
        <div class="card-body login-card-body">
            <p class="login-box-msg">Sign in to Admin</p>
            @include('admin.partials.messages')
            <form action="{{route('AdminLogin')}}" method="POST">
                @csrf
                <div class="input-group mb-3">
                    <input type="email" class="form-control" name="email" id="email" placeholder="Email" maxlength="65" required/>
                    <div class="input-group-append">
                        <div class="input-group-text">
                            <span class="fas fa-envelope"></span>
                        </div>
                    </div>
                </div>
                <div class="input-group mb-3">
                    <input type="password" class="form-control" name="password" id="password" placeholder="Password" maxlength="30" required/>
                    <div class="input-group-append">
                        <div class="input-group-text">
                            <i class="fa fa-eye-slash" id="eye"></i>
                            <!-- <span class="fas fa-lock"></span>  -->
                        </div>
                    </div>
                </div>
                <div class="row">
                    <!-- /.col -->
                    <div class="col-4">
                        <button type="submit" class="btn btn-primary btn-block">Sign In</button>
                    </div>
                    <div class="row">
                  
                </div>
                    <!-- /.col -->
                </div>
                
            </form>

        </div>
        <!-- /.login-card-body -->
    </div>

<!-- /.login-box -->
@include('admin.partials.footer_js')
<script type="text/javascript">
    $(function(){
  
  $('#eye').click(function(){
       
        if($(this).hasClass('fa-eye-slash')){
           
          $(this).removeClass('fa-eye-slash');
          
          $(this).addClass('fa-eye');
          
          $('#password').attr('type','text');
            
        }else{
         
          $(this).removeClass('fa-eye');
          
          $(this).addClass('fa-eye-slash');  
          
          $('#password').attr('type','password');
        }
    });
});
</script>
</body>
</html>
