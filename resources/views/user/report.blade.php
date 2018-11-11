@extends('layout.master')

@section('header')
    @include('partials.header')
    @include('partials.dashboard')
@endsection

@section('contents')
    <div class="report">
        <div class="report-header">
            <h2>Report</h2>
            <div class="report-header-date">
                This Month
                <i class="far fa-calendar-alt"></i>
            </div>
        </div>
        <div class="report-content">
            <table class="table-borderless table">
                <thead>
                    <tr>
                        <td colspan="2">Item</td>
                        <td>Item Sold</td>
                        <td colspan="2">Gross Sales</td>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><i class="fas fa-square-full"></i></td>
                        <td>Air Mineral 600mL</td>
                        <td>13</td>
                        <td>Rp</td>
                        <td>39000</td>
                    </tr>
                    <tr>
                        <td><i class="fas fa-square-full"></i></td>
                        <td>Air Mineral 600mL</td>
                        <td>13</td>
                        <td>Rp</td>
                        <td>39000</td>
                    </tr>
                    <tr>
                        <td><i class="fas fa-square-full"></i></td>
                        <td>Air Mineral 600mL</td>
                        <td>13</td>
                        <td>Rp</td>
                        <td>39000</td>
                    </tr>
                    <tr>
                        <td><i class="fas fa-square-full"></i></td>
                        <td>Air Mineral 600mL</td>
                        <td>13</td>
                        <td>Rp</td>
                        <td>39000</td>
                    </tr>
                    <tr>
                        <td><i class="fas fa-square-full"></i></td>
                        <td>Air Mineral 600mL</td>
                        <td>13</td>
                        <td>Rp</td>
                        <td>39000</td>
                    </tr>
                    <tr>
                        <td><i class="fas fa-square-full"></i></td>
                        <td>Air Mineral 600mL</td>
                        <td>13</td>
                        <td>Rp</td>
                        <td>39000</td>
                    </tr>
                    <tr>
                        <td><i class="fas fa-square-full"></i></td>
                        <td>Air Mineral 600mL</td>
                        <td>13</td>
                        <td>Rp</td>
                        <td>39000</td>
                    </tr>
                    <tr>
                        <td><i class="fas fa-square-full"></i></td>
                        <td>Air Mineral 600mL</td>
                        <td>13</td>
                        <td>Rp</td>
                        <td>39000</td>
                    </tr>
                    <tr>
                        <td><i class="fas fa-square-full"></i></td>
                        <td>Air Mineral 600mL</td>
                        <td>13</td>
                        <td>Rp</td>
                        <td>39000</td>
                    </tr>
                    <tr>
                        <td><i class="fas fa-square-full"></i></td>
                        <td>Air Mineral 600mL</td>
                        <td>13</td>
                        <td>Rp</td>
                        <td>39000</td>
                    </tr>
                    <tr>
                        <td><i class="fas fa-square-full"></i></td>
                        <td>Air Mineral 600mL</td>
                        <td>13</td>
                        <td>Rp</td>
                        <td>39000</td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div class="report-content-total">
            <table class="table table-borderless">
                <tr>
                    <td>TOTAL</td>
                    <td>Rp</td>
                    <td>39000</td>
                </tr>
            </table>
        </div>
    </div>
@endsection
