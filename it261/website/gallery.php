<?php 
include('config.php');
include('./includes/header.php'); 

$people['Tiger_Woods'] = 'tiger_American professional golfer.';
$people['Serena_Williams'] = 'seren_American tennis player.';
$people['Simone_Biles'] = 'biles_American artistic gymnast.';
$people['Michale_Phelps'] = 'phelp_American former competitive swimmer.';
$people['Michale_Jordan'] = 'jorda_American business and former professional basketball player .';
$people['Stephen_Curry'] = 'curry_American proffessional basketball player.';
$people['Russell_Wilson'] = 'russe_American football player.';

?>

<table>
<?php foreach($people as $name => $image):?>

    
<tr>
<td><img src="images/<?php echo substr($image, 0, 5);?>.jpg" alt="<?php  echo str_replace('_', ' ', $name)  ?>"></td>
<td><?php  echo str_replace('_', ' ', $name)  ?></td>
<td><?php  echo str_replace('_', ' ', substr($image, 5)) ?></td>


</tr>
<?php  endforeach ; ?>
</table>   

<?php
include('./includes/footer.php');
