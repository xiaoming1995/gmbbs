@extends('layouts.app')
@section('title', '首页')

@section('content')
<div class="row mb-5">

  <div class="col-lg-9 col-md-9 topic-list">


        <div class="jumbotron">
		  <h1 class="display-4">这是一个有灵魂的网站</h1>
		  <hr class="my-4">
		  <p>一直在不断改进,一直不断去进步</p>
		  <a class="btn btn-primary btn-lg" href="{{ route('topics.index') }}" role="button" style="color:#ffffff">去了解一下</a>
		</div>


      
  </div>

  
</div>
@stop