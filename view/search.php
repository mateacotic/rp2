<?php require_once __DIR__ . '/_header.php'; ?>
<?php require_once __DIR__ . '/menu.php'; ?>

<?php
//dodati koje su sve opcije za pojedinu kategoriju
?>

<!-- Genre: 
<select id="genre">
			<option value="1"></option>
			<option value="2"></option>
			<option value="3"></option>
			<option value="4"></option>
			<option value="5"></option>
			<option value="6"></option>
</select>

-->
<br>
<form method='post' action='teka.php?rt=movies/search'>
<p>
Year: 
<input type="text" list="datalist_godine" id="txt_year" name="txt_year">
<datalist id="datalist_godine"></datalist>
<button type="submit" name="searchyear">Search movies!</button>
</p>

<p>
Genre:
<select name="genre">
<?php
foreach( $genreList as $genre )
{
	echo '<option value="' . $genre . '">' . $genre . '</option>';

}
?>
</select>
<button type="submit" name="genrebutton">Search movies!</button>
</p>
</form> <!--
<br>
Director:
<select id="director">
			<option value="1"></option>
			<option value="2"></option>
			<option value="3"></option>
			<option value="4"></option>
			<option value="5"></option>
			<option value="6"></option>
</select>-->
<br>



<?php
   /*foreach( $movieList as $movie ){
    echo
    '<ol>' . 
    '<li>' .
    $movie->title .
    '</li>' .
    '<li>' .
    $movie->rating .
    '</li>' .
    '</ol>';
}*/
?>

<?php require_once __DIR__ . '/_footer.php'; ?>