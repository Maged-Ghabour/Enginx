<div class="mb-3">
    <label for="name">اسم التصنيف</label>
    <input type="text" name="name" @class(['form-control', 'is-invalid'=> $errors->has('name')]) value="{{
    $category->name }}" />
    @error('name')
    <div class="invalid-feedback">{{ $message }}</div>
    @enderror
</div>
<div class="mb-3">
    <label for="parent_id">اسم التصنيف التابع</label>
    <select name="parent_id" id="name" @class([ 'form-control p-1' , 'is-invalid'=> $errors->has('parent_id'),
        ])>
        <option value="">التصنيف الرئيسي</option>
        @foreach ($parents as $parent)
        <option value="{{ $parent->id }}" @selected($category->parent_id == $parent->id)>{{ $parent->name }}</option>
        @endforeach
    </select>
    @error('parent_id')
    <div class="invalid-feedback">{{ $message }}</div>
    @enderror
</div>
<div class="mb-3">
    <label for="description">وصف التصنيف</label>
    <textarea name="description" id="description" rows="7" @class([ 'form-control p-1' , 'is-invalid'=> $errors->has('description'),
    ])>{{ $category->description }}</textarea>
    @error('description')
    <div class="invalid-feedback">{{ $message }}</div>
    @enderror
</div>

<div class="mb-3">
    <label for="image">رفع صورة التصنيف</label>
    <input type="file" name="image" id="image" @class(['form-control p-1', 'is-invalid'=> $errors->has('image')]) />

    @error('image')
    <div class="invalid-feedback">{{ $message }}</div>
    @enderror
</div>


@if ($category->image)
<img src="{{ asset('uploads/Categories/' . $category->image) }}" class="img-fluid rounded mb-2 d-block"
    style="height: 150px ; wight:150px" alt="">
@endif

<button type="submit" class="btn btn-primary">حفظ</button>