@extends('layouts.admin')

@section('content')
    <div>
        <p>Производитель создан!</p>
        <div>
            <p><b>Название: </b>{{$marker->name}}</p>
        </div>
    </div>
@endsection
