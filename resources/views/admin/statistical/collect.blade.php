<?php

use App\Models\Funds;
?>

@extends('admin.layouts.master')
@section('content')
<h4 class="py-3 mb-4">
    <span class="text-muted fw-light">Trang chủ /</span> Thống Kê Chi
</h4>

<!-- Product List Table -->
<div class="card">
    <!-- Alert -->
    @include('admin.includes.global.alert')
    <!-- Form search -->
    <form action="{{ route('statistical.collect') }}" method="get">
        <div class="card-header">
            <div class="row">
                <div class="col">
                    <input type="text" name="id_customer_name" value="{{ request()->id_customer_name }}" class="form-control" placeholder="Tên khách hàng, mã hợp đồng">
                </div>
                <div class="col">
                    <select class="form-control" name="month">
                        <option value="">Tất cả các tháng</option>
                        @for( $i = 1; $i <= 12; $i++ )
                        <option @selected(request()->month == $i) value="{{$i}}">Tháng {{$i}}</option>
                        @endfor
                    </select>
                </div>
                <div class="col">
                    <select class="form-control" name="year">
                        <option value="">Tất cả các năm</option>
                        @for( $i = 2020; $i <= date('Y',strtotime('+1 year')); $i++ )
                        <option @selected(request()->year == $i) value="{{$i}}">Năm {{$i}}</option>
                        @endfor
                    </select>
                </div>
                <div class="col-md-1">
                    <button class="btn btn-primary">
                        <i class="bx bx-search"></i>
                    </button>
                </div>
            </div>
        </div>
    </form>
</div>
<div class="row mt-4">
    <div class="col-sm-6 col-lg-3 mb-4">
        <div class="card card-border-shadow-primary h-100">
            <div class="card-body">
                <span class="d-block mb-1">TỔNG THU GỐC</span>
                <h3 class="card-title text-nowrap mb-2"><?= number_format($thu_goc);?> VND</h3>
            </div>
        </div>
    </div>
    <div class="col-sm-6 col-lg-3 mb-4">
        <div class="card card-border-shadow-warning h-100">
            <div class="card-body">
                <span class="d-block mb-1">TỔNG THU LÃI</span>
                <h3 class="card-title text-nowrap mb-2"><?= number_format($thu_lai);?></h3>
            </div>
        </div>
    </div>
    <div class="col-sm-6 col-lg-3 mb-4">
        <div class="card card-border-shadow-danger h-100">
            <div class="card-body">
                <span class="d-block mb-1">-</span>
                <h3 class="card-title text-nowrap mb-2">-</h3>
            </div>
        </div>
    </div>
    <div class="col-sm-6 col-lg-3 mb-4">
        <div class="card card-border-shadow-info h-100">
            <div class="card-body">
                <span class="d-block mb-1">-</span>
                <h3 class="card-title text-nowrap mb-2">-</h3>
            </div>
        </div>
    </div>
</div>
<div class="card">
    <!-- Table -->
    <div class="card-body">
        <canvas id="lineChart" class="chartjs" data-height="500"></canvas>
    </div>
</div>
@endsection
@section('footer')
<script src="{{asset('assets/js/chartjs.js')}}"></script>
<script>
    let elm = document.getElementById("lineChart");
    let values = {{$chart['values']}}
    let months = {{$chart['months']}}

    let chart = new Chart(elm, {
        type: "line",
        data: {
            labels: months,
            datasets: [
                {
                    data: values,
                    label: "Tổng chi",
                    borderColor: config.colors.danger,
                    backgroundColor: config.colors.danger,
                    pointHoverBackgroundColor: config.colors.danger
                }
            ]
        }
    })
</script>
@endsection