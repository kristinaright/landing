  <table class="table">	  
	  <?php
	  $db = mysql_connect("localhost", "root", "");
       mysql_select_db("lendingpage", $db);
	   
	   $paginationManager = new Pagination_Manager(5, 5, $_REQUEST);
	   $sql = "SELECT
           SQL_CALC_FOUND_ROWS
           `email`
        FROM
           `users`
        ORDER BY
           `id` DESC
        LIMIT " .
           $paginationManager->getStartLimit() . "," .
           $paginationManager->getStopLimit();
		   
		   $result_list = mysql_query($sql, $db);
		   
$result_found_rows = mysql_query("SELECT FOUND_ROWS() as `count`", $db);
$count = mysql_fetch_assoc($result_found_rows);
		   
$paginationManager->setCount($count["count"]);

while (($row = mysql_fetch_assoc($result_list)) !== false) {
    $data[] = $row["email"];
}
include("./template.html");

?>
</table>
