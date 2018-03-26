@extends('user/app')

@section('bg-img', Storage::disk('local')->url($posts->image))

@section('banner-title',$posts->title)
@section('banner-qoute',$posts->subtitle)

@section('main-content')
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = 'https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.12&appId=475095052888682&autoLogAppEvents=1';
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

 <!-- Post Content -->
    <article>
      <div class="container">
        <div class="row">
          <div class="col-lg-8 col-md-10 mx-auto">
          	<small class="pull-left">Created at {{$posts->created_at}}</small>
              @foreach($posts->categories as $post)
          	 <a href="{{url('/post/category')}}/{{$post->slug}}">
            <small class="pull-right" style="margin-left: 20px;border: 1px solid gray; border-radius: 5px;padding: 5px;">
                {{$post->name}}
          	</small>
            </a>
              @endforeach
           <span style="text-align: justify;">{!! htmlspecialChars_decode($posts->body)!!}</span>
			
			<h2>Tags are...</h2>
            <a href="{{url('/post/tag')}}/{{$post->slug}}">
              @foreach($posts->tags as $tag)
           	<small class="pull-left" style="margin-left: 20px;border: 1px solid gray; border-radius: 5px;padding: 5px;">
          			{{$tag->name}}
          	</small>
              @endforeach
            </a>
          </div>
          <div class="fb-comments" data-href="{{Request::url()}}" data-numposts="5"></div>
        </div>
      </div>
    </article>

@endsection