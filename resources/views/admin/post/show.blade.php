@extends('admin.layouts.app')

@section('main_content')
			  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Blank page
        <small>it all starts here</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Examples</a></li>
        <li class="active">Blank page</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="box">
        <div class="box-header with-border">
          <h3 class="box-title">Title</h3>

          @can('posts.create',Auth::user())
            <a href="{{route('post.create')}}" class=" col-lg-offset-5 btn btn-success">Create New</a>
          @endcan


          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip"
                    title="Collapse">
              <i class="fa fa-minus"></i></button>
          </div>
        </div>
         <div class="box">
            <div class="box-header">
              <h3 class="box-title">Data Table </h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>Serial No</th>
                  <th>Title</th>
                  <th>Subtitle</th>
                  <th>Slug</th>
                  <th>Image</th>
                  <th>Action</th>
                </tr>
                </thead>
                <tbody>

                  @foreach($postData as $key => $data)
                <tr>
                  <td>{{$key}}</td>
                  <td>{{$data->title}}</td>
                  <td>{{$data->subtitle}}</td>
                  <td>{{$data->slug}}</td>
                  <td>{{$data->image}}</td>
                  <td>
                  @can('posts.update',Auth::user())
                   <a href="{{route('post.edit',$data->id)}}"><span class="glyphicon glyphicon-edit"></span></a>
                   @endcan 
                   || 
                    @can('posts.delete',Auth::user())  
                   <form action="{{route('post.destroy',$data->id)}}" method="post" id="delete_form_{{$data->id}}" style="display: none">
                      {{csrf_field()}}
                      {{method_field('DELETE')}}
                     </form>
                     <a href="" onclick="

                      if(confirm('Are sure to delete?'))
                      {
                        event.preventDefault();
                        document.getElementById('delete_form_{{$data->id}}').submit();
                      }
                      else{
                        event.preventDefault();
                      }
                     ">
                        <span class="glyphicon glyphicon-trash"></span></a>
                    </a>
                    @endcan 
                   </td>
                  </tr>
                 @endforeach 

                </tbody>
                <tfoot>
                <tr>
                  <th>Serial No</th>
                  <th>Title</th>
                  <th>Subtitle</th>
                  <th>Slug</th>
                  <th>Body</th>
                  <th>Image</th>
                  <th>Action</th>
                </tr>
                </tfoot>
              </table>
            </div>
            <!-- /.box-body -->
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