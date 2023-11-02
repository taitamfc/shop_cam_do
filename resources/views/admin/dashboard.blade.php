@extends('admin.layouts.master')
@section('content')
<div class="row">
    <div class="col-lg-12 mb-4 order-0">
        <div class="card">
            <div class="d-flex align-items-end row">
                <div class="col-sm-7">
                    <div class="card-body">
                        <h5 class="card-title text-primary">Congratulations John! 🎉</h5>
                        <p class="mb-4">You have done <span class="fw-medium">72%</span> more sales today. Check your new badge in your profile.</p>

                        <a href="javascript:;" class="btn btn-sm btn-label-primary">View Badges</a>
                    </div>
                </div>
                <div class="col-sm-5 text-center text-sm-left">
                    <div class="card-body pb-0 px-0 px-md-4">
                        <img src="{{asset('assets/img/illustrations/man-with-laptop-light.png')}}" height="140" alt="View Badge User" data-app-dark-img="illustrations/man-with-laptop-dark.png')}}" data-app-light-img="illustrations/man-with-laptop-light.png">
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <!-- Total Revenue -->
    <div class="col-12 col-lg-12 order-2 order-md-3 order-lg-2 mb-4">
        <div class="card">
            <div class="row row-bordered g-0">
                <div class="col-md-9">
                    <div class="card text-center">
                        <div class="card-header py-3">
                            <ul class="nav nav-pills" role="tablist">
                                <li class="nav-item" role="presentation">
                                    <button type="button" class="nav-link active" role="tab" data-bs-toggle="tab" data-bs-target="#navs-pills-browser" aria-controls="navs-pills-browser" aria-selected="true">Browser</button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button type="button" class="nav-link" role="tab" data-bs-toggle="tab" data-bs-target="#navs-pills-os" aria-controls="navs-pills-os" aria-selected="false" tabindex="-1">Operating System</button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button type="button" class="nav-link" role="tab" data-bs-toggle="tab" data-bs-target="#navs-pills-country" aria-controls="navs-pills-country" aria-selected="false" tabindex="-1">Country</button>
                                </li>
                            </ul>
                        </div>
                        <div class="tab-content pt-0">
                            <div class="tab-pane fade show active" id="navs-pills-browser" role="tabpanel">
                                <div class="table-responsive text-start">
                                    <table class="table table-borderless text-nowrap">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Browser</th>
                                                <th>Visits</th>
                                                <th class="w-50">Data In Percentage</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>1</td>
                                                <td>
                                                    <div class="d-flex align-items-center">
                                                        <img src="{{asset('assets/img/icons/brands/chrome.png')}}" alt="Chrome" height="24" class="me-2">
                                                        <span>Chrome</span>
                                                    </div>
                                                </td>
                                                <td>8.92k</td>
                                                <td>
                                                    <div class="d-flex justify-content-between align-items-center gap-3">
                                                        <div class="progress w-100" style="height:10px;">
                                                            <div class="progress-bar bg-success" role="progressbar" style="width: 84.75%" aria-valuenow="84.75" aria-valuemin="0" aria-valuemax="100"></div>
                                                        </div>
                                                        <small class="fw-medium">84.75%</small>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>2</td>
                                                <td>
                                                    <div class="d-flex align-items-center">
                                                        <img src="{{asset('assets/img/icons/brands/safari.png')}}" alt="Safari" height="24" class="me-2">
                                                        <span>Safari</span>
                                                    </div>
                                                </td>
                                                <td>7.29k</td>
                                                <td>
                                                    <div class="d-flex justify-content-between align-items-center gap-3">
                                                        <div class="progress w-100" style="height:10px;">
                                                            <div class="progress-bar bg-primary" role="progressbar" style="width: 72.43%" aria-valuenow="72.43" aria-valuemin="0" aria-valuemax="100"></div>
                                                        </div>
                                                        <small class="fw-medium">72.43%</small>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>3</td>
                                                <td>
                                                    <div class="d-flex align-items-center">
                                                        <img src="{{asset('assets/img/icons/brands/firefox.png')}}" alt="Firefox" height="24" class="me-2">
                                                        <span>Firefox</span>
                                                    </div>
                                                </td>
                                                <td>6.11k</td>
                                                <td>
                                                    <div class="d-flex justify-content-between align-items-center gap-3">
                                                        <div class="progress w-100" style="height:10px;">
                                                            <div class="progress-bar bg-primary" role="progressbar" style="width: 67.37%" aria-valuenow="67.37" aria-valuemin="0" aria-valuemax="100"></div>
                                                        </div>
                                                        <small class="fw-medium">67.37%</small>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>4</td>
                                                <td>
                                                    <div class="d-flex align-items-center">
                                                        <img src="{{asset('assets/img/icons/brands/edge.png')}}" alt="Edge" height="24" class="me-2">
                                                        <span>Edge</span>
                                                    </div>
                                                </td>
                                                <td>5.08k</td>
                                                <td>
                                                    <div class="d-flex justify-content-between align-items-center gap-3">
                                                        <div class="progress w-100" style="height:10px;">
                                                            <div class="progress-bar bg-info" role="progressbar" style="width: 60.12%" aria-valuenow="60.12" aria-valuemin="0" aria-valuemax="100"></div>
                                                        </div>
                                                        <small class="fw-medium">60.12%</small>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>5</td>
                                                <td>
                                                    <div class="d-flex align-items-center">
                                                        <img src="{{asset('assets/img/icons/brands/opera.png')}}" alt="Opera" height="24" class="me-2">
                                                        <span>Opera</span>
                                                    </div>
                                                </td>
                                                <td>3.93k</td>
                                                <td>
                                                    <div class="d-flex justify-content-between align-items-center gap-3">
                                                        <div class="progress w-100" style="height:10px;">
                                                            <div class="progress-bar bg-info" role="progressbar" style="width: 51.94%" aria-valuenow="51.94" aria-valuemin="0" aria-valuemax="100"></div>
                                                        </div>
                                                        <small class="fw-medium">51.94%</small>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>6</td>
                                                <td>
                                                    <div class="d-flex align-items-center">
                                                        <img src="{{asset('assets/img/icons/brands/brave.png')}}" alt="Brave" height="24" class="me-2">
                                                        <span>Brave</span>
                                                    </div>
                                                </td>
                                                <td>3.19k</td>
                                                <td>
                                                    <div class="d-flex justify-content-between align-items-center gap-3">
                                                        <div class="progress w-100" style="height:10px;">
                                                            <div class="progress-bar bg-warning" role="progressbar" style="width: 39.94%" aria-valuenow="39.94" aria-valuemin="0" aria-valuemax="100"></div>
                                                        </div>
                                                        <small class="fw-medium">39.94%</small>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>7</td>
                                                <td>
                                                    <div class="d-flex align-items-center">
                                                        <img src="{{asset('assets/img/icons/brands/vivaldi.png')}}" alt="Vivaldi" height="24" class="me-2">
                                                        <span>Vivaldi</span>
                                                    </div>
                                                </td>
                                                <td>1.29k</td>
                                                <td>
                                                    <div class="d-flex justify-content-between align-items-center gap-3">
                                                        <div class="progress w-100" style="height:10px;">
                                                            <div class="progress-bar bg-danger" role="progressbar" style="width: 28.43%" aria-valuenow="28.43" aria-valuemin="0" aria-valuemax="100"></div>
                                                        </div>
                                                        <small class="fw-medium">18.43%</small>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>8</td>
                                                <td>
                                                    <div class="d-flex align-items-center">
                                                        <img src="{{asset('assets/img/icons/brands/uc.png')}}" alt="UC Browser" height="24" class="me-2">
                                                        <span>UC Browser</span>
                                                    </div>
                                                </td>
                                                <td>328</td>
                                                <td>
                                                    <div class="d-flex justify-content-between align-items-center gap-3">
                                                        <div class="progress w-100" style="height:10px;">
                                                            <div class="progress-bar bg-danger" role="progressbar" style="width: 20.14%" aria-valuenow="20.14" aria-valuemin="0" aria-valuemax="100"></div>
                                                        </div>
                                                        <small class="fw-medium">20.14%</small>
                                                    </div>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="navs-pills-os" role="tabpanel">
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
                                            <tr>
                                                <td>2</td>
                                                <td>
                                                    <div class="d-flex align-items-center">
                                                        <img src="{{asset('assets/img/icons/brands/mac.png')}}" alt="Mac" height="24" class="me-2">
                                                        <span>Mac</span>
                                                    </div>
                                                </td>
                                                <td>89.68k</td>
                                                <td>
                                                    <div class="d-flex justify-content-between align-items-center gap-3">
                                                        <div class="progress w-100" style="height:10px;">
                                                            <div class="progress-bar bg-primary" role="progressbar" style="width: 66.67%" aria-valuenow="66.67" aria-valuemin="0" aria-valuemax="100"></div>
                                                        </div>
                                                        <small class="fw-medium">66.67%</small>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>3</td>
                                                <td>
                                                    <div class="d-flex align-items-center">
                                                        <img src="{{asset('assets/img/icons/brands/ubuntu.png')}}" alt="Ubuntu" height="24" class="me-2">
                                                        <span>Ubuntu</span>
                                                    </div>
                                                </td>
                                                <td>37.68k</td>
                                                <td>
                                                    <div class="d-flex justify-content-between align-items-center gap-3">
                                                        <div class="progress w-100" style="height:10px;">
                                                            <div class="progress-bar bg-info" role="progressbar" style="width: 62.82%" aria-valuenow="62.82" aria-valuemin="0" aria-valuemax="100"></div>
                                                        </div>
                                                        <small class="fw-medium">62.82%</small>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>4</td>
                                                <td>
                                                    <div class="d-flex align-items-center">
                                                        <img src="{{asset('assets/img/icons/brands/chrome.png')}}" alt="Chrome" height="24" class="me-2">
                                                        <span>Chrome</span>
                                                    </div>
                                                </td>
                                                <td>35.34k</td>
                                                <td>
                                                    <div class="d-flex justify-content-between align-items-center gap-3">
                                                        <div class="progress w-100" style="height:10px;">
                                                            <div class="progress-bar bg-info" role="progressbar" style="width: 56.25%" aria-valuenow="56.25" aria-valuemin="0" aria-valuemax="100"></div>
                                                        </div>
                                                        <small class="fw-medium">56.25%</small>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>5</td>
                                                <td>
                                                    <div class="d-flex align-items-center">
                                                        <img src="{{asset('assets/img/icons/brands/cent.png')}}" alt="Cent" height="24" class="me-2">
                                                        <span>Cent</span>
                                                    </div>
                                                </td>
                                                <td>32.25k</td>
                                                <td>
                                                    <div class="d-flex justify-content-between align-items-center gap-3">
                                                        <div class="progress w-100" style="height:10px;">
                                                            <div class="progress-bar bg-info" role="progressbar" style="width: 42.76%" aria-valuenow="42.76" aria-valuemin="0" aria-valuemax="100"></div>
                                                        </div>
                                                        <small class="fw-medium">42.76%</small>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>6</td>
                                                <td>
                                                    <div class="d-flex align-items-center">
                                                        <img src="{{asset('assets/img/icons/brands/linux.png')}}" alt="Linux" height="24" class="me-2">
                                                        <span>Linux</span>
                                                    </div>
                                                </td>
                                                <td>22.15k</td>
                                                <td>
                                                    <div class="d-flex justify-content-between align-items-center gap-3">
                                                        <div class="progress w-100" style="height:10px;">
                                                            <div class="progress-bar bg-warning" role="progressbar" style="width: 37.77%" aria-valuenow="37.77" aria-valuemin="0" aria-valuemax="100"></div>
                                                        </div>
                                                        <small class="fw-medium">37.77%</small>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>7</td>
                                                <td>
                                                    <div class="d-flex align-items-center">
                                                        <img src="{{asset('assets/img/icons/brands/fedora.png')}}" alt="Fedora" height="24" class="me-2">
                                                        <span>Fedora</span>
                                                    </div>
                                                </td>
                                                <td>1.13k</td>
                                                <td>
                                                    <div class="d-flex justify-content-between align-items-center gap-3">
                                                        <div class="progress w-100" style="height:10px;">
                                                            <div class="progress-bar bg-danger" role="progressbar" style="width: 29.16%" aria-valuenow="29.16" aria-valuemin="0" aria-valuemax="100"></div>
                                                        </div>
                                                        <small class="fw-medium">29.16%</small>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>8</td>
                                                <td>
                                                    <div class="d-flex align-items-center">
                                                        <img src="{{asset('assets/img/icons/brands/vivaldi-os.png')}}" alt="Vivaldi" height="24" class="me-2">
                                                        <span>Vivaldi</span>
                                                    </div>
                                                </td>
                                                <td>1.09k</td>
                                                <td>
                                                    <div class="d-flex justify-content-between align-items-center gap-3">
                                                        <div class="progress w-100" style="height:10px;">
                                                            <div class="progress-bar bg-danger" role="progressbar" style="width: 26.26%" aria-valuenow="26.26" aria-valuemin="0" aria-valuemax="100"></div>
                                                        </div>
                                                        <small class="fw-medium">26.26%</small>
                                                    </div>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="navs-pills-country" role="tabpanel">
                                <div class="table-responsive text-start">
                                    <table class="table table-borderless">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Country</th>
                                                <th>Visits</th>
                                                <th class="w-50">Data In Percentage</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>1</td>
                                                <td>
                                                    <div class="d-flex align-items-center">
                                                        <img src="{{asset('assets/svg/flags/us.svg')}}" alt="USA" height="24" class="me-2">
                                                        <span>USA</span>
                                                    </div>
                                                </td>
                                                <td>87.24k</td>
                                                <td>
                                                    <div class="d-flex justify-content-between align-items-center gap-3">
                                                        <div class="progress w-100" style="height:10px;">
                                                            <div class="progress-bar bg-success" role="progressbar" style="width: 89.12%" aria-valuenow="89.12" aria-valuemin="0" aria-valuemax="100"></div>
                                                        </div>
                                                        <small class="fw-medium">89.12%</small>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>2</td>
                                                <td>
                                                    <div class="d-flex align-items-center">
                                                        <img src="{{asset('assets/svg/flags/br.svg')}}" alt="Brazil" height="24" class="me-2">
                                                        <span>Brazil</span>
                                                    </div>
                                                </td>
                                                <td>62.68k</td>
                                                <td>
                                                    <div class="d-flex justify-content-between align-items-center gap-3">
                                                        <div class="progress w-100" style="height:10px;">
                                                            <div class="progress-bar bg-primary" role="progressbar" style="width: 78.23%" aria-valuenow="78.23" aria-valuemin="0" aria-valuemax="100"></div>
                                                        </div>
                                                        <small class="fw-medium">78.23%</small>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>3</td>
                                                <td>
                                                    <div class="d-flex align-items-center">
                                                        <img src="{{asset('assets/svg/flags/in.svg')}}" alt="India" height="24" class="me-2">
                                                        <span>India</span>
                                                    </div>
                                                </td>
                                                <td>52.58k</td>
                                                <td>
                                                    <div class="d-flex justify-content-between align-items-center gap-3">
                                                        <div class="progress w-100" style="height:10px;">
                                                            <div class="progress-bar bg-info" role="progressbar" style="width: 69.82%" aria-valuenow="69.82" aria-valuemin="0" aria-valuemax="100"></div>
                                                        </div>
                                                        <small class="fw-medium">69.82%</small>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>4</td>
                                                <td>
                                                    <div class="d-flex align-items-center">
                                                        <img src="{{asset('assets/svg/flags/au.svg')}}" alt="Australia" height="24" class="me-2">
                                                        <span>Australia</span>
                                                    </div>
                                                </td>
                                                <td>44.13k</td>
                                                <td>
                                                    <div class="d-flex justify-content-between align-items-center gap-3">
                                                        <div class="progress w-100" style="height:10px;">
                                                            <div class="progress-bar bg-warning" role="progressbar" style="width: 59.90%" aria-valuenow="59.90" aria-valuemin="0" aria-valuemax="100"></div>
                                                        </div>
                                                        <small class="fw-medium">59.90%</small>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>5</td>
                                                <td>
                                                    <div class="d-flex align-items-center">
                                                        <img src="{{asset('assets/svg/flags/de.svg')}}" alt="Germany" height="24" class="me-2">
                                                        <span>Germany</span>
                                                    </div>
                                                </td>
                                                <td>32.21k</td>
                                                <td>
                                                    <div class="d-flex justify-content-between align-items-center gap-3">
                                                        <div class="progress w-100" style="height:10px;">
                                                            <div class="progress-bar bg-warning" role="progressbar" style="width: 57.11%" aria-valuenow="57.11" aria-valuemin="0" aria-valuemax="100"></div>
                                                        </div>
                                                        <small class="fw-medium">57.11%</small>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>6</td>
                                                <td>
                                                    <div class="d-flex align-items-center">
                                                        <img src="{{asset('assets/svg/flags/fr.svg')}}" alt="France" height="24" class="me-2">
                                                        <span>France</span>
                                                    </div>
                                                </td>
                                                <td>37.87k</td>
                                                <td>
                                                    <div class="d-flex justify-content-between align-items-center gap-3">
                                                        <div class="progress w-100" style="height:10px;">
                                                            <div class="progress-bar bg-warning" role="progressbar" style="width: 41.23%" aria-valuenow="41.23" aria-valuemin="0" aria-valuemax="100"></div>
                                                        </div>
                                                        <small class="fw-medium">41.23%</small>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>7</td>
                                                <td>
                                                    <div class="d-flex align-items-center">
                                                        <img src="{{asset('assets/svg/flags/pt.svg')}}" alt="Portugal" height="24" class="me-2">
                                                        <span>Portugal</span>
                                                    </div>
                                                </td>
                                                <td>20.29k</td>
                                                <td>
                                                    <div class="d-flex justify-content-between align-items-center gap-3">
                                                        <div class="progress w-100" style="height:10px;">
                                                            <div class="progress-bar bg-danger" role="progressbar" style="width: 37.11%" aria-valuenow="37.11" aria-valuemin="0" aria-valuemax="100"></div>
                                                        </div>
                                                        <small class="fw-medium">37.11%</small>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>8</td>
                                                <td>
                                                    <div class="d-flex align-items-center">
                                                        <img src="{{asset('assets/svg/flags/cn.svg')}}" alt="China" height="24" class="me-2">
                                                        <span>China</span>
                                                    </div>
                                                </td>
                                                <td>12.21k</td>
                                                <td>
                                                    <div class="d-flex justify-content-between align-items-center gap-3">
                                                        <div class="progress w-100" style="height:10px;">
                                                            <div class="progress-bar bg-danger" role="progressbar" style="width: 17.61%" aria-valuenow="17.61" aria-valuemin="0" aria-valuemax="100"></div>
                                                        </div>
                                                        <small class="fw-medium">17.61%</small>
                                                    </div>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card-body">
                        <div class="text-center">
                            <div class="dropdown">
                                <button class="btn btn-sm btn-label-primary dropdown-toggle" type="button" id="growthReportId" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    2022
                                </button>
                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="growthReportId">
                                    <a class="dropdown-item" href="javascript:void(0);">2021</a>
                                    <a class="dropdown-item" href="javascript:void(0);">2020</a>
                                    <a class="dropdown-item" href="javascript:void(0);">2019</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="growthChart" style="min-height: 154.875px;">
                        <div id="apexchartsc1t3m87j" class="apexcharts-canvas apexchartsc1t3m87j apexcharts-theme-light" style="width: 266px; height: 154.875px;"><svg id="SvgjsSvg2796" width="266" height="154.875" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.dev" class="apexcharts-svg" xmlns:data="ApexChartsNS" transform="translate(0, 0)" style="background: transparent;">
                                <g id="SvgjsG2798" class="apexcharts-inner apexcharts-graphical" transform="translate(26, -25)">
                                    <defs id="SvgjsDefs2797">
                                        <clipPath id="gridRectMaskc1t3m87j">
                                            <rect id="SvgjsRect2800" width="222" height="285" x="-3" y="-1" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect>
                                        </clipPath>
                                        <clipPath id="forecastMaskc1t3m87j"></clipPath>
                                        <clipPath id="nonForecastMaskc1t3m87j"></clipPath>
                                        <clipPath id="gridRectMarkerMaskc1t3m87j">
                                            <rect id="SvgjsRect2801" width="220" height="287" x="-2" y="-2" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect>
                                        </clipPath>
                                        <linearGradient id="SvgjsLinearGradient2806" x1="1" y1="0" x2="0" y2="1">
                                            <stop id="SvgjsStop2807" stop-opacity="1" stop-color="rgba(105,108,255,1)" offset="0.3"></stop>
                                            <stop id="SvgjsStop2808" stop-opacity="0.6" stop-color="rgba(255,255,255,0.6)" offset="0.7"></stop>
                                            <stop id="SvgjsStop2809" stop-opacity="0.6" stop-color="rgba(255,255,255,0.6)" offset="1"></stop>
                                        </linearGradient>
                                        <linearGradient id="SvgjsLinearGradient2817" x1="1" y1="0" x2="0" y2="1">
                                            <stop id="SvgjsStop2818" stop-opacity="1" stop-color="rgba(105,108,255,1)" offset="0.3"></stop>
                                            <stop id="SvgjsStop2819" stop-opacity="0.6" stop-color="rgba(105,108,255,0.6)" offset="0.7"></stop>
                                            <stop id="SvgjsStop2820" stop-opacity="0.6" stop-color="rgba(105,108,255,0.6)" offset="1"></stop>
                                        </linearGradient>
                                    </defs>
                                    <g id="SvgjsG2802" class="apexcharts-radialbar">
                                        <g id="SvgjsG2803">
                                            <g id="SvgjsG2804" class="apexcharts-tracks">
                                                <g id="SvgjsG2805" class="apexcharts-radialbar-track apexcharts-track" rel="1">
                                                    <path id="apexcharts-radialbarTrack-0" d="M 73.83506097560974 167.17541022773656 A 68.32987804878049 68.32987804878049 0 1 1 142.16493902439026 167.17541022773656" fill="none" fill-opacity="1" stroke="rgba(255,255,255,0.85)" stroke-opacity="1" stroke-linecap="butt" stroke-width="17.357317073170734" stroke-dasharray="0" class="apexcharts-radialbar-area" data:pathOrig="M 73.83506097560974 167.17541022773656 A 68.32987804878049 68.32987804878049 0 1 1 142.16493902439026 167.17541022773656"></path>
                                                </g>
                                            </g>
                                            <g id="SvgjsG2811">
                                                <g id="SvgjsG2816" class="apexcharts-series apexcharts-radial-series" seriesName="Growth" rel="1" data:realIndex="0">
                                                    <path id="SvgjsPath2821" d="M 73.83506097560974 167.17541022773656 A 68.32987804878049 68.32987804878049 0 1 1 175.95555982735613 100.85758285229481" fill="none" fill-opacity="0.85" stroke="url(#SvgjsLinearGradient2817)" stroke-opacity="1" stroke-linecap="butt" stroke-width="17.357317073170734" stroke-dasharray="5" class="apexcharts-radialbar-area apexcharts-radialbar-slice-0" data:angle="234" data:value="78" index="0" j="0" data:pathOrig="M 73.83506097560974 167.17541022773656 A 68.32987804878049 68.32987804878049 0 1 1 175.95555982735613 100.85758285229481"></path>
                                                </g>
                                                <circle id="SvgjsCircle2812" r="54.65121951219512" cx="108" cy="108" class="apexcharts-radialbar-hollow" fill="transparent"></circle>
                                                <g id="SvgjsG2813" class="apexcharts-datalabels-group" transform="translate(0, 0) scale(1)" style="opacity: 1;"><text id="SvgjsText2814" font-family="Public Sans" x="108" y="123" text-anchor="middle" dominant-baseline="auto" font-size="15px" font-weight="500" fill="#697a8d" class="apexcharts-text apexcharts-datalabel-label" style="font-family: &quot;Public Sans&quot;;">Growth</text><text id="SvgjsText2815" font-family="Public Sans" x="108" y="99" text-anchor="middle" dominant-baseline="auto" font-size="22px" font-weight="500" fill="#566a7f" class="apexcharts-text apexcharts-datalabel-value" style="font-family: &quot;Public Sans&quot;;">78%</text></g>
                                            </g>
                                        </g>
                                    </g>
                                    <line id="SvgjsLine2822" x1="0" y1="0" x2="216" y2="0" stroke="#b6b6b6" stroke-dasharray="0" stroke-width="1" stroke-linecap="butt" class="apexcharts-ycrosshairs"></line>
                                    <line id="SvgjsLine2823" x1="0" y1="0" x2="216" y2="0" stroke-dasharray="0" stroke-width="0" stroke-linecap="butt" class="apexcharts-ycrosshairs-hidden"></line>
                                </g>
                                <g id="SvgjsG2799" class="apexcharts-annotations"></g>
                            </svg>
                            <div class="apexcharts-legend"></div>
                        </div>
                    </div>
                    <div class="text-center fw-medium pt-3 mb-2">62% Company Growth</div>

                    <div class="d-flex px-xxl-4 px-lg-2 p-4 gap-xxl-3 gap-lg-1 gap-3 justify-content-between">
                        <div class="d-flex">
                            <div class="me-2">
                                <span class="badge bg-label-primary p-2"><i class="bx bx-dollar text-primary"></i></span>
                            </div>
                            <div class="d-flex flex-column">
                                <small>2022</small>
                                <h6 class="mb-0">$32.5k</h6>
                            </div>
                        </div>
                        <div class="d-flex">
                            <div class="me-2">
                                <span class="badge bg-label-info p-2"><i class="bx bx-wallet text-info"></i></span>
                            </div>
                            <div class="d-flex flex-column">
                                <small>2021</small>
                                <h6 class="mb-0">$41.2k</h6>
                            </div>
                        </div>
                    </div>
                    <div class="resize-triggers">
                        <div class="expand-trigger">
                            <div style="width: 267px; height: 377px;"></div>
                        </div>
                        <div class="contract-trigger"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--/ Total Revenue -->
    
