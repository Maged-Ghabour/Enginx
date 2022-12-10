{{-- <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title> --}}

{{-- <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>  --}}

{{-- <body> --}}
{{-- @dd($user) --}}
@extends('Front.layouts.app')
@section('content')
    @foreach ($user as $user)
        <div class=" mt-7">
            <div class="row">
                <div class="col-xl-8 m-auto order-xl-2 mb-5 mb-xl-0">
                    <div class="card card-profile shadow">
                        <div class="row justify-content-center">
                            <div class="col-lg-3 order-lg-2">
                                <div class="card-profile-image">
                                    <a href="#">
                                        <img width="100px" height="100px" src="{{ asset('uploads/User/' . $user->image) }}"
                                            class="rounded-circle">
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="card-body pt-0 pt-md-4 text-center mt-5">
                            <div class="row mt-3">
                                <div class="col">
                                    <div class="heading">
                                        <form action="{{ route('profile.edit_name', $user->id) }}" method="POST">
                                            @csrf
                                            <button type="submit" class="btn btn-link text-decoration-none"
                                                style="color: rgb(70, 68, 68);">
                                                {{ $user->name }}
                                                <div class="btn btn-light">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                        fill="currentColor" class="bi bi-pencil " viewBox="0 0 16 16">
                                                        <path
                                                            d="M12.146.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1 0 .708l-10 10a.5.5 0 0 1-.168.11l-5 2a.5.5 0 0 1-.65-.65l2-5a.5.5 0 0 1 .11-.168l10-10zM11.207 2.5 13.5 4.793 14.793 3.5 12.5 1.207 11.207 2.5zm1.586 3L10.5 3.207 4 9.707V10h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.293l6.5-6.5zm-9.761 5.175-.106.106-1.528 3.821 3.821-1.528.106-.106A.5.5 0 0 1 5 12.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.468-.325z" />
                                                    </svg>
                                                </div>
                                            </button>
                                        </form>
                                    </div>
                                    <div class="heading">
                                        <form action="{{ route('profile.edit_email', $user->id) }}" method="post">
                                            @csrf
                                            <button type="submit" class="btn btn-link text-decoration-none"
                                                style="color: rgb(70, 68, 68);">
                                                {{ $user->email }}
                                                <div class="btn btn-light">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                        fill="currentColor" class="bi bi-pencil " viewBox="0 0 16 16">
                                                        <path
                                                            d="M12.146.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1 0 .708l-10 10a.5.5 0 0 1-.168.11l-5 2a.5.5 0 0 1-.65-.65l2-5a.5.5 0 0 1 .11-.168l10-10zM11.207 2.5 13.5 4.793 14.793 3.5 12.5 1.207 11.207 2.5zm1.586 3L10.5 3.207 4 9.707V10h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.293l6.5-6.5zm-9.761 5.175-.106.106-1.528 3.821 3.821-1.528.106-.106A.5.5 0 0 1 5 12.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.468-.325z" />
                                                    </svg>
                                                </div>
                                            </button>
                                        </form>
                                    </div>
                                    <div class="heading">
                                        <form action="{{ route('profile.edit_phone', $user->id) }}" method="get">
                                            @csrf
                                            <button type="submit" class="btn btn-link text-decoration-none"
                                                style="color: rgb(70, 68, 68);">
                                                {{ $user->phone }}
                                                <div class="btn btn-light">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                        fill="currentColor" class="bi bi-pencil " viewBox="0 0 16 16">
                                                        <path
                                                            d="M12.146.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1 0 .708l-10 10a.5.5 0 0 1-.168.11l-5 2a.5.5 0 0 1-.65-.65l2-5a.5.5 0 0 1 .11-.168l10-10zM11.207 2.5 13.5 4.793 14.793 3.5 12.5 1.207 11.207 2.5zm1.586 3L10.5 3.207 4 9.707V10h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.293l6.5-6.5zm-9.761 5.175-.106.106-1.528 3.821 3.821-1.528.106-.106A.5.5 0 0 1 5 12.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.468-.325z" />
                                                    </svg>
                                                </div>
                                            </button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body pt-0 pt-md-4 ">
                                <div class="row">
                                    <div class="col">
                                    </div>
                                    <div class="col">
                                    </div>
                                </div>
                                <div class="text-center">
                                    <h3>
                                        Jessica Jones<span class="font-weight-light">, 27</span>
                                    </h3>
                                    <div class="h5 font-weight-300">
                                        <i class="ni location_pin mr-2"></i>Bucharest, Romania
                                    </div>
                                    <div class="h5 mt-4">
                                        <i class="ni business_briefcase-24 mr-2"></i>Solution Manager - Creative Tim
                                        Officer
                                    </div>
                                    <div>
                                        <i class="ni education_hat mr-2"></i>University of Computer Science
                                    </div>
                                    <hr class="my-4">

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endforeach
@endsection
