<style>
    div {text-align: center;}
</style>
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
        <th scope="col">Price</th>
        <th scope="col">Tex%</th>
        <th scope="col">Discount%</th>
        <th scope="col">Final_Price$</th>
        </thead>
        <tbody>
        @foreach($studend as $studends )
            <tr>
        <td >{{$studends->id}}</td>
        <td >{{$studends->name}}</td>
        <td>{{$studends->Brith_Date}}</td>
        <td>{{$studends->Nationality}}</td>
        <td><img src="{{$studends->image}}" alt="null" height="80" width="100"></td>
        <td><a href="{{URL('studend_edit::46779::5'.$studends->id.'18::6798')}}" class="btn btn-success">Edit</a></td>
        <td>
            <form method="post" action="{{URL('studend_delete'.$studends->id)}}">
               @csrf
                <button type="submit" class="btn btn-danger">DELETE</button>

            </form>
        </td>
                <td>{{$studends->created_at}}</td>
                <td>{{$studends->updated_at}}</td>
                <td>{{$studends->deleted_at}}</td>
                <td>{{$studends->price}}$</td>
                <td>{{$studends->discount}}%</td>
                <td>{{$studends->tax}}%</td>
                <td>{{$studends->final_price}}$</td>

            </tr>
        @endforeach
        </tbody>
    </table>
   <div class="row">
       <div class="d-flex justify-content-center">
       <p> {{ $studend->links('studends.pa') }}</p>
   </div>
    </div>

    <br>
    <div>
        <a href="{{URL('studend_create')}}">inert studend </a>
    <br>



@stop
