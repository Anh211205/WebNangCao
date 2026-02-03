@extends('admin.layout')

@section('content')
<h3>Quản lý đơn hàng</h3>

<table class="table table-striped">
    <tr>
        <th>Mã đơn</th>
        <th>Khách hàng</th>
        <th>Tổng tiền</th>
        <th>Trạng thái</th>
    </tr>
    @foreach($orders as $order)
    <tr>
        <td>#{{ $order->id }}</td>
        <td>{{ $order->user->name }}</td>
        <td>{{ number_format($order->total) }} ₫</td>
        <td>{{ $order->status }}</td>
    </tr>
    @endforeach
</table>
@endsection
