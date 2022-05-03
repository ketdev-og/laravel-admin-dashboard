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
                @foreach ($transfer as $tran)
                <tr>
                    <td>{{$tran->created_at}}</td>
                    <td>{{$tran->amount}}</td>
                    <td>{{$tran->acc_name}}</td>
                    <td>{{$tran->recp_bank_name}}</td>
                    <td>{{$tran->from_acc}}</td>
                    <td>Successful</td>
                </tr>
                @endforeach
            </tbody>
    </table>
</div>
@endsection