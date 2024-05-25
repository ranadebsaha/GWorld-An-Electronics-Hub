@extends('frontend.layout.main')
@section('main-content')

<div class="d-flex align-content-start flex-wrap m-5">
 @foreach($gadget as $g)
  <div class="p-4">
  <div class="card" style="width: 18rem;">
  <img src="{{url('frontend/img/')}}/{{$g->img}}" class="card-img-top img-card" alt="{{$g->alt}}">
  <div class="card-body">
    <h5 class="card-title">{{$g->name}}</h5>
    <p class="card-text">{{$g->details}}</p>
    <a href="{{url('/company/')}}/{{$g->catagory}}" class="btn btn-primary stretched-link">Go</a>
  <!-- <input class="btn btn-primary stretched-link" type="submit" value="Go"> -->
  </div>
  </div>
  </div>
@endforeach
</div> 

@endsection