@extends("layouts.dashboard")

@section("title" , "التصنيفات المتاحة")



    @section("breadcrump")
    @parent
        <li class="breadcrumb-item"><a href="{{route('dashboard.categories.index')}}">التصنيفات</a></li>
    @endsection





@section("content")

@if (session()->has("success"))
    <div class="alert alert-success">{{session("success")}}</div>
@endif

@if (session()->has("deleted"))
    <div class="alert alert-danger">{{session("deleted")}}</div>
@endif

@if (session()->has("updated"))
    <div class="alert alert-primary">{{session("updated")}}</div>
@endif



   <table class="table">
    <thead>
        <th>#</th>
        <th>اسم التصنيف</th>
        <th>اسم التصنيف التابع</th>
        <th>الوصف</th>
        <th>الصورة</th>
        <th>تاريخ الاضافة</th>
        <th>التعديل</th>
        <th>الحذف</th>
    </thead>

    <tbody>
        @forelse ($categories as $category )

        <tr>
            <td>{{$category->id}}</td>
            <td>{{$category->name}}</td>
            <td>{{$category->parent_id}}</td>
            <td>{{$category->description}}</td>
            <td><img src="{{asset('uploads/Categories/'.$category->image)}}" width="70px" height="70px" alt=""></td>

            <td>{{$category->created_at->diffForHumans()}}</td>
            {{-- <td>
                <form action="{{route('dashboard.categories.edit' , $category->id)}}" method="get">
                    <button class="btn btn-outline-primary">تعديل</button>
                </form>
            </td> --}}

            <td>
                <a class="btn btn-outline-primary" href="{{route('dashboard.categories.edit' , $category->id )}}">تعديل</a>
            </td>
            <td>
                <form action="{{route('dashboard.categories.destroy' , $category->id )}}" method="post">
                    @method("delete")
                    @csrf
                    <button class="btn btn-outline-danger">حذف</button>
                </form>
            </td>

        </tr>


        @empty

            <tr>
                <td colspan="8" class="text-center bg-dark text-white font-weight-bold" >لا يوجد تصنيفات متاحة</td>
            </tr>
        @endforelse


    </tbody>



   </table>
@endsection
