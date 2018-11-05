@extends('layout.master')

@section('style')
    <link rel="stylesheet" href="https:://cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.css">
@endsection

@section('script')
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.min.js"></script>
    <script src="{{asset('js/chart.js')}}"></script>
@endsection

@section('header')
    @include('partials.header')
    @include('partials.dashboard')
@endsection

@section('contents')
    <div class="owner">
        <h2 class="owner-header">Beranda</h2>
        <div class="owner-item owner-item-statistic">
            <div class="owner-statistic-detail">
                <ul>
                    <li>Toko Makmur Jaya</li>
                    <li><u>Refresh</u></li>
                    <li><a href="/cashier">BUKA</a></li>
                </ul>
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-4">
                            <h3 class="owner-statistic-detail-head">5,94</h3>
                            <p class="owner-statistic-detail-head">juta</p>
                            <p>Total pendapatan hari ini</p>
                        </div>
                        <div class="col-lg-4">
                            <h3 class="owner-statistic-detail-head">5,94</h3>
                            <p class="owner-statistic-detail-head">barang</p>
                            <p>Jumlah barang terjual</p>
                        </div>
                        <div class="col-lg-4">
                            <h3 class="owner-statistic-detail-head">3</h3>
                            <p class="owner-statistic-detail-head">orang</p>
                            <p>Jumlah pegawai aktif hari ini</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="owner-statistic-chart">
                <div id="line-chart"></div>
            </div>
        </div>
        <div class="owner-item owner-product-type">
            <div class="owner-product-type-item">
                <div>
                    <i class="fas fa-square-full"></i>
                </div>
                <div>
                    <table class="table table-borderless">
                        <tr>
                            <td>57</td>
                            <td>items sold today</td>
                        </tr>
                        <tr>
                            <td>87.7%</td>
                            <td>stock is available</td>
                        </tr>
                    </table>
                    <div class="owner-product-type-footer">
                        Non-FB
                        <i class="fas fa-angle-right"></i>
                    </div>
                </div>
            </div>
            <div class="owner-product-type-item">
                <div>
                    <i class="fas fa-square-full"></i>
                </div>
                <div>
                    <table class="table table-borderless">
                        <tr>
                            <td>57</td>
                            <td>items sold today</td>
                        </tr>
                        <tr>
                            <td>87.7%</td>
                            <td>stock is available</td>
                        </tr>
                    </table>
                    <div class="owner-product-type-footer">
                        Non-FB
                        <i class="fas fa-angle-right"></i>
                    </div>
                </div>
            </div>
            <div class="owner-product-type-item">
                <div>
                    <i class="fas fa-square-full"></i>
                </div>
                <div>
                    <table class="table table-borderless">
                        <tr>
                            <td>57</td>
                            <td>items sold today</td>
                        </tr>
                        <tr>
                            <td>87.7%</td>
                            <td>stock is available</td>
                        </tr>
                    </table>
                    <div class="owner-product-type-footer">
                        Non-FB
                        <i class="fas fa-angle-right"></i>
                    </div>
                </div>
            </div>
            <div class="owner-product-type-item">
                <div>
                    <i class="fas fa-square-full"></i>
                </div>
                <div>
                    <table class="table table-borderless">
                        <tr>
                            <td>57</td>
                            <td>items sold today</td>
                        </tr>
                        <tr>
                            <td>87.7%</td>
                            <td>stock is available</td>
                        </tr>
                    </table>
                    <div class="owner-product-type-footer">
                        Non-FB
                        <i class="fas fa-angle-right"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
