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
                        <li class="breadcrumb-item active">Add Employee</li>
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
                            <h3 class="card-title">Add Employee</strong></h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        @include('admin.partials.messages')
                        <form class="form-horizontal" method="post" action="{{url('employee')}}" enctype="multipart/form-data">
                            @csrf
                            <div class="card-body">

                                <div class="form-group row">
                                    <label for="Name" class="col-sm-2 col-form-label">First Name</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control name" id="first_name" name="first_name" value="{{old('first_name')}}" placeholder="first_name" maxlength="40" />
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="Name" class="col-sm-2 col-form-label">Last Name</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control name" id="last_name" name="last_name" value="{{old('last_name')}}" placeholder="first_name" maxlength="40" />
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="Email" class="col-sm-2 col-form-label">Email</label>
                                    <div class="col-sm-10">
                                        <input type="email" class="form-control" id="email" name="email" value="{{old('email')}}" placeholder="Email" maxlength="40" pattern="[^@\s]+@[^@\s]+\.[^@\s]+" title="Invalid email address" />
                                    </div>
                                </div>   

                                <div class="form-group row">
                                    <label for="Mobile" class="col-sm-2 col-form-label">Phone</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="phone" name="phone" value="{{old('mobile_number')}}" placeholder="Mobile" maxlength="15" onkeypress="return (event.charCode !=8 && event.charCode ==0 || (event.charCode >= 48 && event.charCode <= 57))"  />
                                    </div>
                                </div>
                               
                                <div class="form-group row">
                                    <label for="Menu Name" class="col-sm-2 col-form-label">Company</label>
                                    <div class="col-sm-10">
                                    <select class="form-control" name="cat_id"id ="cat_id">
                                    <option value="">Select Company</option>
                                    @foreach($cat as $category)
                                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                                    @endforeach
                                     </select>
                                   </div>
                                </div>        
                            </div>
                            <!-- /.card-body -->
                            
                            <!-- /.card-footer -->
                            <div class="card-footer">
                                <button type="submit" class="btn btn-info">Add Employee</button>
                                <a href="{{url('/epmloyee')}}" class="btn btn-default float-right">Cancel</a>
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
