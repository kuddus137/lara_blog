@extends('admin.layouts.app')

@section('main_content')
<div class="content-wrapper">
<section class="content">
<div class="row">
  <h1 style="margin-left: 15px;">Update Role</h1>

  @if ($errors->any())
          <div class="alert alert-danger">
              <ul>
                  @foreach ($errors->all() as $error)
                      <h5>{{ $error }}</h5>
                  @endforeach
              </ul>
          </div>
      @endif
<form role="form" method="post" action="{{route('role.update',$roles->id)}}">
  {{csrf_field()}}
  {{method_field('PUT')}}
<div class="col-lg-6">
  <div class="box box-primary">
              <div class="box-body">
               <div class="form-group">
                  <label for="name">Name</label>
                  <input type="text" class="form-control" id="name" name="name" value="{{$roles->name}}">
                </div>
                <div class="row">
                <div class="col-lg-4">
                  <label>Post Permission</label>
                  @foreach($permissions as $permission)
                    @if($permission->permission_for == 'post')
                      <div class="checkbox">
                        <label><input type="checkbox" name="permission[]" value="{{$permission->id}}" 

                        @foreach($roles->permissions as $role_permit)
                            @if($role_permit->id == $permission->id)
                               checked
                            @endif
                        @endforeach

                          >{{$permission->name}}</label>
                      </div>
                    @endif
                  @endforeach
                </div>

                <div class="col-lg-4">
                  <label>User Permission</label>
                  @foreach($permissions as $permission)
                    @if($permission->permission_for == 'user')
                  <div class="checkbox">
                    <label><input type="checkbox" name="permission[]" value="{{$permission->id}}"

                    @foreach($roles->permissions as $role_permit)
                      @if($role_permit->id == $permission->id)
                        checked
                        @endif
                    @endforeach
                      >{{$permission->name}}</label>
                  </div>
                  @endif
                  @endforeach
                </div>

                <div class="col-lg-4">
                  <label>Others</label>
                  @foreach($permissions as $permission)
                    @if($permission->permission_for == 'other')
                  <div class="checkbox">
                    <label><input type="checkbox" name="permission[]" value="{{$permission->id}}" 
                      
                       @foreach($roles->permissions as $role_permit)
                          @if($role_permit->id == $permission->id)
                            checked
                          @endif
                       @endforeach

                      >{{$permission->name}}</label>
                  </div>
                  @endif
                  @endforeach
                </div>
                </div>
                
               <button type="submit" class="btn btn-primary">Submit</button>
               <a class="btn btn-warning" href="{{route('role.index')}}">Back</a>
            </div>
               
    </div>
</div>
 </form>
 </div>
</section>
</div>
  
@endsection