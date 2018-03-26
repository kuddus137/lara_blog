@extends('admin.layouts.app')

@section('main_content')
			  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    
<!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="box">
        <div class="box-header with-border">
          <h3 class="box-title">Roles</h3>
           <a href="{{route('role.create')}}" class=" col-lg-offset-5 btn btn-success">Create New</a>


          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip"
                    title="Collapse">
              <i class="fa fa-minus"></i></button>
          </div>
        </div>
        <div class="box-body">
           <div class="box">
            <div class="box-header">
              <h3 class="box-title">Data Table With Full Features</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>Serial</th>
                  <th>Name</th>
                  <th>Edit</th>
                  <th>Delete</th>
                </tr>
                </thead>
                <tbody>
                  @foreach($roles as $key => $role)
                
                <tr>
                  <td>{{$key+1}}</td>
                  <td>{{$role->name}}</td> 
                  <td><a href="{{route('role.edit',$role->id)}}"><span class="glyphicon glyphicon-edit"></span></a></td>
                  <td>
                     <form action="{{route('role.destroy',$role->id)}}" method="post" id="delete_form_{{$role->id}}" style="display: none">
                      {{csrf_field()}}
                      {{method_field('DELETE')}}
                     </form>
                     <a href="" onclick="

                      if(confirm('Are sure to delete?'))
                      {
                        event.preventDefault();
                        document.getElementById('delete_form_{{$role->id}}').submit();
                      }
                      else{
                        event.preventDefault();
                      }
                     ">
                        <span class="glyphicon glyphicon-trash"></span></a>
                    </a>
                  </td>
                </tr>
                  @endforeach
                </tbody>
                <tfoot>
                <tr>
                  <th>Serial</th>
                  <th>Name</th>
                  <th>Edit</th>
                  <th>Delete</th>
                </tr>
                </tfoot>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
        </div>
        <!-- /.box-body -->
        <div class="box-footer">
          Footer
        </div>
        <!-- /.box-footer-->
      </div>
      <!-- /.box -->

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
@endsection