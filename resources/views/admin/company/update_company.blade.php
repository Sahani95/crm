@extends('admin.index')

@section('content')

<!-- <div class="wrapper"> -->
<style>
    #eye{
    cursor:pointer;
    position: absolute;
    left: 94%;
    top: 17%;
    color: #17a2b8;
}
</style>
<div class="content-wrapper">

    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <!--  -->
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{route('AdminDashboard')}}">Home</a></li>
                        <li class="breadcrumb-item active">Update Company</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-1"></div>
                <div class="col-10">

                    <div class="card card-info">
                        <div class="card-header">
                            <h3 class="card-title">Update <strong>{{$user->name}}</strong></h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        @include('admin.partials.messages')
                        <form class="form-horizontal" method="post" action="{{route('company.update',[$user->id])}}"enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <input type="hidden" name="id" value="{{$user->id}}" />
                            <div class="card-body">
                                
                                <div class="form-group row">
                                    <label for="Name" class="col-sm-2 col-form-label">Name</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control name" id="name" name="name" value="{{$user->name}}" placeholder="Name" maxlength="40"  />
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="Email" class="col-sm-2 col-form-label">Email</label>
                                    <div class="col-sm-10">
                                        <input type="email" class="form-control" id="email" name="email" value="{{$user->email}}" placeholder="Email" maxlength="40" pattern="[^@\s]+@[^@\s]+\.[^@\s]+" title="Invalid email address" readonly />
                                    </div>
                                </div>
                                
                                <div class="form-group row">
                                    <label for="website" class="col-sm-2 col-form-label">website</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="website" name="website" value="{{$user->website}}" placeholder="website" />
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="Image" class="col-sm-2 col-form-label">Logo</label>
                                    <div class="col-sm-10">
                                        <input type="file" class="" id="logo" name="logo" value="">
                                        <img src="{{ asset('storage/logos/' . $user->logo) }}" style="width:150px;" />
                                    </div>
                                </div>
                                                            
                            </div>
                            <!-- /.card-body -->
                            <div class="card-footer">
                                <button type="submit" class="btn btn-info">Update Company</button>
                                <a href="{{url('company')}}" class="btn btn-default float-right">Cancel</a>
                            </div>
                            <!-- /.card-footer -->
                        </form>
                    </div>
                </div>
                <div class="col-1"></div>
            </div>
        </div>
    </section>
</div>

<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
<script>
    $(document).ready(function() {
        $('.name').on('keypress', function(e) {
            var regex = new RegExp("^[a-zA-Z ]*$");
            var str = String.fromCharCode(!e.charCode ? e.which : e.charCode);
            if (regex.test(str)) {
                return true;
            }
            e.preventDefault();
            return false;
        });
    });
</script>
<script>
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
<!-- </div> -->
@endsection

