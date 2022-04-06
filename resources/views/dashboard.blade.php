@extends('welcome')
@section('style')
    <link href="{{ asset('css/dashboard.css') }}" rel="stylesheet">
@endsection
@section('content')
    <div class="title">
        <span>Dashboard</span>
    </div>
    <div class="quick_access">
        <div class="qkacs">
            <span>Quick Access</span>
        </div>
        <div class="qkacs_con">
            <div class="qkacs_blk">
                <a href="">
                    <div class="quick_link">
                        <div class="ql_icon">
                            <i class="fa fa-home" aria-hidden="true"></i>
                        </div>
                        <div class="ql_title">
                            <span>Home</span>
                        </div>
                    </div>
                </a>
                <a href="">
                    <div class="quick_link">
                        <div class="ql_icon">
                            <i class="fa fa-exchange" aria-hidden="true"></i>
                        </div>
                        <div class="ql_title">
                            <span>Transfer</span>
                        </div>
                    </div>
                </a>
                <a href="">
                    <div class="quick_link">
                        <div class="ql_icon">
                            <i class="fa fa-male" aria-hidden="true"></i>
                        </div>
                        <div class="ql_title">
                            <span>Profile</span>
                        </div>
                    </div>
                </a>
                <a href="">
                    <div class="quick_link">
                        <div class="ql_icon">
                            <i class="fa fa-user" aria-hidden="true"></i>
                        </div>
                        <div class="ql_title">
                            <span>Manage Profile</span>
                        </div>
                    </div>
                </a>
                <a href="">
                    <div class="quick_link">
                        <div class="ql_icon">
                            <i class="fa fa-key" aria-hidden="true"></i>
                        </div>
                        <div class="ql_title">
                            <span>Manage Password</span>
                        </div>
                    </div>
                </a>
                <a href="">
                    <div class="quick_link">
                        <div class="ql_icon">
                            <i class="fa fa-sign-out" aria-hidden="true"></i>
                        </div>
                        <div class="ql_title">
                            <span>Logout</span>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </div>
    <div class="main_tan">
        <div class="mts">
            <span>Transaction History</span>
        </div>
        <div class="mts_table">
            <table>
                <thead>
                    <tr>
                    <th>Date</th>
                    <th>Amount</th>
                    <th>Account Accredited</th>
                    <th>Bank</th>
                    <th>Description</th>
                    <th>Status</th>
                    </tr>
                    
                </thead>
            </table>
        </div>
    </div>
@endsection
