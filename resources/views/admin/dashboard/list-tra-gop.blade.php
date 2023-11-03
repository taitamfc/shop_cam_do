<div class="table-responsive text-start">
    <table class="table table-borderless">
        <thead>
            <tr>
                <th>Mã</th>
                <th>Khách hàng</th>
                <th>Giá trị</th>
                <th>Ngày tạo</th>
                <th>Trạng thái</th>
            </tr>
        </thead>
        <tbody>
            @foreach($installments as $item)
            <tr>
                <td><a title="Xem chi tiết" href="{{ route('installment.edit',$item->id) }}">{{ $item->id }}</a></td>
                <td>{{ $item->customer_name }}</td>
                <td>{{ $item->total_loan_fm }}</td>
                <td>{{ $item->created_at_fm }}</td>
                <td>{!! $item->status_html !!}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>