@extends('admin.layouts.master')
@section('content')
<h4 class="py-3 mb-4">
    <span class="text-muted fw-light">Trả góp / Chi tiết /</span>
</h4>

<div
    class="d-flex flex-column flex-sm-row align-items-center justify-content-sm-between mb-4 text-center text-sm-start gap-2">
    <div class="mb-2 mb-sm-0">
        <h4 class="mb-1">
            Hợp đồng: {{$item->code}}
        </h4>

    </div>
    <a href="{{ route('installment.index') }}" class="btn btn-label-danger delete-customer">Quay lại</a>
</div>


<div class="row">
    <!-- Customer-detail Sidebar -->
    <div class="col-xl-4 col-lg-5 col-md-5 order-1 order-md-0">
        <!-- Customer-detail Card -->
        <div class="card mb-4">
            <div class="card-body">
                <div class="customer-avatar-section">
                    <div class="d-flex align-items-center flex-column">
                        <img class="img-fluid rounded my-3"
                             src="{{ asset($item->customer->image_user ?? '../../assets/img/avatars/12.png')}}"
                             height="110"
                             width="110" alt="User avatar">
                        <div class="customer-info text-center">
                            <h4 class="mb-1">{{$item->customer->name ?? ''}}</h4>
                        </div>
                    </div>
                </div>

                <div class="info-container">
                    <small class="d-block pt-4 border-top fw-normal text-uppercase text-muted my-3">CHI TIẾT</small>
                    <ul class="list-unstyled">
                        <li class="mb-3">
                            <span class="fw-medium me-2">Tên:</span>
                            <span>{{$item->customer->name ?? ''}}</span>
                        </li>
                        <li class="mb-3">
                            <span class="fw-medium me-2">SĐT:</span>
                            <span>{{$item->customer->phone ?? ''}}</span>
                        </li>
                        <li class="mb-3">
                            <span class="fw-medium me-2">CCCD:</span>
                            <span>{{$item->customer->cmnd ?? ''}}</span>
                        </li>
                        <li class="mb-3">
                            <span class="fw-medium me-2">Tài sản:</span>
                            <span>{{$item->asset->name ?? ''}}</span>
                        </li>
                        <li class="mb-3">
                            <span class="fw-medium me-2">Trạng thái:</span>
                            @if($item->status == 0)
                            <span class="badge bg-label-danger"> Chờ duyệt </span>
                            @elseif($item->status == 1)
                            <span class="badge bg-label-primary">   Đã duyệt </span>
                            @else
                            <span class="badge bg-label-success"> Đã thanh toán </span>
                            @endif
                            </span>
                        </li>
                        <li class="mb-3">
                            <span class="fw-medium me-2">Hợp đồng:</span>
                            <span>{{$item->code ?? '' }}</span>
                        </li>

                        <li class="mb-3">
                            <span class="fw-medium me-2">Ngày vay:</span>
                            <span>{{$item->date_paid ?? ''}}</span>
                        </li>

                        <li class="mb-3">
                            <span class="fw-medium me-2">Người tạo:</span>
                            <span>{{$item->user->name ?? ''}}</span>
                        </li>
                        <li class="mb-3">
                            <span class="fw-medium me-2">Ghi chú:</span>
                            <span>{{$item->note ?? ''}}</span>
                        </li>
                    </ul>
                    <div class="d-flex justify-content-center">
                        <a href="javascript:;" class="btn btn-primary me-3" data-bs-target="#editUser"
                           data-bs-toggle="modal">Chi tiết</a>

                    </div>
                </div>
            </div>
        </div>
        <!-- /Customer-detail Card -->
        <!-- Plan Card -->

    </div>
    <!--/ Customer Sidebar -->


    <!-- Customer Content -->
    <div class="col-xl-8 col-lg-7 col-md-7 order-0 order-md-1">
        <!-- Customer Pills -->
        <ul class="nav nav-pills flex-column flex-md-row mb-4">
            <li class="nav-item"><a class="nav-link active" href="javascript:void(0);"><i class="bx bx-user me-1"></i>Tổng
                    quan</a>
            </li>
        </ul>

        <div class="row text-nowrap">
            <div class="col-md-6 mb-4">
                <div class="card h-100">
                    <div class="card-body">
                        <div class="card-icon mb-3">
                            <div class="avatar">
                                <div class="avatar-initial rounded bg-label-primary"><i class="bx bx-dollar bx-sm"></i>
                                </div>
                            </div>
                        </div>
                        <div class="card-info">
                            <h6 class="card-title mb-3">Tổng tiền vay: {{$item->total_loan ?? ''}}</h6>
                            <h6 class="card-title mb-3">Lãi tổng: {{$item->interest_rate ?? ''}}</h6>
                            <h6 class="card-title mb-3">Bốc trong vòng/ngày: {{$item->time_loan ?? ''}}</h6>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 mb-4">
                <div class="card">
                    <div class="card-body">
                        <div class="card-icon mb-3">
                            <div class="avatar">
                                <div class="avatar-initial rounded bg-label-success"><i class="bx bx-gift bx-sm"></i>
                                </div>
                            </div>
                        </div>
                        <div class="card-info">
                            <h6 class="card-title mb-3">Tiền thu hàng kỳ: {{$item->monthly_revenue ?? ''}}</h6>
                            <h6 class="card-title mb-3">Kỳ góp: {{$item->interest_payment_period ?? ''}}</h6>
                            <h6 class="card-title mb-3">Lãi tổng: {{$item->fund->name ?? ''}}</h6>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <!-- Invoice table -->
        <div class="card mb-4">
            <div class="table-responsive mb-3">
                <div id="DataTables_Table_0_wrapper" class="dataTables_wrapper dt-bootstrap5 no-footer">
                    <div class="card-header d-flex flex-wrap py-3 py-sm-2">
                        <div class="head-label text-center me-4 ms-1"><h5 class="card-title mb-0 text-nowrap">
                                Chi tiết đóng lãi
                            </h5></div>
                    </div>
                    <table class="table datatables-customer-order border-top dataTable no-footer dtr-column"
                           id="DataTables_Table_0" aria-describedby="DataTables_Table_0_info" style="width: 919px;">
                        <thead>
                        <tr>
                            <th class="sorting sorting_desc" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1"
                                colspan="1" style="width: 20px;" aria-label="Order: activate to sort column ascending"
                                aria-sort="descending">STT
                            </th>
                            <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1"
                                style="width: 180px;" aria-label="Date: activate to sort column ascending">Ngày thanh
                                toán
                            </th>
                            <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1"
                                style="width: 140px;" aria-label="Status: activate to sort column ascending">Tiền lãi
                            </th>
                            <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1"
                                style="width: 140px;" aria-label="Spent: activate to sort column ascending">Đã thanh
                                toán
                            </th>
                            <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1"
                                style="width: 97px;" aria-label="Spent: activate to sort column ascending">Trạng thái
                            </th>
                            <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1"
                                style="width: 100px;" aria-label="Spent: activate to sort column ascending">Ngày đóng
                            </th>
                            <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1"
                                style="width: 97px;" aria-label="Spent: activate to sort column ascending">Chức năng
                            </th>
                        </tr>
                        </thead>
                        <tbody>
                        @if($item->payments)
                        @foreach($item->payments as $payment)
                        <tr class="odd">
                            <td>{{ $loop->iteration }}</td>
                            <td class="sorting_1">{{$payment->date_paid}}</td>
                            <td class="sorting_1">{{$payment->amount}}</td>
                            <td><span class="text-nowrap">{{$payment->paid ?? ''}}</span></td>
                            <td>
                                @if($payment->status == 0)
                                <span class="badge bg-label-primary" text-capitalized="">Chưa đóng</span>
                                @elseif($payment->status == 1)
                                <span class="badge bg-label-success" text-capitalized="">Đã đóng</span>
                                @else
                                <span class="badge bg-label-danger" text-capitalized="">Quá hạn</span>
                                @endif
                            </td>
                            <td><span>{{$payment->payment_day}}</span></td>
                            <td class="d-flex">
                                <button class="dropdown-item" data-bs-target="#upgradePlanModal{{$payment->id}}" data-bs-toggle="modal">
                                    <i class='bx bx-money text-primary' ></i>
                                </button>

                                <form action="{{ route('installment.destroy', $item->id) }}" method="post">
                                    @csrf
                                    @method('DELETE')
                                    <button class="dropdown-item"><i class="bx bx-trash me-1 text-danger"></i>
                                    </button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                        @endif
                        </tbody>
                    </table>

                </div>
            </div>
        </div>
        <!-- /Invoice table -->
    </div>
    <!--/ Customer Content -->
