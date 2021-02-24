<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand" href="?action=top&ending">Top Ending 2020</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <button type="button" class="btn btn-outline-info" id="btnWinter"><a href="?action=Winter&ending">
                    Winter 2020
                </a>
            </button>
            <button type="button" class="btn btn-outline-info" id="btnSpring"><a href="?action=Spring&ending">
                    Spring 2020
                </a>
            </button>
            <button type="button" class="btn btn-outline-info" id="btnSummer"><a href="?action=Summer&ending">
                    Summer 2020
                </a>
            </button>
            <button type="button" class="btn btn-outline-info" id="btnFall"><a href="?action=Fall&ending">
                    Fall 2020
                </a>
            </button>
            <button type="button" class="btn btn-outline-info" id="btnNotNoted"><a href="?action=notNoted&ending">
                    Pas encore noté
                </a>
            </button>
            <button type="button" class="btn btn-outline-info" id="btnTopEnding"><a href="?action=top&opening">
                    Top Opening
                </a>
            </button>
        </ul>

        <form class="form-inline my-2 my-lg-0" method="post" action="?action=search&ending">
            <input class="form-control mr-sm-2" type="search" placeholder="Rechercher" aria-label="Search" name="search" required>
            <button class="btn btn-outline-success mr-sm-2" type="submit">Rechercher</button>
        </form>
        <a href="?action=coffee"><button class="btn btn-secondary btn-sm" type="button">Faire un café</button></a>

    </div>
</nav>