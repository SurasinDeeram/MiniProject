<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('edit.css') }}">
    <title>Edit Entrepreneur Data</title>
</head>
<body>
    <h1>Edit Entrepreneur Data</h1>
    @if(session('fail'))
        <div>{{ session('fail') }}</div>
    @endif

   <div class="container" style="background-color: rgb(149, 197, 226)">
    <div class="con-head" style="background-color: rgb(149, 197, 226)">
        <form method="POST" action="{{ route('entre.update', $entreAdd->id) }}">
            @csrf
            @method('PUT') <!-- Use PUT method for update -->
    
            <label for="jobPosition">Job Position:</label>
            <input type="text" name="jobPosition" value="{{ $entreAdd->jobPosition }}">
    <br>
            <label for="jobPositionThai">Job Position (Thai):</label>
            <input type="text" name="jobPositionThai" value="{{ $entreAdd->jobPositionThai }}">
            <br>
            <label for="subject">Subject:</label>
            <input type="text" name="subject" value="{{ $entreAdd->subject }}">
            <br>
            <label for="topic">Topic:</label>
            <input type="text" name="topic" value="{{ $entreAdd->topic }}">
            <br>
            <label for="chapter">Chapter:</label>
            <input type="text" name="chapter" value="{{ $entreAdd->chapter }}">
            <br>
            <label for="check_type">Check Type:</label>
            <input type="text" name="check_type" value="{{ $entreAdd->check_type }}">
            <br>
            <label for="jobDescription">Job Description:</label>
            <textarea name="jobDescription">{{ $entreAdd->jobDescription }}</textarea>
    
            <button type="submit" class="btn btn-success">Update</button>
        </form>
    </div>
    </div>
</body>
</html>
