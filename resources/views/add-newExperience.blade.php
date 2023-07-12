<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{ URL::asset('regist-form.css') }}">
</head>

<body>
    <h1>Add New Experience Form</h1>
     <form action={{ route('show.dashboard')}} method="POST">
        @csrf
        <label for="fname">Company / Organization</label>
        <input type="text" class="form-control" id="fname" name="firstname" placeholder="Company / Organization Name">

        <label for="startddate">Start Join</label>
        <input type="text" class="form-control" id="startddate" name="startddate">
        
        <label for="enddate">End Join</label>
        <input type="text" class="form-control" id="endddate" name="endddate" placeholder="Description">

        <label for="role">Role</label>
        <input type="text" class="form-control" id="role" name="role" placeholder="Role">

        {{-- <label for="country">Role</label>
        <select id="country" name="country">
            <option value="australia">Hired</option>
            <option value="canada">Looking for Job</option>
            <option value="usa">Student</option>
        </select> --}}

        {{-- <input type="submit" value="Submit"> --}}
        <button type="submit" class="btn btn-primary mb-2">Submit</button>
    </form>
</body>
</html>
