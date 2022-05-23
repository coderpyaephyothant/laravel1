@extends('layout')
@section('content')
    <h3>home</h3>
    @foreach ($data as $key => $value)
    {{$key.' = '.$value  }}
@endforeach
@endsection