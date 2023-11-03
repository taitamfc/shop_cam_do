@extends('admin.layouts.master')

@section('content')
<h4 class="py-3 mb-4">
    <span class="text-muted fw-light">Trang chủ /</span> Trả góp
</h4>

<!-- Product List Table -->
<div class="card">
    <!-- Alert -->
    @include('admin.includes.global.alert')
    <!-- Form search -->
    <form action="{{ route('installment.index') }}" method="get" enctype="multipart/form-data">
        @csrf
        <div class="card-header">
            <div class="row">
                <div class="col">
                    <input type="text" name="name_phone" class="form-control" placeholder="SDT, tên khách hàng">
                </div>
                <div class="col">
                    <select id="ProductStatus" class="form-select text-capitalize" name="status_name">
                        <option value="">Tất cả</option>
                        <option value="dang_vay">Đang vay</option>
                        <option value="qua_han">Đã quá hạn</option>
                    </select>
                </div>
                <div class="col">
                    <select id="ProductStatus" class="form-select text-capitalize" name="time">
                        <option value="">Thời gian</option>
                        <option value="tat_ca">Tất cả</option>
                        <option value="tuan_nay">Tuần này</option>
                        <option value="thang_nay">Tháng này</option>
                        <option value="nam_nay">Năm này</option>
                    </select>
                </div>
                <div class="col-md-1">
                    <button class="btn btn-primary">
                        <i class="bx bx-search"></i>
                    </button>
                </div>
            </div>
        </div>
        <div class="card-header border-top">
            <div class="row">
                <div class="col-md-6">
                    <input type="text" class="form-control" placeholder="Tên, sdt khách hàng">
                </div>
                <div class="col-md-6">
                    <div class="row">
                        <div class="col">
                            <select name="limit" class="form-select text-capitalize">
                                <option value="10">10</option>
                                <option value="20">20</option>
                                <option value="30">30</option>
                            </select>
                        </div>
                        <div class="col">
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
                        </div>
                        <div class="col">
                            <a href="{{ route('installment.create') }}" class="btn btn-primary">
                                <i class="bx bx-plus"></i> @lang('sys.add_new')
                            </a>
                        </div>
                    </div>
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
                    <th>Tên khách hàng</th>
                    <th>Số CMND</th>
                    <th>Tên tài sản</th>
                    <th>Trạng thái</th>
                    <th>Nhân viên tạo</th>
                    <th>Hành động</th>
                </tr>
                </thead>
                <tbody class="table-border-bottom-0">
                @foreach ($items as $index => $item)
                <tr>
                    <td>{{ $index + 1 }}</td>
                    <td>
                        <div class="d-flex">
                            <div class="td-info">
                                <h6 class="text-body mb-0">{{ $item->customer->name }}</h6>
                                <small class="text-muted text-truncate d-none d-sm-block">{{ $item->customer->phone
                                    }}</small>
                            </div>
                        </div>
                    </td>
                    <td>{{ $item->customer->cmnd }}</td>
                    <td>{{ $item->asset->name }}</td>
                    <td>
                        @if($item->status == 0)
                        Chờ duyệt
                        @elseif($item->status == 1)
                        Đã duyệt
                        @else
                        Đã thanh toán
                        @endif
                    </td>
                    <td>{{ $item->user->name }}</td>
                    <td>
                        <div class="dropdown d-flex">
                            <a class="dropdown-item" href="{{ route('installment.edit', $item->id) }}"><i
                                    class="bx bx-edit-alt me-1"></i> </a>
                            <a class="dropdown-item" href="{{ route('installment.show', $item->id) }}"><i
                                    class='bx bx-show-alt'></i> </a>

                            <a class="dropdown-item" href="{{ route('installment.approved', $item->id) }}"
                               @if($item->status == 1)
                                onclick="return confirm('Bạn có chắc chắn muốn hủy thanh toán?')"
                                @endif
                            >
                                @if($item->status == 0)
                                <i class='bx bxs-check-shield'></i>
                                @else
                                <i class='bx bxs-check-shield text-success'></i>
                                @endif
                            </a>

                            <a onclick="return confirm('Bạn có chắc chắn muốn xóa?')"
                               href="{{ route('installment.delete', $item->id) }}" class="dropdown-item"><i
                                    class="bx bx-trash me-1"></i>
                            </a>
                        </div>
        </div>
        </td>
        </tr>
        @endforeach
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


