<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
    <body>
        <h2>Add Livre</h2>
        <form action="{{ route('livre.store') }}" method="post" enctype="multipart/form-data">
            @csrf
            <table>
                <tr>
                    <td>
                        <label for="">titre: </label>
                    </td>
                    <td>
                        <input type="text" name='titre'>
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="">pages: </label>
                    </td>
                    <td>
                        <input type="number" name='pages'>
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="">description: </label>
                    </td>
                    <td>
                        <textarea name="description" id=""></textarea>
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="">Image: </label>
                    </td>
                    <td>
                        <input type="file" name='image' accept='image/*'>
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="">Category ID: </label>
                    </td>
                    <td>
                        <input type="number" name='categorie_id'>
                    </td>
                </tr>
                
            </table>
            <br>
            <button type='submit'>Add Livre</button>


        </form>
    </body>
</html>