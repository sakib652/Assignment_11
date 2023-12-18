<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="{{ asset('css/dashboard.css') }}">
</head>

<body>
    <div class="dashboard">
        <div class="card">
            <h2>Today's Sales</h2>
            <p>${{ $todaySales }}</p>
        </div>
        <div class="card">
            <h2>Yesterday's Sales</h2>
            <p>${{ $yesterdaySales }}</p>
        </div>
        <div class="card">
            <h2>This Month's Sales</h2>
            <p>${{ $thisMonthSales }}</p>
        </div>
        <div class="card">
            <h2>Last Month's Sales</h2>
            <p>${{ $lastMonthSales }}</p>
        </div>
    </div>
</body>
</html>
