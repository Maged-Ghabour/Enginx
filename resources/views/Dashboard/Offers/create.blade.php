@extends("layouts.dashboard")

@section("title" , "إضافة عرض جديد")



    @section("breadcrump")
    @parent
        <li class="breadcrumb-item"><a href="{{route('dashboard.offers.index')}}">العروض</a></li>
        <li class="breadcrumb-item"><a href="{{route('dashboard.offers.create')}}">إضافة عرض جديد</a></li>
    @endsection





@section("content")
<form action="{{route('dashboard.offers.store')}}" method="post" enctype="multipart/form-data">
    @csrf
    @include("Dashboard.Offers._from")
</form>

@endsection


