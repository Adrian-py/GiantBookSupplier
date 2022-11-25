<nav class="navbar navbar-expand-lg">
    <a class="navbar-brand" href="/"><img src="/assets/logo.png" alt="Giant Book Supplier Logo" class="navbar-logo"> Giant Book Supplier</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon">
          <span class="bar"></span>
          <span class="bar"></span>
          <span class="bar"></span>
      </span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item">
          <a class="nav-link" href="/">Home</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="/category" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Category
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="/category">All Categories</a>
            @foreach ($categories as $category)
                <a class="dropdown-item" href="/category/{{ $category->name }}">{{ $category->name }}</a>
            @endforeach
          </div>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="/publisher">Publishers</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="/contact">Contact</a>
        </li>
      </ul>
    </div>
  </nav>
