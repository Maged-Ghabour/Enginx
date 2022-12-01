@extends('layouts.dashboard')

@section('title', 'كل الطلبات')



@section('breadcrump')
    @parent
    <li class="breadcrumb-item"><a href="{{ route('dashboard.orders.index') }}">الطلبات</a></li>

    </li>
@endsection





@section('content')
    <x-alert type="success" color="success" />
    <x-alert type="deleted" color="danger" />
    <x-alert type="updated" color="primary" />
    <table class="table">
        <thead>
            <th>رقم الطلب</th>
            <th>اسم العميل</th>
            <th>هاتف العميل</th>
            <th>تاريخ الاضافة</th>
            <th>التعديل</th>
            <th>الحذف</th>
        </thead>

        <tbody>
            @forelse ($orders as $order)
                <tr>
                    <td><a href="{{ route('dashboard.orders.show', $order->id) }}"> {{ $order->order_number }}</a></td>
                    <td>{{ $order->customer_name }}</td>
                    <td>{{ $order->customer_mobile }}</td>
                    <td>{{ $order->created_at->diffForHumans() }}</td>
                    <td>
                        <form action="{{ route('dashboard.orders.edit', $order->id) }}" method="get">
                            <button class="btn btn-outline-primary">تعديل</button>
                        </form>
                    </td>
                    <td>
                        <form action="{{ route('dashboard.orders.destroy', $order->id) }}" method="post">
                            @method('delete')
                            @csrf
                            <button class="btn btn-outline-danger">حذف</button>
                        </form>
                    </td>

                </tr>


            @empty

                <tr>
                    <td colspan="9" class="text-center bg-dark text-white font-weight-bold">لا يوجد طلبات حاليا</td>
                </tr>
            @endforelse


        </tbody>



    </table>

@endsection
