<html>
        <body>
        <h3>
			<tr> 
				<td>Id</td>&nbsp; &nbsp; &nbsp;
				<td>Tag Value</td> &nbsp;&nbsp;&nbsp;
				<td>Story Title</td> &nbsp;&nbsp;&nbsp;
			</tr>
		</h3>
        @foreach($tags as $tag)
        <tr>
        <td>{{ $tag -> id}}</td>&nbsp;&nbsp;&nbsp;
        <td>{{ $tag -> value}}</td>&nbsp;&nbsp;&nbsp;
        @foreach($tag -> stories as $story)
			<td>{{$story -> title}} </td>&nbsp; &nbsp; &nbsp;
		@endforeach
		</br>
        @endforeach
</body>
<html>
