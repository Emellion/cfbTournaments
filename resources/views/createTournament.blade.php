<x-app-layout>
    <div class="py-12">
        <div class="max-w-8xl mx-auto sm:px-6 lg:px-8">
            <div class="overflow-hidden shadow-lg sm:rounded-lg" style="background-color: #272B34;">

                <div class="p-6 sm:px-20 text-white h-screen" style="background-color: #272B34">
                    <div class="flex w-full flex-col">
                        <img src="/logo2-white-letters.png" alt="" width="300rem" class="mx-auto">
                        <h1 class="font-thin text-xl text-white whitespace-nowrap my-auto mx-auto mt-3">CREATE YOUR OWN
                            TOURNAMENT.</h1>
                    </div>
                    <div class="mt-8 mx-auto" style="border-bottom:solid white 1px; width:90%;"></div>
                    <form action="/tournaments/create" method="post" class="flex justify-center mt-8 flex-col w-9/12 mx-auto">
                        <div class="flex justify-center flex-col">
                          <h1 class="mb-4 font-semibold">YOUR TEAM:</h1>
                            <div class="form-check form-switch mb-1">
                              <input class="form-check-input appearance-none rounded-full h-4 w-4 border border-gray-300 bg-white checked:bg-blue-600 checked:border-blue-600 focus:outline-none transition duration-200 mt-1 align-top bg-no-repeat bg-center bg-contain float-left mr-2 cursor-pointer" type="radio" name="flexRadioDefault" id="full" checked>
                                <label class="form-check-label inline-block text-gray-100 font-light ml-4" for="full">Play with Team (Will be filled if needed)</label>
                            </div>
                        </div>
                        <div class="flex justify-center flex-col">
                            <div class="form-check form-switch">
                              <input class="form-check-input appearance-none rounded-full h-4 w-4 border border-gray-300 bg-white checked:bg-blue-600 checked:border-blue-600 focus:outline-none transition duration-200 mt-1 align-top bg-no-repeat bg-center bg-contain float-left mr-2 cursor-pointer" type="radio" name="flexRadioDefault" id="fill">
                                <label class="form-check-label inline-block text-gray-100 font-light ml-4" for="fill">Random Teammates</label>
                            </div>
                        </div>
                        <h1 class="mb-4 mt-6 font-semibold">RANK RESTRICTIONS:</h1>
                        <div>                           
                          <label for="rank-from" class="flex mb-4 text-md font-light text-white dark:text-white mb-3"><span class="my-auto">From:</span><img src="" id="from_pic" onerror="this.style.display='none'" alt="Unranked" width="30rem" class="ml-4"><h1 class="ml-4 my-auto" id="unranked" style="display:hidden; height:1.875rem;"><span class="my-auto">Unranked</span></h1></label>
                          <input id="rank-from" onmousemove="refreshPicFrom()" name="rank-from" type="range" min="0" max="1000" value="0" class="w-full bg-gradient-to-r from-green-500 to-red-500  h-2 bg-gray-200 rounded-lg appearance-none cursor-pointer mb-8 dark:bg-gray-700">
                        </div>
                        <div>
                            <label for="rank-to" class="flex mb-4 text-md font-light text-white dark:text-white mb-3"><span class="my-auto">To:</span><img src="" id="to_pic" onerror="this.style.display='none'" alt="Unranked" width="30rem" class="ml-4"><h1 class="ml-4" id="unranked1" style="display:none;">Unranked</h1></label>
                          <input id="rank-to" onmousemove="refreshPicTo()" name="rank-to" type="range" min="0" max="1000" value="0" class="w-full bg-gradient-to-r from-green-500 to-red-500  h-2 bg-gray-200 rounded-lg appearance-none cursor-pointer dark:bg-gray-700">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
