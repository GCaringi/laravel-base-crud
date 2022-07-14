<header class = "w-full">
    <div class = "o-footerTop bg-[color:var(--clr-primary)] text-white font-bold">
        <div class = "w-[var(--container)] m-auto flex justify-end py-1 text-sm uppercase gap-x-16">
            <a class= "uppercase" href="#">Dc Power<i class="fa-solid fa-trademark text-xs align-top"></i> VISA<i class="fa-regular fa-registered text-xs align-top"></i></a>
            <button class = "uppercase">Additional dc sites <i class="fa-solid fa-caret-down"></i></button>
        </div>
    </div>
    <div class="o-footerMiddle font-semibold">
        <div class="w-[var(--container)] m-auto flex justify-between items-center py-2">
            <img src="{{asset('img/dc-logo.png')}}" alt="">
            <nav>
                <ul class="flex gap-x-3 uppercase">
                    <li>
                        <a href="#">characters</a>
                    </li>
                    <li>
                        <a href="#">comics</a>
                    </li>
                    <li>
                        <a href="#">movies</a>
                    </li>
                    <li>
                        <a href="#">tv</a>
                    </li>
                    <li>
                        <a href="#">games</a>
                    </li>
                    <li>
                        <a href="#">collectibles</a>
                    </li>
                    <li>
                        <a href="#">videos</a>
                    </li>
                    <li>
                        <a href="#">fans</a>
                    </li>
                    <li>
                        <a href="#">news</a>
                    </li>
                    <li>
                        <a href="{{route('homepage')}}">shop <i class="fa-solid fa-caret-down"></i></a>
                    </li>
                </ul>
            </nav>
            <div class= "border-b-2 border-[color:var(--clr-primary)]">
                <input  class = "placeholder:text-black placeholder:text-right pr-1" type="text" placeholder="Search">
                <button>
                    <i class="fa-solid fa-magnifying-glass"></i>
                </button>
            </div>
        </div>
    </div>
</header>