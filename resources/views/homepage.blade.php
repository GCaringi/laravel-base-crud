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
               
            </div>
            <div class="text-center ">
                <button class="text-white uppercase font-semibold bg-[color:var(--clr-primary)] px-12 py-2">load more</button>
            </div>
        </div>
    </div>

    @include('partials.home_merchandise')
@endsection
