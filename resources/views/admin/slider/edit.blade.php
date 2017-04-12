@extends('admin.layout')
@section('baslik','Slider')
@section('content')

    <div class="row">

        @if(count($errors)>0)

            has error


        @endif

        <div class="col-md-12" >

            {!! Form::open(array('route' => 'editSlider', 'class' => 'form','files'=>'true')) !!}

            <div class="form-group">
                {!! Form::label('Description') !!}
                {!! Form::text('desc',$editItem[0]->desc,
                    array('class'=>'form-control',
                          'placeholder'=>'Description')) !!}
            </div>



            <div class="form-group">
                {!! Form::label('Slider Image') !!}
                {!! Form::file('image', null) !!}
            </div>

            <div class="form-group">
                {!! Form::label('Order') !!}
                {!! Form::text('order', $editItem[0]->order,
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





@endsection