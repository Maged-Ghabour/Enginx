@extends('Front.layouts.app')


@section('job')
    <div class="container">
        <div class="m-5">
            <h1 class="display-1 text-danger">
                الوظائف :-
            </h1>
        </div>
        <div class="row justify-content-center  pt-5">
            @foreach ($jops as $jop)
                <div class="col-6 mx-auto ">
                    <div class="col-12 ">
                        <div class="card p-5 border-0">
                            <a href="{{ route('show', $jop->id) }}">
                                <img src="{{ asset('uploads/jops/' . $jop->image) }}" style="width: 50rem;"
                                    class="img rounded-3 card-img-top" alt="...">
                            </a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
    <div class="d-flex justify-content-center m-5">
        <div class="col-4 d-flex justify-content-center"> {{ $jops->Links() }} </div>
    </div>
@endsection
