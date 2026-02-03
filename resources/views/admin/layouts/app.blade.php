<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>Shop Admin</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="d-flex">
    <div class="bg-dark text-white p-3" style="width:250px; min-height:100vh">
        <h4>Shop Admin</h4>
        <hr>
        <a href="{{ route('admin.dashboard') }}" class="text-white d-block">Dashboard</a>
        <a href="{{ route('admin.products.index') }}" class="text-white d-block">Sản phẩm</a>
        <a href="{{ route('admin.orders.index') }}" class="text-white d-block">Đơn hàng</a>
    </div>

    <div class="flex-fill p-4">
        @yield('content')
    </div>
</div>

</body>
</html>
