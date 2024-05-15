<!DOCTYPE html>
<html>
<head>
</head>
<body>
<h1>Actuellement disponible :
</h1>
<a href="csv_a_tableau.php">test backend</a>
<table>
<tbody>
<thead>
<?php
include("csv_a_tableau.php");

/* Le tableau de la base est composé de sous-tableaux.
   Le premier sous-tableau correspond aux en-têtes. */

foreach ($tableau_base[0] as $en_tete)
{
    ?> <th> <?php echo $en_tete; ?> </th> <?php 
}
?>
</thead>

<?php

// Les sous-tableaux suivant correspondent aux légumes
foreach ($tableau_base as $sous_tableau)
{    
?> <tr> <?php // une ligne de tableau
foreach ($sous_tableau as $element)
{
    if ($sous_tableau[6] == 1) // si disponible
    {
    ?> <td> <?php echo $element; ?> </td> <?php // une cellule de tableau
    }
};
?> </tr> <?php
};
?>
</tbody>
</table>
</body>
</html>