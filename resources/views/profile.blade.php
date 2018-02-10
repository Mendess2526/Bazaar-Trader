@extends('layouts.app')


@section('content')
<head>
  <link href="/css/profile.css" rel="stylesheet">
</head>

<body background="/img/profileback.jpg">
    <div id="sidebar">
      <img id="imgperfil" src="/img/profilepic.jpg"/>
      <div id="idtext" style="color:#2EFEF7">
        <p>{{ $user->name }}</p>
        <p>{{ $user->email }}</p>
        <p>{{ $user->address }}</p>
        <p>{{ $user->city}}, {{ $user->country }}</p>
      </div>
    </div>
</body>
@endsection
