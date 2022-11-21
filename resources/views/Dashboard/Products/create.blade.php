@extends("layouts.dashboard")

@section("title" , "إضافة منتج جديد")



    @section("breadcrump")
    @parent
        <li class="breadcrumb-item"><a href="{{route('dashboard.products.index')}}">المنتجات</a></li>
        <li class="breadcrumb-item"><a href="{{route('dashboard.products.create')}}">إضافة منتج جديد</a></li>
    @endsection





@section("content")
<form action="{{route('dashboard.products.store')}}" method="post" enctype="multipart/form-data">
    @csrf
    @include("Dashboard.Products._from")
</form>

@endsection
