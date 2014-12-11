  <nav class="navbar navbar-default navbar-custom" role="navigation">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="aboutMe">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="/">LOGO</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="aboutMe">
      <ul class="nav navbar-nav" id="selectDir">
        <li><a href="{{{ action('PostsController@index') }}}">Recent Posts</a></li>
        @if (Auth::check())
        <li>
        <a href="{{{ action('PostsController@create') }}}">New Post</a>
        </li>
        @endif
      </ul>
      @if (Auth::check())
      <h5 id='welcomeSign'> Welcome, {{ Auth::user()->email }}! </h5>
      @endif

      <ul class="nav navbar-nav navbar-right">
        @if (Auth::check())
        <li><a href="{{{ action('HomeController@dologout') }}}">Logout</a></li>
        @else 
        <li><a href="{{{ action('HomeController@showlogin') }}}">Login</a></li>
        @endif
        <!-- search bar -->
        <li>
          {{ Form::open(['action'=>'PostsController@index', 'method'=>'GET', 'class'=>'form-inline']) }} 
          {{ Form::text('searchKey', null, ['class' => 'form-control', 'placeholder' => 'Search By Title Here']) }}
          {{ Form::submit('search') }}
          {{ Form::close() }}
        </li>
      </ul>
        </li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>