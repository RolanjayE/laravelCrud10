<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product Crud</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.7/css/dataTables.bootstrap5.min.css">
    <link rel="stylesheet" href="{{ asset('css/product.css') }}">
    <title>Add Product</title>
</head>
<body>
   
    <div class="wrapper">
        <div class="from-container">
                
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                    <form action="{{ route('NewProduct') }}" method="POST">
                <h4>Add New Product</h4>
                @csrf
                <div class="input-container">
                    <label for="">Name</label>
                    <input type="text" name="name" value="{{ old('product_name') }}">
                </div>
                <div class="input-container">
                    <label for="">Quantity</label>
                    <input type="text" name="qty" value="{{ old('qty') }}">
                </div>
                <div class="input-container">
                    <label for="">Price</label>
                    <input type="number" name="price" value="{{ old('price') }}">
                </div>
                <div class="input-container">
                    <label for="">Description</label>
                    <input type="text" name="description" value="{{ old('decription') }}">
                </div>
                <div class="input-container">
                    <button type="submit" class="btn btn-success btn-sm">Save</button>
                </div>
            </form>
        </div>
    </div>
</body>
</html>