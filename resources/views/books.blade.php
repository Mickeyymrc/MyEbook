{{--  <div class="flex flex-wrap justify-center space-x-4 space-y-4">
    @foreach ($livres as $livre)

    <!-- component -->
    <!-- This is an example component -->
    <div class="max-w-2xl mx-auto ">

        <div class="bg-white shadow-md border border-gray-200 rounded-lg w-64 dark:bg-gray-800 dark:border-gray-700 m-2">

            <img src="{{ asset('storage/'.$livre->image) }}" alt="" class="rounded-t-lg">

            <div class="p-5">
                    <h5 class="text-gray-900 font-bold text-xl tracking-tight mb-2 dark:text-white">{{ $livre->titre }}</h5>

                <p class="font-normal text-gray-700 mb-3 dark:text-gray-400">Auteur: {{$livre->auteur}}</p>
                <p class="font-normal text-gray-700 mb-3 dark:text-gray-400">ISBN: {{$livre->isbn}}</p>
                <p class="font-normal text-gray-700 mb-3 dark:text-gray-400">Genre: {{$livre->genre}}</p>
                <p class="font-normal text-gray-700 mb-3 dark:text-gray-400">Nombre de page: {{$livre->nbrePage}}</p>


                <a href="{{ route('livre.download', $livre->id) }}">

                    Télécharger <svg class="-mr-1 ml-2 h-4 w-4" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                </a>
            </div>
        </div>

    </div>

    @endforeach
</div>  --}}


<style>
    @import url("https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500&display=swap");
    *,
    *::after,
    *::before {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }

    .flex {
      display: flex;
    }

    .flex-wrap {
      flex-wrap: wrap;
    }

    .justify-center {
      justify-content: center;
    }

    .space-x-4 {
      margin-right: 1rem;
    }

    .space-y-4 {
      margin-bottom: 1rem;
    }

    .box {
      position: relative;
      width: 200px;
      height: 300px;
      margin: 1rem;
      background-color: #fff;
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
      border-radius: 8px;
      overflow: hidden;
      transition: all 0.3s ease-in-out;
    }

    .box:hover .imgBox {
      transform: translateY(-100%);
    }

    .imgBox {
      position: absolute;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      z-index: 2;
      transition: all 0.5s ease-in-out;
    }

    .imgBox img {
      width: 100%;
      height: 100%;
      object-fit: cover;
    }

    .content {
      position: absolute;
      top: 100%;
      left: 0;
      width: 100%;
      height: 100%;
      padding: 1rem;
      display: flex;
      flex-direction: column;
      justify-content: center;
      align-items: center;
      background-color: #fff;
      z-index: 1;
      text-align: center;
      transition: all 0.5s ease-in-out;
    }

    .box:hover .content {
      top: 0;
    }

    .content h2 {
      font-size: 1.5rem;
      color: #111;
      margin-bottom: 0.5rem;
    }

    .content span {
      color: #555;
      font-size: 1rem;
      margin-bottom: 1rem;
    }

    .download-btn {
      display: inline-flex;
      align-items: center;
      padding: 0.5rem 1rem;
      font-size: 0.875rem;
      font-weight: 500;
      color: #fff;
      background-color: #007bff;
      border-radius: 0.375rem;
      text-decoration: none;
      transition: background-color 0.3s ease-in-out;
    }

    .download-btn:hover {
      background-color: #0056b3;
    }

    @media (max-width: 600px) {
      .box {
        width: 80%;
      }

      .box:hover .imgBox {
        transform: scale(1.05);
      }
    }

</style>

<div class="flex flex-wrap justify-center space-x-4 space-y-4">
    @foreach ($livres as $livre)
        <div class="box mx-4 my-4">
            <div class="imgBox">
                <img src="{{ asset('storage/'.$livre->image) }}" alt="{{ $livre->titre }}" class="rounded-t-lg">
            </div>
            <div class="content">
                <h2>{{ $livre->titre }}</h2>
                <span>Auteur: {{ $livre->auteur }}</span>

                <a href="{{ route('livre.download', $livre->id) }}" class="download-btn">
                    Télécharger

                </a>
            </div>
        </div>
    @endforeach
</div>




