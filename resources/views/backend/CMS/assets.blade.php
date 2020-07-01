@extends('layouts.backend.app')

@section('content')

<script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
<script>
    $(document).ready(function(){
        $('input[type="file"]').change(function(e){
            var fileName = e.target.files[0].name;
            document.getElementById("text").innerHTML = 'The file "' + fileName +  '" has been selected.';
        });
    });
</script>

<div class="container">
    <div class="magazine">
        <h1>Upload Magazine</h1>

        <form action="../magazine/magazineupload.php" method="post" enctype="multipart/form-data">
            <div class="input-group">
                <div class="custom-file">
                    <input type="file" class="custom-file-input" id="inputGroupFile04" name="fileToUpload">
                    <label class="custom-file-label" for="inputGroupFile04"><p id="text"></p></label>
                </div>
                <div class="input-group-append">
                    <button class="btn btn-outline-secondary" type="submit" name="submit">Upload</button>
                </div>
            </div>
        </form>
    </div>
</div>

<script>
    document.getElementById("text").innerHTML = 'Choose your file';
</script>

@endsection 
