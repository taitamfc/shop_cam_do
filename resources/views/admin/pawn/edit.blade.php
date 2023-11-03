@extends('admin.layouts.master')

@section('content')
<h4 class="py-3 mb-4">
    <span class="text-muted fw-light">Thêm mới /</span><span>Trả góp</span>
</h4>
<form action="{{ route('installment.store') }}" method='post' enctype="multipart/form-data">
    @csrf
    <div class="app-ecommerce">

        <!-- Add Product -->
        <div class="d-flex flex-wrap justify-content-between align-items-center mb-3">
            <div class="d-flex flex-column justify-content-center">
            </div>
            <div class="d-flex align-content-center flex-wrap gap-3">
                <a href="{{ route('installment.index') }}" class="btn btn-label-secondary">Quay lại</a>
                <button type="submit" class="btn btn-primary">Sửa</button>
            </div>

        </div>

        <div class="row">
            <!-- First column-->
            <div class="col-12 col-lg-12">
                <!-- Product Information -->
                <div class="card mb-4">
                    <div class="card-header">
                        <h5 class="card-tile mb-0">Thông tin khách vay</h5>
                    </div>
                    <div class="card-body">
                        <div class="row mb-3">
                            <div class="col"><label class="form-label">Tên</label>
                                <input type="text" class="form-control" placeholder="Tên khách vay" name="name" value="{{ old('name') ?? $item->customer->name }}">
                                @error('name')
                                <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="col"><label class="form-label">Số điện thoại</label>
                                <input type="text" class="form-control" placeholder="Số điện thoại khách vay" name="phone" value="{{ old('phone') ?? $item->customer->phone }}">
                                @error('phone')
                                <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col"><label class="form-label">Ngày sinh</label>
                                <input type="date" class="form-control" placeholder="Ngày sinh" name="birthday" value="{{ old('birthday') ?? $item->customer->birthday }}">
                                @error('birthday')
                                <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="col"><label class="form-label">Số CCCD</label>
                                <input type="text" class="form-control" placeholder="Số CCCD" name="cmnd" value="{{ old('cmnd') ?? $item->customer->cmnd }}">
                                @error('cmnd')
                                <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-md-3">
                                <label class="form-label">ẢNH CCCD </label>
                                <input type="file" name="identification" class="form-control">
                            </div>
                            <div class="col-md-3">
                                <label class="form-label">ẢNH MẶT TRƯỚC </label>
                                <input type="file" name="id_image_front" class="form-control">
                            </div>
                            <div class="col-md-3">
                                <label class="form-label">ẢNH MẶT SAU</label>
                                <input type="file" name="id_image_back" class="form-control">
                            </div>
                            <div class="col-md-3">
                                <label class="form-label">ẢNH CHÂN DUNG</label>
                                <input type="file" name="image_user" class="form-control">
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /Product Information -->
                <!-- Media -->
                <div class="card mb-4">
                    <div class="card-header d-flex justify-content-between align-items-center">
                        <h5 class="mb-0 card-title">Thông tin cho vay</h5>
                    </div>
                    <div class="card-body">
                        <div class="row mb-3">
                            <div class="col-3"><label class="form-label">Tổng tiền vay</label>
                                <input type="text" class="form-control" placeholder="Tổng tiền vay" name="total_loan" value="{{ old('total_loan') ?? $item->total_loan }}">
                                @error('total_loan')
                                <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="col-3"><label class="form-label">Lãi tổng</label>
                                <input type="text" class="form-control" placeholder="Tổng tiền vay" name="interest_rate" value="{{ old('interest_rate') ?? $item->interest_rate }}">
                                @error('interest_rate')
                                <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="col"><label class="form-label">Tài sản</label>
                                <select id="ProductStatus" class="form-select text-capitalize" name="asset_id">
                                    @if(!empty($assets))
                                    @foreach($assets as $asset)
                                    <option value="{{ $asset->id }}"  @if ($asset->id == $item->asset_id) selected @endif>{{ $asset->name }}</option>
                                    @endforeach
                                    @endif
                                </select>
                            </div>

                        </div>
                        <div class="row mb-3">
                            <div class="col-3"><label class="form-label">Bốc trong vòng/ngày</label>
                                <input type="text" class="form-control" placeholder="" name="time_loan" value="{{ old('time_loan') ?? $item->time_loan }}">
                                @error('time_loan')
                                <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="col-3"><label class="form-label">Kỳ góp</label>
                                <input type="text" class="form-control" placeholder="Lãi tổng" name="interest_payment_period" value="{{ old('interest_payment_period') ?? $item->interest_payment_period }}">
                                @error('interest_payment_period')
                                <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="col"><label  class="form-label">Quỹ</label>
                                <select class="form-select text-capitalize" name="fund_id">
                                    @if(!empty($funds))
                                    @foreach($funds as $fund)
                                    <option value="{{ $fund->id }}"@if ($fund->id == $item->fund_id) selected @endif>{{ $fund->name }}</option>
                                    @endforeach
                                    @endif
                                </select>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col">
                                <label class="form-label">Tiền thu hàng kỳ</label>
                                <input type="text" class="form-control" value="{{ $item->monthly_revenue ?? ''}}" placeholder="" name="monthly_revenue">
                            </div>
                            <div class="col-md-6">
                                <label class="form-label">Ảnh đính kèm</label>
                                <input type="file" name="image" class="form-control">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col">
                                <label class="form-label">Ghi chú</label>
                                <textarea name="note" class="form-control" placeholder="Ghi chú" >{{$item->note}}</textarea>
                            </div>
                        </div>
                    </div>
                </div>


            </div>
        </div>
    </div>
</form>
@endsection
