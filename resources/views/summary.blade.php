@extends('welcome')
@section('style')
    <link href="{{ asset('css/dashboard.css') }}" rel="stylesheet">
@endsection
@section('content')
<div class="title">
    <span>Transaction Summary</span>
</div>
<div class="mts_table" style="overflow-x:auto; margin-top:4rem">
    <table >
            <thead class="tab_row">
                <tr >
                <th>Date</th>
                <th>Reference No</th>
                <th>Description</th>
                <th>Type</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                
            </tbody>
    </table>
</div>
@endsection
