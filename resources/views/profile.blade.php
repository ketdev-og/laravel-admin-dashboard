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
        <div class="edit_profile">
            <a href="{{route('update')}}">
                <span><i class="fa fa-pencil-square-o" aria-hidden="true"></i></span>
            <span>Edit Profile</span>
            </a>
        </div>
        <div class="pro_h">
            <div class="pro_img">
                <img src="https://images.unsplash.com/photo-1580250864656-cd501faa9c76?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxjb2xsZWN0aW9uLXBhZ2V8MXwxNjk3MDJ8fGVufDB8fHx8&auto=format&fit=crop&w=500&q=60"
                    alt="">
            </div>
            <div class="pro_h_detail">
                <div class="pro_name">
                    <span>Chylau Ketem</span>
                </div>
                <div class="pro_address">
                    <span>Malta m Atalanta USA</span>
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
                    <span>Chylau Ketem</span>
                </div>
                <div class="acc_acn dtl">
                    <span>Account Number</span>
                    <span>0089678790</span>
                </div>
                <div class="acc_ocup dtl">
                    <Span>Occupation</Span>
                    <span>Sailor</span>
                </div>
                <div class="acc_dob dtl">
                    <span>Date of Birth</span>
                    <span>05/08/1980</span>
                </div>
                <div class="acc_dob dtl">
                    <span>Phone Number</span>
                    <span>+31 6 84074557</span>
                </div>
                <div class="acc_dob dtl">
                    <span>Sex</span>
                    <span>Male</span>
                </div>
                <div class="acc_dob dtl">
                    <span>Marital Status</span>
                    <span>Single</span>
                </div>
                <div class="acc_dob dtl">
                    <span>Account Type</span>
                    <span>Savings (€)</span>
                </div>
                <div class="acc_dob dtl">
                    <span>Registration Date</span>
                    <span>Savings (08/04/2005)</span>
                </div>
            </div>
        </div>
    </div>
@endsection
