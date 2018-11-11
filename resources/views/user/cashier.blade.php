@extends('layout.master')

@section('header')
    @include('partials.header')
    @include('partials.dashboard')
@endsection

@section('contents')
    <div class="cashier">
        <div class="cashier-item cashier-item-list">
            <div class="cashier-item-list-table">
                <table class="table table-borderless">
                    <thead>
                        <tr class="cashier-table-header">
                            <td class="col-md-6">ITEM</td>
                            <td class="col-md-2">QTY</td>
                            <td class="col-md-3">HARGA</td>
                            <td class="col-md-1">.</td>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="col-md-6">Beras Rojolele 5kg</td>
                            <td class="col-md-2">1</td>
                            <td class="col-md-3 product-price">67000</td>
                            <td class="col-md-1"><i class="far fa-times-circle"></i></td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="cashier-item-list-button">
                <button class="cashier-btn-success" onclick="calculateTotal();">Selesai</button>
                <button class="cashier-btn-fail" onclick="showExitMenu();">Batal</button>
            </div>
        </div>
        <div class="cashier-item cashier-list-product">
            <div class="cashier-seacrh-bar form-group">
                <input type="text" class="form-control" placeholder="Search product..">
            </div>
            <div class="cashier-product-grid container-fluid">
                @foreach($item->chunk(3) as $itemChunk)
                <div class="row">
                    @foreach($itemChunk as $data)
                    <div class="col-lg-4">
                        <div>
                            <p>{{$data->itemName}}</p>
                            <p class="price-tag">{{$data->price}}$</p>
                        </div>
                    </div>
                    @endforeach
                </div>
                @endforeach
            </div>
        </div>
    </div>
    <div class="warning">
    </div>
@endsection
