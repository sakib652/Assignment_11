<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Product</title>
    <link rel="stylesheet" href="{{ asset('css/edit.css') }}">
</head>

<body>

@if(session('success'))
<script>
        document.addEventListener('DOMContentLoaded', function() {

            const successMessage = "{!! addslashes($successMessage) !!}";

            if (typeof successMessage === 'string' && successMessage.trim() !== '') {
                Swal.fire({
                    title: 'Success!',
                    text: successMessage,
                    icon: 'success',
                    confirmButtonColor: '#28a745',
                }).then((result) => {
                    if (result.isConfirmed) {
                        window.location.href = "{{ route('products.index') }}";
                    }
                });
            }
        });
    </script>
@endif

<form action="{{ route('products.update', $product->id) }}" method="post">
    @csrf
    @method('PUT')
    <label for="name">Product Name:</label>
    <input type="text" name="name" value="{{ $product->name }}" required>
    <br>
    <label for="price">Product Price:</label>
    <input type="number" name="price" value="{{ $product->price }}" required>
    <br>
    <label for="quantity">Product Quantity:</label>
    <input type="number" name="quantity" value="{{ $product->quantity }}" required>
    <br>
    <button type="submit">Update Product</button>
</form>

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>

</body>
</html> -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Product</title>
    <link rel="stylesheet" href="{{ asset('css/edit.css') }}">
</head>

<body>

<form action="{{ route('products.update', $product->id) }}" method="post">
    @csrf
    @method('PUT')
    <label for="name">Product Name:</label>
    <input type="text" name="name" value="{{ $product->name }}" required>
    <br>
    <label for="price">Product Price:</label>
    <input type="number" name="price" value="{{ $product->price }}" required>
    <br>
    <label for="quantity">Product Quantity:</label>
    <input type="number" name="quantity" value="{{ $product->quantity }}" required>
    <br>
    <button type="submit" id="updateProductBtn">Update Product</button>
</form>

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>

@if(session('success'))
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const successMessage = "{!! addslashes(session('success')) !!}";

            if (typeof successMessage === 'string' && successMessage.trim() !== '') {
                Swal.fire({
                    title: 'Success!',
                    text: successMessage,
                    icon: 'success',
                    confirmButtonColor: '#28a745',
                }).then((result) => {
                    if (result.isConfirmed) {
                        window.location.href = "{{ route('products.index') }}";
                    }
                });
            }
        });
    </script>
@endif

<script>
    document.addEventListener('DOMContentLoaded', function() {
    
        document.getElementById('updateProductBtn').addEventListener('click', function(event) {
            event.preventDefault();

            Swal.fire({
                title: 'Are you sure?',
                text: 'You are about to update the product!',
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Yes, update it!'
            }).then((result) => {
                if (result.isConfirmed) {
                   
                    document.querySelector('form').submit();
                }
            });
        });
    });
</script>

</body>
</html>
