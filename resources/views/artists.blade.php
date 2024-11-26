<x-layout>
    <h1>Artists</h1>
    @foreach ($artists as $artist )
        <a class="btn btn-primary m-2" href="/artists/{{$artist}}/paintings">{{$artist}}</a>
    @endforeach
</x-layout>