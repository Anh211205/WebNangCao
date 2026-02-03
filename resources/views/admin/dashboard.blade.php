@extends('admin.layouts.app')

@section('content')
<h3>Dashboard - Trang chủ</h3>

<div class="row mt-4">
    <div class="col-md-3">
        <div class="card shadow-sm">
            <div class="card-body">
                <h6>Tổng khách hàng</h6>
                <h4>6,389</h4>
            </div>
        </div>
    </div>

    <div class="col-md-3">
        <div class="card shadow-sm">
            <div class="card-body">
                <h6>Doanh thu</h6>
                <h4>46,500,000 ₫</h4>
            </div>
        </div>
    </div>

    <div class="col-md-3">
        <div class="card shadow-sm">
            <div class="card-body">
                <h6>Đơn hàng mới</h6>
                <h4>376</h4>
            </div>
        </div>
    </div>

    <div class="col-md-3">
        <div class="card shadow-sm">
            <div class="card-body">
                <h6>Đang xử lý</h6>
                <h4>35</h4>
            </div>
        </div>
    </div>
</div>

<div class="row mt-4">
    <div class="col-md-6">
        <div class="card">
            <div class="card-body">
                <h6>Truy cập nhanh</h6>
                <a href="{{ route('admin.products.index') }}" class="btn btn-outline-primary btn-sm">
                    Quản lý sản phẩm
                </a>
                <a href="{{ route('admin.orders.index') }}" class="btn btn-outline-success btn-sm">
                    Quản lý đơn hàng
                </a>
            </div>
        </div>
    </div>
</div>
@endsection