</div>


<!-- Edit User Modal -->
<div class="modal fade" id="editUser" tabindex="-1" style="display: none;" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-simple modal-edit-user">
        <div class="modal-content p-md-5">
            <div class="modal-body">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                <div class="text-center mb-4">
                    <h3>Thông tin CCCD và Tài sản</h3>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <img class="img-fluid rounded my-3" src="{{ asset($item->customer->id_image_front)}}"
                             alt="User avatar">
                    </div>
                    <div class="col-md-6">
                        <img class="img-fluid rounded my-3" src="{{ asset($item->customer->id_image_back)}}"
                             alt="User avatar">
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <img class="img-fluid rounded my-3" src="{{ asset($item->customer->identification)}}"
                             alt="User avatar">
                    </div>
                    <div class="col-md-6">
                        <img class="img-fluid rounded my-3" src="{{ asset($item->image)}}"
                             alt="User avatar">
                    </div>
                </div>
                <div class="col-12 text-center">
                    <button type="reset" class="btn btn-label-danger" data-bs-dismiss="modal" aria-label="Close">
                        Cancel
                    </button>
                </div>
                <input type="hidden">
            </div>
        </div>
    </div>
</div>
<!--/ Edit User Modal -->
@foreach($item->payments as $payment)
<div class="modal fade" id="upgradePlanModal{{$payment->id}}" tabindex="-1" style="display: none;" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-simple modal-upgrade-plan">
        <div class="modal-content p-3 p-md-5">
            <div class="modal-body">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                <div class="text-center mb-4">
                    <h3>Số tiền thanh toán</h3>
                    <h4>{{$payment->amount}}</h4>
                </div>
                <form action="{{ route('payment.store', $payment->id)}}" method="post" >
                    @csrf
                    <div class="row d-flex">

                    <div class="col-sm-8">
                        <label class="form-label" for="choosePlan">Nhập số tiền thanh toán</label>
                        <input type="text" class="form-control" value="{{ old('paid')}}" placeholder="" name="paid">
                    </div>
                    <div class="col-sm-4 d-flex align-items-end">
                        <button type="button" class="btn btn-primary" onclick="confirmPayment()">Thanh toán</button>
                    </div>
                    </div>
                    <div class="col-sm-12">
                        <p id="payError" style="color: red; display: none;"></p>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endforeach
<script>

    function confirmPayment() {
        let paid = $(this).find('input[name="paid"]').val().trim();

        if (!paid) {
            document.querySelector(`#payError`).textContent = 'Vui lòng nhập số tiền thanh toán';
            document.querySelector(`#payError`).style.display = 'block';
            return; // Dừng việc thực hiện hàm, không gửi AJAX nếu số tiền rỗng
        }

        $.ajax({
            url: $(this).attr('action'),
            type: 'POST',
            data: $(this).serialize(),
            success: function(response) {
                console.log(response)
                if (response.success) {
                    $('#upgradePlanModal'+response.id).modal('hide'); // ví dụ: ẩn modal
                    window.location.href = '/information';
                } else {
                    $('#passwordError').text(response.message).show();
                }
            },
            error: function(xhr, status, error) {
                // Xử lý lỗi mà không liên quan đến dữ liệu trả về từ server
                console.error("AJAX error: " + status + '; ' + error);
            }
        });
    }

</script>
@endsection
