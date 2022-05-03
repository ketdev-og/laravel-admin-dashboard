@extends('welcome')
@section('style')
    <link href="{{ asset('css/dashboard.css') }}" rel="stylesheet">
@endsection
@section('content')
<div class="title">
    <span>Transfer History</span>
</div>
<div class="mts_table" style="overflow-x:auto; margin-top:4rem">
    <table>
            <thead class="tab_row">
                <tr >
                <th>Name</th>
                <th>Acc_no</th>
                <th>iban</th>
                <th>swift_code</th>
                <th>Amount</th>
                <th>Code</th>
                <th>Confirmed</th>
                <th>Date</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($transfer as $tran)
                <tr>
                    <td>{{$tran->user->first_name}}  {{$tran->user->last_name}}</td>
                    <td>{{$tran->user->acc_no}}</td>
                    <td>{{$tran->iban}}</td>
                    <td>{{$tran->swift_code}}</td>
                    <td>{{$tran->amount}}</td>
                    <td>{{$tran->cm_code}}</td>

                    <td>
                        @if ($tran->confirmed == 1)
                            confirmed
                        @else
                            not confirmed
                        @endif
                    </td>
                    <td>{{$tran->created_at}}</td>
                   
                </tr>
                @endforeach
            </tbody>
    </table>
</div>
@endsection