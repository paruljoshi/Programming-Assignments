<html>
<body>
<table  border="1" style="width:100%">

	<tr> 
	<h3>
		<th>Id</th>&nbsp; &nbsp; &nbsp;
		<th>Story Title</th> &nbsp;&nbsp;&nbsp;
		<th>Story Description</th>&nbsp; &nbsp; &nbsp;
		<th>Location Id</th>&nbsp; &nbsp; &nbsp;
		<th>Tag Value</th>
	</h3>
	</tr>
	<tr>
    @foreach($stories as $story)
        <td>{{ $story -> id}}</td>
        <td>{{ $story -> title}}</td>
        <td>{{ $story -> story }} </td>
        <td>{{ $story -> location_id}}</td>
		@foreach($story -> tags as $tag)
			<td>{{$tag -> value}} </td>
		@endforeach
    </tr>
    @endforeach
    </table>
</body>
<html>
