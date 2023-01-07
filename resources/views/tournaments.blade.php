<x-app-layout>
    <div>
        <div class="flex justify-end align-center text-center flex-wrap">
            <div class="flex justify-end align-center text-center flex-wrap mx-auto">
                <div class="flex align-center justify-center flex-col h-fit my-auto">
                    <h1 class="font-semibold text-3xl text-white my-auto whitespace-nowrap mb-3 title-hide">TOURNAMENTS. &#160;</h1>
                    <form method="get" action="/tournaments/create" class="flex w-fit">
                        <button class="border-2 py-2 px-4 text-white font-semibold hover:bg-white hover:text-black hover:font-semibold transition-all btn my-4">CREATE TOURNAMENT</button>
                    </form>
                </div>
                <div class="flex align-center justify-center flex-col h-fit my-auto title-hide">
                <h1 class="font-light text-xl text-white my-auto whitespace-nowrap title-hide mb-3">COMPETE AGAINST OTHER TEAMS.</h1>
                <div class="flex w-fit h-fit">
                    <button class="border-2 py-2 px-4 text-white font-md hover:bg-white hover:text-black hover:font-semibold invisible my-4">CREATE</button>
                </div>
            </div>
            </div>
            <img src="neon.png" class="">
        </div>
        <div class="max-w-9xl mx-auto sm:px-6 lg:px-8">
            <form action="/tournaments" method="get">
                <div class="flex overflow-hidden shadow-lg sm:rounded-lg mb-4 tournament-click ">
                    <button class="flex justify-start align-center" style=" width:50%; background-color: #0f0f0f;">
                        <div class="flex font-light text-white text-center px-10 ml-6 text-lg my-auto">VALORANT Tournament Dia-Asc</div>
                    </button>
                    <button class="flex py-3 sm:px-20 flex-row sm:flex-col justify-evenly"
                        style="background-color: #0f0f0f; width:50%">
                        <div class="flex font-medium text-white px-4 text-lg">
                            <div class="flex rounded-full px-5 py-3"><img src="Diamond-3.png" width="50rem" alt=""></div>
                        </div>
                        <div class="flex font-light text-white px-4 text-lg my-auto title-hide">
                            <p>Diamond - Ascendant</p>
                        </div>
                        <div class="flex font-light text-white px-4 text-lg my-auto title-hide">
                            <p>Teams: CFB vs. Custom</p>
                        </div>
                        <div class="flex font-light text-white px-4 text-lg my-auto">
                            <p>Players: 8/10</p>
                        </div>
                    </button>
                </div>
            </form>

            <form action="/tournaments" method="get">
                <div class="flex overflow-hidden shadow-lg sm:rounded-md mb-4 tournament-click ">
                    <button class="flex justify-start align-center" style=" width:50%; background-color: #0f0f0f;">
                        <div class="flex font-light text-white text-center px-10 ml-6 text-lg my-auto">VALORANT Tournament Dia-Asc</div>
                    </button>
                    <button class="flex py-3 sm:px-20 flex-row sm:flex-col justify-evenly"
                        style="background-color: #0f0f0f; width:50%">
                        <div class="flex font-medium text-white px-4 text-lg">
                            <div class="flex rounded-full px-5 py-3"><img src="Diamond-3.png" width="50rem" alt=""></div>
                        </div>
                        <div class="flex font-light text-white px-4 text-lg my-auto title-hide">
                            <p>Diamond - Ascendant</p>
                        </div>
                        <div class="flex font-light text-white px-4 text-lg my-auto title-hide">
                            <p>Teams: CFB vs. Custom</p>
                        </div>
                        <div class="flex font-light text-white px-4 text-lg my-auto">
                            <p>Players: 8/10</p>
                        </div>
                    </button>
                </div>
            </form>
        </div>
    </div>
</x-app-layout>
