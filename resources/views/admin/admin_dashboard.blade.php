@extends('admin.index')
@section('after-style')
<style>

    a{

        color:inherit;
    }
    .info-box{
        background:lightsteelblue;
    }
</style>
@endsection
@section('content')

<div class="content-wrapper">
    <section class="content">
        <div class="container-fluid">
            <!-- Info boxes -->
            <div class="row">
                <div class="col-12 col-sm-6 col-md-3">
                    <a href="">
                        <div class="info-box" ;>
                            <span class="info-box-icon bg-info elevation-1"><img src="{{url('users.png')}}"></span>
                            {{-- <div class="info-box-content">
                                <span class="info-box-text">Users</span>
                                <span class="info-box-number">{{$countUsers ?? 0}}</span>
                            </div> --}}
                        </div>
                    </a>
                </div>
                {{-- <div class="col-12 col-sm-6 col-md-3">
                    <a href="{{route('CategoriesList')}}">
                        <div class="info-box">
                            <span class="info-box-icon bg-info elevation-1"><img src="{{url('public/cat.jpeg')}}"></span>

                            <div class="info-box-content">
                                <span class="info-box-text">Categories</span>
                                <span class="info-box-number">{{$category ?? 0}}</span>
                            </div>
                        </div>
                    </a>
                </div> --}}
            </div>
        </div>
    </section>
</div>
@endsection
