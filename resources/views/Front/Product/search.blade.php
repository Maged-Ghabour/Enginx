@forelse ($prodcuts as $prodcut)
    <h1 class="list-unstyled ml-3">
        <a href="{{ route('Product.show', $prodcut->id) }}">{{ $prodcut->name }}</a>
    </h1>
@empty
    <p class="ml-3">No Contributed Data</p>
@endforelse

