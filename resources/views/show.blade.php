<x-layout>
    <h1>Artist: {{$paint['Artist']}}</h1>
    <div class="d-flex justify-content-space-between">
        <img src="{{$paint['Image']}}" alt="{{$paint['Painting']}}">
        <div class="ms-3">
            @foreach ($paint as $key => $value )
                @if($key != 'Image' && $key != 'Painting' && $key != 'Artist')
                    <p><b>{{$key}}</b>: {{$value}}</p>  
                @endif
            @endforeach
        </div>
    </div>
</x-layout>