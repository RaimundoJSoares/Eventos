@extends('layouts.main')

@section('title', 'HDC events')

@section('content')

<h1>Hello World, Hello Universe!</h1>
       
       @if($nome== "Rai")
           <p>o nome é {{ $nome }} e ele tem {{ $idade }} anos </p>
       @elseif($nome == 'João')
           <p>o nome não é Rai</p>
       @endif

@endsection