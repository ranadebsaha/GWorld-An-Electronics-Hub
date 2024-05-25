@extends('frontend.layout.main')
@section('main-content')

<div class="d-flex align-content-start flex-wrap m-5">
 @foreach($product as $p)
  <div class="p-4">
  <div class="card" style="width: 18rem;">
  <img src="{{url('frontend/img/')}}/{{$p->img}}" class="card-img-top img-card" alt="{{$p->alt}}">
  <div class="card-body">
    <h5 class="card-title">{{$p->name}}</h5>
    <p class="card-text">{{$p->short_details}}</p>
    <a href="{{url('/')}}/{{$company}}/{{$gadget}}/{{$p->name}}" class="btn btn-primary stretched-link">Go</a>
  <!-- <input class="btn btn-primary stretched-link" type="submit" value="Go"> -->
  </div>
  </div>
  </div>
@endforeach
</div> 

@endsection