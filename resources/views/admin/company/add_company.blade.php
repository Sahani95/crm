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

                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{route('AdminDashboard')}}">Home</a></li>
                        <li class="breadcrumb-item active">Add Company</li>
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
                            <h3 class="card-title">Add Company</strong></h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        @include('admin.partials.messages')
                        <form class="form-horizontal" method="post" action="{{url('company')}}" enctype="multipart/form-data">
                            @csrf
                            <div class="card-body">

                                <div class="form-group row">
                                    <label for="Name" class="col-sm-2 col-form-label">Name</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control name" id="name" name="name" value="{{old('name')}}" placeholder="Name" maxlength="40" />
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="Email" class="col-sm-2 col-form-label">Email</label>
                                    <div class="col-sm-10">
                                        <input type="email" class="form-control" id="email" name="email" value="{{old('email')}}" placeholder="Email" maxlength="40" pattern="[^@\s]+@[^@\s]+\.[^@\s]+" title="Invalid email address" />
                                    </div>
                                </div>   

                                <div class="form-group row">
                                    <label for="Mobile" class="col-sm-2 col-form-label">Website</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="website" name="website" value="{{old('website')}}" placeholder="website"  />
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="Image" class="col-sm-2 col-form-label">Logo</label>
                                        <div class="col-sm-10">
                                        <input type="file" class="" id="logo" name="logo">
                                        <img src="" style="width:150px;" />
                                    </div>
                                </div>        
                            </div>
                            <!-- /.card-body -->
                            <div class="card-footer">
                                <button type="submit" class="btn btn-info">Add Company</button>
                                <a href="{{url('/company')}}" class="btn btn-default float-right">Cancel</a>
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

<!-- </div> -->
@endsection
