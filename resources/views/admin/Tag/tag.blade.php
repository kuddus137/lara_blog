@extends('admin.layouts.app')

@section('main_content')
<div class="content-wrapper">
<section class="content">
<div class="row">
	<h1 style="margin-left: 15px;">Create Your Tag</h1>

  @if ($errors->any())
          <div class="alert alert-danger">
              <ul>
                  @foreach ($errors->all() as $error)
                      <h5>{{ $error }}</h5>
                  @endforeach
              </ul>
          </div>
      @endif
<form role="form" method="post" action="{{route('tag.store')}}">
  {{csrf_field()}}
<div class="col-lg-6">
	<div class="box box-primary">
              <div class="box-body">
               <div class="form-group">
                  <label for="name">Name</label>
                  <input type="text" class="form-control" id="name" name="name" placeholder="Post Tag">
                </div>

                 <div class="form-group">
                  <label for="postslug">Post Slug</label>
                  <input type="text" class="form-control" id="postslug" name="postslug" placeholder="Post Slug">
                </div>
               <button type="submit" class="btn btn-primary">Submit</button>
               <a class="btn btn-warning" href="{{route('tag.index')}}">Back</a>
            </div>
    </div>
</div>
 </form>
 </div>
</section>
</div>
  
@endsection