<!DOCTYPE html>
<html>
<head>
    <title>Upload PDF File</title>
</head>
<body>
    <h1>Upload PDF File</h1>
    <form action="{{ route('upload.pdf') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <label for="pdf_file">Select a PDF file:</label>
        <input type="file" id="pdf_file" name="file"><br><br>
        <input type="submit" value="Upload">
    </form>
</body>
</html>
