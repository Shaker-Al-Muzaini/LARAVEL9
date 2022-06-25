@extends('layouts.main')
@section('bott')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <a href="{{URL('studend')}}">select all studends </a>
            </div>
        </div>
    <div class="row">
        <div class="col-12">
        <form action="{{URL('studend_store')}}"  method="post" enctype="multipart/form-data">
            <input type="hidden" name="_token" value="{{csrf_token()}}">
    <div class="input-group mb-3">
        <span class="input-group-text" id="inputGroup-sizing-default">Name</span>
        <input type="text" class="form-control" aria-label="Sizing example input" name="name">
    </div>
        <div class="input-group mb-3">
            <span class="input-group-text" id="inputGroup-sizing-default">Brith_Date</span>
            <input type="date" class="form-control" aria-label="Sizing example input" name="Brith_Date">
        </div>

    <div class="input-group input-group-lg">
        <span class="input-group-text" id="inputGroup-sizing-lg">Nationality</span>
        <select name="Nationality" class="form-control" id="Nationality" aria-label="Sizing example input">
            <option value="-1"></option>
{{--            <option value="pl">فلسطين</option>--}}
{{--            <option value="ag">مصر</option>--}}
{{--            <option value="ar">الأردن</option>--}}
            @foreach($key as $keys=>$value)
                <option value="{{$keys}}">{{$value}}</option>
            @endforeach
        </select>

        <br><br>
    </div>
            <br>
            <div class="form-group">

                <span class="input-group-text">Image</span>
                <input type="file" class="form-control" aria-label="Sizing example input" name="image">

            </div>
            <br>
            <button type="submit" class="btn btn-primary" id="save">Save</button>
        </form>

    </div>


@stop
