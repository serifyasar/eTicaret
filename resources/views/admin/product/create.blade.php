@extends('admin.layout')
@section('baslik','Products')

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
            {!! Form::open(array('route' => 'product.store', 'class' => 'form','files'=>'true')) !!}

            <div class="col-md-6">

                <div class="form-group">
                    {!! Form::label('Product Name') !!}
                    {!! Form::text('name', null,
                        array('class'=>'form-control',
                              'placeholder'=>'Name')) !!}
                </div>

                <div class="form-group">
                    {!! Form::label('Description') !!}
                    {!! Form::text('desc', null,
                        array('class'=>'form-control',
                              'placeholder'=>'Desc')) !!}
                </div>



                <div class="form-group">
                    {!! Form::label('Price') !!}
                    {!! Form::text('price', null,
                       array('class'=>'form-control',
                             'placeholder'=>'Price')) !!}
                </div>


                <div class="form-group">
                    {!! Form::label('Weight') !!}
                    {!! Form::text('weight', null,
                        array('class'=>'form-control',
                              'placeholder'=>'Weight')) !!}
                </div>

                <div class="form-group">
                    {!! Form::label('Size') !!}
                    {!! Form::select('size', array('Small' => 'Small', 'Medium' => 'Medium','Large' => 'Large'),null,['class'=>'form-control']) !!}

                </div>
                <div class="form-group">
                    {!! Form::label('Category Image') !!}
                    {!! Form::file('image', null) !!}
                </div>




                <div class="form-group">
                    {!! Form::submit('Save',
                      array('class'=>'btn btn-primary')) !!}
                </div>


            </div>


            <div class="col-md-6">

                <div class="form-group">
                    {!! Form::label('SKU') !!}
                    {!! Form::text('sku', null,
                        array('class'=>'form-control',
                              'placeholder'=>'Sku')) !!}
                </div>






                <div class="form-group">
                    {!! Form::label('Category') !!}
                    <select name="category_id" id="category" class="form-control">
                        @foreach($cats as $cat)
                            <option value="{{$cat->id}}">
                                {{$cat->name}}
                            </option>
                        @endforeach
                    </select>

                </div>



                <div class="form-group">
                    {!! Form::label('Stok') !!}
                    {!! Form::text('stok', null,
                        array('class'=>'form-control',
                              'placeholder'=>'stok')) !!}
                </div>

                <div class="form-group">
                    {!! Form::label('Color') !!}

                    {!! Form::select('color', array('Red' => 'Red', 'Green' => 'Green','Blue' => 'Blue'),null,['class'=>'form-control']) !!}



                </div>


                <div class="form-group">
                    {{ Form::checkbox('active') }}   {!! Form::label('Active') !!}

                </div>


                <div class="form-group">
                    {{ Form::checkbox('feature') }}   {!! Form::label('Feature') !!}

                </div>

            </div>




            {!! Form::close() !!}


        </div>



    </div>








@endsection

