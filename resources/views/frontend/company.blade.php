@extends('frontend.layout.main')
@section('main-content')

<div class="d-flex align-content-start flex-wrap m-5">
 @foreach($company as $c)
  <div class="p-4">
  <div class="card" style="width: 18rem;">
  <img src="{{url('frontend/img/')}}/{{$c->img}}" class="card-img-top img-card" alt="{{$c->alt}}">
  <div class="card-body">
    <h5 class="card-title">{{ucwords($c->name)}}</h5>
    <p class="card-text">{{$c->details}}</p>
    <a href="{{url('/')}}/{{$c->name}}/{{$gadget}}" class="btn btn-primary stretched-link">Go</a>
  <!-- <input class="btn btn-primary stretched-link" type="submit" value="Go"> -->
  </div>
  </div>
  </div>
@endforeach
</div> 

@endsection