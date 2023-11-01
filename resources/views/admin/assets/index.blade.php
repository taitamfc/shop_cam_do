<?php

use App\Models\Asset;
?>

@extends('admin.layouts.master')
@section('content')
<h4 class="py-3 mb-4">
    <span class="text-muted fw-light">Trang chủ /</span> Tài sản
</h4>

<!-- Product List Table -->
<div class="card">
    <!-- Alert -->
    @include('admin.includes.global.alert')
    <!-- Form search -->
    <form action="{{ route('asset.index') }}" method="get">
        <div class="card-header">
            <div class="row">
                <div class="col">
                    <input type="text" name="name" value="{{ request()->name }}" class="form-control" placeholder="Tên tài sản">
                </div>
                <div class="col">
                    <input type="text" name="contract_id" value="{{ request()->contract_id }}" class="form-control" placeholder="Mã hợp đồng">
                </div>
                <div class="col">
                    <select name="status" class="form-select text-capitalize">
                        <option value="">Trạng thái</option>
                        <option value="<?= Asset::_CAM_CO ?>" {{ request()->input('status') == Asset::_CAM_CO ? 'selected' : '' }}><?= Asset::getDescStatus(Asset::_CAM_CO) ?></option>
                        <option value="<?= Asset::_DA_TRA ?>" {{ request()->input('status') == Asset::_DA_TRA ? 'selected' : '' }}><?= Asset::getDescStatus(Asset::_DA_TRA) ?></option>
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

    <!-- Table -->
    <div class="card-body">
        <div class="table-responsive text-nowrap ">
            <table class="table border-top">
                <thead>
                    <tr>
                        <th>STT</th>
                        <th>Tên tài sản</th>
                        <th>Mã hợp đồng</th>
                        <th>Trạng thái</th>
                        <th>Hành động</th>
                    </tr>
                </thead>
                <tbody class="table-border-bottom-0">
                    @foreach($items as $index => $item)
                    <tr>
                        <td>{{ $loop->index + 1 + ($items->perPage() * ($items->currentPage() - 1)) }}</td>
                        <td>{{ $item->name }}</td>
                        <td>{{ $item->contract_id }}</td>
                        <td>{{ Asset::getDescStatus($item->status) }}</td>
                        <td>
                            <div class="dropdown">
                                <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown"><i class="bx bx-dots-vertical-rounded"></i></button>
                                <div class="dropdown-menu">
                                    <a class="dropdown-item" href="{{ route('asset.edit',$item->id)}}"><i class="bx bx-edit-alt me-1"></i> Edit</a>
                                    <a class="dropdown-item" href="{{ route('asset.show',$item->id)}}"><i class="bx bx-show me-1"></i> Show</a>

                                    <form action="{{ route('asset.destroy',$item->id)}}" method="post">
                                        @csrf
                                        @method('DELETE')
                                        <button class="dropdown-item"><i class="bx bx-trash me-1"></i> Delete</button>
                                    </form>
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
            {{ $items->appends(request()->query())->links() }}
        </div>
    </div>

</div>
@endsection