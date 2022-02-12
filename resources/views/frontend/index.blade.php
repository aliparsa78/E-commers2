
@extends('layouts.front')

@section('title')
 WELCOME TO E-SHOP 
@endsection

@section('content')

@include('layouts.inc.slider')
<div class="py-5">
    <div class="container">
        <div class="row">
            <div class="owl-carousel owl-theme">  
                @foreach($future_product as $item)
                    <div class="item">
                        <div class="card">
                            <img src="{{asset('admin/assets/upload/product/'.$item->image)}}" alt="">
                            <div class="card-body">
                                <h5>{{$item->name}}</h5>
                                <p>{{$item->selling_price}}</p>
                                
                            </div>
                        </div>
                    </div>
                @endforeach 
            </div>
        </div>
    </div>
</div>
@endsection

@section('scripts')
<script>
   $('.owl-carousel').owlCarousel({
    loop:true,
    margin:10,
    nav:true,
    responsive:{
        0:{
            items:1
        },
        600:{
            items:3
        },
        1000:{
            items:5
        }
    }
})
</script>
@endsection