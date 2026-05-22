<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
<a class="navbar-brand" href="#">BLOG</a>
<button class="navbar-toggler" type="button" data-toggle="collapse" datatarget="#navbarNav" aria-controls="navbarNav" aria-expanded="false" arialabel="Toggle navigation">
<span class="navbar-toggler-icon"></span>
</button>
<div class="collapse navbar-collapse" id="navbarNav">
<ul class="navbar-nav">
<li class="nav-item active">
    <a class="nav-link" href="{{ route('home') }}">Home </a>
</li>
<li class="nav-item active">
    <a class="nav-link" href="{{ route('posts.index') }}">List of posts</a>
</li>
<li class="nav-item active">
    <a class="nav-link" href="{{ route('posts.create') }}">Create a posts</a>
</li>
<li class="nav-item active">
    <a class="nav-link" href="{{ route('language.create') }}">New Language</a>
</li>
<li class="nav-item active">
    <a class="nav-link" href="{{ route('language.index') }}">List of Language</a>
</li>

</ul>
</div>
</nav>
