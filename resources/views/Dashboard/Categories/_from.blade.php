<div class="mb-3">
    <label for="name">اسم التصنيف</label>
    <input type="text" name="name" class="form-control @error('title') is-invalid @enderror" value="{{$category->name}}"/>
    @error("name")
        <div class="invalid-feedback">{{message}}</div>
    @enderror
</div>
<div class="mb-3">
    <label for="parent_id">اسم التصنيف التابع</label>
    <select name="parent_id" id="name" class="form-control p-1">
        <option value="">التصنيف الرئيسي</option>
        @foreach ($parents as $parent)
            <option value="{{$parent->id}}" @selected($category->parent_id == $parent->id)>{{$parent->name}}</option>
        @endforeach
    </select>
</div>
<div class="mb-3">
    <label for="description">وصف التصنيف</label>
        <textarea name="description" id="description"  rows="7" class="form-control">{{$category->description}}</textarea>
</div>
<div class="mb-3">
    <label for="image">رفع صورة التصنيف</label>
    <input type="file" name="image" id="image" class="form-control p-1" />
</div>

@if($category->image)
<img src="{{asset('uploads/Categories/'.$category->image)}}" class="img-fluid rounded mb-2 d-block" style="height: 150px ; wight:150px"  alt="">
@endif

    <button type="submit" class="btn btn-primary">حفظ</button>

