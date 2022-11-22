@extends("layouts.dashboard")

@section("title" , "التصنيفات المتاحة")



    @section("breadcrump")
    @parent
        <li class="breadcrumb-item"><a href="{{route('dashboard.categories.index')}}">التصنيفات</a></li>
    @endsection





@section("content")



<x-alert type="success" color="success" />
<x-alert type="deleted" color="danger" />
<x-alert type="updated" color="primary" />

   <table class="table">
    <thead>
        <th>#</th>
        <th>اسم التصنيف</th>
        <th>اسم التصنيف التابع</th>
        <th>عدد المنتجات</th>
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
            <td><a href="{{route('dashboard.categories.show' , $category->id)}}"> {{$category->name}}</a></td>
            <td>{{$category->parent->name}}</td>
            <td>{{$category->products_count}}</td>
            <td>{{$category->description}}</td>

            <td><img src="{{asset('uploads/Categories/'.$category->image)}}" width="70px" height="70px" alt=""></td>

            <td>
                <small class="badge badge-secondary">
                    {{$category->created_at->diffForHumans()}}
                    <li class="far fa-clock"></li>
                </small>
            </td>
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
                <td colspan="9" class="text-center bg-dark text-white font-weight-bold" >لا يوجد تصنيفات متاحة</td>
            </tr>
        @endforelse


    </tbody>



   </table>
@endsection
