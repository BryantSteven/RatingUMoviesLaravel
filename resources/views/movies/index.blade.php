<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>
    <div class="container">
        <div class="row">
            @foreach($shows as $show)
            <div class="col-4">
                <a href="{{ route('movies.show', $show->show->id) }}">
                    <h2>{{ $show->show->name }}</h2>
                </a>
                @if(!is_null($show->show->image))
                <img src="{{ $show->show->image->original }}" alt="{{ $show->show->name }}" class="img-fluid img-thumbnail">
                @else
                <img src="https://www.publicdomainpictures.net/pictures/280000/velka/not-found-image-15383864787lu.jpg"class="img-fluid img-thumbnail" >
                @endif
                @if(strlen($show->show->summary) > 0)
                <p>{!! $show->show->summary !!}</p>
                @else
                <p>Este show no tiene descripción.</p>
                @endif
            </div>
            @endforeach
        </div>
    </div>
 </x-app-layout>