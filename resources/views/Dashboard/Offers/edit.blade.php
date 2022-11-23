@extends("layouts.dashboard")

@section("title" ,   "تعديل العرض")



    @section("breadcrump")
    @parent
        <li class="breadcrumb-item"><a href="{{route('dashboard.offers.index')}}">العروض</a></li>
        <li class="breadcrumb-item"><a href="{{route('dashboard.offers.edit' , $offer->id)}}">تعديل العرض</a></li>
    @endsection





@section("content")
<form action="{{route('dashboard.offers.update' , $offer->id)}}" method="post" enctype="multipart/form-data">
    @csrf
    @method("put")
    @include("Dashboard.Offers._from")
</form>

@endsection
