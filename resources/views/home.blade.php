@extends('layouts.standard.app')

@section('content')

<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 190 1440 119">
    <path fill="#a9ba4f" fill-opacity="1" d="M0,256L288,224L576,256L864,288L1152,224L1440,192L1440,320L1152,320L864,320L576,320L288,320L0,320Z"></path>
</svg>
    <div class="jumbotron jumbotron-fluid text-white d-flex p-0 m-0" id="homeJumbo">
        <div class="container my-5">
            <h1 class="text-center font-weight-bold display-4 mb-5">Cursussen</h1>
            <div class="row text-center">
                <div class="col">
                    <figure class="figure">
                        <img src="{{url('/images/template.jpg')}}" class="figure-img img-fluid rounded">
                        <figcaption class="figure-caption">A caption for the above image.</figcaption>
                    </figure>
                    <h3 class="font-weight-bold">Dummy text incoming</h3>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit,
                        sed do eiusmod tempor incididunt ut labore et dolore magna
                        aliqua. Ut enim ad minim veniam, quis nostrud exercitation
                        ullamco laboris nisi ut aliquip.
                    </p>
                </div>
                <div class="col">
                    <figure class="figure">
                        <img src="{{url('/images/template.jpg')}}" class="figure-img img-fluid rounded">
                        <figcaption class="figure-caption">A caption for the above image.</figcaption>
                    </figure>
                    <h3 class="font-weight-bold">Dummy text incoming</h3>
                    <p>
                        Lorem ipsum dolor sit amet, adipiscing elit,
                        sed do eiusmod tempor incididunt ut labore et dolore magna
                        aliqua. Ut ad minim veniam, quis nostrud exercitation
                        ullamco laboris nisi ut aliquip. consectetur adipiscing elit,
                        sed do eiusmod tempor incididunt

                    </p>
                </div>
                <div class="col">
                    <figure class="figure">
                        <img src="{{url('/images/template.jpg')}}" class="figure-img img-fluid rounded">
                        <figcaption class="figure-caption">A caption for the above image.</figcaption>
                    </figure>
                    <h3 class="font-weight-bold">Dummy text incoming</h3>
                    <p>
                        Lorem ipsum dolor sit amet, elit,
                        sed do ut labore et dolore aliqua.
                        Ut enim ad minim, quis nostrud ullamco
                        laboris nisi ut aliquip. sed do eiusmod tempor
                    </p>
                </div>
            </div>
        </div>
    </div>
<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 180 1440 140">
    <path fill="#a9ba4f" fill-opacity="1" d="M0,224L360,224L720,256L1080,192L1440,288L1440,0L1080,0L720,0L360,0L0,0Z"></path>
</svg>

    <div class="container my-5">
        <h1 class="text-center font-weight-bold display-4 mb-5">Activiteiten</h1>
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
                    Lorem ipsum dolor sit amet, consectetur adipisicing
                    elit. Accusamus cum eaque facilis inventore iusto
                    laborum, non porro quisquam rem, repellat temporibus
                    ut vel voluptatem. Amet cum facere placeat ratione sed!
                </p>
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipisicing
                    elit. Accusamus cum eaque facilis inventore iusto
                    laborum, non porro quisquam rem, repellat temporibus
                    ut vel voluptatem. Amet cum facere placeat ratione sed!
                </p>
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipisicing
                    elit. Accusamus cum eaque facilis inventore iusto
                    laborum, non porro quisquam rem, repellat temporibus
                    ut vel voluptatem. Amet cum facere placeat ratione sed!
                </p>
                <a class="btn btn-success font-weight-bold text-white" href="/aanmelden">Aanmelden</a>
            </div>
        </div>
    </div>


@endsection
