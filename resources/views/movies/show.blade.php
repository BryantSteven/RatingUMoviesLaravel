<x-guest-layout>
    <div class="container">
        <div class="row"> 
            <div class="col">
                <a href="{{ route('movies.show', $show->id) }}"><h2>{{ $show->name }}</h2></a>
                <img src="{{ $show->image->original }}" alt="{{ $show->name }}">
                <p>rating: {{ $show->rating->average }}</p>
                <p>{!! $show->summary !!}</p>
            </div>
        </div>
    </div>
</x-guest-layout>