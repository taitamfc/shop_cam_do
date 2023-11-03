@extends('admin.layouts.master')

@section('content')
<h4 class="py-3 mb-4">
    <span class="text-muted fw-light">Trang chủ /</span> Nợ phải thu
</h4>

<!-- Product List Table -->
<div class="card">
    <!-- Alert -->
    @include('admin.includes.global.alert')
    <!-- Form search -->
    <form action="{{ route('receivable-debt.index') }}" method="get" enctype="multipart/form-data">
        @csrf
        <div class="card-header">
            <div class="row">
                <div class="col-2">
                    <select id="ProductStatus" class="form-select text-capitalize" name="arrange">
                        @if(!empty($status))
                        @foreach($status as $key => $val)
                        <option value="{{ $key }}" {{ request('status')!='' ? (request('status') == $key ? 'selected' : ''): '' }}>{{ $val }}</option>
                        @endforeach
                        @endif
                    </select>
                </div>
                <div class="col-2">
                    <select id="ProductStatus" class="form-select text-capitalize" name="type">
                        @if(!empty($loanType))
                        @foreach($loanType as $key => $val)
                        <option value="{{ $key }}" {{ request('type')!='' ? (request('type') == $key ? 'selected' : ''): '' }}>{{ $val }}</option>
                        @endforeach
                        @endif
                    </select>
                </div>
                <div class="col-2">
                    <select id="ProductStatus" class="form-select text-capitalize" name="time">
                        @if(!empty($times))
                        @foreach($times as $key => $val)
                        <option value="{{ $key }}" {{ request('time')!='' ? (request('time') == $key ? 'selected' : ''): '' }}>{{ $val }}</option>
                        @endforeach
                        @endif
                    </select>
                </div>
                <div class="col-2">
                    <select id="ProductStatus" class="form-select text-capitalize" name="arrange">
                        @if(!empty($arrangeType))
                        @foreach($arrangeType as $key => $val)
                        <option value="{{ $key }}" {{ request('arrange')!='' ? (request('arrange') == $key ? 'selected' : ''): '' }}>{{ $val }}</option>
                        @endforeach
                        @endif
                    </select>
                </div>
                <div class="col">
                    <input type="text" name="name_phone" class="form-control" placeholder="SDT, tên khách hàng">
                </div>

                <div class="col-md-1">
                    <button class="btn btn-primary">
                        <i class="bx bx-search"></i>
                    </button>
                </div>
            </div>
        </div>
    </form>

    <!-- Table -->
    <div class="card-body">
        <div class="table-responsive text-nowrap ">
            <table class="table border-top">
                <thead>
                <tr>
                    <th>STT</th>
                    <th>Mã hợp đồng</th>
                    <th>Tên khách hàng</th>
                    <th>Số tiền vay</th>
                    <th>Nợ lãi</th>
                    <th>Trạng thái</th>
                    <th>Lý do</th>
                    <th>Chức năng</th>
                </tr>
                </thead>
                <tbody class="table-border-bottom-0">
                @if($geReceivables)
                @foreach($geReceivables as $geReceivable)
                <tr>
                    <td>{{$loop->iteration}}</td>
                    <td>
                        <div class="d-flex">
                            <div class="td-info">
                                <h6 class="text-body mb-0">{{$geReceivable->contract->code}}</h6>

                            </div>
                        </div>
                    </td>

                    <td>{{$geReceivable->contract->customer->name}}</td>
                    <td>{{$geReceivable->contract->total_loan}}</td>
                    <td>{{$geReceivable->amount}}</td>
                    <td>
                        @if($geReceivable->status == 0)
                        <span class="badge bg-label-primary" text-capitalized="">Chưa đóng</span>
                        @elseif($geReceivable->status == 1)
                        <span class="badge bg-label-success" text-capitalized="">Đã đóng</span>
                        @else
                        <span class="badge bg-label-danger" text-capitalized="">Quá hạn</span>
                        @endif
                    </td>
                    <td>{{$geReceivable->note}}</td>
                    <td>
                        <div class="dropdown d-flex">
                            <a class="dropdown-item" href="{{ route('installment.approved', $geReceivable->id) }}">
                                <i class='bx bxs-check-shield text-success'></i>
                            </a>
                            <a class="dropdown-item" href=""><i class="bx bx-edit-alt me-1"></i></a>
                        </div>

                    </td>
                </tr>
                @endforeach
                @endif
                </tbody>
            </table>
        </div>
    </div>

    <!-- Pagination -->
    <div class="card-footer pt-1 pb-1">
        <div class="float-end">

        </div>
    </div>

</div>
@endsection
