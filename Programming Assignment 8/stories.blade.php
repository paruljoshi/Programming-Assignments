@extends('layouts.page')

@section('content')
<table  border="1" style="width:100%">
	<tr> 
	<h3>
		<th>Id</th>
		<th>Story Title</th> 
		<th>Story Description</th>
		<th>Location Id</th>
		<th>Location Value</th>
		<th>Tag Value</th>
	</h3>
	</tr>
	<tr>
    @foreach($stories as $story)
        <td>{{ $story -> id}}</td>
        <td>{{ $story -> title}}</td>
        <td>{{ $story -> story }} </td>
        <td>{{ $story -> location_id }} </td>
        <td>{{ $story -> locations ->value}}</td>
		@foreach($story -> tags as $tag)
			<td>{{$tag -> value}} </td>
		@endforeach
    </tr>
    @endforeach
    </table>
@endsection