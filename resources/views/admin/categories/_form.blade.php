<div class="row mb-3">
    <label for="name-{{$lang}}" class="col-sm-2 col-form-label ">{{ __('Name') }}</label>
    <div class="col-sm-10">
        @php
            $tran = $category->translate($lang)->first();
        @endphp
        <input type="text" class="form-control @error('name') is-invalid @enderror"
               id="name-{{$lang}}" name="name[{{$lang}}]" value="{{old('name[$lang]', ($tran)?$tran->name:'')}}">
        @error('name')
        <div class="invalid-feedback">{{ $message }}</div>
        @enderror
    </div>
</div>

<div class="row mb-3">
    <label for="description-{{$lang}}" class="col-sm-2 col-form-label">{{ __('Description') }}</label>
    <div class="col-sm-10">
      <textarea rows="8" cols="" class="form-control" id="description-{{$lang}}"
                name="description[{{$lang}}]">{{old('description[$lang]', ($tran)?$tran->description:'')}}</textarea>
    </div>
</div>
