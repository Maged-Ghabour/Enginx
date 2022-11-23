@extends('layouts.dashboard')
@section('content')
    <form action="{{ route('dashboard.jobs.store') }}" method="post" enctype="multipart/form-data">
        @csrf
        @include('Dashboard.Jobs.Form')
    </form>
@endsection
