@extends('layout.master')

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
                        <tr>
                            <td><i class="fas fa-square-full"></i></td>
                            <td>Air Mineral 600mL</td>
                            <td class="inventory-stock">13</td>
                            <td><button class="inventory-edit-button" onclick="editStock(1);">Edit Stock</button></td>
                        </tr>
                        <tr>
                            <td><i class="fas fa-square-full"></i></td>
                            <td>Air Mineral 600mL</td>
                            <td class="inventory-stock">23</td>
                            <td><button class="inventory-edit-button" onclick="editStock(2);">Edit Stock</button></td>
                        </tr>
                        <tr>
                            <td><i class="fas fa-square-full"></i></td>
                            <td>Air Mineral 600mL</td>
                            <td class="inventory-stock">13</td>
                            <td><button class="inventory-edit-button" onclick="editStock(3);">Edit Stock</button></td>
                        </tr><tr>
                            <td><i class="fas fa-square-full"></i></td>
                            <td>Air Mineral 600mL</td>
                            <td class="inventory-stock">13</td>
                            <td><button class="inventory-edit-button" onclick="editStock(4);">Edit Stock</button></td>
                        </tr><tr>
                            <td><i class="fas fa-square-full"></i></td>
                            <td>Air Mineral 600mL</td>
                            <td class="inventory-stock">13</td>
                            <td><button class="inventory-edit-button" onclick="editStock(5);">Edit Stock</button></td>
                        </tr><tr>
                            <td><i class="fas fa-square-full"></i></td>
                            <td>Air Mineral 600mL</td>
                            <td class="inventory-stock">13</td>
                            <td><button class="inventory-edit-button" onclick="editStock(6);">Edit Stock</button></td>
                        </tr>
                        <tr>
                            <td><i class="fas fa-square-full"></i></td>
                            <td>Air Mineral 600mL</td>
                            <td class="inventory-stock">13</td>
                            <td><button class="inventory-edit-button" onclick="editStock(7);">Edit Stock</button></td>
                        </tr><tr>
                            <td><i class="fas fa-square-full"></i></td>
                            <td>Air Mineral 600mL</td>
                            <td class="inventory-stock">13</td>
                            <td><button class="inventory-edit-button" onclick="editStock(8);">Edit Stock</button></td>
                        </tr><tr>
                            <td><i class="fas fa-square-full"></i></td>
                            <td>Air Mineral 600mL</td>
                            <td class="inventory-stock">13</td>
                            <td><button class="inventory-edit-button" onclick="editStock(9);">Edit Stock</button></td>
                        </tr><tr>
                            <td><i class="fas fa-square-full"></i></td>
                            <td>Air Mineral 600mL</td>
                            <td class="inventory-stock">13</td>
                            <td><button class="inventory-edit-button" onclick="editStock(10);">Edit Stock</button></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <div class="warning">

    </div>
@endsection
