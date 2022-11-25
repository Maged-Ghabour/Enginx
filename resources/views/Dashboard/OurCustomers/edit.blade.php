@extends('layouts.dashboard')

@section('title', 'تعديل تصنيف')



@section('breadcrump')
    @parent
    <li class="breadcrumb-item"><a href="{{ route('dashboard.ourCustomers.index') }}">عملاؤنا</a></li>
    <li class="breadcrumb-item"><a href="{{ route('dashboard.ourCustomers.edit', $customer->id) }}">تعديل عميل</a></li>
@endsection





@section('content')
    <form action="{{ route('dashboard.ourCustomers.update', $customer->id) }}" method="post" enctype="multipart/form-data">
        @csrf
        @method('put')
        @include('Dashboard.OurCustomers._from')
    </form>

@endsection
