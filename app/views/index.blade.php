<!DOCTYPE html>
<html>
<head>
    <title>Freelancer</title>
    {{ HTML::style('css/bootstrap.css')}}
</head>
<body>

    <nav class="navbar navbar-inverse">
        <a class="navbar-brand" href="#">Title</a>
        <ul class="nav navbar-nav">
            <li class="active">
                <a href="#">Home</a>
            </li>
            <li>
                <a href="#">Link</a>
            </li>
        </ul>
    </nav>


    <div class="jumbotron">
        <div class="container">
            <h1>Looking for Available Projects?</h1>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam</p>
                <p>
                    <a class="btn btn-primary btn-lg">Learn more</a>
                </p>
            </div>
        </div>
        <div class="container">


            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">

                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th>Project title</th>
                                <th>By</th>
                                <th>Posted date</th>
                                <th>Budget</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($projects as $p)
                            <tr>
                                <td>{{ $p->title }}</td>
                                <td>John Doe</td>
                                <td>{{ $p->created_at->format('d F Y') }}</td>
                                <td>{{ $p->budget }}</td>
                                <td>
                                    <div class="btn-group">
                                      <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
                                      Apply <span class="caret"></span>
                                    </button>
                                    <ul class="dropdown-menu" role="menu">
                                    @foreach ($p->skills as $s)
                                        <li><a href="#">{{ $s->name }}</a></li>
                                    @endforeach
                                    </ul>
                                </div>

                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>

        <div class="jumbotron">
            <div class="container">
                <h1>Looking for Professional Freelancers?</h1>
                <p>Contents ...</p>
            </div>
        </div>
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Position</th>
                            <th>Skills</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach (User::all() as $user)
                            <tr>
                                <td>{{ $user->name }}</td>
                                <td>{{ $user->position }}</td>
                                <td>
                                    <div class="btn-group">
                                      <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
                                      Apply <span class="caret"></span>
                                    </button>
                                    <ul class="dropdown-menu" role="menu">
                                    @foreach ($user->skills as $s)
                                        <li><a href="#">{{ $s->name }}</a></li>
                                    @endforeach
                                    </ul>
                                </div>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    {{ HTML::script('js/jquery.js')}}
    {{ HTML::script('js/bootstrap.js')}}
</body>
</html>
