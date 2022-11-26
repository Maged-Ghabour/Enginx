<div class="mb-3">
    <label for="name">اسم المنتج</label>
    <input type="text" name="name" @class(['form-control', 'is-invalid' => $errors->has('name')]) value="{{ $product->name }}" />
    @error('name')
        <div class="invalid-feedback">{{ $message }}</div>
    @enderror
</div>

<div class="mb-3">
    <label for="category_id"> التصنيف </label>
    <select name="category_id" id="name" @class([
        'form-control p-1',
        'is-invalid' => $errors->has('category_id'),
    ])>
        <option value="" disabled> </option>
        @foreach ($categories as $category)
            <option value="{{ $category->id }}" @selected($product->category_id == $category->id)>{{ $category->name }}</option>
        @endforeach
    </select>
    @error('category_id')
        <div class="invalid-feedback">{{ $message }}</div>
    @enderror
</div>



<div class="mb-3">
    <label for="price">سعر المنتج</label>
    <input type="text" name="price" @class(['form-control', 'is-invalid' => $errors->has('price')]) value="{{ $product->price }}" />
    @error('price')
        <div class="invalid-feedback">{{ $message }}</div>
    @enderror
</div>

<div class="mb-3">
    <label for="compare_price">سعر المنتج بعد الخصم</label>
    <input type="text" name="compare_price" @class([
        'form-control',
        'is-invalid' => $errors->has('compare_price'),
    ]) value="{{ $product->price }}" />
    @error('compare_price')
        <div class="invalid-feedback">{{ $message }}</div>
    @enderror
</div>



<div class="mb-3">
    <label for="editor">وصف المنتج</label>
    <textarea name="description" id="editor" rows="7" @class([
        'form-control p-1',
        'is-invalid' => $errors->has('description'),
    ])>{{ $product->description }}</textarea>
    @error('description')
        <div class="invalid-feedback">{{ $message }}</div>
    @enderror
</div>

<div class="mb-3">
    <label for="image">رفع صورة المنتج</label>
    <input type="file" name="image" id="image" @class(['form-control p-1', 'is-invalid' => $errors->has('image')]) />

    @error('image')
        <div class="invalid-feedback">{{ $message }}</div>
    @enderror
</div>


@if ($product->image)
    <img src="{{ asset('uploads/Products/' . $product->image) }}" class="img-fluid rounded mb-2 d-block"
        style="height: 150px ; wight:150px" alt="">
@endif

<button type="submit" class="btn btn-primary mb-2">حفظ</button>
