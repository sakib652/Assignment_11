<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sales History</title>
    <link rel="stylesheet" href="{{ asset('css/salehistory.css') }}">
</head>
<body>
<table>
    <thead>
        <tr>
            <th>Date</th>
            <th>Product ID</th>
            <th>Quantity Sold</th>
            <th>Price Per Unit</th>
            <th>Total Amount</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($sales as $sale)
            <tr>
                <td>{{ $sale->created_at }}</td>
                <td>{{ $sale->product_id }}</td>
                <td>{{ $sale->quantity_sold }}</td>
                <td>${{ $sale->price_per_unit }}</td>
                <td>${{ $sale->total_amount }}</td>
            </tr>
        @endforeach
    </tbody>
</table>

</body>
</html>

