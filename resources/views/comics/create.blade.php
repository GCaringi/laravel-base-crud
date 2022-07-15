@extends('layouts.template_page')

@section('page-title')
    DC Comics    
@endsection

@section('main-content')

    <div class= "bg-[color:var(--clr-secondary)]">
        <div class= "w-[var(--container)] m-auto py-4">
            <form action="{{route('comics.store')}}" method="POST"
            class="flex flex-col gap-y-2 items-start text-white">
                @csrf
                <input class = "w-[25%] h-[35px] pl-2 rounded-md bg-transparent border-b-2 border-white" autocomplete="off" type="text" name="title" placeholder="Titolo">
                <input class = "w-[25%] h-[35px] pl-2 rounded-md bg-transparent border-b-2 border-white" autocomplete="off" type="text" name="description" placeholder="Descrizione">
                <input class = "w-[25%] h-[35px] pl-2 rounded-md bg-transparent border-b-2 border-white" autocomplete="off" type="text" name="thumb" placeholder="Copertina(URL)">
                <input class = "w-[25%] h-[35px] pl-2 rounded-md bg-transparent border-b-2 border-white" autocomplete="off" type="number" required name="price" min="0" step="any" placeholder="Prezzo">
                <input class = "w-[25%] h-[35px] pl-2 rounded-md bg-transparent border-b-2 border-white" autocomplete="off" type="text" name="series" placeholder="Serie">
                <input class = "w-[25%] h-[35px] pl-2 rounded-md bg-transparent border-b-2 border-white" autocomplete="off" type="date" name="sale_date" max="2022-12-31">
                <input class = "w-[25%] h-[35px] pl-2 rounded-md bg-transparent border-b-2 border-white" autocomplete="off" type="text" name="type" placeholder="Tipologia"> 
                <div class="flex gap-x-2 justify-start items-center py-4">
                    <button class="text-white uppercase font-semibold bg-[color:var(--clr-primary)] px-12 py-2 rounded-md" type="submit">
                        Insert
                    </button>
                    <a class="text-white uppercase font-semibold bg-[color:var(--clr-primary)] px-4 py-2 rounded-md" href="{{route('homepage')}}"><i class="fa-solid fa-x"></i></a>
                </div>
            </form>
        </div>
    </div>

    @include('partials.home_merchandise')
@endsection
