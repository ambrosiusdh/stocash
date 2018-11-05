@extends('layout.master')

@section('header')
    @include('partials.header')
    @include('partials.dashboard')
@endsection

@section('contents')
    <div class="transaction">
        <div class="transaction-header">
            <ul>
                <li><h2>Transaction</h2></li>
                <li><i class="fas fa-sync"></i></li>
            </ul>
        </div>
        <div class="transaction-content">
            <div class="transaction-content-item transaction-content-list">
                <div class="transaction-list">
                    <div class="transaction-list-header">
                        7 December 2018
                    </div>
                    <div class="transaction-list-item">
                        <div>
                            <p>15:24</p>
                            <p><i>Sarah</i></p>
                        </div>
                        <div>
                            Rp. <span>500000</span>
                        </div>
                    </div>
                    <div class="transaction-list-item">
                        <div>
                            <p>15:24</p>
                            <p><i>Sarah</i></p>
                        </div>
                        <div>
                            Rp. <span>500000</span>
                        </div>
                    </div>
                </div>
                <div class="transaction-list">
                    <div class="transaction-list-header">
                        5 December 2018
                    </div>
                    <div class="transaction-list-item">
                        <div>
                            <p>15:24</p>
                            <p><i>Sarah</i></p>
                        </div>
                        <div>
                            Rp. <span>500000</span>
                        </div>
                    </div>
                    <div class="transaction-list-item">
                        <div>
                            <p>15:24</p>
                            <p><i>Sarah</i></p>
                        </div>
                        <div>
                            Rp. <span>500000</span>
                        </div>
                    </div>
                    <div class="transaction-list-item">
                        <div>
                            <p>15:24</p>
                            <p><i>Sarah</i></p>
                        </div>
                        <div>
                            Rp. <span>500000</span>
                        </div>
                    </div>
                    <div class="transaction-list-item">
                        <div>
                            <p>15:24</p>
                            <p><i>Sarah</i></p>
                        </div>
                        <div>
                            Rp. <span>500000</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="transaction-content-item transaction-content-detail">
                <div class="transaction-receipt-empty">
                    <i><i class="fas fa-coins"></i></i>
                    <p>Click the transaction to see the detail</p>
                </div>
            </div>
        </div>
    </div>
@endsection
