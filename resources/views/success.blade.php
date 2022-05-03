@extends('welcome')
@section('style')
    <link href="{{ asset('css/dashboard.css') }}" rel="stylesheet">
@endsection
@section('content')
  <div class="con_title">
      <h1>
          Congratulations
      </h1>
  </div>
  <div class="con_text">
      <p>
          Your transfer has been completed successfully. Please check your account balance
      </p>
  </div>
@endsection
