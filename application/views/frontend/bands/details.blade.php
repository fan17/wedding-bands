BandName:{{ $Band->name }}<br>
BandDescription:{{ $Band->description }}<br>
BandPrice:{{ $Band->price }}<br>
BandLogo:{{ $Band->logo }}<br>
BandPlayCount:{{ $Band->play_count }}<br>
Type of music:	
@foreach($Band->tag(2) as $tag)
	{{ $tag->name }}, 
@endforeach
<br>
Musicians:
@foreach($Band->musician() as $Musician)
 {{ $Musician->name }} - {{ $Musician->pseudo }}<br>
@endforeach
Gallery:
@foreach ($Band->image() as $Image)
	<img src="{{ $Image->src(100, 100) }}" alt="{{ $Image->title }}" width="100" height="100"><br>
@endforeach
<br>
<!-- TODO: comments -->
{{-- var_dump($Band->similar) --}}
