@extends('admin.index')
@section('after-style')
<link rel="stylesheet" href="{{asset('public/admin/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css')}}">
<link rel="stylesheet" href="{{asset('public/admin/plugins/datatables-responsive/css/responsive.bootstrap4.min.css')}}">
@endsection
@section('content')
<div class="content-wrapper">
   <section class="content-header">
      <div class="container-fluid">
         <div class="row mb-2">
            <div class="col-sm-6">
            </div>
            <div class="col-sm-6">
               <ol class="breadcrumb float-sm-right">
                  <li class="breadcrumb-item"><a href="{{route('AdminDashboard')}}">Home</a></li>
                  <li class="breadcrumb-item active">Manage COmpany</li>
               </ol>
            </div>
         </div>
      </div>

      <!-- /.container-fluid -->
   </section>
   <!-- Main content -->
   <section class="content">
      <div class="container-fluid">
         <div class="row">
            <div class="col-12">
               <div class="card">
                  <div class="card-header">
                     <h3 class="card-title">Users List</h3>
                     <a href="{{url('company/create')}}" style="float: right;"><i class="fas fa-plus-square" style="font-size:25px;"></i></a>
                  </div>
                  @if(session('message'))
                  <div class="alert alert-success" style="padding: 5px 20px;margin-bottom: 5px;">{{ session('message') }}</div>
                  @endif
                  <!-- /.card-header -->
                   <div class="card-body">
                            <table id="users_list" class="table table-bordered table-striped" data-order='[[ 0, "asc" ]]'>
                                <thead>
                                    <tr>
                                        <th>Id</th>
                                        <th>Name</th>                         
                                        <th>Email</th>
                                        <th>Profile Image</th>
                                        <th>Website</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @php $i=1; @endphp
                                @if(isset($users) && $users != null)
                                @foreach($users as $user)
                                <tr>
                                    <td>{{$i++}}</td>
                                    <td>{{$user->name}}</td>
                                    <td>{{$user->email}}</td>
                                    <td><img src="{{ asset('storage/logos/' . $user->logo) }}" width="100px"></td>

                                    <td>{{$user->website}}</td>
                                    
                                    </td>
                                    <td style="text-align: center;">
                                       <a href="javascript:void();" data-toggle="modal" data-target="#user-info{{$user->id}}"><i class="fas fa-eye"></i>&nbsp;&nbsp;</a>
                                       <a href="{{route('company.edit',[$user->id])}}"><i class="fas fa-edit"></i>&nbsp;&nbsp;</a>
                                       <a href="#" onclick="event.preventDefault(); if (confirm('Are you sure you want to delete this company?')) { document.getElementById('delete-form-{{ $user->id }}').submit(); }"><i class="fas fa-trash"></i>&nbsp;&nbsp;</a>
                                       <form id="delete-form-{{ $user->id }}" action="{{ route('company.destroy', [$user->id]) }}" method="POST" style="display: none;">
                                           @csrf
                                           @method('DELETE')
                                       </form>
                                 
                                    </td>
                                </tr>
                                @endforeach
                                @endif
                                </tbody>
                            </table>
                        </div>
                  <!-- /.card-body -->
               </div>
               <!-- /.card -->
            </div>
            <!-- /.col -->
         </div>
         <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
   </section>
   @include('admin.company.view_company')
            
</div>
@endsection
@section('after-scripts')
<script src="{{asset('public/admin/plugins/datatables/jquery.dataTables.min.js')}}"></script>
<script src="{{asset('public/admin/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js')}}"></script>
<script src="{{asset('public/admin/plugins/datatables-responsive/js/dataTables.responsive.min.js')}}"></script>
<script src="{{asset('public/admin/plugins/datatables-responsive/js/responsive.bootstrap4.min.js')}}"></script>
<script>
   $(function() {
       $("#users_list").DataTable({
           "responsive": true,
           "autoWidth": false,
       });
   });
</script>
@endsection