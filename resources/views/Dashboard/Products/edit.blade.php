@extends("layouts.dashboard")

@section("title" ,   "تعديل تصنيف")



    @section("breadcrump")
    @parent
        <li class="breadcrumb-item"><a href="{{route('dashboard.products.index')}}">التصنيفات</a></li>
        <li class="breadcrumb-item"><a href="{{route('dashboard.products.edit' , $product->id)}}">تعديل تصنيف</a></li>
    @endsection





@section("content")
<form action="{{route('dashboard.products.update' , $product->id)}}" method="post" enctype="multipart/form-data">
    @csrf
    @method("put")
    @include("Dashboard.Products._from")
</form>

@endsection
