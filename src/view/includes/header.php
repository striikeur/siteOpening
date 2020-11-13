<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand" href="?action=">Blog</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
        </ul>
        <form class="form-inline my-2 my-lg-0" method="post" action="?action=search">
            <input class="form-control mr-sm-2" type="search" placeholder="Rechercher" aria-label="Search" name="search" required>
            <button class="btn btn-outline-success mr-sm-2" type="submit">Rechercher</button>
        </form>
		<a href="?action=login"><button class="btn btn-success btn-sm mr-sm-2" type="button">Administration</button></a>
        <a href="?action=coffee"><button class="btn btn-secondary btn-sm" type="button">Faire un café</button></a>
    </div>
</nav>