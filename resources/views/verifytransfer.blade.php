@extends('welcome')
@section('style')
    <link href="{{ asset('css/dashboard.css') }}" rel="stylesheet">
    <link href="{{ asset('css/transfer.css') }}" rel="stylesheet">
@endsection
@section('content')
    <div class="title">
        <span>Confirm Transfer</span>
    </div>
    <x-auth-session-status class="mb-4" :status="session('message')" />
    <form action="{{route('verify_transfer')}}" method="post">
        @csrf
        <div class="tr_inputs">
            <div class="td_input">
                <label for="">Account Number</label>
                <input type="text" name="acc_no" id="">
            </div>
            <div class="td_input">
                <label for="">confirmation code</label>
                <input type="text" name="cfc" id="" >
            </div>
            
        </div>
        <div class="tr_btn">
            <input type="submit" value="submit">
        </div>
   </form>
@endsection
