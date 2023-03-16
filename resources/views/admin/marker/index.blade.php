@extends('layouts.admin')

@section('content')
    <a class="btn btn-secondary mb-3" href="{{route('admin.markers.create')}}" role="button">Создать</a>

    <table class="table table-bordered text-center">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Название</th>
            <th scope="col">Изменение</th>
            <th scope="col">Удаление</th>
        </tr>
        </thead>
        <tbody class="table-group-divider">
        @foreach($markers as $marker)
            <tr>


                <th scope="row">{{$marker->id}}</th>
                <td>{{$marker->name}}</td>
                <td><a class="btn btn-warning mb-3" href="{{route('admin.markers.edit',$marker->id)}}" role="button">Изменить</a></td>
                <td>
                    <form action="{{ route('admin.markers.delete',$marker->id) }}" method="post">
                        @csrf
                        @method('delete')
                        <button class="btn btn-danger" type="submit">Удалить</button>
                    </form>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
@endsection
