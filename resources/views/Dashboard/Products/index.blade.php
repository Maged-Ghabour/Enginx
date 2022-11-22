@extends("layouts.dashboard")

@section("title" ,"المنتجات")



    @section("breadcrump")
    @parent
        <li class="breadcrumb-item"><a href="{{route('dashboard.products.index')}}">المنتجات</a></li>
    @endsection





@section("content")


<x-alert type="success" color="success" />
<x-alert type="deleted" color="danger" />
<x-alert type="updated" color="primary" />

   <table class="table">
    <thead>
        <th>#</th>
        <th>اسم المنتج</th>
        <th>التصنيف</th>
        <th>سعر المنتج</th>
        <th>الوصف</th>
        <th>الصورة</th>
        <th>تاريخ الاضافة</th>
        <th>التعديل</th>
        <th>الحذف</th>
    </thead>

    <tbody>
        @forelse ($products as $product )

        <tr>
            <td>{{$product->id}}</td>
            <td>{{$product->name}}</td>
            <td>{{$product->category->name}}</td>
            <td>{{$product->price}}</td>
            <td>{{$product->description}}</td>
            <td><img src="{{asset('uploads/Products/'.$product->image)}}" width="70px" height="70px" alt=""></td>

            <td>
                <small class="badge badge-secondary">
                    {{$product->created_at->diffForHumans()}}
                    <li class="far fa-clock"></li>
                </small>
            </td>



            {{-- <td>
                <form action="{{route('dashboard.products.edit' , $product->id)}}" method="get">
                    <button class="btn btn-outline-primary">تعديل</button>
                </form>
            </td> --}}

            <td>
                <a class="btn btn-outline-primary" href="{{route('dashboard.products.edit' , $product->id )}}">تعديل</a>
            </td>
            <td>
                <form action="{{route('dashboard.products.destroy' , $product->id )}}" method="post">
                    @method("delete")
                    @csrf
                    <button class="btn btn-outline-danger">حذف</button>
                </form>
            </td>

        </tr>


        @empty

            <tr>
                <td colspan="9" class="text-center bg-dark text-white font-weight-bold" >لا يوجد منتجات متاحة</td>
            </tr>
        @endforelse


    </tbody>



   </table>
@endsection
