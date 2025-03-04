@extends('tenant.layouts.app')

@section('content')
    @if(session('error'))
        <div class="alert alert-danger">
            {{ session('error') }}
        </div>
    @endif
    <tenant-sale-opportunities-form :type-user="{{json_encode(Auth::user()->type)}}" :id="{{json_encode($id)}}"></tenant-sale-opportunities-form>
@endsection
