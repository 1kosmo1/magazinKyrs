@extends('layouts.admin')

@section('content')
    <form action="{{route('admin.categories.update',$category->id)}}" method="post">
        @csrf
        @method('patch')
        <div class="mb-3">
            <label for="exampleInputName" class="form-label">Название категории</label>
            <input type="text" class="form-control" id="exampleInputName" name="name" value="{{$category->name}}">
        </div>
        <button type="submit" class="btn btn-secondary">Изменить</button>
    </form>
@endsection
