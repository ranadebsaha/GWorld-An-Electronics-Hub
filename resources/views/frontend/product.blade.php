@extends('frontend.layout.main')
@section('main-content')


<div class="d-flex align-content-start flex-wrap m-5">
@foreach($product as $p)
  <div class="p-4">
  <div class="container" style="width: 50rem;">
  <picture>
    <source srcset="{{url('frontend/img/')}}/{{$p->img}}" type="image/svg+xml" />
    <img
        src=""
        class="img-fluid"
        alt="{{$p->alt}}"
    />
  </picture>
  
  <div class="container-body">
    <h5 class="container-title">{{$p->name}}</h5>
    <p class="container-text">{{$p->short_details}}</p>
    <a href="" class="btn btn-primary stretched-link">Go</a>
  <!-- <input class="btn btn-primary stretched-link" type="submit" value="Go"> -->
  </div>
  </div>
  </div>
  @endforeach
</div>


@endsection