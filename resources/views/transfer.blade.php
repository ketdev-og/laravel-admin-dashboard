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
                <label for="">From Account *</label>
                <input type="text" name="" id="" placeholder="Milo - 0089678790 - [€928230]">
            </div>
            <div class="td_input">
                <label for="">Recipient Bank Name *</label>
                <input type="text" name="" id="" placeholder="e.g SunTrust Bank">
            </div>
            <div class="td_input">
                <label for="">Account Name *</label>
                <input type="text" name="" id="" placeholder="e.g JohnSon Peters">
            </div>
            <div class="td_input">
                <label for="">IBAN *</label>
                <input type="text" name="" id="" placeholder="e.g 245354254">
            </div>
            <div class="td_input">
                <label for="">BIC/ Swift Code *</label>
                <input type="text" name="" id="" placeholder="e.g STNRUS3A">
            </div>
            <div class="td_input">
                <label for="">Amount *</label>
                <input type="text" name="" id="" placeholder="30000">
            </div>
            <div class="td_input">
                <label for="">Message *</label>
                <textarea type="text" name="" id="" placeholder="purchase upfront"></textarea> 
            </div>
            <div class="td_input">
                <label for="">Date *</label>
                <input type="text" name="" id="" placeholder="2022/09/04">
            </div>
        </div>
        <div class="tr_btn">
            <a href="">Make Transfer</a>
        </div>
@endsection
