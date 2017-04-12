@extends('admin.layout')
@section('baslik','Subcategories')

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
            {!! Form::open(array('route' => 'subcategory.store', 'class' => 'form','files'=>'true')) !!}

                <div class="form-group">
                    {!! Form::label('Category Name') !!}
                    {!!

                    Form::select('category_id',[$category->id=>$category->name],null,['class' => 'form-control'])

                    !!}
                </div>

            <div class="form-group">
                {!! Form::label('SubCategory Name') !!}
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
        <h2>Subcategories</h2>
        <div class="table-responsive">
            <table class="table table-hover table-striped">
                <thead>
                <tr>
                    <th>Name</th>
                    <th>Image</th>
                    <th>Description</th>
                    <th>Category</th>
                    <th style="width: 70px">Active</th>
                    <th style="width: 70px"></th>
                    <th style="width: 90px"></th>
                </tr>
                </thead>
                <tbody>

                @forelse($subcats as $cat)
                    <tr>
                        <td>{{$cat->name}}</td>
                        <td>

                            @if($cat->image)   <img src="{{asset('themes/images/'.$cat->image)}}" width="100" class="img-responsive img-thumbnail">

                            @else
                                <img src="{{asset('themes/images/no.png')}}" width="100" class="img-responsive img-thumbnail">

                            @endif

                        </td>
                        <td>{{$cat->desc}}</td>
                        <td>{{$category->name}}</td>
                        <td>{{$cat->active}}</td>
                        <td>  <a href="{{route('subcategory.edit',$cat->id)}}" type="button" class="btn btn-warning">Edit</a>   </td>

                        <td>  {!! Form::open(array('route' => ['subcategory.destroy',$cat->id], 'class' => 'form','method' => 'delete')) !!}

                            <div class="form-group">
                                {!! Form::submit('Delete',
                                  array('class'=>'btn btn-danger')) !!}
                            </div>
                            {!! Form::close() !!}</td>

                                        </tr>
                @empty

                @endforelse

                </tbody>
            </table>
        </div>
    </div>













@endsection