</div>
<div class="row">
    <!-- Order Statistics -->
    <div class="col-md-6 col-lg-4 col-xl-4 order-0 mb-4">
        <div class="card h-100">
            <div class="card-header d-flex align-items-center justify-content-between pb-0">
                <div class="card-title mb-0">
                    <h5 class="m-0 me-2">Order Statistics</h5>
                    <small class="text-muted">42.82k Total Sales</small>
                </div>
                <div class="dropdown">
                    <button class="btn p-0" type="button" id="orederStatistics" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="bx bx-dots-vertical-rounded"></i>
                    </button>
                    <div class="dropdown-menu dropdown-menu-end" aria-labelledby="orederStatistics">
                        <a class="dropdown-item" href="javascript:void(0);">Select All</a>
                        <a class="dropdown-item" href="javascript:void(0);">Refresh</a>
                        <a class="dropdown-item" href="javascript:void(0);">Share</a>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <div class="d-flex justify-content-between align-items-center mb-3" style="position: relative;">
                    <div class="d-flex flex-column align-items-center gap-1">
                        <h2 class="mb-2">8,258</h2>
                        <span>Total Orders</span>
                    </div>
                    <div id="orderStatisticsChart" style="min-height: 137.55px;">
                        <div id="apexcharts028uxtk9h" class="apexcharts-canvas apexcharts028uxtk9h apexcharts-theme-light" style="width: 130px; height: 137.55px;"><svg id="SvgjsSvg2944" width="130" height="137.55" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.dev" class="apexcharts-svg" xmlns:data="ApexChartsNS" transform="translate(0, 0)" style="background: transparent;">
                                <g id="SvgjsG2946" class="apexcharts-inner apexcharts-graphical" transform="translate(-7, 0)">
                                    <defs id="SvgjsDefs2945">
                                        <clipPath id="gridRectMask028uxtk9h">
                                            <rect id="SvgjsRect2948" width="150" height="173" x="-4.5" y="-2.5" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect>
                                        </clipPath>
                                        <clipPath id="forecastMask028uxtk9h"></clipPath>
                                        <clipPath id="nonForecastMask028uxtk9h"></clipPath>
                                        <clipPath id="gridRectMarkerMask028uxtk9h">
                                            <rect id="SvgjsRect2949" width="145" height="172" x="-2" y="-2" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect>
                                        </clipPath>
                                    </defs>
                                    <g id="SvgjsG2950" class="apexcharts-pie">
                                        <g id="SvgjsG2951" transform="translate(0, 0) scale(1)">
                                            <circle id="SvgjsCircle2952" r="44.835365853658544" cx="70.5" cy="70.5" fill="transparent"></circle>
                                            <g id="SvgjsG2953" class="apexcharts-slices">
                                                <g id="SvgjsG2954" class="apexcharts-series apexcharts-pie-series" seriesName="Electronic" rel="1" data:realIndex="0">
                                                    <path id="SvgjsPath2955" d="M 70.5 10.71951219512195 A 59.78048780487805 59.78048780487805 0 0 1 97.63977353321047 123.7648046533095 L 90.85483014990785 110.44860348998213 A 44.835365853658544 44.835365853658544 0 0 0 70.5 25.664634146341456 L 70.5 10.71951219512195 z" fill="rgba(105,108,255,1)" fill-opacity="1" stroke-opacity="1" stroke-linecap="butt" stroke-width="5" stroke-dasharray="0" class="apexcharts-pie-area apexcharts-donut-slice-0" index="0" j="0" data:angle="153" data:startAngle="0" data:strokeWidth="5" data:value="85" data:pathOrig="M 70.5 10.71951219512195 A 59.78048780487805 59.78048780487805 0 0 1 97.63977353321047 123.7648046533095 L 90.85483014990785 110.44860348998213 A 44.835365853658544 44.835365853658544 0 0 0 70.5 25.664634146341456 L 70.5 10.71951219512195 z" stroke="#ffffff"></path>
                                                </g>
                                                <g id="SvgjsG2956" class="apexcharts-series apexcharts-pie-series" seriesName="Sports" rel="2" data:realIndex="1">
                                                    <path id="SvgjsPath2957" d="M 97.63977353321047 123.7648046533095 A 59.78048780487805 59.78048780487805 0 0 1 70.5 130.28048780487805 L 70.5 115.33536585365854 A 44.835365853658544 44.835365853658544 0 0 0 90.85483014990785 110.44860348998213 L 97.63977353321047 123.7648046533095 z" fill="rgba(133,146,163,1)" fill-opacity="1" stroke-opacity="1" stroke-linecap="butt" stroke-width="5" stroke-dasharray="0" class="apexcharts-pie-area apexcharts-donut-slice-1" index="0" j="1" data:angle="27" data:startAngle="153" data:strokeWidth="5" data:value="15" data:pathOrig="M 97.63977353321047 123.7648046533095 A 59.78048780487805 59.78048780487805 0 0 1 70.5 130.28048780487805 L 70.5 115.33536585365854 A 44.835365853658544 44.835365853658544 0 0 0 90.85483014990785 110.44860348998213 L 97.63977353321047 123.7648046533095 z" stroke="#ffffff"></path>
                                                </g>
                                                <g id="SvgjsG2958" class="apexcharts-series apexcharts-pie-series" seriesName="Decor" rel="3" data:realIndex="2">
                                                    <path id="SvgjsPath2959" d="M 70.5 130.28048780487805 A 59.78048780487805 59.78048780487805 0 0 1 10.71951219512195 70.50000000000001 L 25.664634146341456 70.5 A 44.835365853658544 44.835365853658544 0 0 0 70.5 115.33536585365854 L 70.5 130.28048780487805 z" fill="rgba(3,195,236,1)" fill-opacity="1" stroke-opacity="1" stroke-linecap="butt" stroke-width="5" stroke-dasharray="0" class="apexcharts-pie-area apexcharts-donut-slice-2" index="0" j="2" data:angle="90" data:startAngle="180" data:strokeWidth="5" data:value="50" data:pathOrig="M 70.5 130.28048780487805 A 59.78048780487805 59.78048780487805 0 0 1 10.71951219512195 70.50000000000001 L 25.664634146341456 70.5 A 44.835365853658544 44.835365853658544 0 0 0 70.5 115.33536585365854 L 70.5 130.28048780487805 z" stroke="#ffffff"></path>
                                                </g>
                                                <g id="SvgjsG2960" class="apexcharts-series apexcharts-pie-series" seriesName="Fashion" rel="4" data:realIndex="3">
                                                    <path id="SvgjsPath2961" d="M 10.71951219512195 70.50000000000001 A 59.78048780487805 59.78048780487805 0 0 1 70.48956633664653 10.719513105630845 L 70.4921747524849 25.664634829223125 A 44.835365853658544 44.835365853658544 0 0 0 25.664634146341456 70.5 L 10.71951219512195 70.50000000000001 z" fill="rgba(113,221,55,1)" fill-opacity="1" stroke-opacity="1" stroke-linecap="butt" stroke-width="5" stroke-dasharray="0" class="apexcharts-pie-area apexcharts-donut-slice-3" index="0" j="3" data:angle="90" data:startAngle="270" data:strokeWidth="5" data:value="50" data:pathOrig="M 10.71951219512195 70.50000000000001 A 59.78048780487805 59.78048780487805 0 0 1 70.48956633664653 10.719513105630845 L 70.4921747524849 25.664634829223125 A 44.835365853658544 44.835365853658544 0 0 0 25.664634146341456 70.5 L 10.71951219512195 70.50000000000001 z" stroke="#ffffff"></path>
                                                </g>
                                            </g>
                                        </g>
                                        <g id="SvgjsG2962" class="apexcharts-datalabels-group" transform="translate(0, 0) scale(1)"><text id="SvgjsText2963" font-family="Helvetica, Arial, sans-serif" x="70.5" y="90.5" text-anchor="middle" dominant-baseline="auto" font-size="0.8125rem" font-weight="400" fill="#697a8d" class="apexcharts-text apexcharts-datalabel-label" style="font-family: Helvetica, Arial, sans-serif;">Weekly</text><text id="SvgjsText2964" font-family="Public Sans" x="70.5" y="71.5" text-anchor="middle" dominant-baseline="auto" font-size="1.5rem" font-weight="400" fill="#566a7f" class="apexcharts-text apexcharts-datalabel-value" style="font-family: &quot;Public Sans&quot;;">38%</text></g>
                                    </g>
                                    <line id="SvgjsLine2965" x1="0" y1="0" x2="141" y2="0" stroke="#b6b6b6" stroke-dasharray="0" stroke-width="1" stroke-linecap="butt" class="apexcharts-ycrosshairs"></line>
                                    <line id="SvgjsLine2966" x1="0" y1="0" x2="141" y2="0" stroke-dasharray="0" stroke-width="0" stroke-linecap="butt" class="apexcharts-ycrosshairs-hidden"></line>
                                </g>
                                <g id="SvgjsG2947" class="apexcharts-annotations"></g>
                            </svg>
                            <div class="apexcharts-legend"></div>
                            <div class="apexcharts-tooltip apexcharts-theme-dark">
                                <div class="apexcharts-tooltip-series-group" style="order: 1;"><span class="apexcharts-tooltip-marker" style="background-color: rgb(105, 108, 255);"></span>
                                    <div class="apexcharts-tooltip-text" style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;">
                                        <div class="apexcharts-tooltip-y-group"><span class="apexcharts-tooltip-text-y-label"></span><span class="apexcharts-tooltip-text-y-value"></span></div>
                                        <div class="apexcharts-tooltip-goals-group"><span class="apexcharts-tooltip-text-goals-label"></span><span class="apexcharts-tooltip-text-goals-value"></span></div>
                                        <div class="apexcharts-tooltip-z-group"><span class="apexcharts-tooltip-text-z-label"></span><span class="apexcharts-tooltip-text-z-value"></span></div>
                                    </div>
                                </div>
                                <div class="apexcharts-tooltip-series-group" style="order: 2;"><span class="apexcharts-tooltip-marker" style="background-color: rgb(133, 146, 163);"></span>
                                    <div class="apexcharts-tooltip-text" style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;">
                                        <div class="apexcharts-tooltip-y-group"><span class="apexcharts-tooltip-text-y-label"></span><span class="apexcharts-tooltip-text-y-value"></span></div>
                                        <div class="apexcharts-tooltip-goals-group"><span class="apexcharts-tooltip-text-goals-label"></span><span class="apexcharts-tooltip-text-goals-value"></span></div>
                                        <div class="apexcharts-tooltip-z-group"><span class="apexcharts-tooltip-text-z-label"></span><span class="apexcharts-tooltip-text-z-value"></span></div>
                                    </div>
                                </div>
                                <div class="apexcharts-tooltip-series-group" style="order: 3;"><span class="apexcharts-tooltip-marker" style="background-color: rgb(3, 195, 236);"></span>
                                    <div class="apexcharts-tooltip-text" style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;">
                                        <div class="apexcharts-tooltip-y-group"><span class="apexcharts-tooltip-text-y-label"></span><span class="apexcharts-tooltip-text-y-value"></span></div>
                                        <div class="apexcharts-tooltip-goals-group"><span class="apexcharts-tooltip-text-goals-label"></span><span class="apexcharts-tooltip-text-goals-value"></span></div>
                                        <div class="apexcharts-tooltip-z-group"><span class="apexcharts-tooltip-text-z-label"></span><span class="apexcharts-tooltip-text-z-value"></span></div>
                                    </div>
                                </div>
                                <div class="apexcharts-tooltip-series-group" style="order: 4;"><span class="apexcharts-tooltip-marker" style="background-color: rgb(113, 221, 55);"></span>
                                    <div class="apexcharts-tooltip-text" style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;">
                                        <div class="apexcharts-tooltip-y-group"><span class="apexcharts-tooltip-text-y-label"></span><span class="apexcharts-tooltip-text-y-value"></span></div>
                                        <div class="apexcharts-tooltip-goals-group"><span class="apexcharts-tooltip-text-goals-label"></span><span class="apexcharts-tooltip-text-goals-value"></span></div>
                                        <div class="apexcharts-tooltip-z-group"><span class="apexcharts-tooltip-text-z-label"></span><span class="apexcharts-tooltip-text-z-value"></span></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="resize-triggers">
                        <div class="expand-trigger">
                            <div style="width: 339px; height: 139px;"></div>
                        </div>
                        <div class="contract-trigger"></div>
                    </div>
                </div>
                <ul class="p-0 m-0">
                    <li class="d-flex mb-4 pb-1">
                        <div class="avatar flex-shrink-0 me-3">
                            <span class="avatar-initial rounded bg-label-primary"><i class="bx bx-mobile-alt"></i></span>
                        </div>
                        <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                            <div class="me-2">
                                <h6 class="mb-0">Electronic</h6>
                                <small class="text-muted">Mobile, Earbuds, TV</small>
                            </div>
                            <div class="user-progress">
                                <small class="fw-medium">82.5k</small>
                            </div>
                        </div>
                    </li>
                    <li class="d-flex mb-4 pb-1">
                        <div class="avatar flex-shrink-0 me-3">
                            <span class="avatar-initial rounded bg-label-success"><i class="bx bx-closet"></i></span>
                        </div>
                        <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                            <div class="me-2">
                                <h6 class="mb-0">Fashion</h6>
                                <small class="text-muted">T-shirt, Jeans, Shoes</small>
                            </div>
                            <div class="user-progress">
                                <small class="fw-medium">23.8k</small>
                            </div>
                        </div>
                    </li>
                    <li class="d-flex mb-4 pb-1">
                        <div class="avatar flex-shrink-0 me-3">
                            <span class="avatar-initial rounded bg-label-info"><i class="bx bx-home-alt"></i></span>
                        </div>
                        <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                            <div class="me-2">
                                <h6 class="mb-0">Decor</h6>
                                <small class="text-muted">Fine Art, Dining</small>
                            </div>
                            <div class="user-progress">
                                <small class="fw-medium">849k</small>
                            </div>
                        </div>
                    </li>
                    <li class="d-flex">
                        <div class="avatar flex-shrink-0 me-3">
                            <span class="avatar-initial rounded bg-label-secondary"><i class="bx bx-football"></i></span>
                        </div>
                        <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                            <div class="me-2">
                                <h6 class="mb-0">Sports</h6>
                                <small class="text-muted">Football, Cricket Kit</small>
                            </div>
                            <div class="user-progress">
                                <small class="fw-medium">99</small>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <!--/ Order Statistics -->

    <!-- Order Statistics -->
    <div class="col-md-6 col-lg-4 col-xl-4 order-0 mb-4">
        <div class="card h-100">
            <div class="card-header d-flex align-items-center justify-content-between pb-0">
                <div class="card-title mb-0">
                    <h5 class="m-0 me-2">Order Statistics</h5>
                    <small class="text-muted">42.82k Total Sales</small>
                </div>
                <div class="dropdown">
                    <button class="btn p-0" type="button" id="orederStatistics" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="bx bx-dots-vertical-rounded"></i>
                    </button>
                    <div class="dropdown-menu dropdown-menu-end" aria-labelledby="orederStatistics">
                        <a class="dropdown-item" href="javascript:void(0);">Select All</a>
                        <a class="dropdown-item" href="javascript:void(0);">Refresh</a>
                        <a class="dropdown-item" href="javascript:void(0);">Share</a>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <div class="d-flex justify-content-between align-items-center mb-3" style="position: relative;">
                    <div class="d-flex flex-column align-items-center gap-1">
                        <h2 class="mb-2">8,258</h2>
                        <span>Total Orders</span>
                    </div>
                    <div id="orderStatisticsChart" style="min-height: 137.55px;">
                        <div id="apexcharts028uxtk9h" class="apexcharts-canvas apexcharts028uxtk9h apexcharts-theme-light" style="width: 130px; height: 137.55px;"><svg id="SvgjsSvg2944" width="130" height="137.55" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.dev" class="apexcharts-svg" xmlns:data="ApexChartsNS" transform="translate(0, 0)" style="background: transparent;">
                                <g id="SvgjsG2946" class="apexcharts-inner apexcharts-graphical" transform="translate(-7, 0)">
                                    <defs id="SvgjsDefs2945">
                                        <clipPath id="gridRectMask028uxtk9h">
                                            <rect id="SvgjsRect2948" width="150" height="173" x="-4.5" y="-2.5" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect>
                                        </clipPath>
                                        <clipPath id="forecastMask028uxtk9h"></clipPath>
                                        <clipPath id="nonForecastMask028uxtk9h"></clipPath>
                                        <clipPath id="gridRectMarkerMask028uxtk9h">
                                            <rect id="SvgjsRect2949" width="145" height="172" x="-2" y="-2" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect>
                                        </clipPath>
                                    </defs>
                                    <g id="SvgjsG2950" class="apexcharts-pie">
                                        <g id="SvgjsG2951" transform="translate(0, 0) scale(1)">
                                            <circle id="SvgjsCircle2952" r="44.835365853658544" cx="70.5" cy="70.5" fill="transparent"></circle>
                                            <g id="SvgjsG2953" class="apexcharts-slices">
                                                <g id="SvgjsG2954" class="apexcharts-series apexcharts-pie-series" seriesName="Electronic" rel="1" data:realIndex="0">
                                                    <path id="SvgjsPath2955" d="M 70.5 10.71951219512195 A 59.78048780487805 59.78048780487805 0 0 1 97.63977353321047 123.7648046533095 L 90.85483014990785 110.44860348998213 A 44.835365853658544 44.835365853658544 0 0 0 70.5 25.664634146341456 L 70.5 10.71951219512195 z" fill="rgba(105,108,255,1)" fill-opacity="1" stroke-opacity="1" stroke-linecap="butt" stroke-width="5" stroke-dasharray="0" class="apexcharts-pie-area apexcharts-donut-slice-0" index="0" j="0" data:angle="153" data:startAngle="0" data:strokeWidth="5" data:value="85" data:pathOrig="M 70.5 10.71951219512195 A 59.78048780487805 59.78048780487805 0 0 1 97.63977353321047 123.7648046533095 L 90.85483014990785 110.44860348998213 A 44.835365853658544 44.835365853658544 0 0 0 70.5 25.664634146341456 L 70.5 10.71951219512195 z" stroke="#ffffff"></path>
                                                </g>
                                                <g id="SvgjsG2956" class="apexcharts-series apexcharts-pie-series" seriesName="Sports" rel="2" data:realIndex="1">
                                                    <path id="SvgjsPath2957" d="M 97.63977353321047 123.7648046533095 A 59.78048780487805 59.78048780487805 0 0 1 70.5 130.28048780487805 L 70.5 115.33536585365854 A 44.835365853658544 44.835365853658544 0 0 0 90.85483014990785 110.44860348998213 L 97.63977353321047 123.7648046533095 z" fill="rgba(133,146,163,1)" fill-opacity="1" stroke-opacity="1" stroke-linecap="butt" stroke-width="5" stroke-dasharray="0" class="apexcharts-pie-area apexcharts-donut-slice-1" index="0" j="1" data:angle="27" data:startAngle="153" data:strokeWidth="5" data:value="15" data:pathOrig="M 97.63977353321047 123.7648046533095 A 59.78048780487805 59.78048780487805 0 0 1 70.5 130.28048780487805 L 70.5 115.33536585365854 A 44.835365853658544 44.835365853658544 0 0 0 90.85483014990785 110.44860348998213 L 97.63977353321047 123.7648046533095 z" stroke="#ffffff"></path>
                                                </g>
                                                <g id="SvgjsG2958" class="apexcharts-series apexcharts-pie-series" seriesName="Decor" rel="3" data:realIndex="2">
                                                    <path id="SvgjsPath2959" d="M 70.5 130.28048780487805 A 59.78048780487805 59.78048780487805 0 0 1 10.71951219512195 70.50000000000001 L 25.664634146341456 70.5 A 44.835365853658544 44.835365853658544 0 0 0 70.5 115.33536585365854 L 70.5 130.28048780487805 z" fill="rgba(3,195,236,1)" fill-opacity="1" stroke-opacity="1" stroke-linecap="butt" stroke-width="5" stroke-dasharray="0" class="apexcharts-pie-area apexcharts-donut-slice-2" index="0" j="2" data:angle="90" data:startAngle="180" data:strokeWidth="5" data:value="50" data:pathOrig="M 70.5 130.28048780487805 A 59.78048780487805 59.78048780487805 0 0 1 10.71951219512195 70.50000000000001 L 25.664634146341456 70.5 A 44.835365853658544 44.835365853658544 0 0 0 70.5 115.33536585365854 L 70.5 130.28048780487805 z" stroke="#ffffff"></path>
                                                </g>
                                                <g id="SvgjsG2960" class="apexcharts-series apexcharts-pie-series" seriesName="Fashion" rel="4" data:realIndex="3">
                                                    <path id="SvgjsPath2961" d="M 10.71951219512195 70.50000000000001 A 59.78048780487805 59.78048780487805 0 0 1 70.48956633664653 10.719513105630845 L 70.4921747524849 25.664634829223125 A 44.835365853658544 44.835365853658544 0 0 0 25.664634146341456 70.5 L 10.71951219512195 70.50000000000001 z" fill="rgba(113,221,55,1)" fill-opacity="1" stroke-opacity="1" stroke-linecap="butt" stroke-width="5" stroke-dasharray="0" class="apexcharts-pie-area apexcharts-donut-slice-3" index="0" j="3" data:angle="90" data:startAngle="270" data:strokeWidth="5" data:value="50" data:pathOrig="M 10.71951219512195 70.50000000000001 A 59.78048780487805 59.78048780487805 0 0 1 70.48956633664653 10.719513105630845 L 70.4921747524849 25.664634829223125 A 44.835365853658544 44.835365853658544 0 0 0 25.664634146341456 70.5 L 10.71951219512195 70.50000000000001 z" stroke="#ffffff"></path>
                                                </g>
                                            </g>
                                        </g>
                                        <g id="SvgjsG2962" class="apexcharts-datalabels-group" transform="translate(0, 0) scale(1)"><text id="SvgjsText2963" font-family="Helvetica, Arial, sans-serif" x="70.5" y="90.5" text-anchor="middle" dominant-baseline="auto" font-size="0.8125rem" font-weight="400" fill="#697a8d" class="apexcharts-text apexcharts-datalabel-label" style="font-family: Helvetica, Arial, sans-serif;">Weekly</text><text id="SvgjsText2964" font-family="Public Sans" x="70.5" y="71.5" text-anchor="middle" dominant-baseline="auto" font-size="1.5rem" font-weight="400" fill="#566a7f" class="apexcharts-text apexcharts-datalabel-value" style="font-family: &quot;Public Sans&quot;;">38%</text></g>
                                    </g>
                                    <line id="SvgjsLine2965" x1="0" y1="0" x2="141" y2="0" stroke="#b6b6b6" stroke-dasharray="0" stroke-width="1" stroke-linecap="butt" class="apexcharts-ycrosshairs"></line>
                                    <line id="SvgjsLine2966" x1="0" y1="0" x2="141" y2="0" stroke-dasharray="0" stroke-width="0" stroke-linecap="butt" class="apexcharts-ycrosshairs-hidden"></line>
                                </g>
                                <g id="SvgjsG2947" class="apexcharts-annotations"></g>
                            </svg>
                            <div class="apexcharts-legend"></div>
                            <div class="apexcharts-tooltip apexcharts-theme-dark">
                                <div class="apexcharts-tooltip-series-group" style="order: 1;"><span class="apexcharts-tooltip-marker" style="background-color: rgb(105, 108, 255);"></span>
                                    <div class="apexcharts-tooltip-text" style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;">
                                        <div class="apexcharts-tooltip-y-group"><span class="apexcharts-tooltip-text-y-label"></span><span class="apexcharts-tooltip-text-y-value"></span></div>
                                        <div class="apexcharts-tooltip-goals-group"><span class="apexcharts-tooltip-text-goals-label"></span><span class="apexcharts-tooltip-text-goals-value"></span></div>
                                        <div class="apexcharts-tooltip-z-group"><span class="apexcharts-tooltip-text-z-label"></span><span class="apexcharts-tooltip-text-z-value"></span></div>
                                    </div>
                                </div>
                                <div class="apexcharts-tooltip-series-group" style="order: 2;"><span class="apexcharts-tooltip-marker" style="background-color: rgb(133, 146, 163);"></span>
                                    <div class="apexcharts-tooltip-text" style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;">
                                        <div class="apexcharts-tooltip-y-group"><span class="apexcharts-tooltip-text-y-label"></span><span class="apexcharts-tooltip-text-y-value"></span></div>
                                        <div class="apexcharts-tooltip-goals-group"><span class="apexcharts-tooltip-text-goals-label"></span><span class="apexcharts-tooltip-text-goals-value"></span></div>
                                        <div class="apexcharts-tooltip-z-group"><span class="apexcharts-tooltip-text-z-label"></span><span class="apexcharts-tooltip-text-z-value"></span></div>
                                    </div>
                                </div>
                                <div class="apexcharts-tooltip-series-group" style="order: 3;"><span class="apexcharts-tooltip-marker" style="background-color: rgb(3, 195, 236);"></span>
                                    <div class="apexcharts-tooltip-text" style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;">
                                        <div class="apexcharts-tooltip-y-group"><span class="apexcharts-tooltip-text-y-label"></span><span class="apexcharts-tooltip-text-y-value"></span></div>
                                        <div class="apexcharts-tooltip-goals-group"><span class="apexcharts-tooltip-text-goals-label"></span><span class="apexcharts-tooltip-text-goals-value"></span></div>
                                        <div class="apexcharts-tooltip-z-group"><span class="apexcharts-tooltip-text-z-label"></span><span class="apexcharts-tooltip-text-z-value"></span></div>
                                    </div>
                                </div>
                                <div class="apexcharts-tooltip-series-group" style="order: 4;"><span class="apexcharts-tooltip-marker" style="background-color: rgb(113, 221, 55);"></span>
                                    <div class="apexcharts-tooltip-text" style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;">
                                        <div class="apexcharts-tooltip-y-group"><span class="apexcharts-tooltip-text-y-label"></span><span class="apexcharts-tooltip-text-y-value"></span></div>
                                        <div class="apexcharts-tooltip-goals-group"><span class="apexcharts-tooltip-text-goals-label"></span><span class="apexcharts-tooltip-text-goals-value"></span></div>
                                        <div class="apexcharts-tooltip-z-group"><span class="apexcharts-tooltip-text-z-label"></span><span class="apexcharts-tooltip-text-z-value"></span></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="resize-triggers">
                        <div class="expand-trigger">
                            <div style="width: 339px; height: 139px;"></div>
                        </div>
                        <div class="contract-trigger"></div>
                    </div>
                </div>
                <ul class="p-0 m-0">
                    <li class="d-flex mb-4 pb-1">
                        <div class="avatar flex-shrink-0 me-3">
                            <span class="avatar-initial rounded bg-label-primary"><i class="bx bx-mobile-alt"></i></span>
                        </div>
                        <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                            <div class="me-2">
                                <h6 class="mb-0">Electronic</h6>
                                <small class="text-muted">Mobile, Earbuds, TV</small>
                            </div>
                            <div class="user-progress">
                                <small class="fw-medium">82.5k</small>
                            </div>
                        </div>
                    </li>
                    <li class="d-flex mb-4 pb-1">
                        <div class="avatar flex-shrink-0 me-3">
                            <span class="avatar-initial rounded bg-label-success"><i class="bx bx-closet"></i></span>
                        </div>
                        <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                            <div class="me-2">
                                <h6 class="mb-0">Fashion</h6>
                                <small class="text-muted">T-shirt, Jeans, Shoes</small>
                            </div>
                            <div class="user-progress">
                                <small class="fw-medium">23.8k</small>
                            </div>
                        </div>
                    </li>
                    <li class="d-flex mb-4 pb-1">
                        <div class="avatar flex-shrink-0 me-3">
                            <span class="avatar-initial rounded bg-label-info"><i class="bx bx-home-alt"></i></span>
                        </div>
                        <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                            <div class="me-2">
                                <h6 class="mb-0">Decor</h6>
                                <small class="text-muted">Fine Art, Dining</small>
                            </div>
                            <div class="user-progress">
                                <small class="fw-medium">849k</small>
                            </div>
                        </div>
                    </li>
                    <li class="d-flex">
                        <div class="avatar flex-shrink-0 me-3">
                            <span class="avatar-initial rounded bg-label-secondary"><i class="bx bx-football"></i></span>
                        </div>
                        <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                            <div class="me-2">
                                <h6 class="mb-0">Sports</h6>
                                <small class="text-muted">Football, Cricket Kit</small>
                            </div>
                            <div class="user-progress">
                                <small class="fw-medium">99</small>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <!--/ Order Statistics -->

    <!-- Order Statistics -->
    <div class="col-md-6 col-lg-4 col-xl-4 order-0 mb-4">
        <div class="card h-100">
            <div class="card-header d-flex align-items-center justify-content-between pb-0">
                <div class="card-title mb-0">
                    <h5 class="m-0 me-2">Order Statistics</h5>
                    <small class="text-muted">42.82k Total Sales</small>
                </div>
                <div class="dropdown">
                    <button class="btn p-0" type="button" id="orederStatistics" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="bx bx-dots-vertical-rounded"></i>
                    </button>
                    <div class="dropdown-menu dropdown-menu-end" aria-labelledby="orederStatistics">
                        <a class="dropdown-item" href="javascript:void(0);">Select All</a>
                        <a class="dropdown-item" href="javascript:void(0);">Refresh</a>
                        <a class="dropdown-item" href="javascript:void(0);">Share</a>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <div class="d-flex justify-content-between align-items-center mb-3" style="position: relative;">
                    <div class="d-flex flex-column align-items-center gap-1">
                        <h2 class="mb-2">8,258</h2>
                        <span>Total Orders</span>
                    </div>
                    <div id="orderStatisticsChart" style="min-height: 137.55px;">
                        <div id="apexcharts028uxtk9h" class="apexcharts-canvas apexcharts028uxtk9h apexcharts-theme-light" style="width: 130px; height: 137.55px;"><svg id="SvgjsSvg2944" width="130" height="137.55" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.dev" class="apexcharts-svg" xmlns:data="ApexChartsNS" transform="translate(0, 0)" style="background: transparent;">
                                <g id="SvgjsG2946" class="apexcharts-inner apexcharts-graphical" transform="translate(-7, 0)">
                                    <defs id="SvgjsDefs2945">
                                        <clipPath id="gridRectMask028uxtk9h">
                                            <rect id="SvgjsRect2948" width="150" height="173" x="-4.5" y="-2.5" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect>
                                        </clipPath>
                                        <clipPath id="forecastMask028uxtk9h"></clipPath>
                                        <clipPath id="nonForecastMask028uxtk9h"></clipPath>
                                        <clipPath id="gridRectMarkerMask028uxtk9h">
                                            <rect id="SvgjsRect2949" width="145" height="172" x="-2" y="-2" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect>
                                        </clipPath>
                                    </defs>
                                    <g id="SvgjsG2950" class="apexcharts-pie">
                                        <g id="SvgjsG2951" transform="translate(0, 0) scale(1)">
                                            <circle id="SvgjsCircle2952" r="44.835365853658544" cx="70.5" cy="70.5" fill="transparent"></circle>
                                            <g id="SvgjsG2953" class="apexcharts-slices">
                                                <g id="SvgjsG2954" class="apexcharts-series apexcharts-pie-series" seriesName="Electronic" rel="1" data:realIndex="0">
                                                    <path id="SvgjsPath2955" d="M 70.5 10.71951219512195 A 59.78048780487805 59.78048780487805 0 0 1 97.63977353321047 123.7648046533095 L 90.85483014990785 110.44860348998213 A 44.835365853658544 44.835365853658544 0 0 0 70.5 25.664634146341456 L 70.5 10.71951219512195 z" fill="rgba(105,108,255,1)" fill-opacity="1" stroke-opacity="1" stroke-linecap="butt" stroke-width="5" stroke-dasharray="0" class="apexcharts-pie-area apexcharts-donut-slice-0" index="0" j="0" data:angle="153" data:startAngle="0" data:strokeWidth="5" data:value="85" data:pathOrig="M 70.5 10.71951219512195 A 59.78048780487805 59.78048780487805 0 0 1 97.63977353321047 123.7648046533095 L 90.85483014990785 110.44860348998213 A 44.835365853658544 44.835365853658544 0 0 0 70.5 25.664634146341456 L 70.5 10.71951219512195 z" stroke="#ffffff"></path>
                                                </g>
                                                <g id="SvgjsG2956" class="apexcharts-series apexcharts-pie-series" seriesName="Sports" rel="2" data:realIndex="1">
                                                    <path id="SvgjsPath2957" d="M 97.63977353321047 123.7648046533095 A 59.78048780487805 59.78048780487805 0 0 1 70.5 130.28048780487805 L 70.5 115.33536585365854 A 44.835365853658544 44.835365853658544 0 0 0 90.85483014990785 110.44860348998213 L 97.63977353321047 123.7648046533095 z" fill="rgba(133,146,163,1)" fill-opacity="1" stroke-opacity="1" stroke-linecap="butt" stroke-width="5" stroke-dasharray="0" class="apexcharts-pie-area apexcharts-donut-slice-1" index="0" j="1" data:angle="27" data:startAngle="153" data:strokeWidth="5" data:value="15" data:pathOrig="M 97.63977353321047 123.7648046533095 A 59.78048780487805 59.78048780487805 0 0 1 70.5 130.28048780487805 L 70.5 115.33536585365854 A 44.835365853658544 44.835365853658544 0 0 0 90.85483014990785 110.44860348998213 L 97.63977353321047 123.7648046533095 z" stroke="#ffffff"></path>
                                                </g>
                                                <g id="SvgjsG2958" class="apexcharts-series apexcharts-pie-series" seriesName="Decor" rel="3" data:realIndex="2">
                                                    <path id="SvgjsPath2959" d="M 70.5 130.28048780487805 A 59.78048780487805 59.78048780487805 0 0 1 10.71951219512195 70.50000000000001 L 25.664634146341456 70.5 A 44.835365853658544 44.835365853658544 0 0 0 70.5 115.33536585365854 L 70.5 130.28048780487805 z" fill="rgba(3,195,236,1)" fill-opacity="1" stroke-opacity="1" stroke-linecap="butt" stroke-width="5" stroke-dasharray="0" class="apexcharts-pie-area apexcharts-donut-slice-2" index="0" j="2" data:angle="90" data:startAngle="180" data:strokeWidth="5" data:value="50" data:pathOrig="M 70.5 130.28048780487805 A 59.78048780487805 59.78048780487805 0 0 1 10.71951219512195 70.50000000000001 L 25.664634146341456 70.5 A 44.835365853658544 44.835365853658544 0 0 0 70.5 115.33536585365854 L 70.5 130.28048780487805 z" stroke="#ffffff"></path>
                                                </g>
                                                <g id="SvgjsG2960" class="apexcharts-series apexcharts-pie-series" seriesName="Fashion" rel="4" data:realIndex="3">
                                                    <path id="SvgjsPath2961" d="M 10.71951219512195 70.50000000000001 A 59.78048780487805 59.78048780487805 0 0 1 70.48956633664653 10.719513105630845 L 70.4921747524849 25.664634829223125 A 44.835365853658544 44.835365853658544 0 0 0 25.664634146341456 70.5 L 10.71951219512195 70.50000000000001 z" fill="rgba(113,221,55,1)" fill-opacity="1" stroke-opacity="1" stroke-linecap="butt" stroke-width="5" stroke-dasharray="0" class="apexcharts-pie-area apexcharts-donut-slice-3" index="0" j="3" data:angle="90" data:startAngle="270" data:strokeWidth="5" data:value="50" data:pathOrig="M 10.71951219512195 70.50000000000001 A 59.78048780487805 59.78048780487805 0 0 1 70.48956633664653 10.719513105630845 L 70.4921747524849 25.664634829223125 A 44.835365853658544 44.835365853658544 0 0 0 25.664634146341456 70.5 L 10.71951219512195 70.50000000000001 z" stroke="#ffffff"></path>
                                                </g>
                                            </g>
                                        </g>
                                        <g id="SvgjsG2962" class="apexcharts-datalabels-group" transform="translate(0, 0) scale(1)"><text id="SvgjsText2963" font-family="Helvetica, Arial, sans-serif" x="70.5" y="90.5" text-anchor="middle" dominant-baseline="auto" font-size="0.8125rem" font-weight="400" fill="#697a8d" class="apexcharts-text apexcharts-datalabel-label" style="font-family: Helvetica, Arial, sans-serif;">Weekly</text><text id="SvgjsText2964" font-family="Public Sans" x="70.5" y="71.5" text-anchor="middle" dominant-baseline="auto" font-size="1.5rem" font-weight="400" fill="#566a7f" class="apexcharts-text apexcharts-datalabel-value" style="font-family: &quot;Public Sans&quot;;">38%</text></g>
                                    </g>
                                    <line id="SvgjsLine2965" x1="0" y1="0" x2="141" y2="0" stroke="#b6b6b6" stroke-dasharray="0" stroke-width="1" stroke-linecap="butt" class="apexcharts-ycrosshairs"></line>
                                    <line id="SvgjsLine2966" x1="0" y1="0" x2="141" y2="0" stroke-dasharray="0" stroke-width="0" stroke-linecap="butt" class="apexcharts-ycrosshairs-hidden"></line>
                                </g>
                                <g id="SvgjsG2947" class="apexcharts-annotations"></g>
                            </svg>
                            <div class="apexcharts-legend"></div>
                            <div class="apexcharts-tooltip apexcharts-theme-dark">
                                <div class="apexcharts-tooltip-series-group" style="order: 1;"><span class="apexcharts-tooltip-marker" style="background-color: rgb(105, 108, 255);"></span>
                                    <div class="apexcharts-tooltip-text" style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;">
                                        <div class="apexcharts-tooltip-y-group"><span class="apexcharts-tooltip-text-y-label"></span><span class="apexcharts-tooltip-text-y-value"></span></div>
                                        <div class="apexcharts-tooltip-goals-group"><span class="apexcharts-tooltip-text-goals-label"></span><span class="apexcharts-tooltip-text-goals-value"></span></div>
                                        <div class="apexcharts-tooltip-z-group"><span class="apexcharts-tooltip-text-z-label"></span><span class="apexcharts-tooltip-text-z-value"></span></div>
                                    </div>
                                </div>
                                <div class="apexcharts-tooltip-series-group" style="order: 2;"><span class="apexcharts-tooltip-marker" style="background-color: rgb(133, 146, 163);"></span>
                                    <div class="apexcharts-tooltip-text" style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;">
                                        <div class="apexcharts-tooltip-y-group"><span class="apexcharts-tooltip-text-y-label"></span><span class="apexcharts-tooltip-text-y-value"></span></div>
                                        <div class="apexcharts-tooltip-goals-group"><span class="apexcharts-tooltip-text-goals-label"></span><span class="apexcharts-tooltip-text-goals-value"></span></div>
                                        <div class="apexcharts-tooltip-z-group"><span class="apexcharts-tooltip-text-z-label"></span><span class="apexcharts-tooltip-text-z-value"></span></div>
                                    </div>
                                </div>
                                <div class="apexcharts-tooltip-series-group" style="order: 3;"><span class="apexcharts-tooltip-marker" style="background-color: rgb(3, 195, 236);"></span>
                                    <div class="apexcharts-tooltip-text" style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;">
                                        <div class="apexcharts-tooltip-y-group"><span class="apexcharts-tooltip-text-y-label"></span><span class="apexcharts-tooltip-text-y-value"></span></div>
                                        <div class="apexcharts-tooltip-goals-group"><span class="apexcharts-tooltip-text-goals-label"></span><span class="apexcharts-tooltip-text-goals-value"></span></div>
                                        <div class="apexcharts-tooltip-z-group"><span class="apexcharts-tooltip-text-z-label"></span><span class="apexcharts-tooltip-text-z-value"></span></div>
                                    </div>
                                </div>
                                <div class="apexcharts-tooltip-series-group" style="order: 4;"><span class="apexcharts-tooltip-marker" style="background-color: rgb(113, 221, 55);"></span>
                                    <div class="apexcharts-tooltip-text" style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;">
                                        <div class="apexcharts-tooltip-y-group"><span class="apexcharts-tooltip-text-y-label"></span><span class="apexcharts-tooltip-text-y-value"></span></div>
                                        <div class="apexcharts-tooltip-goals-group"><span class="apexcharts-tooltip-text-goals-label"></span><span class="apexcharts-tooltip-text-goals-value"></span></div>
                                        <div class="apexcharts-tooltip-z-group"><span class="apexcharts-tooltip-text-z-label"></span><span class="apexcharts-tooltip-text-z-value"></span></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="resize-triggers">
                        <div class="expand-trigger">
                            <div style="width: 339px; height: 139px;"></div>
                        </div>
                        <div class="contract-trigger"></div>
                    </div>
                </div>
                <ul class="p-0 m-0">
                    <li class="d-flex mb-4 pb-1">
                        <div class="avatar flex-shrink-0 me-3">
                            <span class="avatar-initial rounded bg-label-primary"><i class="bx bx-mobile-alt"></i></span>
                        </div>
                        <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                            <div class="me-2">
                                <h6 class="mb-0">Electronic</h6>
                                <small class="text-muted">Mobile, Earbuds, TV</small>
                            </div>
                            <div class="user-progress">
                                <small class="fw-medium">82.5k</small>
                            </div>
                        </div>
                    </li>
                    <li class="d-flex mb-4 pb-1">
                        <div class="avatar flex-shrink-0 me-3">
                            <span class="avatar-initial rounded bg-label-success"><i class="bx bx-closet"></i></span>
                        </div>
                        <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                            <div class="me-2">
                                <h6 class="mb-0">Fashion</h6>
                                <small class="text-muted">T-shirt, Jeans, Shoes</small>
                            </div>
                            <div class="user-progress">
                                <small class="fw-medium">23.8k</small>
                            </div>
                        </div>
                    </li>
                    <li class="d-flex mb-4 pb-1">
                        <div class="avatar flex-shrink-0 me-3">
                            <span class="avatar-initial rounded bg-label-info"><i class="bx bx-home-alt"></i></span>
                        </div>
                        <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                            <div class="me-2">
                                <h6 class="mb-0">Decor</h6>
                                <small class="text-muted">Fine Art, Dining</small>
                            </div>
                            <div class="user-progress">
                                <small class="fw-medium">849k</small>
                            </div>
                        </div>
                    </li>
                    <li class="d-flex">
                        <div class="avatar flex-shrink-0 me-3">
                            <span class="avatar-initial rounded bg-label-secondary"><i class="bx bx-football"></i></span>
                        </div>
                        <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                            <div class="me-2">
                                <h6 class="mb-0">Sports</h6>
                                <small class="text-muted">Football, Cricket Kit</small>
                            </div>
                            <div class="user-progress">
                                <small class="fw-medium">99</small>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <!--/ Order Statistics -->

    <!--/ Transactions -->
    
</div>
@endsection