@extends('layouts.admin')

@section('content')
    <a class="btn btn-secondary mb-3" href="{{route('admin.categories.create')}}" role="button">Создать</a>

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
        @foreach($categories as $category)
        <tr>


                <th scope="row">{{$category->id}}</th>
                <td>{{$category->name}}</td>
                <td><a class="btn btn-warning mb-3" href="{{route('admin.categories.edit',$category->id)}}" role="button">Изменить</a></td>
                <td>
                    <form action="{{ route('admin.categories.delete',$category->id) }}" method="post">
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
