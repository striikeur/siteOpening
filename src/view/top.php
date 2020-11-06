<!DOCTYPE html>
<html lang="fr">
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.20/css/jquery.dataTables.css">

<head>
    <meta charset="UTF-8">
    <title>Top Opening 2020</title>
</head>
<body>
<table id="openings" style="width: 100%" class="display">
    <thead>
    <tr>
        <th><p> Name </p></th>
        <th><p> Saison</p></th>
        <th><p> Lien mal </p></th>
        <th><p> Video de l'opening</p></th>
    </tr>
    </thead>
    <tr>
        <td><p>Kaguya Sama Love is War</p></td>
        <td><p>Fall 2020</p></td>
        <td><a href="#">Lien Mal</a></td>
        <td><a href="/view/video.php"><img height="10%" src="/res/img/Play.png"/></a></td>

    </tr>
</table>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.js"></script>


<script>
    jQuery(document).ready(function(){
        jQuery('#openings').DataTable();
    });

</script>
</body>
</html>