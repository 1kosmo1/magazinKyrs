@extends('layouts.admin')

@section('content')
    <form action="{{route('admin.markers.store')}}" method="post">
        @csrf
        <div class="mb-3">
            <label for="exampleInputName" class="form-label">Название производителя</label>
            <input type="text" class="form-control" id="exampleInputName" name="name">
        </div>
        <button type="submit" class="btn btn-secondary">Создать</button>
    </form>
@endsection

