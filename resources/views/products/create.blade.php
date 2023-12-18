<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create</title>
    <link rel="stylesheet" href="{{ asset('css/create.css') }}">
</head>
<body>


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

<form action="{{ route('products.store') }}" method="post">
    @csrf
    <label for="name">Product Name:</label>
    <input type="text" name="name" required>
    <br>
    <label for="price">Product Price:</label>
    <input type="number" name="price" required>
    <br>
    <label for="quantity">Product Quantity:</label>
    <input type="number" name="quantity" required>
    <br>
    <button type="submit">Add Product</button>
</form>

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script> 

</body>
</html>