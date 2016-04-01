<html>
	<body>
		<form action="/story/store" method="post">
			Story Description: 
			<input type="text" name="story" value="" maxlength="100">
			<Select name = "location_id">
			@foreach($locations as $location)
        			<option value=" {{ $location -> id}} ">
        				{{ $location -> value}} 
        			</option>
        	@endforeach
			</Select>	
		<input type="submit" value="Create" >
		</form>
</body>
</html>