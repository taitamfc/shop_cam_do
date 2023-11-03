<div class="table-responsive text-start">
    <table class="table table-borderless">
        <thead>
            <tr>
                <th>No</th>
                <th>System</th>
                <th>Visits</th>
                <th class="w-50">Data In Percentage</th>
            </tr>
        </thead>
        <tbody>
            @foreach($pawns as $item)
            <tr>
                <td>1</td>
                <td>
                    <div class="d-flex align-items-center">
                        <img src="{{asset('assets/img/icons/brands/windows.png')}}" alt="Windows" height="24" class="me-2">
                        <span>Windows</span>
                    </div>
                </td>
                <td>875.24k</td>
                <td>
                    <div class="d-flex justify-content-between align-items-center gap-3">
                        <div class="progress w-100" style="height:10px;">
                            <div class="progress-bar bg-success" role="progressbar" style="width: 71.50%" aria-valuenow="71.50" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                        <small class="fw-medium">71.50%</small>
                    </div>
                </td>
            </tr>
            @endforeach
            
        </tbody>
    </table>
</div>