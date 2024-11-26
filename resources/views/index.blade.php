<x-layout>
    <div class="row">
        @foreach ($paintings as $paint  )
            <div class="col-md-3 mb-3">
                <div class="card">
                    <img src="{{$paint['Image']}}" class="card-img-top" alt="{{$paint['Painting']}}">
                    <div class="card-body">
                    <h5 class="card-title">{{$paint['Painting']}}</h5>
                    <h6 class="card-subtitle">Artist: {{$paint['Artist']}}</h6>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">Year of Painting: {{$paint['Year of Painting']}}</li>
                        <li class="list-group-item">Price: {{$paint['Adjusted Price']}}</li>
                    </ul>
                    <a href="/paintings/{{$paint['Painting']}}" class="btn btn-primary">Details</a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</x-layout>