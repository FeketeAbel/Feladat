@extends('layouts.app')

@section('content')
    <h1>Admin Dashboard</h1>

    @if(auth()->user()->role->name == 'admin')
        <button>Admin-only action</button>
    @endif
@endsection
