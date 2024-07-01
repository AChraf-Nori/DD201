<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Add Student</title>
    </head>
    <body>
        <form action="{{ route('student.store') }}" method="post">
            @csrf
            <input type="text" placeholder='username...' name='username'>
            <br>
            <input type="email" name="email" id="" placeholder='email...'>
            <br>
            <input type="date" name='birthDate'>
            <br>
            <select name="classe" id="">
                <option value="">Select Your class</option>
                <option value="DD101">DD101</option>
                <option value="DD101">DD201</option>
                <option value="ENGS101">ENGS101</option>
            </select>
            <br>
            <input type="radio" name="gender" value='male' id="">
            <label for="gender">Male</label>
            <input type="radio" name="gender" value='female' id="">
            <label for="gender">Female</label>
            <br>
            <input type="checkbox" name="isMarried" id="">
            <label for="isMarried">Married</label>
            <br>
            <button type="submit">ADD STUDENT</button>
        </form>
    </body>
</html>