@extends('welcome')
@section('style')
    <link href="{{ asset('css/dashboard.css') }}" rel="stylesheet">
    <link href="{{ asset('css/transfer.css') }}" rel="stylesheet">
@endsection
@section('content')
    <div class="title">
        <span>Reset Password</span>
    </div>
    
        <div class="tr_inputs">
            <div class="td_input">
                <label for="">Old Password</label>
                <input type="text" name="" id="" placeholder="********">
            </div>
            <div class="td_input">
                <label for="">New Password</label>
                <input type="text" name="" id="" placeholder="*********">
            </div>
            <div class="td_input">
                <label for="">Verify New Password</label>
                <input type="text" name="" id="" placeholder="********">
            </div>
            
        </div>
        <div class="tr_btn">
            <a href="">Update</a>
        </div>
@endsection
