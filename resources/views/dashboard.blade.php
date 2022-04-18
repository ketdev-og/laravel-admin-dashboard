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
        <div class="mts_table" style="overflow-x:auto;" >
            <table >
                    <thead class="tab_row">
                        <tr >
                        <th>Date</th>
                        <th>Amount</th>
                        <th>Account Accredited</th>
                        <th>Bank</th>
                        <th>Description</th>
                        <th>Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>2022-04-04 15:16:30</td>
                            <td>3950</td>
                            <td>FI35 5780 0720 5263 62 - Anna Turko</td>
                            <td>OP bank</td>
                            <td>Savings</td>
                            <td>Successful</td>
                        </tr>
                        <tr>
                            <td>2022-04-04 15:16:30</td>
                            <td>3950</td>
                            <td>FI35 562 - Anna Turko</td>
                            <td>Ojjs bank</td>
                            <td>Savings</td>
                            <td>Successful</td>
                        </tr>
                    </tbody>
            </table>
        </div>
    </div>
    <div class="acc_info">
        <div class="acis">
            <span>Account Information</span>
        </div>
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
        </div>
    </div>
@endsection
