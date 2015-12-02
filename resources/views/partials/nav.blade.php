<!-- Fixed navbar -->
<nav class="navbar navbar-default navbar-fixed-top">

    <div class="container">

            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" data-target="#navbarCollapse" data-toggle="collapse" class="navbar-toggle">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a href="/" class="navbar-brand"><span class="glyphicon glyphicon-flag"></span> Article-Blog</a>
            </div>
            <!-- Collection of nav links, forms, and other content for toggling -->
            <div id="navbarCollapse" class="collapse navbar-collapse">
                <ul class="nav navbar-nav">
                    <li><a href="/"><span class="glyphicon glyphicon-home"></span> Home</a></li>
                    <li class="active"><a href="/articles"><span class="glyphicon glyphicon-book"></span> Article</a></li>
                    <li><a href="/articles/create"><span class="glyphicon glyphicon-pencil"></span> New article</a></li>
                </ul>
                <ul class="nav navbar-nav navbar-right">
                    @if (Auth::user())
                    <li><a href="/auth/logout"><span class="glyphicon glyphicon-log-out" title="Logout"> Logout</span></a></li>
                    @else
                    <li><a href="/auth/register"><span class="glyphicon glyphicon-check" title="Sign up"> Sign-Up</span></a></li>
                    <li><a href="/auth/login"><span class="glyphicon glyphicon-log-in" title="Login"> Login</span></a></li>
                    @endif
                </ul>
                {!! Form::open(['route'=>'articles.search','method'=>'POST','class'=>'navbar-form navbar-right','role'=>'search','id'=>'frmSearch'])!!}
                <div class="form-group">
                    {!! Form::text('k',null,['class'=>'form-control','id'=>'txtSearch','placeholder'=>'Search...']) !!}
                </div>
                {!! Form::close() !!}
            </div>
    </div>
</nav>


