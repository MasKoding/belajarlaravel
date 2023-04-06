{{-- sama aja dengan include --}}
@extends('/blog/master')

@section('content')
     <div class="container">
        <div class="row mt-4">
                @foreach ($data as $item)
                    <div class="col-md-6">
                        <div class="card">
                           
                            <iframe class="card-img-top" height="500px" src="{{ $item['video']}}" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                           
                            <div class="card-body">
                                <h5 class="card-title">{{ $item['title']}}</h5>
                                <p class="card-text">{{ $item['description']}}</p>
                                <span class="badge rounded-pill text-bg-dark">{{ $item['created_date']}}</span>
                               
                            </div>
                        </div>
                    </div>
                @endforeach

            
        </div>
    </div>
@endsection
