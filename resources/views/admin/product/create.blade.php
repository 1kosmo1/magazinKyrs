@extends('layouts.admin')

@section('content')

    <form action="{{route('admin.products.store')}}" method="post" class="product-create">
        @csrf
        <div class="mb-3">
            <label for="exampleInputName" class="form-label">Название товара</label>
            <input type="text" class="form-control" id="exampleInputName" name="name">
        </div>
        <div class="mb-3">
            <label for="exampleInputPrice" class="form-label">Цена</label>
            <input type="text" class="form-control" id="exampleInputPrice" name="price">
        </div>
        <div class="mb-3">
            <label for="formFileMultiple" class="form-label">Картинка товара</label>
            <input class="form-control" type="file" id="formFileMultiple" name="image" multiple>
        </div>
        <div class="form-floating mb-3">
            <textarea class="form-control" name="description" id="floatingTextarea2" style="height: 100px"></textarea>
        </div>
        <div class="mb-3">
            <label for="selectProduct">Категория товара</label>
            <select class="form-select ml-2 category" name="category_id" id="selectProduct" aria-label="Default select example">
                @foreach($categories as $category)
                    <option value="{{ $category->id }}">{{$category->name}}</option>
                @endforeach
            </select>
        </div>
        <div class="mb-3">
            <label for="selectProduct">Производитель товара</label>
            <select class="form-select ml-2 marker" name="marker_id" id="selectProduct" aria-label="Default select example">
                @foreach($markers as $marker)
                    <option value="{{$marker->id }}">{{$marker->name}}</option>
                @endforeach
            </select>
        </div>
        <div class="properties border-top pt-2">
            <h3>Свойства товара</h3>


            <button type="button" class="btn btn-primary add-property mb-3">Добавить свойство</button>
        </div>
        <button type="submit" class="btn btn-secondary">Создать</button>
    </form>

    <script>
        var property = '<div class="mb-3 border-bottom pb-3">\n' +
            '            <label for="exampleInputTitle" class="form-label">Название</label>\n' +
            '            <input type="text" class="form-control title" name="title" id="exampleInputTitle" >\n' +
            '            <label for="exampleInputText" class="form-label">Текст</label>\n' +
            '            <input type="text" class="form-control" id="exampleInputText" name="text">\n' +
            '        </div>';

        $('.add-property').on('click',function (){
            $(this).before(property)
        })


        $('form').on('submit',function (e){
            e.preventDefault()

            var titles = [];
            var text = [];

            $('.properties').find('input[name*="title"]').each(function(i, input) {
                titles.push($(input).val());
            });

            $('.properties').find('input[name*="text"]').each(function(i, input) {
                text.push($(input).val());
            });


            $.ajax({
                url:this.action,
                dataType:'html',
                method:'post',
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                data:{
                    'titles': titles,
                    'text':text,
                    'name':$('#exampleInputName').val(),
                    'price': $('#exampleInputPrice').val(),
                    'image': $('#formFileMultiple').val(),
                    'description': $('#floatingTextarea2').val(),
                    'category_id': $('.category').val(),
                    'marker_id': $('.marker').val(),
                },
                success:function (data){
                   console.log(data)
                }
            })

        })
    </script>
@endsection
