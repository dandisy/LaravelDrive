@extends('admin.layouts.app')


@section('title', 'Form General')

@section('headerScript')

@endsection


@section('pageContent')

<div class="col-md-12 col-sm-12 col-xs-12">
	<a href="{{url('/admin/user/create')}}" class="btn btn-primary"> Create New User</a>
</div>
<div class="col-md-12 col-sm-12 col-xs-12">

<div class="x_panel">
  <div class="x_title">
    <h2>Images</h2>
    <div class="clearfix"></div>
  </div>
  <div class="x_content">
    
	@foreach ($images as $image)
	<p>{{	 $image->path }}</p>
	    <img src="{{asset('storage/upload/'.$image->name)}}" alt="" />
	@endforeach
  </div>
</div>
</div>


@endsection



@section('footerScript')




@endsection