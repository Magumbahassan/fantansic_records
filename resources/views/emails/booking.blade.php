@extends('layout.main')
@section('content')
<body class="index-page">

    @include('layout.nav')




<h2>🎧 New Studio Appointment</h2>

<p><strong>Name:</strong> {{ $data['name'] }}</p>
<p><strong>Email:</strong> {{ $data['email'] }}</p>
<p><strong>Phone:</strong> {{ $data['phone'] }}</p>
<p><strong>Location:</strong> {{ $data['location'] }}</p>
<p><strong>Session Type:</strong> {{ $data['session_type'] }}</p>
<p><strong>Date:</strong> {{ $data['date'] }}</p>
<p><strong>Time:</strong> {{ $data['time'] }}</p>
<p><strong>Duration:</strong> {{ $data['duration'] }}</p>
<p><strong>Message:</strong> {{ $data['message'] ?? 'None' }}</p>

@if(isset($data['file_path']))
    <p><strong>File:</strong> <a href="{{ asset('storage/' . $data['file_path']) }}">View File</a></p>
@endif

@include('layout.footer')
