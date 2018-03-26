@extends('user/app')

@section('bg-img', asset('user/img/home-bg.jpg'))

@section('banner-title','Personal Blog')
@section('banner-qoute','This is personal Blog')
@section('main-content')

<style>
  .like{font-size: 25px; color: green;cursor: pointer;}
</style>
    <!-- Main Content -->
    <div class="container">
      <div class="row" id="app">
        <div class="col-lg-8 col-md-10 mx-auto">
          
          <posts 
          
            v-for="value in blog"
            :title=value.title
            :subtitle=value.subtitle
            :created_at=value.created_at
            :key=value.index
            :post-id=value.id
            log-in = "{{Auth::check()}}"
            :likes=value.likes.length
            :slug=value.slug

            ></posts>
          <hr>
    
    
          <hr>
          <!-- Pager -->
          <div class="clearfix">
            {{$posts->links()}}
            
          </div>
        </div>
      </div>
    </div>


@endsection