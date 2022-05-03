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
            <div class="pro_btn">
                <form action="{{ route('activate_users_profile') }}" method="post">
                    @csrf
                    <input type="hidden" name="id" value="{{ $user->id }}">
                    @if ($user->isActive == 1)
                        <a style="cursor: pointer" class="act" onclick="event.preventDefault();
                        this.closest('form').submit();">
                            Deactivate Account
                        </a>
                    @endif

                    @if($user->isActive == 0)
                    <a style="cursor: pointer" class="act" onclick="event.preventDefault();
                        this.closest('form').submit();">
                        Activate Account
                    </a>
                    @endif

                </form>

                <form action="{{ route('delete_users_profile') }}" method="post">
                    @csrf
                    <input type="hidden" name="id" value="{{ $user->id }}">

                    <a style="cursor: pointer" class="del" onclick="event.preventDefault();
                        this.closest('form').submit();">Delete Account</a>
                </form>

            </div>
            <form method="GET" action="{{ route('update') }}">
                @csrf
                <input type="hidden" name="id" value="{{ $user->id }}">
                <a class="edit" style="cursor: pointer" onclick="event.preventDefault();
                        this.closest('form').submit();">
                    <span><i class="fa fa-pencil-square-o" aria-hidden="true"></i></span>
                    <span>Edit Profile</span>
                </a>
            </form>

        </div>
        <div class="pro_h">
            <div class="pro_img">
                <img src="https://images.unsplash.com/photo-1580250864656-cd501faa9c76?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxjb2xsZWN0aW9uLXBhZ2V8MXwxNjk3MDJ8fGVufDB8fHx8&auto=format&fit=crop&w=500&q=60"
                    alt="">
            </div>
            <div class="pro_h_detail">
                <div class="pro_name">
                    <span>{{ $user->first_name }} {{ $user->last_name }}</span>
                </div>
                <div class="pro_address">
                    <span>{{ $user->address }}</span>
                </div>
            </div>
            <div class="is_active">
                <span><i class="fa fa-check-circle-o" aria-hidden="true"></i></span>
                <span>
                    @if ($user->isActive == 0)
                        Not Active
                    @endif
                    @if ($user->isActive == 1)
                        Active
                    @endif
                </span>
            </div>
        </div>

        <div class="acc_info" style="margin-top: 4rem">

            <div class="acc_dtl">
                <div class="acc_name dtl">
                    <span class="osi">Account Name</span>
                    <span>{{ $user->first_name }} {{ $user->last_name }}</span>
                </div>
                <div class="acc_acn dtl">
                    <span>Account Number</span>
                    <span>{{ $user->acc_no }}</span>
                </div>
                <div class="acc_ocup dtl">
                    <Span>Email</Span>
                    <span>{{ $user->email }}</span>
                </div>
                <div class="acc_dob dtl">
                    <span>Date of Birth</span>
                    <span>{{ $user->dob }}</span>
                </div>
                <div class="acc_dob dtl">
                    <span>Phone Number</span>
                    <span>{{ $user->phone_no }}</span>
                </div>
                <div class="acc_dob dtl">
                    <span>Sex</span>
                    <span>{{ $user->gender }}</span>
                </div>
                <div class="acc_dob dtl">
                    <span>Account Type</span>
                    <span>{{ $user->acc_type }}</span>
                </div>
                <div class="acc_dob dtl">
                    <span>State</span>
                    <span>{{ $user->state }}</span>
                </div>
                <div class="acc_dob dtl">
                    <span>Country</span>
                    <span>{{ $user->country }}</span>
                </div>
                <div class="acc_dob dtl">
                    <span>Registration Date</span>
                    <span>{{ $user->created_at }}</span>
                </div>
            </div>
        </div>
    </div>
@endsection
