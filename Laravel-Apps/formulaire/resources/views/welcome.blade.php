<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <script src="https://cdn.tailwindcss.com"></script>

        <title>Laravel</title>

       
    </head>
    <body class='p-4'>
        <h1 class='text-xl mb-4'>List des stagiaires</h2>
        <a class='bg-blue-500 px-4 py-2 text-white rounded-md' href="{{ route('stagiaire.create') }}">
            Nouveau Stagiaire
        </a>
        <table class='w-full text-center mt-6'>
            <thead>
                <tr>
                    <th>Photo</th>
                    <th>ID</th>
                    <th>Nom</th>
                    <th>Genre</th>
                    <th>Date de naissance</th>
                    <th>Note</th>
                    <th>Groupe</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($stagiaires as $stagiaire)
                    <tr>
                        <td class='flex justify-center'>
                            <img src="" alt="" width='50px' height='50px'>
                        </td>
                        <td>{{ $loop->index + 1 }}</td>
                        <td>{{ $stagiaire->nom }}</td>
                        <td>{{ $stagiaire->genre }}</td>
                        <td>{{ $stagiaire->date_naissance }}</td>
                        <td>{{ $stagiaire->note }}</td>
                        <td>{{ $stagiaire->groupe }}</td>
                        <td class='flex items-center jutify-center'>

                            <a class='bg-blue-500 px-4 py-2 text-white rounded-md mr-2' href="">
                                Afficher
                            </a>
                            <a class='bg-yellow-500 px-4 py-2 text-white rounded-md mr-2' href="">
                                Modifier
                            </a>
                            <form action="{{ route('stagiaire.destroy', $stagiaire->id) }}" method="post">
                                @csrf
                                @method('DELETE')
                                <button type='submit' class='bg-red-500 px-4 py-2 text-white rounded-md'>
                                    Supprimer
                                </button>
                            </form>
                            
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </body>
</html>
