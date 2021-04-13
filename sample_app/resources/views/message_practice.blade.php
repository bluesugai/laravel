{{-- レイアウトファイルを指定 --}}
@extends('layouts.default')


{{-- @yield('title') の部分を穴埋め --}}
@section('title', $title)

{{-- @yield('content') の部分を穴埋め --}}
@section('content')
    <h1>{{ $title }}</h1>
    {{-- ここはbladeのコメントです。出力時には無視されます。 --}}
    <!-- HTMLのコメントは普通に出力されます。 -->

    <p>{{ $message['name'] }}:{{ $message['body'] }}</p>     
@endsection
