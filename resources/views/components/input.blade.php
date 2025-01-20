<div>
    <div class="row mb-3">
        <label for="inputEmail3" class="col-sm-2 col-form-label">{{$label}}</label>
        <div class="col-sm-10">
          <input type={{$type}} class="form-control border-success" name={{$name}} value="{{old('name')}}">
          {{-- <span class="text-danger">
            @error('name')
                {{$message}}
            @enderror
          </span> --}}
        </div>
      </div>
</div>
