<x-layout>
    <x-slot name='title'>{{$paint['Painting']}}</x-slot>
    <h1>Artist: {{$paint['Artist']}}</h1>
    <div >
        <img class="float-start me-2" src="{{$paint['Image']}}" alt="{{$paint['Painting']}}">
        <div class="ms-3">
            @foreach ($paint as $key => $value )
                @if($key != 'Image' && $key != 'Painting' && $key != 'Artist')
                    <p><b>{{$key}}</b>: {{$value}}</p>  
                @endif
            @endforeach
        </div>
    </div>
</x-layout>