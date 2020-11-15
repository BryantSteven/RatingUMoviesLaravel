<x-guest-layout>
    <!-- Apartado Movie Detail -->
    <div class="container">
        <div class="row">
            <div class="col">
                <a href="{{ route('movies.show', $show->id) }}">
                    <h2>{{ $show->name }}</h2>
                </a>
                <img src="{{ $show->image->original }}" alt="{{ $show->name }}">
                <p>rating: {{ $show->rating->average }}</p>
                <p>{!! $show->summary !!}</p>
            </div>
        </div>

        <Form method="POST" action="{{ route('reviews.store') }}">
             @csrf
            <input type="text" placeholder="Que te pareció?..." name="content" autocomplete="off" >
            <input type="hidden" value="{{$show->id}}" name="movie_id">
            <input type="Submit" value="Carga mi reseña!">

        </Form>

        <!-- Empieza apartado de reseñas -->
        <div class="row">
            <div class="col">
                <h3>Reseñas</h3>
                @foreach($reviews as $review)
                <p>{{ $review->content }}</p>
                <!-- Aqui trae el nombre de quien hizo el review  -->
                {{ $review->user->name }}
                @endforeach
            </div>
        </div>
    </div>
</x-guest-layout>