<?php
include('db_connect.php');

if (! (isset($_GET['pageNumber']))) {
    $pageNumber = 1;
} else {
    $pageNumber = $_GET['pageNumber'];
}

$perPageCount = 3;

$sql = "SELECT * FROM publish_stories  WHERE 1";

if ($result = mysqli_query($conn, $sql)) {
    $rowCount = mysqli_num_rows($result);
    mysqli_free_result($result);
}

$pagesCount = ceil($rowCount / $perPageCount);

$lowerLimit = ($pageNumber - 1) * $perPageCount;

$sqlQuery = " SELECT * FROM publish_stories WHERE 1 limit " . ($lowerLimit) . " ,  " . ($perPageCount) . " ";
$results = mysqli_query($conn, $sqlQuery);

?>

<table class="table table-hover table-responsive">
    <tr>
        <th align="center">Story Title</th>
        <th align="center">Story Description</th>
        <th align="center">Created Date</th>
        <th align="center">Author Name</th>
    </tr>
    <?php foreach ($results as $data) { ?>
    <tr>
        <td align="left"><?php echo $data['story_title'] ?></td>
        <td align="left"><?php echo $data['description'] ?></td>
        <td align="left"><?php echo $data['created_at'] ?></td>
        <td align="left"><?php echo ucfirst($data['user_name']); ?></td>
    </tr>
    <?php
    }
    ?>
</table>

<div style="height: 30px;"></div>
<table width="100%" align="center">
    <tr>

        <td valign="top" align="left"></td>


        <td valign="top" align="center">
 
	<?php
	for ($i = 1; $i <= $pagesCount; $i ++) {
    if ($i == $pageNumber) {
        ?>
	      <a href="javascript:void(0);" class="current"><?php echo $i ?></a>
<?php
    } else {
        ?>
	      <a href="javascript:void(0);" class="pages"
            onclick="showRecords('<?php echo $perPageCount;  ?>', '<?php echo $i; ?>');"><?php echo $i ?></a>
<?php
    } // endIf
} // endFor

?>
</td>
        <td align="right" valign="top">
	     Page <?php echo $pageNumber; ?> of <?php echo $pagesCount; ?>
	</td>
    </tr>
</table>