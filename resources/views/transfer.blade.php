@extends('welcome')
@section('style')
    <link href="{{ asset('css/dashboard.css') }}" rel="stylesheet">
    <link href="{{ asset('css/transfer.css') }}" rel="stylesheet">
@endsection
@section('content')
    <div class="title">
        <span>Funds Transfer</span>
    </div>
    
    <x-auth-validation-errors class="mb-4" :errors="$errors" />
    <x-auth-session-status class="mb-4" :status="session('message')" />
    
    <form action="{{route('transfer_m')}}" method="POST">
        @csrf
        <div class="tr_inputs">
            <div class="td_input">
                <label for="">From Account *</label>
                <input type="text" name="from_acc" id="">
            </div>
            <div class="td_input">
                <label for="">Recipient Bank Name *</label>
                <input type="text" name="recp_bank_name" id="">
            </div>
            <div class="td_input">
                <label for="">Account Name *</label>
                <input type="text" name="acc_name" id="">
            </div>
            
            <div class="td_input">
                <label for="">IBAN *</label>
                <input type="text" name="iban" id="" >
            </div>
            <div class="td_input">
                <label for="">BIC/ Swift Code *</label>
                <input type="text" name="swiftcode" id="" >
            </div>
            <div class="td_input">
                <label for="">Amount *</label>
                <input type="text" name="amount" id="">
            </div>
            <div class="td_input">
                <label for="">Message</label>
                <textarea type="text" name="message" id=""></textarea> 
            </div>
        </div>
        <div class="tr_btn">
            <input type="submit" value="submit">
        </div>

    </form>
@endsection
