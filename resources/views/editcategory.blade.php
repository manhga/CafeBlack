@extends('layout.index')
@section('content')
<h3 class="box-title">Form thêm loại sản phẩm</h3>
          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse">
              <i class="fa fa-minus"></i></button>
            <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
              <i class="fa fa-times"></i></button>
          </div>
<div class="box-body">
   <div class="row">
      <div class="col">
        @foreach($arr as $key)
          <form novalidate action="{{url('Admin/listcategory/Edit/'.$key->id)}}" method="post" enctype="multipart/form-data">
          <input type="hidden" name="_token" value="{{csrf_token()}}">
          <div class="form-group">
            <h5>Loại sản phẩm <span class="text-danger">*</span></h5>
            <div class="controls">
              <input type="text" name="category" placeholder="{{$key->name}}" class="form-control" required data-validation-required-message="This field is required"> 
            </div>
            
          </div>
          <div class="text-xs-right">
            <button type="submit" class="btn btn-info">Submit</button>
          </div>
        </form>
        @endforeach 
      </div>
    </div>
</div>
@endsection