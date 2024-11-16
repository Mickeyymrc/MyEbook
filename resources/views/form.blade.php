<x-app-layout>

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Admin Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

        </div>
    </div>

    <!-- Create by joker banny -->
    <div class="flex justify-center items-center min-h-screen">
        <div class="w-full max-w-md">
            <form method="POST" action="{{ route('livres.store') }}" class="bg-white p-10 rounded-lg shadow-lg w-full" enctype="multipart/form-data">
                @csrf
                <h1 class="text-center text-2xl mb-6 text-gray-600 font-bold font-sans">Ajout de Livre</h1>
                <div>
                    <label class="text-gray-800 font-semibold block my-3 text-md" for="titre">Titre</label>
                    <input class="w-full bg-gray-100 px-4 py-2 rounded-lg focus:outline-none" type="text" name="titre" id="titre" placeholder="Titre" />
                </div>
                <div>
                    <label class="text-gray-800 font-semibold block my-3 text-md" for="auteur">Auteur</label>
                    <input class="w-full bg-gray-100 px-4 py-2 rounded-lg focus:outline-none" type="text" name="auteur" id="auteur" placeholder="Auteur" />
                </div>
                <div>
                    <label class="text-gray-800 font-semibold block my-3 text-md" for="isbn">ISBN</label>
                    <input class="w-full bg-gray-100 px-4 py-2 rounded-lg focus:outline-none" type="text" name="isbn" id="isbn" placeholder="Isbn" />
                </div>
                <div>
                    <label class="text-gray-800 font-semibold block my-3 text-md" for="genre">Genre</label>
                    <input class="w-full bg-gray-100 px-4 py-2 rounded-lg focus:outline-none" type="text" name="genre" id="genre" placeholder="genre" />
                </div>
                <div>
                    <label class="text-gray-800 font-semibold block my-3 text-md" for="nbrePage">Page</label>
                    <input class="w-full bg-gray-100 px-4 py-2 rounded-lg focus:outline-none" type="number" name="nbrePage" id="nbrePage" placeholder="Page" />
                </div>
                <div>
                    <label class="text-gray-800 font-semibold block my-3 text-md" for="image">Image de couverture</label>
                    <input class="w-full bg-gray-100 px-4 py-2 rounded-lg focus:outline-none" type="file" name="image" id="image" placeholder="Image" />
                </div>
                <div>
                    <label class="text-gray-800 font-semibold block my-3 text-md" for="pdf_file">PDF</label>
                    <input class="w-full bg-gray-100 px-4 py-2 rounded-lg focus:outline-none" type="file" name="pdf_file" id="pdf_file" placeholder="Pdf" />
                </div>
                <button type="submit" class="w-full mt-6 bg-indigo-600 rounded-lg px-4 py-2 text-lg text-white tracking-wide font-semibold font-sans">Enregistrer</button>

            </form>
        </div>
    </div>

</div>
</div>

</x-app-layout>

