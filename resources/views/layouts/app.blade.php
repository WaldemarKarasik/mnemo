@extends('layouts.base')

@section('body')
    @yield('content')
    @if(Request::path() == 'admin-panel')
    @else
    @livewire('footer')
    @endif
@endsection
