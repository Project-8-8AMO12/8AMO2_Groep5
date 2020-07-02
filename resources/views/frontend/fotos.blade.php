@extends('layouts.standard.app')

@section('title', 'Fotos')
@section('jumboTitle', "Foto's")
@section('jumboSubTitle', 'fotogalerij van de imkervereniging')

@section('content')
    
<div class="image_container">
    <div class="container">

        <?php
        $folder = str_replace('\\', '/', public_path('images/gallery/'));

        foreach (new DirectoryIterator(str_replace('\\', '/', public_path('images/gallery'))) as $fileInfo) {
            if($fileInfo->isDot()) continue;
            $file = $fileInfo->getFilename();

            echo "<img src='http://$folder$file'>";


        }

        ?>
    </div>
</div>

@endsection