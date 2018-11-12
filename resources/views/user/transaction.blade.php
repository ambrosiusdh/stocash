@extends('layout.master')

@section('title')
    STOCASH - Transaction
@endsection

@section('header')
    @include('partials.header')
    @include('partials.dashboard')
@endsection

@section('contents')
    <div class="transaction">
        <div class="transaction-header">
            <ul>
                <li><h2>Transaction</h2></li>
            </ul>
        </div>
        <div class="transaction-content">
            <div class="transaction-content-item transaction-content-list">
                <div class="transaction-list">
                    {{$date = null}}
                    @foreach($transactions as $transaction)
                        @if($transaction->created_at != $date)
                            {{$date = $transaction->created_at}}
                            <div class="transaction-list-header">
                                {{$date}}
                            </div>
                        @endif
                        <span id="transaction-list-id" style="display: none;">{{ $transaction->id }}</span>
                        <div class="transaction-list-item" id="transaction-list-id-{{$transaction->id}}">
                            <div>
                                <p class="transaction-list-date">{{$transaction->created_at}}</p>
                                <p>@foreach($transaction->user as $user)
                                      <i>{{$user->name}}</i>
                                    @endforeach</p>
                            </div>
                            <div>
                                Rp. <span>{{$transaction->totalPrice}}</span>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
            <div class="transaction-content-item transaction-content-detail">
                <div class="transaction-loading-screen" style="display:none">
                    <div><div></div></div>
                </div>
                <div class="transaction-content-detail-item">
                    <div class="transaction-receipt-empty">
                        <i><i class="fas fa-coins"></i></i>
                        <p>Click the transaction to see the detail</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
