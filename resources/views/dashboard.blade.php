{{-- <x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    You're logged in!
                </div>
            </div>
        </div>
    </div>
</x-app-layout> --}}


@extends('welcome')
@section('style')
    <link href="{{ asset('css/dashboard.css') }}" rel="stylesheet">
@endsection
@section('content')

    <div class="title">
        <span>Dashboard</span>
    </div>

    @role('client')
    <div class="quick_access">
        <div class="qkacs">
            <span>Quick Access</span>
        </div>
        <div class="qkacs_con">
            <div class="qkacs_blk">
                <a href="{{ route('dashboard') }}">
                    <div class="quick_link">
                        <div class="ql_icon">
                            <i class="fa fa-home" aria-hidden="true"></i>
                        </div>
                        <div class="ql_title">
                            <span>Home</span>
                        </div>
                    </div>
                </a>
                <a href="{{ route('transfer') }}">
                    <div class="quick_link">
                        <div class="ql_icon">
                            <i class="fa fa-exchange" aria-hidden="true"></i>
                        </div>
                        <div class="ql_title">
                            <span>Transfer</span>
                        </div>
                    </div>
                </a>
                <a href="{{ route('adprofile') }}">
                    <div class="quick_link">
                        <div class="ql_icon">
                            <i class="fa fa-male" aria-hidden="true"></i>
                        </div>
                        <div class="ql_title">
                            <span>Profile</span>
                        </div>
                    </div>
                </a>

                <form action="{{ route('logout') }}" method="POST">
                    @csrf
                    <a href="{{ route('logout') }}" onclick="event.preventDefault();
                    this.closest('form').submit();">
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
    @endrole
    @role('admin')
    <div class="quick_access">
        <div class="qkacs">
            <span>Quick Access</span>
        </div>
        <div class="qkacs_con">
            <div class="qkacs_blk">
                <a href="{{ route('dashboard') }}">
                    <div class="quick_link">
                        <div class="ql_icon">
                            <i class="fa fa-home" aria-hidden="true"></i>
                        </div>
                        <div class="ql_title">
                            <span>Home</span>
                        </div>
                    </div>
                </a>
                <a href="{{ route('history') }}">
                    <div class="quick_link">
                        <div class="ql_icon">
                            <i class="fa fa-exchange" aria-hidden="true"></i>
                        </div>
                        <div class="ql_title">
                            <span>Transfers</span>
                        </div>
                    </div>
                </a>
                <a href="{{ route('summary') }}">
                    <div class="quick_link">
                        <div class="ql_icon">
                            <i class="fa fa-credit-card-alt" aria-hidden="true"></i>
                        </div>
                        <div class="ql_title">
                            <span>Transactions</span>
                        </div>
                    </div>
                </a>
                <a href="{{ route('users') }}">
                    <div class="quick_link">
                        <div class="ql_icon">
                            <i class="fa fa-male" aria-hidden="true"></i>
                        </div>
                        <div class="ql_title">
                            <span>Users</span>
                        </div>
                    </div>
                </a>

                <form action="{{ route('logout') }}" method="POST">
                    @csrf
                    <a href="{{ route('logout') }}" onclick="event.preventDefault();
                    this.closest('form').submit();">
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
    @endrole
    @role('client')
        <div class="main_tan">

            <div class="mts">
                <span>Transaction History</span>
            </div>
            <div class="mts_table" style="overflow-x:auto;">
                <table>
                    <thead class="tab_row">
                        <tr>
                            <th>Date</th>
                            <th>Amount</th>
                            <th>Account Accredited</th>
                            <th>Bank</th>
                            <th>Description</th>
                            <th>Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($transfer as $tran)
                            <tr>
                                <td>{{ $tran->created_at }}</td>
                                <td>{{ $tran->amount }}</td>
                                <td>{{ $tran->acc_name }}</td>
                                <td>{{ $tran->recp_bank_name }}</td>
                                <td>{{ $tran->from_acc }}</td>
                                <td>Successful</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    @endrole
    <div class="acc_info">
        <div class="acis">
            <span>Account Information</span>
        </div>
        <div class="acc_dtl">
            <div class="acc_name dtl">
                <span class="osi">Account Name</span>
                <span>{{ Auth::user()->first_name }} {{ Auth::user()->last_name }}</span>
            </div>
            <div class="acc_acn dtl">
                <span>Account Number</span>
                <span>{{ Auth::user()->acc_no }}</span>
            </div>
            <div class="acc_ocup dtl">
                <Span>Occupation</Span>
                <span>{{ Auth::user()->occupation }}</span>
            </div>
            <div class="acc_dob dtl">
                <span>Date of Birth</span>
                <span>{{ Auth::user()->dob }}</span>
            </div>
        </div>
    </div>
@endsection
