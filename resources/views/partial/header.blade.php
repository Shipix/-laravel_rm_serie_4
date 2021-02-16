<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="#">Laravel Serie 4</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item {{ Request::is('/') ? 'active' : '' }}">
          <a class="nav-link " href="{{route('home')}}">Home<span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item {{ Request::is('fruit') ? 'active' : '' }}">
          <a class="nav-link" href="{{route('fruit')}}">FRUITS</a>
        </li>
        <li class="nav-item {{ Request::is('legume') ? 'active' : '' }}">
          <a class="nav-link" href="{{route('legume')}}">LEGUMES</a>
        </li>
      </ul>
    </div>
  </nav>