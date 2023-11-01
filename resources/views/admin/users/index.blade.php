
  @extends('admin.layouts.master')
  @section('content')
  <h4 class="py-3 mb-4">
    <span class="text-muted fw-light">Trang chủ /</span> Nhân viên
</h4>

<!-- Product List Table -->
<div class="card">
    <!-- Alert -->
    @include('admin.includes.global.alert')
    <!-- Form search -->
    <form action="{{ route('users.index') }}" method="get">
        <div class="card-header">
            <div class="row">
                <div class="col">
                    <input type="text" name="phone" value="{{ request()->phone }}" class="form-control" placeholder="Số điện thoại">
                </div>
                <div class="col">
                    <input type="text" name="address" value="{{ request()->address }}" class="form-control" placeholder="Địa chỉ">
                </div>
                <div class="col">
                    <select name="group_id" class="form-select text-capitalize">
                        <option value="">Tất cả</option>
                        <option value="1">Quản trị viên</option>
                        <option value="2">Quản lý</option>
                        <option value="3">Nhân viên</option>
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
                    <input type="text" value="{{ request()->name_email }}" name="name_email" class="form-control" placeholder="Email, tên nhân viên">
                </div>
                <div class="col-md-6">
                    <div class="row">
                        <div class="col">
                            <select id="limit" name="limit" class="form-select text-capitalize">
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
                            <a href="{{ route('users.create') }}" class="btn btn-primary">
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
                        <th>Tên</th>
                        <th>Số điện thoại</th>
                        <th>Địa chỉ</th>
                        <th>Nhóm nhân viên</th>
                        <th>Hành động</th>
                    </tr>
                </thead>
                <tbody class="table-border-bottom-0">
                    @foreach($items as $index => $item)
                    <tr>
                        <td>{{ $index + 1 }}</td>
                        <td>
                            <div class="d-flex">
                                <div class="td-info">
                                    <h6 class="text-body mb-0"> {{ $item->name }}</h6>
                                    <small class="text-muted text-truncate d-none d-sm-block">{{ $item->email}}</small>
                                </div>
                            </div>
                        </td>
                        <td>{{ $item->phone }}</td>
                        <td>{{ $item->address }}</td>
                        <td>{{ $groups[$item->group_id] }}</td>
                        <td>
                            <div class="dropdown">
                                <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown"><i class="bx bx-dots-vertical-rounded"></i></button>
                                <div class="dropdown-menu">
                                    <a class="dropdown-item" href="{{ route('users.edit',$item->id)}}"><i class="bx bx-edit-alt me-1"></i> Edit</a>
                                    <a class="dropdown-item" href="{{ route('users.show',$item->id)}}"><i class="bx bx-show me-1"></i> Show</a>
                                    
                                    <form action="{{ route('users.destroy',$item->id)}}" method="post">
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