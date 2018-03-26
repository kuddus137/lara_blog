 <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p>{{Auth::user()->name}}</p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>
      <!-- search form -->
      <form action="#" method="get" class="sidebar-form">
        <div class="input-group">
          <input type="text" name="q" class="form-control" placeholder="Search...">
          <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
        </div>
      </form>
      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">MAIN NAVIGATION</li>
        <li class="active treeview">
          <a href="#">
            <i class="fa fa-dashboard"></i> <span>Dashboard</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li class="active"><a href="{{route('post.index')}}"><i class="fa fa-circle-o"></i>Post Show</a></li>
            
            @can('posts.tag',Auth::user())
              <li class="active"><a href="{{route('tag.index')}}"><i class="fa fa-circle-o"></i>Tag Show</a></li>
            @endcan

            @can('posts.category',Auth::user())
              <li class="active"><a href="{{route('category.index')}}"><i class="fa fa-circle-o"></i>Category Show</a></li>
             @endcan
            <li class="active"><a href="{{route('user.index')}}"><i class="fa fa-circle-o"></i>Users</a></li>
            <li class="active"><a href="{{route('role.index')}}"><i class="fa fa-circle-o"></i>Role Show</a></li>
            <li class="active"><a href="{{route('permission.index')}}"><i class="fa fa-circle-o"></i>Permission Show</a></li>
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-files-o"></i>
            <span>Create Option</span>
             <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li> <a href="{{route('post.create')}}"><i class="fa fa-circle-o"></i>Post Create</a></li>

            @can('posts.tag',Auth::user())
            <li><a href="{{route('tag.create')}}"><i class="fa fa-circle-o"></i>Tag Create</a></li>
            @endcan

            @can('posts.category',Auth::user())
            <li><a href="{{route('category.create')}}"><i class="fa fa-circle-o"></i>Category Create</a></li>
            @endcan
            <li><a href="{{route('role.create')}}"><i class="fa fa-circle-o"></i>Role Create</a></li>

            <li><a href="{{route('user.create')}}"><i class="fa fa-circle-o"></i>User Create</a></li>

          </ul>
        </li>
        
        
     
      

        
       
   
       
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>