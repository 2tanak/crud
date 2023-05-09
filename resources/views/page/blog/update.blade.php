@extends('layouts.master')
@section('title', $title)
@section('content')
<br>
<div class='row'>
    <div class="col-md-9">
        <div class="panel-body">


            <form action="{{ route('blog.update', $model) }}" method="POST" enctype="multipart/form-data" class="need_validate_form " novalidate>
                @include('page.blog.__form')
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <input type="hidden" name="lang" value="{{ app()->getLocale() }}">
				@isset($model->id)
				
                  @method('PUT')
                @endisset
                <button type="submit" class="btn btn-primary pull-left">Обновить</button>

            </form>

        </div>
    </div>


    
</div>
@endsection