@extends('admin.layout')
@section('baslik','Slider')
@section('content')

    <div class="row">

@if(count($errors)>0)

    has error


    @endif

<div class="col-md-12" >

        {!! Form::open(array('route' => 'saveSlider', 'class' => 'form','files'=>'true')) !!}

        <div class="form-group">
            {!! Form::label('Description') !!}
            {!! Form::text('desc', null,
                array('class'=>'form-control',
                      'placeholder'=>'Description')) !!}
        </div>



        <div class="form-group">
            {!! Form::label('Slider Image') !!}
            {!! Form::file('image', null) !!}
        </div>

        <div class="form-group">
            {!! Form::label('Order') !!}
            {!! Form::text('order', null,
                array('class'=>'form-control',
                      'placeholder'=>'Order')) !!}
        </div>


        <div class="form-group">
            {!! Form::submit('Save',
              array('class'=>'btn btn-primary')) !!}
        </div>
        {!! Form::close() !!}



    </div>



    </div>

    <hr>

    <h4>Slider Items</h4>

    <div class="row">

        @forelse($slides as $slide)
        <div class="col-md-3">

            <img src="{{asset('images/'.$slide->image)}}" class="img-responsive img-thumbnail">
       <p style="text-align: center">  {{  $slide->desc  }}</p>
<p style="text-align: center">


            {!! Form::open(array('route' => ['deleteSlider',$slide->id], 'class' => 'form','files'=>'true')) !!}

            <div class="form-group">
                {!! Form::submit('Delete',
                  array('class'=>'btn btn-danger')) !!}
            </div>
            {!! Form::close() !!}



        </div>


            @empty

            No slide item..
        @endforelse

    </div>

    @endsection