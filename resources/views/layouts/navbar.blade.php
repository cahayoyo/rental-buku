<nav class="navbar navbar-dark navbar-expand-lg bg-primary">
    <div class="container-fluid">
      <a class="navbar-brand" 
      @if (Auth::user()->role_id == 1)
          href="/dashboard"
      @else
        href="/profile"
      @endif>Rental Buku</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
    </div>
</nav>