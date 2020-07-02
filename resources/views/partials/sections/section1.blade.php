<div class="container my-5">
    <h1 class="text-center font-weight-bold display-4 mb-5">{{ $title }}</h1>
    <div class="row">
        <div class="col-7 px-5">
            <div class="row h-25 mx-2 overflow-hidden">
                <div class="col bg-warning my-1 p-0 overflow-hidden rounded">
                    Top
                </div>
            </div>
            <div class="row h-75 my-1 mx-2 p-0 overflow-hidden">
                <div class="col-4 bg-danger mr-1 p-0 rounded">
                    Left
                </div>
                <div class="col bg-info ml-1 p-0 rounded">
                    Right
                </div>
            </div>
        </div>
        <div class="col px-5">
            <h3 class="font-weight-bold">Doe Nu Mee!</h3>
            <p>
               {{ $article }}
            </p>
            <a class="btn btn-success font-weight-bold text-white" href="/aanmelden">Aanmelden</a>
        </div>
    </div>
</div>
