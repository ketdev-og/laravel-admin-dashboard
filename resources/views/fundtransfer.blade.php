@extends('welcome')
@section('style')
    <link href="{{ asset('css/dashboard.css') }}" rel="stylesheet">
    <link href="{{ asset('css/transfer.css') }}" rel="stylesheet">
@endsection
@section('content')
    <div class="title">
        <span>Fund Transfer</span>
    </div>
    <x-auth-session-status class="mb-4" :status="session('message')" />
    <form action="{{route('fund')}}" method="post">
        @csrf
        <div class="tr_inputs">
            <div class="td_input">
                <label for="">Account Number</label>
                <input type="text" name="acc_no" id="" placeholder="324789">
            </div>
            <div class="td_input">
                <label for="">Account Type</label>
                <input type="text" name="acc_type" id="" placeholder="savings">
            </div>
            <div class="td_input">
                <label for="">Amount</label>
                <input type="text" name="amount" id="" placeholder="4000">
            </div>
            
        </div>
        <div class="tr_btn">
            <input type="submit" value="submit">
        </div>
   </form>
@endsection
