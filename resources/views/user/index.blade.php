@extends('layouts.landing')

@section('title','Users list')
@section('content')
<h1>User list:</h1>
<ul>
    @forelse ($users as $user)
        <li>{{ $user->name }}</li>
    @empty
        <h3>User list is empty</h3>
    @endforelse
</ul>
@endsection
