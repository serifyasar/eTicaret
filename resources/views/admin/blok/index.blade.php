@extends('admin.layout')
@section('baslik','Static Blocks')

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
                {!! Form::open(array('route' => 'block.store', 'class' => 'form','files'=>'true')) !!}

                <div class="form-group">
                {!! Form::label('Block Name') !!}
                {!! Form::text('name', null,
                    array('class'=>'form-control',
                          'placeholder'=>'')) !!}
            </div>

            <div class="form-group">
                {!! Form::label('Block Content') !!}

                {{ Form::textarea('desc') }}

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
        <h2>Static Blocks</h2>
        <div class="table-responsive">
            <table class="table table-hover table-striped">
                <thead>
                <tr>
                    <th>Name</th>


                    <th style="width: 70px">Active</th>
                    <th style="width: 70px"></th>
                    <th style="width: 90px"></th>
                    <th style="width: 70px"></th>
                </tr>
                </thead>
                <tbody>

                @forelse($bloks as $cat)
                    <tr>
                        <td>{{$cat->name}}</td>


                        <td>{{$cat->active}}</td>
                        <td>  <a href="{{route('block.edit',$cat->id)}}" type="button" class="btn btn-warning">Edit</a>   </td>

                        <td>  {!! Form::open(array('route' => ['block.destroy',$cat->id], 'class' => 'form','method' => 'delete')) !!}

                            <div class="form-group">
                                {!! Form::submit('Delete',
                                  array('class'=>'btn btn-danger')) !!}
                            </div>
                            {!! Form::close() !!}</td>

                        <td>  {!! Form::open(array('route' => ['block.update',$cat->id], 'class' => 'form','method' => 'put')) !!}

                            <div class="form-group">
                                {!! Form::submit('Active',
                                  array('class'=>'btn btn-default')) !!}
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