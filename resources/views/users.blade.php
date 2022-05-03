@extends('welcome')
@section('style')
    <link href="{{ asset('css/dashboard.css') }}" rel="stylesheet">
@endsection
@section('content')
    <div class="title">
        <span>Transfer History</span>
    </div>
    <div class="mts_table" style="overflow-x:auto; margin-top:4rem">

        <div class="ad_btn">
            <a href="{{ route('register') }}">+ Create Account</a>
        </div>


        <table>
            <thead class="tab_row">
                <tr>
                    <th>id</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th>gender</th>
                    <th>country</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                @foreach ($users as $user)
                    <tr>

                        <td>{{ $user->id }}</td>
                        <td>{{ $user->first_name }} {{ $user->last_name }}</td>
                        <td>{{ $user->email }}</td>
                        <td>{{ $user->phone_no }}</td>
                        <td>{{ $user->gender }}</td>
                        <td>{{ $user->country }}</td>
                        <td>
                            <form action="{{route('post_users_profile')}}" method="post">
                                @csrf
                                <input type="hidden" name="id" value="{{$user->id}}">
                                <input class="view_btn" type="submit" value="View">
                            </form>
                            
                        </td>

                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
