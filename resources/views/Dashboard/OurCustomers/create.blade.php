@extends('layouts.dashboard')

@section('title', 'إضافة عميل جديد')



@section('breadcrump')
    @parent
    <li class="breadcrumb-item"><a href="{{ route('dashboard.ourCustomers.index') }}">عملاؤنا</a></li>
    <li class="breadcrumb-item"><a href="{{ route('dashboard.ourCustomers.create') }}">إضافة عميل جديد</a></li>
@endsection





@section('content')
    <form action="{{ route('dashboard.ourCustomers.store') }}" method="post" enctype="multipart/form-data">
        @csrf
        @include('Dashboard.OurCustomers._from')
    </form>

@endsection
