@extends('layouts.template_page')

@section('page-title')
    {{$comic['title']}}
@endsection

@section('main-content')
    <div class="relative">
        <div class = "bg-[color:var(--clr-primary)] h-[var(--comic-bar)]">
        </div>
        <div class = "w-[var(--container-small)] m-auto">
            <div class="absolute top-0 -translate-y-[85%] border border-[color:var(--clr-base-light)]">
                <img src="{{$comic['thumb']}}" alt="">
                <div class="bg-[#00A9D9] text-center text-white uppercase py-1">View Gallery</div>
            </div>
            <div class="flex gap-x-4 py-12">
                <div class="w-[70%]">
                    <h2 class="uppercase text-2xl pt-6 pb-4">{{$comic['title']}}</h2>
                    <div class="h-[50px] bg-[#55BA59] flex justify-between items-center px-4 border-b border-black">
                        <div class="w-[70%] h-full flex justify-between items-center border-r border-black">
                            <h5 class="inline-block text-[#BAFC9A]">U.S. Price:<span class="text-white">{{$comic['price']}}</span></h5>
                            <h5 class = "text-[#BAFC9A] text-white uppercase pr-8">Available</h5>
                        </div>
                        <div class="w-[30%]">
                            <h6 class="text-center text-white">Check Availability <i class="fa-solid fa-caret-down"></i></h6>
                        </div>
                    </div>
                    <div class="pt-4 text-gray-500">
                        {{$comic['description']}}
                    </div>
                </div>
                <div class="flex flex-col items-end w-[30%]">
                    <div>
                        <h5 class="uppercase text-right">Advertisement</h5>
                        <img src="{{asset('img/adv.jpg')}}" alt="">
                    </div>
                </div>
            </div>
        </div>
        <div class = "bg-[#F6F6F6] pt-12 pb-24" >
            <div class="w-[var(--container-small)] m-auto flex justify-between gap-x-8">
                <div class="w-1/2">
                    <h2 class="w-full text-xl text-left py-4">Talent</h2>
                    <hr>
                    <div class="flex justify-between py-2 pr-4">
                        <div class="w-[50%]">Art by:</div>
                        <div class="w-full text-xs">
                            @foreach ($comic['artists'] as $artist)
                                <a class = "text-[color:var(--clr-primary)]"href="#">
                                    {{$artist}}
                                </a>
                            @endforeach
                        </div>
                    </div>
                    <hr>
                    <div class="flex justify-between py-2 pr-4">
                        <div class="w-[50%]">Written by:</div>
                        <div class="w-full text-xs">
                            @foreach ($comic['writers'] as $writer)
                                <a class = "text-[color:var(--clr-primary)]"href="#">
                                    {{$writer}}
                                </a>
                            @endforeach
                        </div>
                        <br>
                    </div>
                </div>
                <div class="w-1/2">
                    <h2 class="w-full text-xl text-left py-4">Specs</h2>
                    <hr>
                    <div class="flex py-2 pr-4">
                        <div class="w-[50%]">Series:</div>
                        <div class="w-full text-xs">
                            <a class = "uppercase text-[color:var(--clr-primary)]" href="#">
                                {{$comic['series']}}
                            </a>
                        </div>
                    </div>
                    <hr>
                    <div class="flex py-2 pr-4">
                        <div class="w-[50%]">U.S. Price:</div>
                        <div class="w-full text-xs">
                            {{$comic['price']}}
                        </div>
                    </div>
                    <hr>
                    <div class="flex py-2 pr-4">
                        <div class="w-[50%]">On Sale Date:</div>
                        <div class="w-full text-xs">
                            {{date( "M d Y", strtotime($comic['sale_date']))}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @include('partials.home_merchandise')
@endsection