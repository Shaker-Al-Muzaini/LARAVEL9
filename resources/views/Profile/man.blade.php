@extends('layouts.main')
@section('bott')
<h1>is page man</h1>
{{--<h1 style="background-color: #1a202c; color: #cbd5e0">Name is {{$name}}</h1>--}}
{{--<h1>Family {{$family}}</h1>--}}
{{--@foreach($coress as $cors)--}}
{{--    <h2>{{$cors}}</h2>--}}
{{--@endforeach--}}
{{--@if($name==='Shaker')--}}
{{--    <h3>is FromWord laravel</h3>--}}
{{--@elseif($cors=== 'dart')--}}
{{--    <h3> is FromWord Flutter</h3>--}}
{{--@endif--}}
<h1>
   is  name s {{$sname}}
    is  name s {{$fa}}
</h1>
@foreach($ar as $arss)
    <h2>{{$arss}}</h2>
@endforeach

<div>
<button class="btn btn-primary">click</button>

@stop

