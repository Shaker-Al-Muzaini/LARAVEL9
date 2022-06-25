@extends('layouts.main')
@section('bott')

    <table class="table table-dark table-striped">
        <thead>
        <th scope="col">ID</th>
        <th scope="col">NAME</th>
        <th scope="col">Brith_Date</th>
        <th scope="col">Nationality</th>
        <th  scope="col">Image</th>
        <th scope="col">Edit</th>
        <th scope="col">DELETE</th>
        <th scope="col">Create_At</th>
        <th scope="col">Update_At</th>
        <th scope="col">Deleted_at</th>
        </thead>
        <tbody>
        @foreach($studend as $studends )
            <tr>
        <td >{{$studends->id}}</td>
        <td >{{$studends->name}}</td>
        <td>{{$studends->Brith_Date}}</td>
        <td>{{$studends->Nationality}}</td>
        <td><img src="{{$studends->image}}" alt="null" height="80" width="100"></td>
        <td><a href="{{URL('studend_edit::46779::5'.$studends->id.'18::6798')}}">Edit</a></td>
        <td>
            <form method="post" action="{{URL('studend_delete'.$studends->id)}}">
                <input type="hidden" name="_token" value="{{csrf_token()}}">
                <button type="submit" class="btn btn-danger">DELETE</button>

            </form>
        </td>
                <td>{{$studends->created_at}}</td>
                <td>{{$studends->updated_at}}</td>
                <td>{{$studends->deleted_at}}</td>

            </tr>
        @endforeach
        </tbody>
    </table>
    <br>
    <div class="row">
        <div class="col-12">
            <a href="{{URL('studend_create')}}">inert studend </a>
        </div>
{{--        {{$studend->links()}}--}}
    <br>
@stop
