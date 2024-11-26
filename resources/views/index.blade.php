<x-layout>
    @foreach ($paintings as $paint  )
        <div class="card" style="width: 18rem;">
            <img src="{{$paint['Image']}}" class="card-img-top" alt="{{$paint['Painting']}}">
            <div class="card-body">
            <h5 class="card-title">{{$paint['Painting']}}</h5>
            <h6 class="card-subtitle">Artist: {{$paint['Artist']}}</h6>
            <p class="card-text">{{$paint['Description']}}</p>
            <a href="/paintings/{{$paint['Painting']}}" class="btn btn-primary">Details</a>
            </div>
        </div>
    @endforeach

</x-layout>