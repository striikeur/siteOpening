<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand" href="?action=admin">Administration</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
			<li class="nav-item">
				<a class="nav-link" href="?action=">Accueil</a>
			</li>
            <button type="button" class="btn btn-outline-warning mr-sm-2">
                Nombre de news <span class="badge badge-light"><?= $this->nbNews ?></span>
            </button>
            <button type="button" class="btn btn-outline-info">
                Nombre de messages <span class="badge badge-light"><?= $this->nbComment ?></span>
            </button>
        </ul>
        <form class="form-inline my-2 my-lg-0" method="post" action="?action=searchAdmin">
            <input class="form-control mr-sm-2" type="search" placeholder="Rechercher" aria-label="Search" name="search" required>
            <button class="btn btn-outline-success mr-sm-2" type="submit">Rechercher</button>
        </form>
		<a href="?action=logout"><button class="btn btn-danger btn-sm" type="submit">Déconnexion</button></a>
    </div>
</nav>