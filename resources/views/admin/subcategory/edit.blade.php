@extends('admin.layout')
@section('baslik','SubCategory Edit')

@section('content')

    <div class="row">


        <div class="col-md-12" >

            @if(count($errors)>0)

                <div class="alert alert-danger">
                    @foreach($errors->all() as $error)
                        <li>{{$error}}</li>

                    @endforeach
                </div>


            @endif
            {!! Form::open(array('route' => ['subcategory.update',$cat->id], 'class' => 'form','files'=>'true','method'=>'put')) !!}
                {{ Form::hidden('category_id', $cat->category_id) }}
            <div class="form-group">
                {!! Form::label('Subcategory Name') !!}
                {!! Form::text('name', $cat->name,
                    array('class'=>'form-control',
                          'placeholder'=>'Name')) !!}
            </div>

            <div class="form-group">
                {!! Form::label('Description') !!}
                {!! Form::text('desc', $cat->desc,
                    array('class'=>'form-control',
                          'placeholder'=>'Desc')) !!}
            </div>
<div class="row">
            <div class="form-group">

        <div class="col-md-4"> {!! Form::label('Category Image') !!} {!! Form::file('image', null) !!}</div>
                <div class="col-md-8"></div>
             @if($cat->image)   <img src="{{asset('themes/images/'.$cat->image)}}" width="100" class="img-responsive img-thumbnail">

                 @else
                    <img src="{{asset('themes/images/no.png')}}" width="100" class="img-responsive img-thumbnail">

          @endif

            </div>
            </div>
    </div>
            <div class="form-group">
                {{ Form::checkbox('active') }}   {!! Form::label('Active') !!}

            </div>


            <div class="form-group">
                {!! Form::submit('Save',
                  array('class'=>'btn btn-primary')) !!}
            </div>
            {!! Form::close() !!}



        </div>



    </div>











@endsection

