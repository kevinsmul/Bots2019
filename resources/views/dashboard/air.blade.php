@extends('layouts.app')
@section('fluid', 'container-fluid')
@section('content')

    <div class="container">

        <div class="row">
            <div class="col-md-8">
                <ul class="nav nav-pills">
                    <li class="nav-item">
                        <a class="nav-link text-dark" href="../">Seismisch</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active bg-dark" href="./data/air">Lucht</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-dark" href="./data/water">Water</a>
                    </li>
                    {{--                    <li class="nav-item">--}}
                    {{--                        <a class="nav-link text-dark" href="./data/sound">Geluid</a>--}}
                    {{--                    </li>--}}
                </ul>
            </div>
            <div class="col-md-4">
                <div class="dropdown float-right">
                    <button class="btn btn-dark dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Filter
                    </button>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton" style="padding: 1em; width: 10em !important; min-width: 5em !important;">

                        <form action="">
                            <b>Startdatum</b>
                            <input type="text" class="form-control" value="{{$date}}">
                            <br>
                            <b>Einddatum</b>
                            <input type="text" class="form-control" value="{{$end}}">
                            <hr>
                            <input type="submit" class="btn btn-dark" value="Toepassen" style="width: 100%">
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <br>

        <div class="row">
            <div class="col-md-10">


                <div class="accordion" id="accordionExample">
                    <div class="card">
                        <div class="card-header bg-dark text-white" id="headingOne">
                            <h2 class="mb-0">
                                <button class="btn btn-link text-white" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                    Verontreinigde lucht
                                </button>
                            </h2>
                        </div>

                        <div aria-labelledby="headingOne" data-parent="#accordionExample">
                            <div class="card-body">
                                <div id="cred4654" style="width: 100%; height: 40em;"></div>                             </div>
                        </div>
                    </div>

                </div>

                {{--                <div id="accordion">--}}
                {{--                    <div class="card">--}}
                {{--                        <div class="card-header bg-dark text-white" id="headingOne">--}}
                {{--                            <h5 class="mb-0">--}}
                {{--                                <button class="btn btn-link text-white" data-toggle="collapse" data-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">--}}
                {{--                                    Visualisatie--}}
                {{--                                </button>--}}
                {{--                            </h5>--}}
                {{--                        </div>--}}

                {{--                        <div id="collapseOne" class="collapse hide" aria-labelledby="headingOne" data-parent="#accordion">--}}
                {{--                            <div class="card-body">--}}
                {{--                                <div id="cred4654" style="width: 100%; height: 40em;"></div>                            </div>--}}
                {{--                        </div>--}}
                {{--                    </div>--}}


                {{--                    --}}


                {{--                </div>--}}
            </div>
            <div class="col-md-2">
                <div class="legend">
                    <h4>Legend</h4>
                    <ul>
                        <li><span style="background-color:#FA5C43"></span>NO - stikstofdioxide</li>
                        <li><span style="background-color:#998973"></span>PM10 - Particulate matter</li>
                        <li><span style="background-color:#FAAE43"></span>NO2 - Nitrogen dioxide</li>
                        <li><span style="background-color:#AB156A"></span>C8H10 - Xyleen</li>
                        <li><span style="background-color:#AB156A"></span>O3 - Ozon</li>
                        <li><span style="background-color:#AB156A"></span>CO - Koolmonoxide </li>
                    </ul>
                </div>
            </div>
        </div>
        <br>
        <div class="card">

            <div class="card-header bg-dark text-white">
                Verloopgrafiek
            </div>

            <div class="card-body">
                <canvas id="line"></canvas>
            </div>

        </div>
        <br>
        {{-- <div class="row">

            <div class="col-md-4">
                <div class="card">
                    <div class="card-header bg-dark text-white">
                        Aandeel menselijke oorsprong vs natuurlijk
                    </div>
                    <div class="card-body">
                        <canvas id="inducedvsnatural"></canvas>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card">
                    <div class="card-header bg-dark text-white">
                        Aandeel klein (<3r) vs groot (3r>)
                    </div>
                    <div class="card-body">
                        <canvas id="magnitude"></canvas>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card">
                    <div class="card-header bg-dark text-white">
                        Free slot
                    </div>
                    <div class="card-body">
                        <div class="alert alert-danger">Reserved for later use</div>
                    </div>
                </div>
            </div>

        </div> --}}


    </div>

@endsection

@section('scripts')
    <script src="{{asset("js/air.js")}}"></script>
@endsection