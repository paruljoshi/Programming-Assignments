@extends('layouts.page')

@section('content')
<table  border="1" style="width:100%">
	<tr> 
	<h3>
		<th>Id</th>&nbsp; &nbsp; &nbsp;
		<th>Location Name</th> &nbsp;&nbsp;&nbsp;
		<th>Story Title</th>&nbsp; &nbsp; &nbsp;
		<th>Story Description</th>&nbsp; &nbsp; &nbsp;
	</h3>
	</tr>
	@foreach($locations as $location)
	<tr>
	<td>{{ $location -> id}}</td>&nbsp; &nbsp; &nbsp;
	<td>{{ $location -> value}}</td>&nbsp; &nbsp; &nbsp;
		@foreach($location -> stories as $story)
			<td>{{$story -> title}} </td>&nbsp; &nbsp; &nbsp;
			<td>{{$story -> story}} </td>
		@endforeach
	</tr>
	@endforeach
	</table>
@endsection