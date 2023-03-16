@extends('layouts.admin')

@section('content')
    <form action="{{route('admin.products.update',$product->id)}}" method="post">
        @csrf
        <div class="mb-3">
            <label for="exampleInputName" class="form-label">Название продукта</label>
            <input type="text" class="form-control" id="exampleInputName" name="name" value="{{ $product->name }}">
        </div>
        <div class="mb-3">
            <label for="exampleInputPrice" class="form-label">Цена</label>
            <input type="text" class="form-control" id="exampleInputPrice" name="price" value="{{ $product->price }}">
        </div>
        <div class="mb-3">
            <label for="formFileMultiple" class="form-label">Картинка продукта</label>
            <input class="form-control" type="text" id="formFileMultiple" name="image"  value="{{$product->image }}">
        </div>
        <div class="form-floating mb-3">
            <textarea class="form-control" name="description" id="floatingTextarea2" style="height: 100px">{{$product->description}}</textarea>
        </div>
        <div class="mb-3">
            <label for="selectProduct ">Категория товара</label>
            <select class="form-select category" name="category_id" id="selectProduct" aria-label="Default select example">
                @foreach($categories as $category)
                    <option
                        value="{{ $category->id }}"
                        @if($category->id == $product->category_id)
                            selected
                        @endif
                    >
                        {{$category->name}}
                    </option>
                @endforeach
            </select>
        </div>
        <div class="mb-3">
            <label for="selectProduct ">Производитель товара</label>
            <select class="form-select marker" name="category_id" id="selectProduct" aria-label="Default select example">
                @foreach($markers as $marker)
                    <option
                        value="{{$marker->id}}"
                        @if($marker->id == $product->marker_id)
                            selected
                        @endif
                    >
                        {{$marker->name}}
                    </option>
                @endforeach
            </select>
        </div>
        <div class="properties mb-3 border-top pt-3">
            <h3>Свойства товара</h3>
            @foreach($product->properties as $property)
                    <label for="exampleInputTitle" class="form-label">Название</label>
                    <button type="button" class="btn-close position-absolute end-0" aria-label="Close"></button>

                    <input value="{{$property->title}}" type="text" class="form-control title" name="title" id="exampleInputTitle" >
                    <label for="exampleInputText" class="form-label">Текст</label>
                    <input value="{{$property->text}}" type="text" class="form-control" id="exampleInputText" name="text">
                </div>
            @endforeach
            <button type="button" class="btn btn-primary add-property mb-3">Добавить свойство</button>
        </div>
        <button type="submit" class="btn btn-secondary">Изменить</button>
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

        $('form').on('submit',function(e){
            e.preventDefault()

            var titles = [];
            var text = [];

            $('.properties').find('input[name*="title"]').each(function(i, input) {
                titles.push($(input).val());
            });

            $('.properties').find('input[name*="text"]').each(function(i, input) {
                text.push($(input).val());
            });

            let data = new FormData()

            data.append('name',$('#exampleInputName').val())
            data.append('price',$('#exampleInputPrice').val())
            data.append('image',$('#formFileMultiple').val())
            data.append('description',$('#floatingTextarea2').val())
            data.append('category_id',$('.category').val())
            data.append('marker_id',$('.marker').val())
            data.append('titles',JSON.stringify(titles) )
            data.append('text',JSON.stringify(text))

            $.ajax({
                url:this.action,
                cache:false,
                type:'html',
                method: 'post',
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                processData: false,
                contentType: false,
                data:data,
                success:function (data){
                }
            })

        })

    </script>
@endsection
