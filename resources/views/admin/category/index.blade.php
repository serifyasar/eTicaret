@extends('admin.layout')
@section('baslik','Categories')

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
            {!! Form::open(array('route' => 'category.store', 'class' => 'form','files'=>'true')) !!}

            <div class="form-group">
                {!! Form::label('Category Name') !!}
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
                {!! Form::label('Category Image') !!}
                {!! Form::file('image', null) !!}
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

    <hr>


    <div class="col-lg-12">
        <h2>Categories</h2>
        <div class="table-responsive">
            <table class="table table-hover table-striped">
                <thead>
                <tr>
                    <th>Name</th>
                    <th>Image</th>
                    <th>Description</th>
                    <th style="width: 70px">Active</th>
                    <th style="width: 70px"></th>
                    <th style="width: 90px"></th>
                    <th style="width: 100px"></th>
                </tr>
                </thead>
                <tbody>

                @forelse($cats as $cat)
                <tr>
                    <td>{{$cat->name}}</td>
                    <td>

                        @if($cat->image)   <img src="{{asset('themes/images/'.$cat->image)}}" width="100" class="img-responsive img-thumbnail">

                        @else
                            <img src="{{asset('themes/images/no.png')}}" width="100" class="img-responsive img-thumbnail">

                        @endif

                    </td>
                    <td>{{$cat->desc}}</td>
                    <td>{{$cat->active}}</td>
                    <td>  <a href="{{route('category.edit',$cat->id)}}" type="button" class="btn btn-warning">Edit</a>   </td>

                                     <td>  {!! Form::open(array('route' => ['category.destroy',$cat->id], 'class' => 'form','method' => 'delete')) !!}

                        <div class="form-group">
                            {!! Form::submit('Delete',
                              array('class'=>'btn btn-danger')) !!}
                        </div>
                        {!! Form::close() !!}</td>

                    <td>  <a href="{{route('subcategory.show',$cat->id)}}" type="button" class="btn btn-info">Subcategory</a>   </td>
                </tr>
                    @empty

                @endforelse

                </tbody>
            </table>
        </div>
    </div>










    @endsection

