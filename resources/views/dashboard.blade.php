<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    {{ __("Bienvenue dans MATbook!") }}
                </div>
            </div>

            <!-- component -->

            <div class="flex justify-center items-center max-w-sm mx-auto space-x-8 my-8">
                <div class="flex flex-col justify-center items-center max-w-sm">
                  <div style="background-image: url(/img/young-sexy-romantic-couple-love-happy-summer-beach-together-having-fun-wearing-swim-suits-showing-heart-sign-sundet.jpg)"
                       class="bg-gray-300 h-64 w-full rounded-lg shadow-md bg-cover bg-center"></div>
                  <div class="w-56 md:w-64 bg-white -mt-10 shadow-lg rounded-lg overflow-hidden">
                    <div class="py-2 text-center font-bold uppercase tracking-wide text-gray-800">Romance</div>
                    <div class="flex items-center justify-between py-2 px-3 bg-gray-400">
                      <h1 class="text-gray-800 font-bold "></h1>
                      <a href="{{ route('livres.romance') }}">
                        <button class="bg-gray-800 text-xs text-white px-2 py-1 font-semibold rounded uppercase hover:bg-gray-700">Voir</button>
                      </a>
                    </div>
                  </div>
                </div>

                <div class="flex flex-col justify-center items-center max-w-sm">
                  <div style="background-image: url(/img/old-newspaper-roll-with-landscape-scene-generative-ai.jpg)"
                       class="bg-gray-300 h-64 w-full rounded-lg shadow-md bg-cover bg-center"></div>
                  <div class="w-56 md:w-64 bg-white -mt-10 shadow-lg rounded-lg overflow-hidden">
                    <div class="py-2 text-center font-bold uppercase tracking-wide text-gray-800">Fantaisie</div>
                    <div class="flex items-center justify-between py-2 px-3 bg-gray-400">
                      <h1 class="text-gray-800 font-bold "></h1>
                      <a href="{{ route('livres.fantaisie') }}">
                        <button class="bg-gray-800 text-xs text-white px-2 py-1 font-semibold rounded uppercase hover:bg-gray-700">Voir</button>
                      </a>
                    </div>
                  </div>
                </div>

                <div class="flex flex-col justify-center items-center max-w-sm">
                  <div style="background-image: url(/img/space-travel-collage-design.jpg)"
                       class="bg-gray-300 h-64 w-full rounded-lg shadow-md bg-cover bg-center"></div>
                  <div class="w-56 md:w-64 bg-white -mt-10 shadow-lg rounded-lg overflow-hidden">
                    <div class="py-2 text-center font-bold uppercase tracking-wide text-gray-800">Science Fiction</div>
                    <div class="flex items-center justify-between py-2 px-3 bg-gray-400">
                      <h1 class="text-gray-800 font-bold "></h1>
                      <a href="{{ route('livres.science') }}">
                        <button class="bg-gray-800 text-xs text-white px-2 py-1 font-semibold rounded uppercase hover:bg-gray-700">Voir</button>
                       </a>
                    </div>
                  </div>
                </div>
              </div>


        </div>
    </div>
</x-app-layout>
