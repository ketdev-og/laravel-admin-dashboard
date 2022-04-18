@extends('welcome')
@section('style')
    <link href="{{ asset('css/dashboard.css') }}" rel="stylesheet">
    <link href="{{ asset('css/transfer.css') }}" rel="stylesheet">
@endsection
@section('content')
    <div class="title">
        <span>Funds Transfer</span>
    </div>
    
        <div class="tr_inputs">
            <div class="td_input">
                <label for="">Email</label>
                <input type="text" name="" id="" placeholder="name123@gmail.com">
            </div>
            <div class="td_input">
                <label for="">Phone Number</label>
                <input type="text" name="" id="" placeholder="+10234567">
            </div>
            <div class="td_input">
                <label for="">Address</label>
                <input type="text" name="" id="" placeholder="Malta m Atalanta USA">
            </div>
            
        </div>
        <div class="tr_btn">
            <a href="">Update</a>
        </div>
@endsection
