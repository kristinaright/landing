  <table class="table">
  <?php
	$users=getUsers();
	$counter=0;
	for($i=0; $i<count($users); $i++){
		$id = $users[$i]["id"];
		$email = $users[$i]["email"];
		$counter = $counter+1;
		include "user_mail.php";
		}
		
?>
</table>
<ul class="pagination">
  <li><a href="#">1</a></li>
  <li><a href="#">2</a></li>
  <li><a href="#">3</a></li>
  <li><a href="#">4</a></li>
  <li><a href="#">5</a></li>
</ul>