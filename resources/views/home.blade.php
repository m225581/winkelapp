@extends('layout.app')

@section('content')
<h1>home</h1>
<p>Lorem    </p>
@endsection

@section('sidebar')
@parent
<p>this is appended to the sidebar</p>
@endsection