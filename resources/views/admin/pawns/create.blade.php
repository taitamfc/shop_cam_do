@extends('admin.layouts.master')

@section('content')
    <h4 class="py-3 mb-4">
        <span class="text-muted fw-light">Thêm mới /</span><span> Hợp đồng</span>
    </h4>
    <form action="{{ route('pawns.store') }}" method='post' enctype="multipart/form-data">
        @csrf
        <div class="app-ecommerce">

            <!-- Add Product -->
            <div class="d-flex flex-wrap justify-content-between align-items-center mb-3">
                <div class="d-flex flex-column justify-content-center">
                </div>
                <div class="d-flex align-content-center flex-wrap gap-3">
                    <a href="{{ route('pawns.index') }}" class="btn btn-label-secondary">Quay lại</a>
                    <button type="submit" class="btn btn-primary">Thêm</button>
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
                                    <input type="text" class="form-control" placeholder="Tên khách vay" name="customer_name" value="{{ old('customer_name') }}">
                                    @error('customer_name')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                                </div>
                                <div class="col"><label class="form-label">Số điện thoại</label>
                                    <input type="text" class="form-control" placeholder="Số điện thoại khách vay" name="customer_phone" value="{{ old('customer_phone') }}">
                                    @error('customer_phone')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col"><label class="form-label">Ngày sinh</label>
                                    <input type="date" class="form-control" placeholder="Ngày sinh" name="customer_birthday" value="{{ old('customer_birthday') }}">
                                    @error('customer_birthday')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                                </div>
                                <div class="col"><label class="form-label">Số CCCD</label>
                                    <input type="text" class="form-control" placeholder="Số CCCD" name="cmnd" value="{{ old('cmnd') }}">
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
                                    <input type="text" class="form-control" placeholder="Tổng tiền vay" name="total_loan" value="{{ old('total_loan') }}">
                                    @error('total_loan')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="col-3"><label class="form-label">Lãi tổng</label>
                                    <input type="text" class="form-control" placeholder="Tổng tiền vay" name="interest_rate" value="{{ old('interest_rate') }}">
                                    @error('interest_rate')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="col"><label class="form-label">Tài sản</label>
                                    <select id="ProductStatus" class="form-select text-capitalize" name="asset_id">
                                        @if(!empty($assets))
                                        @foreach($assets as $asset)
                                        <option value="{{ $asset->id }}">{{ $asset->name }}</option>
                                        @endforeach
                                        @endif
                                    </select>
                                </div>

                            </div>
                            <div class="row mb-3">
                                <div class="col-3"><label class="form-label">Bốc trong vòng/ngày</label>
                                    <input type="text" class="form-control" placeholder="" name="time_loan" value="{{ old('time_loan') }}">
                                    @error('time_loan')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="col-3"><label class="form-label">Kỳ góp</label>
                                    <input type="text" class="form-control" placeholder="Lãi tổng" name="interest_payment_period" value="{{ old('interest_payment_period') }}">
                                    @error('interest_payment_period')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="col"><label  class="form-label">Quỹ</label>
                                    <select class="form-select text-capitalize" name="fund_id">
                                        @if(!empty($funds))
                                        @foreach($funds as $fund)
                                        <option value="{{ $fund->name }}" >{{ $fund->name }}</option>
                                        @endforeach
                                        @endif
                                    </select>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col">
                                    <label class="form-label">Tiền thu hàng kỳ</label>
                                    <input type="text" class="form-control" placeholder="" name="monthly_revenue">
                                </div>
                                <div class="col-md-6">
                                    <label class="form-label">Ảnh đính kèm</label>
                                    <input type="file" name="image" class="form-control">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col">
                                    <label class="form-label">Ghi chú</label>
                                    <textarea name="note" class="form-control" placeholder="Ghi chú" ></textarea>
                                </div>
                            </div>
                        </div>
                    </div>


                </div>
            </div>
        </div>
    </form>
@endsection
