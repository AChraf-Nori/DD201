<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <script src="https://cdn.tailwindcss.com"></script>
        
        <title>Document</title>
    </head>
    <body class='p-4'>

        <form action="{{ route('stagiaire.store') }}" method="post">
            @csrf
            <h1 class='text-xl mb-4'>Nouveau stagiaire</h2>

            <div class='w-1/2'>
                <div class='flex flex-col mb-2'>
                    <label for="nom">Nom</label>
                    <input class='border border-gray-400 border-solid p-1' type="text" id='nom' name='nom'>
                    @error('nom')
                        <span class='text-sm text-red-700 bg-red-200 p-2 mt-1'>{{ $message }}</span>
                    @enderror
                </div>
                <div class="flex items-center gap-2 mb-2">
                    <label for="groupe">Genre:</label>
                    <div>
                        <input checked type="radio" id='M' value='M' name='genre'>
                        <label for="M">Male</label>
                    </div>
                    <div>
                        <input type="radio" id='F' value='F' name='genre'>
                        <label for="F">Female</label>
                    </div>
                </div>
                <div class='flex flex-col mb-2'>
                    <label for="nom">Date De Naissance</label>
                    <input class='border border-gray-400 border-solid p-1' type="date" id='nom' name='dateNaissance'>
                    <!-- <span class='text-sm text-red-700 bg-red-200 p-2 mt-1'>Nom is invalid</span> -->
                </div>
                <div class='flex flex-col mb-2'>
                    <label for="nom">Note</label>
                    <input class='border border-gray-400 border-solid p-1' type="number" id='nom' name='note'>
                    @error('note')
                        <span class='text-sm text-red-700 bg-red-200 p-2 mt-1'>{{ $message }}</span>
                    @enderror
                </div>
                <div class='flex flex-col mb-2'>
                    <label for="nom">Groupe</label>
                    <input class='border border-gray-400 border-solid p-1' type="text" id='nom' name='groupe'>
                    <!-- <span class='text-sm text-red-700 bg-red-200 p-2 mt-1'>Nom is invalid</span> -->
                </div>
            </div>
            <button type='submit' class='bg-blue-500 px-4 py-2 text-white rounded-md mt-4'>
                Add Stagiaire
            </button>
        </form>
        
    </body>
</html>