<?php
global $wpdb;
$all_students = $wpdb->get_results(
    $wpdb->prepare(
        "SELECT * from insertrecord",
        ""
    ),
    ARRAY_A
);

$action = isset($_GET['action']) ? trim($_GET['action']) : "";
$id = isset($_GET['id']) ? intval($_GET['id']) : "";
if (!empty($action) && $action == "delete") {

    $wpdb->delete("insertrecord", array(
        "id" => $id
    ));
?>
    <script>
        location.href = "<?php echo site_url() ?>/wp-admin/admin.php?page=wp-record-plugin";
    </script>
<?php
}

if (count($all_students) > 0) {
?>
    <style>
	body{
	background-color:black;
}
.wrapper{
background-color:white;
width: 98%;
padding-bottom:60px;
}
        table {
            width: 90%;
            margin: 0 auto;
	    border-collapse: collapse;
	        }
	table tr,th{
            border: 1px solid #ddd;
           
           }
        table td,th{
         border: 1px solid #ddd;
         border: 1px solid #ddd;
}
      table tr:hover{
background-color:#cccccc;}

        h1 {
            margin-top: 60px;
            padding-top:40px;
            margin-bottom: 30px;
        }

        .info {
            background-color: #0073e6;
            color: white;
	    padding:10px 20px;
	    border:0;
	    border-radius:16px;
        }
	.info:hover{
            background-color:#004080;
	    cursor:pointer;
        }
	

        .danger {
            background-color: #ff3300;
            color: white;
	    padding:10px 26px;
            border:0;
	    border-radius:16px;
        }
	.danger:hover{
            background-color:#b32400;
            cursor:pointer;
        }
    </style>
<div class="wrapper">
    <h1 style="text-align: center; font-weight: bold;">All Participent Record</h1>

    <table cellpadding="10">
        <tr>
            <th>Id</th>
            <th>Name</th>
            <th>Sur Name</th>
            <th>Address</th>
            <th>Module</th>
            <th>certificateNo</th>
            <th>Date</th>
            <th>Action</th>
        </tr>
        <?php
        $count = 1;
        foreach ($all_students as $index => $student) {
        ?>
            <tr>
                <td><?php echo $count++; ?></td>
                <td><?php echo $student['name']; ?> </td>
                <td> <?php echo $student['surName']; ?> </td>
                <td> <?php echo $student['address']; ?> </td>
                <td><?php echo $student['date']; ?> </td>
                <td> <?php echo $student['module']; ?> </td>
                <td> <?php echo $student['certificateNo']; ?> </td>
                <td>
                    <a href="admin.php?page=wp-record-add&action=edit&id=<?php echo $student['id']; ?>"><button class="info">Edit</button></a>
                    <a href="admin.php?page=wp-record-plugin&id=<?php echo $student['id']; ?>&action=delete" onclick="return confirm('Are you sure want to delete?')"><button class="danger">Delete</button></a>
                </td>
            </tr>
        <?php
        }
        ?>
    </table>
</div>
<?php
}
?>