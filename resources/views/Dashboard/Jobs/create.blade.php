@extends("layouts.dashboard")

@section("title" , "إضافة تصنيف جديد")



    @section("breadcrump")
    @parent
        <li class="breadcrumb-item"><a href="{{route('dashboard.categories.index')}}">الوظائف</a></li>
        <li class="breadcrumb-item"><a href="{{route('dashboard.categories.create')}}">إضافة تصنيف جديد</a></li>
    @endsection





@section("content")
<form action="{{route('dashboard.categories.store')}}" method="post" enctype="multipart/form-data">
    @csrf
    @include("Dashboard.Categories._from")
</form>

@endsection
