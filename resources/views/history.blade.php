@extends('welcome')
@section('style')
    <link href="{{ asset('css/dashboard.css') }}" rel="stylesheet">
@endsection
@section('content')
<div class="title">
    <span>Transfer History</span>
</div>
<div class="mts_table" style="overflow-x:auto; margin-top:4rem">
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
@endsection