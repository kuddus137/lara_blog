
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
          <h3 class="box-title">Title</h3>
           <a href="{{route('permission.create')}}" class=" col-lg-offset-5 btn btn-success">Create New</a>


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
                  <th>Permission Name</th>
                  <th>permission for</th>
                  <th>Edit</th>
                  <th>Delete</th>
                </tr>
                </thead>
                <tbody>
                  @foreach($permissions as $key => $permission)
                
                <tr>
                  <td>{{$key}}</td>
                  <td>{{$permission->name}}</td> 
                  <td>{{$permission->permission_for}}</td> 
                  <td><a href="{{route('permission.edit',$permission->id)}}"><span class="glyphicon glyphicon-edit"></span></a></td>
                  <td>
                     <form action="{{route('permission.destroy',$permission->id)}}" method="post" id="delete_form_{{$permission->id}}" style="display: none">
                      {{csrf_field()}}
                      {{method_field('DELETE')}}
                     </form>
                     <a href="" onclick="

                      if(confirm('Are sure to delete?'))
                      {
                        event.preventDefault();
                        document.getElementById('delete_form_{{$permission->id}}').submit();
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
                  <th>Permission Name</th>
                  <th>permission for</th>
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