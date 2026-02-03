@extends('admin.layouts.app')

@section('content')
<div class="container">
    <h3>📋 Quản lý đơn hàng</h3>

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>ID</th>
                <th>Khách</th>
                <th>Tổng</th>
                <th>Trạng thái</th>
                <th>Cập nhật</th>
            </tr>
        </thead>
        <tbody>
            @foreach($products as $products)
            <tr>
                <td>#{{ $products->id }}</td>
                <td>{{ $products->customer_name }}</td>
                <td>{{ number_format($products->total) }} đ</td>
                <td>{{ $products->status }}</td>
                <td>
                    <form method="POST"
                          action="{{ route('admin.products.updateStatus', $products->id) }}">
                        @csrf
                        <select name="status" class="form-select form-select-sm">
                            <option {{ $order->status=='Đang xử lý'?'selected':'' }}>Đang xử lý</option>
                            <option {{ $order->status=='Đang giao'?'selected':'' }}>Đang giao</option>
                            <option {{ $order->status=='Hoàn thành'?'selected':'' }}>Hoàn thành</option>
                            <option {{ $order->status=='Hủy'?'selected':'' }}>Hủy</option>
                        </select>
                        <button class="btn btn-sm btn-primary mt-1">Lưu</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection

