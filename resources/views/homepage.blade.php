@extends('layouts.template_page')

@section('page-title')
    DC Comics    
@endsection

@section('main-content')

    <div class= "bg-[color:var(--clr-secondary)]">
        <div class= "w-[var(--container)] m-auto py-4">
            <div class= "w-fit uppercase bg-[color:var(--clr-primary)] text-white font-bold text-center py-2 px-8 relative -top-8">
                Current series
            </div>
            <div class="grid grid-cols-6 gap-8 py-16">
                @foreach ($comics as $comic)
                <div class= "text-center uppercase">
                    <a href="{{ route('comics.show', $comic->id) }}">
                        <div class = "a-cardImage relative text-white">
                            <img src="{{$comic['thumb']}}" alt="Comic Image">
                            <a href="{{route('comics.edit', $comic->id)}}" class = "a-cardIcon absolute top-0 left-0 p-3 m-1 bg-orange-500 rounded-lg"><i class="fa-solid fa-pencil"></i></a>
                            <form action="{{route('comics.destroy', $comic->id)}}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button class = "a-cardIcon absolute bottom-0 right-0 p-3 m-1 bg-red-700 rounded-lg"><i class="fa-solid fa-trash"></i></button>
                            </form>
                        </div>
                        <h4 class="text-white font-bold pt-2">{{$comic['series']}}</h4> 
                    </a>
                </div>
                @endforeach
            </div>
            <div class="text-center pb-4">
                <a href="{{route('comics.create')}}" class="text-white uppercase font-semibold bg-[color:var(--clr-primary)] px-12 py-3">Add Comic</a>
            </div>
        </div>
    </div>

    @include('partials.home_merchandise')
@endsection
