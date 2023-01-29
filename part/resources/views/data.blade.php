

@extends('layout.app')
@section("content")


<table>
    @foreach($userKey as $item)
    <tr>
        <td> {{$item->name}} </td>
        <td> {{$item->email}}</td>
        <td>{{$item->roll}} </td>
        <td>{{$item->class}} </td>
    </tr>
    @endforeach
</table>




@endsection
