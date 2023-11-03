@extends('admin.layouts.master')
@section('content')
<div class="row">
    <div class="col-lg-12 mb-4 order-0">
        <div class="card">
            <div class="d-flex align-items-end row">
                <div class="col-sm-7">
                    <div class="card-body">
                        <h5 class="card-title text-primary">Chào mừng quay lại hệ thống !</h5>
                        <p class="mb-4">Chúc các bạn một ngày làm việc hiệu quả</p>
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
                                    <button type="button" class="nav-link active" role="tab" data-bs-toggle="tab" data-bs-target="#navs-pills-browser" aria-controls="navs-pills-browser" aria-selected="true">Cầm đồ mới nhất</button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button type="button" class="nav-link" role="tab" data-bs-toggle="tab" data-bs-target="#navs-pills-os" aria-controls="navs-pills-os" aria-selected="false" tabindex="-1">Trả góp mới nhất</button>
                                </li>
                            </ul>
                        </div>
                        <div class="tab-content pt-0">
                            <div class="tab-pane fade show active" id="navs-pills-browser" role="tabpanel">
                                @include('admin.dashboard.list-cam-do')
                            </div>
                            <div class="tab-pane fade" id="navs-pills-os" role="tabpanel">
                                @include('admin.dashboard.list-tra-gop')
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
                    <div class="text-center fw-medium pt-3 mb-2">Lợi nhuận: {{ $revenue['revenue'] }}</div>

                    <div class="d-flex px-xxl-4 px-lg-2 p-4 gap-xxl-3 gap-lg-1 gap-3 justify-content-between">
                        <div class="d-flex">
                            <div class="me-2">
                                <span class="badge bg-label-primary p-2"><i class="bx bx-dollar text-primary"></i></span>
                            </div>
                            <div class="d-flex flex-column">
                                <small>Thu</small>
                                <h6 class="mb-0">{{ $revenue['collect'] }}</h6>
                            </div>
                        </div>
                        <div class="d-flex">
                            <div class="me-2">
                                <span class="badge bg-label-info p-2"><i class="bx bx-wallet text-info"></i></span>
                            </div>
                            <div class="d-flex flex-column">
                                <small>Chi</small>
                                <h6 class="mb-0">{{ $revenue['spend'] }}</h6>
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
    <!-- Thống Kê Cầm đồ -->
    <div class="col-md-6 col-lg-4 col-xl-4 order-0 mb-4">
        @include('admin.dashboard.thong-ke-cam-do')
    </div>
    <!-- /Thống Kê Cầm đồ -->

    <!-- Thống Kê Trả góp -->
    <div class="col-md-6 col-lg-4 col-xl-4 order-0 mb-4">
        @include('admin.dashboard.thong-ke-tra-gop')
    </div>
    <!--/ Thống Kê Trả góp -->

    <!-- Thống Kê khác -->
    <div class="col-md-6 col-lg-4 col-xl-4 order-0 mb-4">
        @include('admin.dashboard.thong-ke-khac')
    </div>
    <!--/ Order Statistics -->

    <!--/ Transactions -->
    
</div>
@endsection