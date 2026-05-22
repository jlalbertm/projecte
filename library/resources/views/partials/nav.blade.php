<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
<a class="navbar-brand" href="#">Library</a>
<button class="navbar-toggler" type="button" data-toggle="collapse" datatarget="#navbarNav" aria-controls="navbarNav" aria-expanded="false" arialabel="Toggle navigation">
<span class="navbar-toggler-icon"></span>
</button>
<div class="collapse navbar-collapse" id="navbarNav">
<ul class="navbar-nav">
<li class="nav-item active">
    <a class="nav-link" href="{{ route('start') }}">Start_inici </a>
</li>
<li class="nav-item">
    <a class="nav-link" href="{{ route('books.index') }}">List of books_llista</a>
</li>
<li class="nav-item">
    <a class="nav-link" href="{{ route('books.create') }}">Crear llibre</a>
</li>

</ul>
</div>
</nav>
