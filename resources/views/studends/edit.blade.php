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
                <form action="{{URL('studend_upDate'.$studend->id)}}"  method="post">
                    <input type="hidden" name="_token" value="{{csrf_token()}}">
                    <div class="input-group mb-3">
                        <span class="input-group-text" id="inputGroup-sizing-default">Name</span>
                        <input type="text" class="form-control" aria-label="Sizing example input"
                               name="name" value="{{$studend->name}}">
                    </div>
                    <div class="input-group mb-3">
                        <span class="input-group-text" id="inputGroup-sizing-default">Brith_Date</span>
                        <input type="text" class="form-control" aria-label="Sizing example input"
                               name="Brith_Date" value="{{$studend->Brith_Date}}">
                    </div>

                    <div class="input-group input-group-lg">
                        <span class="input-group-text" id="inputGroup-sizing-lg">Nationality</span>
                        <select name="Nationality" class="form-control" id="Nationality" aria-label="Sizing example input">
                            <option value="-1"></option>
                            @foreach($key as $keys=>$value)
                                <option value="{{$keys}}" @if($keys ===$studend->Nationality) selected @endif;
                                    >{{$value}}</option>
                            @endforeach
                        </select>

                        <br>
                    </div>
                    <br>
                    <button type="submit" class="btn btn-primary" id="save">Save</button>
                </form>

            </div>


@stop