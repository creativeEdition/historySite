<nav class="navbar sticky-top navbar-expand-lg navbar-dark bg-dark justify-content-between">
    <a class="navbar-brand" href="#"><i class="fa fa-home"></i> Historia lokalna</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown"
            aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link" href="#">Artykuły<span class="sr-only">(current)</span> </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Podkarpacie w obiektywie</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Ogłoszenia</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Logowanie</a>
            </li>
        </ul>
        <form class="form-inline my-2 my-lg-0 ml-auto" method="POST" action="/search-article">
            @csrf
            <input class="form-control mr-sm-2" type="search" placeholder="Wyszukaj" aria-label="Search">
            <button class="btn btn-outline-info my-2 my-sm-0" type="submit">Wyszukaj</button>
        </form>
    </div>
</nav>

