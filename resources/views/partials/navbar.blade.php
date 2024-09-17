<nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container">
      <a class="navbar-brand" href="#">Birrificio Boolean</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav">
            <a class="nav-link" href="{{ route('home') }}">Home</a>
            <a class="nav-link" href="{{ route('about') }}">Chi siamo</a>
            <a class="nav-link" href="{{ route('contacts') }}">Contatti</a>
            <a class="nav-link" href="{{ route('beers.index') }}">Birre</a>
        </div>
      </div>
    </div>
  </nav>
