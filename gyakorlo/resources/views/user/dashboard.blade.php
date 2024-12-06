@extends('layouts.app')

@section('content')
    <h1>User Dashboard</h1>

    @if(auth()->user()->role->name == 'user')
        <button>User-only action</button>
    @endif
@endsection
