@extends('layouts.app')

@section('content')


@include('form')
{{-- @endforeach --}}
@foreach($notes as $note)

@include('show')
@endforeach
@endsection
