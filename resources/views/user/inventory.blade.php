@extends('layout.master')

@section('title')
    STOCASH - Inventory
@endsection

@section('header')
    @include('partials.header')
    @include('partials.dashboard')
@endsection

@section('style')
    <style>
        input[type="number"]::-webkit-outer-spin-button, input[type="number"]::-webkit-inner-spin-button {
            -webkit-appearance: none;
            margin: 0;
    </style>
@endsection

@section('contents')
    <div class="inventory">
        <div class="inventory-header">
            <h2>Inventory</h2>
            <div class="inventory-header-action">
                <button class="inventory-header-button" onclick="">
                    <i class="fas fa-plus"></i>
                    Add New Item
                </button>
                <button class="inventory-header-button">
                    <i class="far fa-trash-alt"></i>
                    Delete Item
                </button>
            </div>
        </div>
        <div class="inventory-content">
            <div class="report-content">
                <table class="table-borderless table">
                    <thead>
                        <tr>
                            <td colspan="2">Item</td>
                            <td>Stock</td>
                            <td>Action</td>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach($item as $data)
                        <tr class="inventory-content-item-{{$data->id}}">
                            <td><i class="fas fa-square-full"></i></td>
                            <td id="inventory-item-name">{{$data->itemName}}</td>
                            <td class="inventory-stock">
                                @if($data->stock > 0)
                                    {{$data->stock}}
                                @else
                                    <span style="color: red; font-weight: bold">OUT</span>
                                @endif
                            </td>
                            <td><button class="inventory-edit-button" onclick="showStock({{ $data->id }});">Edit Stock</button></td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <div class="warning" style="display: none;">
        <div class="overlay">
            <div class="notice">
                <div class="notice-header"> Edit Stock</div>
                <div class="notice-content notice-edit-stock">
                    <table class="table table-borderless">
                        <tr>
                            <td id="change-stock-item-name"></td>
                            <td id="change-stock-value">' + stock + '</td>
                            <td><button class="inventory-stock-minus" onclick="decreaseStock()"><i class="fas fa-minus"></i></button></td>
                            <td style="width: 20%;">
                                <form action="/inventory" method="post">
                                    <input type="number" id="update-stock-value" value="" name="stock" min="0">
                                    <input id="stock-id" type="hidden" value="" name="id">
                                    <input type="submit" id="change-stock-submit" style="display: none;">
                                    {{csrf_field()}} </form>
                            </td>
                            <td>
                                <button class="inventory-stock-plus" onclick="increaseStock()">
                                    <i class="fas fa-plus"></i>
                                </button>
                            </td>
                        </tr>
                    </table>
                    <div class="cashier-item-list-button">
                        <button class="cashier-btn-success" onclick="changeStock()">OK</button>
                        <button class="cashier-btn-fail" onclick="hideStockMenu();">Batal</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
