@extends("layouts.dashboard")

@section("title" ,   "تعديل تصنيف")



    @section("breadcrump")
    @parent
        <li class="breadcrumb-item"><a href="{{route('dashboard.categories.index')}}">التصنيفات</a></li>
        <li class="breadcrumb-item"><a href="{{route('dashboard.categories.edit' , $category->id)}}">تعديل تصنيف</a></li>
    @endsection





@section("content")
<form action="{{route('dashboard.categories.update' , $category->id)}}" method="post" enctype="multipart/form-data">
    @csrf
    @method("put")
    @include("Dashboard.Categories._from")
</form>

@endsection
