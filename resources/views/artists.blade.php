<x-layout>
    <x-slot name='title'>Artists</x-slot>
    @foreach ($artists as $artist )
        <a class="btn btn-primary m-2" href="/artists/{{$artist}}/paintings">{{$artist}}</a>
    @endforeach
</x-layout>