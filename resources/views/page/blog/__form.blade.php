<div>
  <label><b>Фото</b></label>
  <input type="file" value="{{$model->img}}" name='img' placeholder="Фото" class="form-control" />
  @if (isset($model->files->id))
  уже загружено <a href="{{Storage::disk('public')->url($model->files->small)}}" target="_blank">просмотреть</a>
  @else
  Фото не загружено
  @endif
</div>





<br><br>

<div class="form-group">
  <label for="name">заголовок</label>
  <input type="email" class="form-control" id="name" placeholder="заголовок" name="name" value="{{isset($model->name) ? $model->name: ''}}">
 @if ($errors->has('name'))
  <span class="help-block">
     <strong style='color:#a94442'>{{ $errors->first('name') }}</strong>
   </span>
@endif
</div>



<br><br>
<div>
  <p><b>Опубликовать</b></p>
  <select name="publish" class="form-control">

    <option {{ $model->publish == 1 ? 'selected' : '' }} value="1">активно</option>
    <option {{ $model->publish == 2 ? 'selected' : '' }} value="2">черновик</option>


  </select>
</div>




<br><br>
<div>

  <div class="container-fluid">
    <textarea class="form-control" id="text" name="text">
		  @if($model->text)
		     {{ $model->text }}
	      @else
			@if($model->text)
		        old('text')
	        @endif
		  @endif
		</textarea>
  </div>
  @if ($errors->has('text'))
  <span class="help-block">
     <strong style='color:#a94442'>{{ $errors->first('text') }}</strong>
   </span>
  @endif
</div>


<br><br>



@section('js_block')
@parent
<script>

  CKEDITOR.replace('text', {
    filebrowserUploadMethod: 'form',

  });
</script>

@endsection