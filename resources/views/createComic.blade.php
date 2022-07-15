@extends('layouts.template_page')

@section('page-title')
    DC Comics    
@endsection

@section('main-content')

    <div class= "bg-[color:var(--clr-secondary)]">
        <div class= "w-[var(--container)] m-auto py-4">
            <form action="{{route('comics.store')}}" method="POST"
            class="flex flex-col gap-y-2 items-start">
                @csrf
                <input class = "w-[25%] h-[35px] pl-2" type="text" name="title" placeholder="Titolo"
                       class="" >
                <input class = "w-[25%] h-[35px] pl-2 " type="text" name="description" placeholder="Descrizione">
                <input class = "w-[25%] h-[35px] pl-2" type="text" name="thumb" placeholder="Copertina(URL)">
                <input class = "w-[25%] h-[35px] pl-2" type="number" required name="price" min="0" placeholder="Prezzo">
                <input class = "w-[25%] h-[35px] pl-2" type="text" name="series" placeholder="Serie">
                <input class = "w-[25%] h-[35px] pl-2" type="date" name="sale_date" max="2022-12-31">
                <input class = "w-[25%] h-[35px] pl-2" type="text" name="type" placeholder="Tipologia"> 
                <div class="flex gap-x-2 items-center">
                    <button class="text-white uppercase font-semibold bg-[color:var(--clr-primary)] px-12 py-2" type="submit">
                        Insert
                    </button>
                    <a class="text-white uppercase font-semibold bg-[color:var(--clr-primary)] px-12 py-2" href="{{route('homepage')}}"><i class="fa-solid fa-x"></i></a>
                </div>
            </form>
        </div>
    </div>

    @include('partials.home_merchandise')
@endsection
