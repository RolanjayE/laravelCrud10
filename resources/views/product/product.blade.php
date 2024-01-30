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
</head>
<body>

    <div class="wrapper">
        @if (Session::has('success'))
            <div class="alert alert-success">
                {{ Session::get('success') }}
            </div>
        @endif
        @if (Session::has('error'))
            <div class="alert alert-success">
                {{ Session::get('error') }}
            </div>
        @endif
        <div class="header">
            <a href="{{ route('NewProduct') }}" class="btn btn-primary btn-sm">Add Product</a>
        </div>
        <table id="example" class="table table-striped" style="width:100%">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>QTY</th>
                    <th>Price</th>
                    <th>Decription</th>
                    <th>Operatopn</th>
                </tr>
            </thead>
            <tbody>

                @foreach($products as $product)

                    <tr>
                        <td>{{ $product->name }}</td>
                        <td>{{ $product->qty }}</td>
                        <td>{{ $product->price }}</td>
                        <td>{{ $product->description }}</td>
                        <td class="btn-con">
                            <a href="{{ route('ViewProductView', [ 'id' => $product->id ]) }}" class="btn btn-success btn-sm"><i class="fa-solid fa-eye"></i> View</a>
                            <a href="{{ route('deleteProduct', ['id' => $product->id ]) }}" class="btn btn-danger btn-sm"><i class="fa-solid fa-trash"></i> Delete</a>
                        </td>
                    </tr>

                @endforeach

            </tbody>
            <tfoot>
                <tr>
                    <th>Name</th>
                    <th>QTY</th>
                    <th>Price</th>
                    <th>Decription</th>
                    <th>Operatopn</th>
                </tr>
            </tfoot>
        </table>
    </div>

    <script src="https://code.jquery.com/jquery-3.7.0.js"></script>
    <script src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.7/js/dataTables.bootstrap5.min.js"></script>

   <script>
        $(document).ready(function () {
            $('#example').DataTable();
        });
    </script>

</body>
</html>