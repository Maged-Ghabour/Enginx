@extends('Front.layouts.app')

@section('title', 'Categories')

@section('content')
    {{-- Start Showing Products  --}}

    <div class="container mt-3  mb-3 pb-4">
        <div class="section-title">
            <h2> Avilable Categories</h2>
        </div>
        <div class="row mt-3 mb-3">
            @forelse ($categories as $category)
                <div class="col-lg-3 course_box">
                    <div class="card mt-3">
                        <div class="card-body text-center">
                            <img class="img-fluid image-cover" src="{{ asset('uploads/Categories/' . $category->image) }}"
                                alt="" width="600" height="600">

                            <div class="category-description">
                                <div class="category-groups">
                                    <div class="category-title" itemprop="name"><a
                                            href="{{ route('Category.show', $category->id) }}">{{ $category->name }}</a>
                                    </div>
                                    <div class="category-title" itemprop="name">
                                        <p>{{ $category->description }}</p>
                                    </div>
                                </div>
                                <div class="mt-3">
                                    <a href="{{ route('Category.show', $category->id) }}"
                                        class="btn btn-primary d-flex justify-content-center" data-link-action="quickview">
<<<<<<< HEAD
                                        <i class="fa fa-search mt-1"></i>
=======
>>>>>>> dc1f65306cddfbc59a41896ce032bca00a4bf7e2
                                        <span>Show Category </span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            @empty
                <p class="text-danger">No avilable Categories </p>
            @endforelse
        </div>
    </div>
    <div class="d-flex justify-content-center  w-100 p-5">
        {{ $categories->links() }}
    </div>
    {{-- End Showing Products --}}
@endsection
