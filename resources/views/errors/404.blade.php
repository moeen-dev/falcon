@extends('layouts.frontend')
@section('content')
<div style="margin-bottom: 50px; align-items: center; text-align: center;">
    <h1 style="color: red;margin-bottom: 15px;">404 Not Found</h1>
    <p>Sorry, the page you are looking for could not be found. <strong><a style="color: green;font-size: 20px" href="{{ route('home')}}">Go to home >>></a></strong></p>
</div>
@endsection