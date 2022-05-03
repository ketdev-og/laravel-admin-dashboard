@extends('welcome')
@section('style')
    <link href="{{ asset('css/dashboard.css') }}" rel="stylesheet">
    <link href="{{ asset('css/profile.css') }}" rel="stylesheet">
@endsection
@section('content')
    <div class="title">
        <span>Account Information</span>
    </div>
    <div class="pro_con">
        <div class="pro_h">
            <div class="pro_img">
                <img src="https://images.unsplash.com/photo-1580250864656-cd501faa9c76?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxjb2xsZWN0aW9uLXBhZ2V8MXwxNjk3MDJ8fGVufDB8fHx8&auto=format&fit=crop&w=500&q=60"
                    alt="">
            </div>
            <div class="pro_h_detail">
                <div class="pro_name">
                    <span>{{Auth::user()->first_name}} {{Auth::user()->last_name}}</span>
                </div>
                <div class="pro_address">
                    <span>{{Auth::user()->address}}</span>
                </div>
            </div>
            <div class="is_active">
                <span><i class="fa fa-check-circle-o" aria-hidden="true"></i></span>
                <span>Active</span>
            </div>
        </div>

        <div class="acc_info" style="margin-top: 4rem">
           
            <div class="acc_dtl">
                <div class="acc_name dtl">
                    <span class="osi">Account Name</span>
                    <span>{{Auth::user()->first_name}} {{Auth::user()->last_name}}</span>
                </div>
                <div class="acc_acn dtl">
                    <span>Account Number</span>
                    <span>{{Auth::user()->acc_no}}</span>
                </div>
                <div class="acc_ocup dtl">
                    <Span>Occupation</Span>
                    <span>{{Auth::user()->occupation}}</span>
                </div>
                <div class="acc_dob dtl">
                    <span>Date of Birth</span>
                    <span>{{Auth::user()->dob}}</span>
                </div>
                <div class="acc_dob dtl">
                    <span>Phone Number</span>
                    <span>{{Auth::user()->phone_no}}</span>
                </div>
                <div class="acc_dob dtl">
                    <span>Sex</span>
                    <span>{{Auth::user()->gender}}</span>
                </div>
                <div class="acc_dob dtl">
                    <span>Account Type</span>
                    <span>{{Auth::user()->acc_type}}</span>
                </div>
                <div class="acc_dob dtl">
                    <span>Registration Date</span>
                    <span>{{Auth::user()->created_at}}</span>
                </div>
            </div>
        </div>
    </div>
@endsection
