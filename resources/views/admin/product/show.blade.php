@extends('layouts.admin')

@section('content')
    <div>
        <div>
            {{ $product->id }}
        </div>
        <div>
            {{ $product->name }}
        </div>
        <div>
            {{ $product->price }}
        </div>
        <div>
            {{ $product->image }}
        </div>
    </div>
@endsection
