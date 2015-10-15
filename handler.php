<?php
$account = $_POST['account'];
require_once('sfapp/connect.php');
?>

<div class="alert alert-warning alert-dismissible fade in" role="alert">
  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
  <strong>You searched for:</strong> <?php echo $account; ?>
</div>


<?php
try {
  $query = "SELECT Id,Name FROM Account WHERE Name LIKE '%" . $account . "%'";
  $response = $mySforceConnection->query(($query));
  foreach ($response->records as $record) {
    //print_r($record->Name);
    echo '<p class="well">' . $record->Name . '</p>';
  }
} catch (Exception $e) {
  echo $e->faultstring;
}

?>