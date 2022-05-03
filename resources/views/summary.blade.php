@extends('welcome')
@section('style')
    <link href="{{ asset('css/dashboard.css') }}" rel="stylesheet">
@endsection
@section('content')
    <div class="title">
        <span>Transaction Summary</span>
    </div>
    <div class="mts_table" style="overflow-x:auto; margin-top:4rem">
        <table>
            <thead class="tab_row">
                <tr>
                    <th>Date</th>
                    <th>id</th>
                    <th>Account No</th>
                    <th>Account Type</th>
                    <th>Amount</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($transactions as $tran)
                    <tr>
                        <td>{{$tran->created_at}}</td>
                        <td>{{$tran->id}}</td>
                        <td>{{$tran->acc_no}}</td>
                        <td>{{$tran->acc_type}}</td>
                        <td>{{$tran->amount}}</td>
                    </tr>
                @endforeach


            </tbody>
        </table>
    </div>
@endsection
