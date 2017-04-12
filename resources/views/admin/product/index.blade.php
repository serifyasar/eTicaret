@extends('admin.layout')
@section('baslik','Products')

@section('content')
<div class="col-sm-12 text-center">
@foreach($cats as $cat)

    <a type="button" href="{{route('product.show',$cat->id)}}" class="btn btn-sm btn-primary">{{$cat->name}}</a>
    @endforeach

</div>
<br><br>
    <div class="col-lg-12">

        <div class="table-responsive">
            <table class="table table-hover table-striped">
                <thead>
                <tr>
                    <th>Name</th>
                   <th>Stok</th>
                    <th>Price</th>
                    <th style="width: 70px">Active</th>
                    <th style="width: 70px"></th>
                    <th style="width: 90px"></th>

                </tr>
                </thead>
                <tbody>

                @forelse($products as $product)
                    <tr>
                        <td>{{$product->name}}</td>


                        <td>{{$product->stok}}</td>
                        <td>{{$product->price}}</td>
                        <td>{{$product->active}}</td>
                        <td>  <a href="{{route('product.edit',$product->id)}}" type="button" class="btn btn-warning">Edit</a>   </td>

                        <td>  {!! Form::open(array('route' => ['product.destroy',$product->id], 'class' => 'form','method' => 'delete')) !!}

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

            {{ $products->links() }}
        </div>
    </div>







@endsection

