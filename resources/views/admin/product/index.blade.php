@extends('layouts.admin')

@section('content')
    <a class="btn btn-secondary mb-3" href="{{route('admin.products.create')}}" role="button">Создать</a>
    <div class="d-flex flex-wrap">
        @foreach($products as $product)
            <div class="card mb-3 p-3 mr-3" >
                <div class="row g-0">
                    <div class="col-md-4">
                        <img src="{{asset('images/products/'.$product->image)}}" class="img-fluid rounded-start" alt="...">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <h5 class="card-title"><b>{{ $product->name }}</b></h5>
                            <p class="card-text"><b>Цена: </b> {{$product->price}}</p>
                            <p class="card-text"><b>Категория: </b>{{$product->category->name}}</p>
                            <p class="card-text"><b>Производитель: </b> {{$product->marker->name}}</p>
                        </div>
                        <a class="btn btn-primary" href="{{ route('admin.products.edit',$product->id) }}" role="button">Изменить</a>
                        <form action="{{route('admin.products.delete',$product->id)}}" method="post">
                            @csrf
                            @method('delete')
                            <button type="submit" class="btn btn-danger">Удалить</button>
                        </form>
                    </div>
                </div>

            </div>
        @endforeach
    </div>
@endsection
