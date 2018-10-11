@extends("admin.admin_app")

@section("content")

<div id="main">
	<div class="page-header">
		<h2> {{ isset($type->name) ? 'Edit: '. $type->name : 'Add Type' }}</h2>
		
		<a href="{{ URL::to('admin/types') }}" class="btn btn-default-light btn-xs"><i class="md md-backspace"></i> Back</a>
	  
	</div>
	@if (count($errors) > 0)
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
	@endif
	 @if(Session::has('flash_message'))
				    <div class="alert alert-success">
				    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        
<span aria-hidden="true">&times;</span></button>
				        {{ Session::get('flash_message') }}
				    </div>
	@endif
   
   	<div class="panel panel-default">
            <div class="panel-body">
                {!! Form::open(array('url' => array('admin/types/addtype'),'class'=>'form-horizontal padding-15','name'=>'type_form','id'=>'type_form','role'=>'form','enctype' => 'multipart/form-data')) !!}
                <input type="hidden" name="id" value="{{ isset($type->id) ? $type->id : null }}">
                <div class="form-group">
                    <label for="" class="col-sm-3 control-label">Наименование</label>
                      <div class="col-sm-9">
                        <input type="text" name="name" value="{{ isset($type->name) ? $type->name : null }}" class="form-control">
                    </div>
                </div>

                <div class="form-group">
                    <label for="" class="col-sm-3 control-label">Тип</label>
                <select class="form-control" name="type">
                    @if (isset($type->type))
                        <option value="0" @if($type->type == 0) selected = "" @endif>radio</option>
                        <option value="1" @if($type->type == 1) selected = "" @endif>checkbox</option>
                    @else
                        <option value="0" >radio</option>
                        <option value="1" >checkbox</option>
                    @endif
                </select>
                </div>

                <div class="form-group">
                    <label for="" class="col-sm-3 control-label">Родительская категория</label>
                    <select class="form-control" name="parent_id">
                        <option value="0">-- без родительской категории --</option>
                        @include('admin.pages.owner.type', ['categories' => $categories])
                    </select>
                </div>


                <hr>
                <div class="form-group">
                    <div class="col-md-offset-3 col-sm-9 ">
                    	<button type="submit" class="btn btn-primary">{{ isset($type->id) ? 'Edit Type ' : 'Add Type' }}</button>
                         
                    </div>
                </div>
                
                {!! Form::close() !!} 
            </div>
        </div>
   
    
</div>

@endsection