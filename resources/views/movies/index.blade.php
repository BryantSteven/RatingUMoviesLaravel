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
                <a href="{{ route('movies.show', $show->id) }}">
                    <h2>{{ $show->name }}</h2>
                </a>
                <img src="{{ $show->image->original }}" alt="{{ $show->name }}" width="209" height="279">
                <p>{!! $show->summary !!}</p>
            </div>
            @endforeach
        </div>
    </div>
 </x-app-layout>