@extends('layouts.admin')
@section('content')
    <div class="row">
        <div class="col-sm-6 col-lg-4">
            <div class="card mb-4 text-white bg-primary">
                <div class="card-body pb-0 d-flex justify-content-between align-items-start">

                    <div class="fs-4 fw-semibold">{{ number_format($settings2['total_number']) }} </div>
                    <div>{{ $settings2['chart_title'] }}</div>


                </div>
                <div class="c-chart-wrapper mt-3 mx-3" style="height:70px;">
                    <canvas class="chart" id="card-chart1" height="140"
                        style="display: block; box-sizing: border-box; height: 70px; width: 285px;" width="570"></canvas>
                    <div class="chartjs-tooltip" style="opacity: 0; left: 234.333px; top: 129.847px;">
                        <table style="margin: 0px;">
                            <thead class="chartjs-tooltip-header">
                                <tr class="chartjs-tooltip-header-item" style="border-width: 0px;">
                                    <th style="border-width: 0px;">June</th>
                                </tr>
                            </thead>
                            <tbody class="chartjs-tooltip-body">
                                <tr class="chartjs-tooltip-body-item">
                                    <td style="border-width: 0px;"><span
                                            style="background: rgb(50, 31, 219); border-color: rgba(255, 255, 255, 0.55); border-width: 2px; margin-right: 10px; height: 10px; width: 10px; display: inline-block;"></span>My
                                        First dataset: 55</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-6 col-lg-4">
            <div class="card mb-4 text-white bg-info">
                <div class="card-body pb-0 d-flex justify-content-between align-items-start">

                    <div class="fs-4 fw-semibold">{{ number_format($settings4['total_number']) }} </div>
                    <div>{{ $settings4['chart_title'] }}</div>


                </div>
                <div class="c-chart-wrapper mt-3 mx-3" style="height:70px;">
                    <canvas class="chart" id="card-chart1" height="140"
                        style="display: block; box-sizing: border-box; height: 70px; width: 285px;" width="570"></canvas>
                    <div class="chartjs-tooltip" style="opacity: 0; left: 234.333px; top: 129.847px;">
                        <table style="margin: 0px;">
                            <thead class="chartjs-tooltip-header">
                                <tr class="chartjs-tooltip-header-item" style="border-width: 0px;">
                                    <th style="border-width: 0px;">June</th>
                                </tr>
                            </thead>
                            <tbody class="chartjs-tooltip-body">
                                <tr class="chartjs-tooltip-body-item">
                                    <td style="border-width: 0px;"><span
                                            style="background: rgb(50, 31, 219); border-color: rgba(255, 255, 255, 0.55); border-width: 2px; margin-right: 10px; height: 10px; width: 10px; display: inline-block;"></span>My
                                        First dataset: 55</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-6 col-lg-4">
            <div class="card mb-4 text-white bg-success">
                <div class="card-body pb-0 d-flex justify-content-between align-items-start">

                    <div class="fs-4 fw-semibold">{{ number_format($settings3['total_number']) }} </div>
                    <div>{{ $settings3['chart_title'] }}</div>


                </div>
                <div class="c-chart-wrapper mt-3 mx-3" style="height:70px;">
                    <canvas class="chart" id="card-chart1" height="140"
                        style="display: block; box-sizing: border-box; height: 70px; width: 285px;" width="570"></canvas>
                    <div class="chartjs-tooltip" style="opacity: 0; left: 234.333px; top: 129.847px;">
                        <table style="margin: 0px;">
                            <thead class="chartjs-tooltip-header">
                                <tr class="chartjs-tooltip-header-item" style="border-width: 0px;">
                                    <th style="border-width: 0px;">June</th>
                                </tr>
                            </thead>
                            <tbody class="chartjs-tooltip-body">
                                <tr class="chartjs-tooltip-body-item">
                                    <td style="border-width: 0px;"><span
                                            style="background: rgb(50, 31, 219); border-color: rgba(255, 255, 255, 0.55); border-width: 2px; margin-right: 10px; height: 10px; width: 10px; display: inline-block;"></span>My
                                        First dataset: 55</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <div class="card mb-4">
        <div class="card-body">
            <div class="d-flex justify-content-between">
                <div>
                    <h4 class="card-title mb-0">{!! $chart1->options['chart_title'] !!}</h4>
                </div>

            </div>
            {!! $chart1->renderHtml() !!}
        </div>

    </div>

@endsection
@section('scripts')
    @parent
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.5.0/Chart.min.js"></script>{!! $chart1->renderJs() !!}
@endsection
