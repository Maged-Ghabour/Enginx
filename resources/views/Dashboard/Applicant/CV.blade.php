@extends('layouts.PDF.dashboardPDF')
@section('content')
    <iframe src="{{ asset('uploads/CV/' . $CV->CV) }}" class="w-100" height="600"></iframe>
@endsection
