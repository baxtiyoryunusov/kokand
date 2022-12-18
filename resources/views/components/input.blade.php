@error($filed)
<p class="text-danger  m-0"
   style=" ">{{ $message }}</p>
@enderror
<div class="form-floating   my-2">
    <input type="{{$type}}" id="{{$id}}" name="{{$filed}}"  {{$attr}}
           class="form-control  @error($filed) is-invalid   @enderror  {{$class}}"  placeholder="{{$placeholder}}"
           value="{{old($filed)?old($filed):$value}}">

    <label for="{{$id}}"> <span class="text-danger">{{$yulduz=='true'?'*':''}} </span>{{$label}}</label>
</div>
