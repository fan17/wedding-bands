<style>
	table, td, th { border:1px solid black; }
	td { padding:15px; }
	tr.proffessional { background: red; }
</style>
Band's listing
Wyszukiwarka:
{{ Form::open(URL::current(), 'GET')}}
	BandName:{{ Form::text('name', $search['name']) }}<br>
	Cena od:{{ Form::text('price_from', $search['price_from']) }} do {{ Form::text('price_to', $search['price_to']) }}
	{{ Form::submit('Click Me!') }}
{{ Form::close() }}
<br>
<table>
	<tr>
		<th>BandName</th>
		<th>BandDescription</th>
		<th>BandPrice</th>
		<th>BandLogo</th>
		<th>BandPlayCount</th>
		<th>Type of music</th>
		<th>Link</th>
	</tr>
	@foreach ($Bands as $Band)
		<?php $type = $Band->tag(1); $class = ($type[0]->id == 1) ? 'proffessional' : '' ?>
	<tr class="{{ $class }}">
		<td>{{ $Band->name }}</td>
		<td>{{ $Band->description }}</td>
		<td>{{ $Band->price }}</td>
		<td>{{ $Band->logo }}</td>
		<td>{{ $Band->play_count }}</td>
		<td>
			@foreach($Band->tag(2) as $tag)
				{{ $tag->name }}<br>
			@endforeach
		</td>
		<td><a href="{{ URL::to_action('frontend.bands@details', array($Band->band_key)) }}">details</a></td>
	</tr>
	@endforeach
</table>