<?php
global $wpdb;
$msg = '';

$action = isset($_GET['action']) ? trim($_GET['action']) : "";
$id = isset($_GET['id']) ? intval($_GET['id']) : "";

$row_details = $wpdb->get_row(
    $wpdb->prepare(
        "SELECT * from insertrecord WHERE id = %d",
        $id
    ),
    ARRAY_A
);


if (isset($_POST['btnsubmit'])) {

    $action = isset($_GET['action']) ? trim($_GET['action']) : "";
    $id = isset($_GET['id']) ? intval($_GET['id']) : "";

    if (!empty($action)) {

        $wpdb->update("insertrecord", array(
            "name" => $_POST['name'],
            "surName" => $_POST['surName'],
            "address" => $_POST['address'],
            "module" => $_POST['module'],
            "date" => $_POST['date'],
            "certificateNo" => $_POST['certificateNo']
        ), array(
            "id" => $id
        ));

        $msg = "Form data updated successfully";
    } else {

        $wpdb->insert("insertrecord", array(
            "name" => $_POST['name'],
            "surName" => $_POST['surName'],
            "address" => $_POST['address'],
            "module" => $_POST['module'],
            "date" => $_POST['date'],
            "certificateNo" => $_POST['certificateNo']

        ));

        if ($wpdb->insert_id > 0) {
            $msg = "Form data saved successfully";
        } else {
            $msg = "Failed to save data";
        }
    }
}
?>

<style>
   body {
        background-color: black;
        color:white;
    }
    form {
        width: 50%;
        margin: 0 auto;
        display: flex;
        flex-direction: column;
        background-color: #fff;
        color: #000;
	padding:40px 20px;
	margin-top: 40px;
    }

    form h1 {
        text-align: center;
        margin-bottom:20px;
    }

    form input {
        margin-bottom: 20px;
        outline: none !important;
        border: 0 !important;
	background:0 !important;
        border-bottom: 1px solid #ccc !important;
    }

    form button {
        padding: 10px;
        background-color: #00cc00;
        color: white;
	border-radius:33px;
	outline:none;
	border:0;
    }

    form button:hover {
        background-color: #008000;
	cursor:pointer;

    }
</style>
<p><?php echo $msg; ?></p>
<div class="background">
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>?page=wp-record-add<?php
                                                                        if (!empty($action)) {
                                                                            echo '&action=edit&id=' . $id;
                                                                        }
                                                                        ?>" method="post">
        <h1>Add New Participent</h1>
        
        <input type="text" name="name" value="<?php echo isset($row_details['name']) ? $row_details['name'] : ""; ?>" placeholder="Enter name" />
        
        <input type="text" name="surName" value="<?php echo isset($row_details['surName']) ? $row_details['surName'] : ""; ?>" placeholder="Enter Sur Name" />
       
        <input type="text" name="address" value="<?php echo isset($row_details['address']) ? $row_details['address'] : ""; ?>" placeholder="Enter Address" />
        
        <input type="date" name="date" value="<?php echo isset($row_details['date']) ? $row_details['date'] : ""; ?>" placeholder="Select Date" />
      
        <input type="text" name="module" value="<?php echo isset($row_details['module']) ? $row_details['module'] : ""; ?>" placeholder="Enter Module Name" />
       
        <input type="text" name="certificateNo" value="<?php echo isset($row_details['certificateNo']) ? $row_details['certificateNo'] : ""; ?>" placeholder="Enter Certificate No" />
        <button type="submit" name="btnsubmit">Submit</button>
    </form>
</div>