<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" xmlns:og="http://ogp.me/ns#" xmlns:fb="https://www.facebook.com/2008/fbml">
<head>
<meta http-equiv="content-type" content="text/html;charset=ISO-8859-1" />
<title>Strongmile Movers | Work Order Request</title>


		<link href='http://fonts.googleapis.com/css?family=Ropa+Sans' rel='stylesheet' type='text/css'>

		<style type="text/css">
			body {
				font-family: 'Ropa Sans', sans-serif;
				color: #000;
			}
			td.info { width: 500px;}
			.container {
			    width:100%;
			}
			.container div {
			    width:100%;
			}
			.container .header {
			    background-color:#d3d3d3;
			    cursor: pointer;
			    font-weight: bold;
			}
			.container .content {
			    display: none;
			}
		</style>
	</head>
<body>
<div class="cont">
	<div class="head">
		Filter by: <a href="?action=complete">Closed</a> | <a href="?action=open">Open</a> | <a href="?action=newest">Newest</a> | <a href="?action=oldest">Oldest</a> | <a href="index.php">All</a>
	</div>
	<div class="listing">
<?php
	//$dbhost = "requestdb.db.10746628.hostedresource.com";
	$dbhost = "127.0.0.1";
	$dbuser = "requestdb";
	$dbname = "requestdb";
	$dbpass = "theRinse!2";
   	//$conn = mysql_connect($dbhost, $dbuser, $dbpass);
   	$mysqli = new mysqli($dbhost , $dbuser, $dbpass, $dbname);
   //	mysql_select_db($dbname);
	if(isset($_GET['action'])){
		switch($_GET['action']) {
			case "complete":
				$sql = "SELECT * FROM requests WHERE complete=1 ORDER BY entrydate DESC";
				break;

			case "open":
				$sql = "SELECT * FROM requests WHERE complete=0 ORDER BY entrydate DESC";
				break;

			case "update":
				$id = mysql_real_escape_string($_GET['id']);
				$sql = "UPDATE requests SET complete = IF(complete=1, 0, 1) WHERE id = ".$id;
				$result = mysql_query( $sql, $conn );
				$sql = "SELECT * FROM requests ORDER BY entrydate DESC";
				break;

			case "oldest":
				$sql = "SELECT * FROM requests ORDER BY entrydate ASC";
				break;

			case "newest":
				$sql = "SELECT * FROM requests ORDER BY entrydate DESC";
				break;

			default:
				$sql = "SELECT * FROM requests ORDER BY entrydate DESC";
				break;
		}
	} else {
		$sql = "SELECT * FROM requests ORDER BY entrydate DESC";
	}
	if ($result = $mysqli->query($sql)) {

	?>
	<table width="100%" cellspacing="4" cellpadding="0" border=1>
		<tr valign="top">
			<td>Ref #</td>
			<td>Entry Date</td>
			<td>Name</td>
			<td class="info">Request Info</td>
			<td>Status</td>
			<td></td>
		</tr>
	<?php
	while ($row = $result->fetch_assoc()) {
	?>
		<tr valign="top">
			<td><?php echo $row['id'];?></td>
			<td><?php echo date("F j, Y, g:i a", strtotime($row['entrydate']));?></td>
			<td><?php echo stripslashes($row['name']);?></td>
			<td class="info"><div class="container">
					<div class="header"><span>Expand</span></div>
					<div class="content"><?php echo html_entity_decode(stripslashes($row['info']));?></div>
				</div>
			</td>
			<td><?php
				switch($row['complete']){
					case "0" :
						$status = "open";
						break;

					case "1" :
						$status = "closed";
						break;
				}
				echo $status;
				?></td>
			<td><a href="?action=update&id=<?php echo $row['id'];?>">Update Status</a></td>
		</tr>
	<?php 
	}
	?>
	</table>
	<?php

	$result->free();
	$mysqli->close();
	}
?>
	</div>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script type="text/javascript">
	$(function() {
		$(".header").each(function () {

		    var header = $(this);
		    header.click(function() {
			    //getting the next element
			    $content = header.next();
			    //open up the content needed - toggle the slide- if visible, slide up, if not slidedown.
			    $content.slideToggle(500, function () {
			        //execute this after slideToggle is done
			        //change text of header based on visibility of content div
			        header.text(function () {
			            //change text based on condition
			            return $content.is(":visible") ? "Collapse" : "Expand";
			        });
			    });
			});
		});
	});
</script>
</body>
</html>