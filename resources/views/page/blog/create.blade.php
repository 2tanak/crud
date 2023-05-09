@extends('layouts.master')

@section('title', $title)


@section('content')
    <div class="row">
		<div class="col-md-9">
            <div class="panel panel-flat">
                <div class="panel-heading">
				    
                </div>
                <div class="panel-body">
                    <form action="{{route('blog.store')}}" method="post" enctype="multipart/form-data" class="need_validate_form " novalidate>
                 
		
                        @include('page.blog.__form')
                        
                        <button type="submit" class="btn btn-primary pull-left">сохранить</button>
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    </form>
					<br>
                </div>
            </div>
        </div>
    </div>
@endsection




