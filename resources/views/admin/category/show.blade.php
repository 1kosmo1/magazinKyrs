@extends('layouts.admin')

@section('content')
    <div>
        <p>Категория создана!</p>
        <div>
            <p><b>Название: </b>{{$category->name}}</p>
        </div>
    </div>
@endsection
