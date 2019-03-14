@extends('admin.layout.admin')
@section('content')
<?php /* <h3>Add Product</h3>
  <div class="row">
  {!! Form::open(['route' => 'product.store' ,'method' => 'post' ,'files' => true]) !!}
  <div class="col-md-8 col-md-offset-3">
  <div class="form-group">
  {{ Form::label('name', 'Name')}}
  {{ Form::text('name', null, array('class'=>'form-control'))}}
  </div>

  <div class="form-group">
  {{ Form::label('description', 'Description')}}
  {{ Form::text('description', null, array('class'=>'form-control'))}}
  </div>
  <div class="form-group">
  {{ Form::label('size', 'Size')}}
  {{ Form::select('size', ['small'=>'Small','medium'=>'Medium','large'=>'Large'],null, array('class'=>'form-control'))}}
  </div>
  <div class="form-group">
  {{ Form::label('category_id', 'category')}}
  {{ Form::select('category_id', $categories ,null, array('class'=>'form-control'))}}
  </div>
  <div class="form-group">
  {{ Form::label('image', 'Image')}}
  {{ Form::file('image', array('class'=>'form-control'))}}
  </div>
  {{ Form::submit('Create', array('class'=>'btn btn-default'))}}
  </div>
  {!! Form::close() !!}
  </div> */ ?>
<div class="row">
    <div class="col-12">
        <div class="card-box">
            <h4 class="m-t-0 header-title">Add Category</h4>
            <p class="text-muted m-b-30 font-14">

            </p>
            <div class="mb-3">
                <div class="row">

                    <div class="offset-9 col-3">
                        <a class="btn btn-secondary waves-light waves-effect pull-right" href="{{route('category.index')}}"><i class="mdi mdi-keyboard-backspace"></i> Back</a>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-12">
                    <div class="p-20">
                        {!! Form::open(['route' => 'category.store' ,'method' => 'post' ,'files' => true]) !!}
                            <div class="form-group row">
                                {{ Form::label('name', 'Name', array('class'=>'col-2 col-form-label'))}}
                                <div class="col-10">
                                    {{ Form::text('name', null, array('class'=>'form-control','placeholder'=>'Category Name'))}}
                                </div>
                            </div>
                            <div class="form-group row">
                                {{ Form::label('slug', 'Slug', array('class'=>'col-2 col-form-label'))}}
                                <div class="col-10">
                                    {{ Form::text('slug', null, array('class'=>'form-control','placeholder'=>'Slug'))}}
                                </div>
                            </div>
                            <div class="form-group row">
                                {{ Form::label('description', 'Description', array('class'=>'col-2 col-form-label'))}}
                                <div class="col-10">
                                    {{ Form::textarea('description', null, array('class'=>'form-control summernote','placeholder'=>'Description'))}}
                                </div>
                            </div>
                            <div class="form-group row">
                                {{ Form::label('parent', 'Parent', array('class'=>'col-2 col-form-label'))}}
                                <div class="col-10">
                                    {{ Form::select('parent', ['small'=>'Small','medium'=>'Medium','large'=>'Large'],null,  array('class'=>'form-control select2','rows'=>5))}}
                                </div>
                            </div>
                            <div class="form-group row">
                                {{ Form::label('meta_description', 'Meta description', array('class'=>'col-2 col-form-label'))}}
                                <div class="col-10">
                                    {{ Form::textarea('description', null, array('class'=>'form-control','placeholder'=>'Meta description'))}}
                                </div>
                            </div>
                            <div class="form-group row">
                                {{ Form::label('image', 'Image', array('class'=>'col-2 col-form-label'))}}
                                <div class="col-10">
                                    {{ Form::textarea('description', null, array('class'=>'form-control','placeholder'=>'Meta description'))}}
                                </div>
                            </div>
                            <div class="form-group row">
                                
                                <div class="offset-2 col-10 ">
                                    {{ Form::submit('Add', array('class'=>'btn btn-info pull-right'))}}
                                </div>
                            </div>
                            
                        {!! Form::close() !!}
                    </div>
                </div>
                
            </div>
            <!-- end row -->

        </div> <!-- end card-box -->
    </div><!-- end col -->
</div>
<!-- end row -->
@endsection
@section('jsfiles')
<script src="{{ asset('plugins/summernote/summernote-bs4.min.js')}}"></script>
<script src="{{ asset('plugins/select2/js/select2.min.js')}}"></script>
<script type="text/javascript">
   (function ($) {
       
        $('input[name="name"]').change(function (){
            $('input[name="slug"]').val(slugify($('input[name="name"]').val()));
        })
        $('.summernote').summernote({
            height: 150,                 // set editor height
            minHeight: null,             // set minimum height of editor
            maxHeight: null,             // set maximum height of editor
            focus: false                 // set focus to editable area after initializing summernote
        });
        $(".select2").select2();
   })(jQuery)
</script>
@endsection
@section('cssfiles')
<link href="{{ asset('plugins/summernote/summernote-bs4.css')}}" rel="stylesheet">
<link href="{{ asset('plugins/select2/css/select2.min.css')}}" rel="stylesheet">
@endsection

