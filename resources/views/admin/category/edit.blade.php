@extends('admin.layouts.app')

@section('main_content')
<div class="content-wrapper">
<section class="content">
<div class="row">
  <h1 style="margin-left: 15px;">Create Your Category</h1>
   @if ($errors->any())
          <div class="alert alert-danger">
              <ul>
                  @foreach ($errors->all() as $error)
                      <h5>{{ $error }}</h5>
                  @endforeach
              </ul>
          </div>
      @endif
<form role="form"  action="{{route('category.update',$data->id)}}" method="post">
  {{csrf_field()}}
  {{method_field('PUT')}}
<div class="col-offset-3 col-lg-6">
  <div class="box box-primary ">
              <div class="box-body">
               <div class="form-group">
                  <label for="categoryname">Name</label>
                  <input type="text" class="form-control" id="categoryname" name="categoryname" value="{{$data->name}}">
                </div>

                 <div class="form-group">
                  <label for="catslug">Post Slug</label>
                  <input type="text" class="form-control" id="catslug" name="catslug" value="{{$data->slug}}">
                </div>
               <button type="submit" class="btn btn-primary">Submit</button>
               <a class="btn btn-warning" href="{{route('category.index')}}">Back</a>

            </div>
    </div>
</div>
 </form>
 </div>
</section>
</div>
  
@endsection