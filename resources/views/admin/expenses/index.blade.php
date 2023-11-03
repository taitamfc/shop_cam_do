@extends('admin.layouts.master')
@section('content')
<h4 class="py-3 mb-4">
    <span class="text-muted fw-light">Trang chủ /</span> Thu chi
</h4>

<!-- Product List Table -->
<div class="card">
    <!-- Alert -->
    @include('admin.includes.global.alert')
    <!-- Form search -->
    <form action="{{ route('expenses.index') }}" method="get">
        <div class="card-header">
            <div class="row">
                <div class="col">
                    <label class="form-label">Từ ngày</label>
                    <input type="date" name="date_start" value="{{ request()->date_start }}" class="form-control"
                        placeholder="Từ ngày">
                </div>
                <div class="col">
                    <label class="form-label">Đến ngày</label>
                    <input type="date" name="date_end" value="{{ request()->date_end }}" class="form-control"
                        placeholder="Đến ngày">
                </div>
                <div class="col">
                    <label class="form-label">Loại thu/chi</label>
                    <select id="limit" name="type" class="form-select">
                        <option value="">Tất cả</option>
                        <option @selected( request()->type == \App\Models\Expense::THU )  value="{{ \App\Models\Expense::THU }}">Thu</option>
                        <option @selected( request()->type == \App\Models\Expense::CHI )  value="{{ \App\Models\Expense::CHI }}">Chi</option>
                    </select>
                </div>
            </div>
        </div>
        <div class="card-header border-top">
            <div class="row">
                <div class="col">
                    <input type="text" name="id_customer_name" value="{{ request()->id_customer_name }}" class="form-control"
                        placeholder="Mã hợp đồng, tên khách hàng">
                </div>
                <div class="col-md-2">
                    <select id="limit" name="limit" class="form-select text-capitalize">
                        <option @selected( request()->limit == 10) value="10">10</option>
                        <option @selected( request()->limit == 20) value="20">20</option>
                        <option @selected( request()->limit == 30) value="30">30</option>
                    </select>
                </div>
                <!-- <div class="col">
                    <div class="btn-group">
                        <button type="button" class="btn btn-label-secondary dropdown-toggle"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="bx bx-export me-1"></i> Export
                        </button>
                        <ul class="dropdown-menu">
                            <li>
                                <a class="dropdown-item disabled" href="#">Export</a>
                            </li>
                        </ul>
                    </div>
                </div> -->
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
                        <th>Ngày giao dịch</th>
                        <th>Nhân viên</th>
                        <th>Tên khách hàng</th>
                        <th>Loại</th>
                        <th>Thu/Chi</th>
                    </tr>
                </thead>
                <tbody class="table-border-bottom-0">
                    @foreach($items as $index => $item)
                    <tr>
                        <td>{{ $index + 1 }}</td>
                        <td>{{ $item->created_at_fm }}</td>
                        <td>{{ $item->userName }}</td>
                        <td>{{ $item->customerName }}</td>
                        <td>{{ $item->typeName }}</td>
                        <td>{{ $item->amount }}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

    <!-- Pagination -->
    <div class="card-footer pt-1 pb-1">
        <div class="float-end">
            {{ $items->appends(request()->query())->links() }}
        </div>
    </div>

</div>
@endsection