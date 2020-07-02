@extends('layouts.backend.app')

@section('content')

<script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
<script>
    $(document).ready(function(){
        $('input[name="my_file"]').change(function(e){
            var fileName = e.target.files[0].name;
            document.getElementById("text").innerHTML = 'The file "' + fileName +  '" has been selected.';
        });

        $('input[name="foto_file"]').change(function(e){
            var fileName = e.target.files[0].name;
            document.getElementById("fototekst").innerHTML = 'The file "' + fileName +  '" has been selected.';
        });
    });
</script>

<div class="magazine_container">
    <div class="container">
        <div class="magazine">
            <h1>Upload Magazine</h1>

            <form action="../CMS/assets/upload" method="post" enctype="multipart/form-data">
                @csrf
                <div class="input-group">
                    <div class="custom-file">
                        <input type="file" class="custom-file-input" id="inputGroupFile04" name="my_file">
                        <label class="custom-file-label" for="inputGroupFile04"><p id="text"></p></label>
                    </div>
                    <div class="input-group-append">
                        <button class="btn btn-outline-secondary" type="submit" name="submit">Upload</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

<div class="foto_container">
    <div class="container">
        <div class="fotoupload">
            <h1>Edit foto Gallery</h1><br><br>

            <h3>Add new foto</h3><br>   

            <form action="../CMS/assets/fotoupload" method="post" enctype="multipart/form-data">
                @csrf

                <div class="form-group">
                    <label for="exampleInputEmail1">Foto Naam</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" name="foto_naam" aria-describedby="emailHelp" placeholder="Naam Foto"  required><br>
                </div>

                <div class="form-group">
                    <label for="exampleInputEmail1">Foto Beschrijving</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" name="foto_beschrijving" aria-describedby="emailHelp" placeholder="Foto Beschrijving"><br>
                </div>
                
                <div class="input-group">
                    <div class="custom-file">
                        <input type="file" class="custom-file-input" id="inputGroupFile04" name="foto_file"  required>
                        <label class="custom-file-label" for="inputGroupFile04"><p id="fototekst"></p></label>
                    </div>
                    <div class="input-group-append">
                        <button class="btn btn-outline-secondary" type="submit" name="submit">Upload</button>
                    </div>
                </div>
            </form>
        </div>	
    </div>
</div>

<div class="foto_container">
    <div class="container">
        <div class="huidigefotos">
            <div class="flex_fotos">
                <div class="foto"><img src="" alt="">



<script>
    document.getElementById("text").innerHTML = 'Choose your file';
    document.getElementById("fototekst").innerHTML = 'Choose your file';
</script>

@endsection 
