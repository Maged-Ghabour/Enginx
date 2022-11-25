@extends('layouts.dashboard')

@section('title', 'إضافة مستخدم جديد')



@section('breadcrump')
    @parent
    <li class="breadcrumb-item"><a href="{{ route('dashboard.users.index') }}">المستخدمين</a></li>
    <li class="breadcrumb-item"><a href="{{ route('dashboard.users.create') }}">إضافة مستخدم جديد</a></li>
@endsection





@section('content')
    <form action="{{ route('dashboard.users.store') }}" method="post" enctype="multipart/form-data">
        @csrf
        @include('Dashboard.Users._from')
    </form>

@endsection
