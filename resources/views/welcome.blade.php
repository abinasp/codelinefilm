<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Codeline Films</title>

    <!-- Styles -->
    <link rel="stylesheet" href="{{asset("css/bootstrap.min.css")}}">
    <link rel="stylesheet" href="{{asset("css/style.css")}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">

    <script src="{{asset("js/jquery.min.js")}}"></script>

</head>
<body class="codeline-body">

<div id="header-content" class="container-fluid">

    <nav class="navbar navbar-inverse navbar-static-top">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar6">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="/">Codeline Films
                </a>
            </div>
            <div id="navbar6" class="navbar-collapse collapse">

                <div class="nav navbar-nav navbar-right">
                    @if (Route::has('login'))
                        <div class="top-right links">
                            @auth
                                <div class="nav navbar-nav navbar-right">
                                    <button id="create-button" type="button" class="btn btn-success" data-toggle="modal"
                                            data-target="#createFilm">Create Film
                                    </button>
                                </div>

                                <div class="nav navbar-nav navbar-right">
                                    <button id="logout-button" type="button" class="btn btn-danger" href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </button>
                                </div>

                                <div class="nav navbar-nav navbar-right">
                                    <p id="user-name">{{ Auth::user()->name }}</p>
                                </div>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    @csrf
                                </form>
                            @else
                                <a href="{{ route('login') }}" class="btn btn-primary" style="margin: 8px;">Login</a>
                                <a href="{{ route('register') }}" class="btn btn-primary" style="margin: 8px;">Register</a>
                            @endauth
                        </div>
                    @endif
                </div>

            </div>
        </div>
    </nav>
    <div class="modal fade" id="createFilm" tabindex="-1" role="dialog"
         aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close"
                            data-dismiss="modal">
                        <span aria-hidden="true">&times;</span>
                        <span class="sr-only">Close</span>
                    </button>
                    <h4 class="modal-title" id="myModalLabel">
                        Create Film
                    </h4>
                </div>

                <div class="modal-body">
                    <div class="form-horizontal" role="form">
                        <input type="hidden" value="{{csrf_token()}}" id="token"/>
                        <div class="form-group">
                            <label class="col-sm-2 control-label"
                                   for="filmName">Name</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control"
                                       id="filmName" placeholder="Film Name"/>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-2 control-label"
                                   for="filDesc">Description</label>
                            <div class="col-sm-10">
                                    <textarea class="form-control"
                                              id="filDesc" placeholder="Description"></textarea>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-2 control-label"
                                   for="releaseDate">Release Date</label>
                            <div class="col-sm-10" id='dateTimePicker'>
                                <input type="date" class="form-control"
                                       id="releaseDate" placeholder="Release Date"/>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-2 control-label"
                                   for="filmRating">Rating</label>
                            <div class="col-sm-10">
                                <select class="form-control" id="filmRating">
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                </select>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-2 control-label"
                                   for="filmTicketPrice">Ticket Price (In USD)</label>
                            <div class="col-sm-10">
                                <input type="number" class="form-control"
                                       id="filmTicketPrice" placeholder="Price"/>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-2 control-label"
                                   for="filmCountry">Country</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control"
                                       id="filmCountry" placeholder="Country"/>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-2 control-label"
                                   for="filmGenre">Genre</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control"
                                       id="filmGenre" placeholder="Genre"/>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-2 control-label"
                                   for="filmPhoto">Photo</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control"
                                       id="filmPhoto" placeholder="Photo URL"/>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-sm-offset-2 col-sm-10">
                                <button id="save-btn" type="submit" class="btn btn-success">Save</button>
                                <button type="submit" class="btn btn-danger" data-dismiss="modal">Cancel</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <section class="wrapper">
        <div class="container-fostrap">
            <div class="content">
                <div class="container">
                    <div id="all-films" class="row">
                        @foreach(App\CodelineFilm::all() as $film)
                            <div class="col-xs-12 col-sm-4">
                                <div class="card">
                                    <a class="img-card" href="{{url('films',[$film->slug,$film->id])}}">
                                        <img src="{{$film->photo}}" />
                                    </a>
                                    <div class="card-content">
                                        <h4 class="card-title">
                                            <a href="{{url('films',[$film->slug,$film->id])}}">{{$film->name}}
                                            </a>
                                        </h4>
                                        <p class="">
                                            {{$film->description}}
                                        </p>
                                    </div>
                                    <div class="left">{{$film->genre}}</div>​
                                    <div class="right">
                                        @if($film->rating == 5)
                                            <span class="fa fa-star checked"></span>
                                            <span class="fa fa-star checked"></span>
                                            <span class="fa fa-star checked"></span>
                                            <span class="fa fa-star checked"></span>
                                            <span class="fa fa-star checked"></span>
                                        @endif
                                        @if($film->rating == 4)
                                            <span class="fa fa-star checked"></span>
                                            <span class="fa fa-star checked"></span>
                                            <span class="fa fa-star checked"></span>
                                            <span class="fa fa-star checked"></span>
                                            <span class="fa fa-star"></span>
                                        @endif
                                        @if($film->rating == 3)
                                            <span class="fa fa-star checked"></span>
                                            <span class="fa fa-star checked"></span>
                                            <span class="fa fa-star checked"></span>
                                            <span class="fa fa-star"></span>
                                            <span class="fa fa-star"></span>
                                        @endif
                                        @if($film->rating == 2)
                                            <span class="fa fa-star checked"></span>
                                            <span class="fa fa-star checked"></span>
                                            <span class="fa fa-star"></span>
                                            <span class="fa fa-star"></span>
                                            <span class="fa fa-star"></span>
                                        @endif
                                        @if($film->rating == 1)
                                            <span class="fa fa-star checked"></span>
                                            <span class="fa fa-star"></span>
                                            <span class="fa fa-star"></span>
                                            <span class="fa fa-star"></span>
                                            <span class="fa fa-star"></span>
                                        @endif
                                    </div>
                                    <div class="card-read-more">
                                        <p>
                                            Ticket Price: &#x24;{{$film->ticket_price}}
                                        </p>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>

</div>

<script src="{{asset("js/main.js")}}"></script>
<script src="{{asset("js/bootstrap.min.js")}}"></script>
</body>
</html>

