@extends('layouts.admin.master')

@section('content')

@push('css')
<link rel="stylesheet" type="text/css" href="{{asset('assets/css/tabela.css')}}">
@endpush
@section('content')


    @push('scripts')  
        <script src="{{asset('assets/js/tooltip-init.js')}}"></script>  
    @endpush

@endsection