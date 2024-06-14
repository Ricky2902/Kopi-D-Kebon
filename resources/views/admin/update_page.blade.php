<!DOCTYPE html>
<html>
<head>
    @include('admin.css')

    <style type="text/css">
        .div_design {
            display: flex;
            justify-content: center;
            align-items: center;
        }
        label {
            display: inline-block;
            width: 450px;
            padding: 20px;
        }
        input[type='text'] {
            width: 300px;
            height: 60px;
        }
        textarea {
            width: 450px;
            height: 130px;
        }
    </style>
</head>
<body>
    @include('admin.header')
    @include('admin.sidebar')

    <div class="page-content">
        <div class="page-header">
            <div class="container-fluid">
                <h2>Update Product</h2>
                <div class="div_design">
                    <form action="{{ url('edit_product', $data->id) }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div>
                            <label for="">Title</label>
                            <input type="text" name="title" value="{{ $data->title }}">
                        </div>
                        <div>
                            <label for="">Description</label>
                            <textarea name="description" id="">{{ $data->description }}</textarea>
                        </div>
                        <div>
                            <label for="">Price</label>
                            <input type="text" name="price" value="{{ $data->price }}">
                        </div>
                        <div>
                            <label for="">Quantity</label>
                            <input type="number" name="quantity" value="{{ $data->quantity }}">
                        </div>
                        <div>
                            <label for="">Category</label>
                            <select name="category">
                                <option value="{{ $data->category }}">{{ $data->category }}</option>

                                <!-- untuk mengubah category yang sudah ada dan untuk foreach disarankan tidak menggunakan nama variable yang sama -->
                                @foreach ($category as $cat)
                                    @if ($cat->category_name != $data->category)
                                        <option value="{{ $cat->category_name }}">{{ $cat->category_name }}</option>
                                    @endif
                                @endforeach
                            </select>
                        </div>
                        <div>
                            <label for="">Current Image</label>
                            <img width="150" src="/products/{{ $data->image }}" alt="">
                        </div>
                        <div>
                            <label for="">New Image</label>
                            <input type="file" name="image">
                        </div>
                        <div>
                            <input class="btn btn-success" type="submit" value="Update Product">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    @include('admin.js')
</body>
</html>
