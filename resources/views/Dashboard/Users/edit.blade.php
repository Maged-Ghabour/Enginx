@extends('layouts.dashboard')

@section('title', 'تعديل مستخدم')



@section('breadcrump')
    @parent
    <li class="breadcrumb-item"><a href="{{ route('dashboard.users.index') }}">المستخدمين</a></li>
    <li class="breadcrumb-item"><a href="{{ route('dashboard.users.edit', $user->id) }}">تعديل مستخدم</a></li>
@endsection





@section('content')
    <form action="{{ route('dashboard.users.update', $user->id) }}" method="post" enctype="multipart/form-data">
        @csrf
        @method('put')
        @include('Dashboard.Users._from')
    </form>

@endsection
