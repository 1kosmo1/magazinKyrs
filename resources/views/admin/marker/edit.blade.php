@extends('layouts.admin')

@section('content')
    <form action="{{route('admin.markers.update',$marker->id)}}" method="post">
        @csrf
        @method('patch')
        <div class="mb-3">
            <label for="exampleInputName" class="form-label">Название производителя</label>
            <input type="text" class="form-control" id="exampleInputName" name="name" value="{{$marker->name}}">
        </div>
        <button type="submit" class="btn btn-secondary">Изменить</button>
    </form>
@endsection
