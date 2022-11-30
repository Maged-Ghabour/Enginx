@extends('Front.layouts.app')


@section('job')
    <div class="text-danger p-5 fw-bold  col-5">
        <p class="d-block display-2 font-weight-bold text-center">{{ $jop->name }}</p>
    </div>
    <div class="text-center display-3 pb-5 ">{{ $jop->name }}</div>
    <div class="col-12 pb-5">
        <img src="{{ asset('uploads/jops/' . $jop->image) }}"width="600px"
            class="img rounded mx-auto d-block img-fluid rounded-top" alt="">
    </div>
    <div class="col-5 mt-5 pt-5">
        <p class="d-block h1 text-center ">الوصف الوظيفى</p>
    </div>
    <div class="col-8 mx-auto d-flex ">
        <div class="mt-5"><?= $jop->jopdescription ?></div>
    </div>
    <div class="col-5 mt-5 pt-5">
        <p class="d-block h1 text-center">
            <u>
                المتطلبات الوظيفية
            </u>
        </p>
    </div>
    <div class="col-8 mx-auto d-flex pb-5">
        <div class="mt-5 ">
            <?= $jop->joprequirement ?>
        </div>
    </div>
    <hr width="75%" class="hr">
    <div class="text-danger p-5  col-5">
        <p class="d-block display-4 font-weight-bold text-center">تقديم للوظيفة</p>
    </div>
    <div class="col-8 mx-auto">
        <form action="{{ route('store') }}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="form-group  p-5">
                <label for="exampleInputEmail1" class="form-label font-weight-bold">الاسم بالكامل</label>
                <input type="text" name="name" @class(['form-control', 'is-invalid' => $errors->has('name')]) id="exampleInputEmail1"
                    aria-describedby="emailHelp">
                @error('name')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group p-5">
                <label for="exampleFormControlFile1" class="font-weight-bold">ارسال السيرة الذاتية</label>
                <input type="file" name="CV" class="form-control-file" id="exampleFormControlFile1">
                @error('CV')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <input type="hidden" name="id" value="{{ $jop->id }}">
            <div class="col-12 text-center py-5">
                <button type="submit" class="btn btn-danger w-25" style="height: 50px; font-size:30px;">ارسال</button>
            </div>
        </form>
    </div>
    <div>
        {{-- @foreach ( as )

        @endforeach --}}
    </div>
@endsection
