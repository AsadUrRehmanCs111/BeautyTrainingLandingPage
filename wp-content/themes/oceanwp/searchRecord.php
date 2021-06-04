<?php
/*
    Template Name: Search  
*/
?>

<?php get_header(); ?>
<style>
    .site-content {
        width: 80%;
        margin: 0 auto;
    }

    .searchRecord {
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
    }

    .searchRecord h1 {
        margin-top: 60px;

    }

    .searchRecord input {
        margin-bottom: 16px;
        width: 80% !important;
    }

    .searchRecord .search {
        padding: 16px 20px;
        width: 40% !important;
    }

    table {
        margin: 60px 0px;
    }

    table th {
        font-weight: bold !important;

    }

    @media screen and (max-width:654px) {
        .respon {
            overflow-x: auto;
        }

        .searchRecord h1 {
            font-size: 2rem;
            width: 100% !important;

        }

        .searchRecord input {
            width: 100% !important;
        }

        .searchRecord .search {
            width: 90% !important;

        }
    }
</style>

<div id="content-wrap" class="container clr">
    <div id="primary" class="content-area clr">
        <div id="content" class="site-content clr">
            <form method="POST" class="searchRecord">
                <h1>Check Your Certificate</h1>

                <input class="input" type="text" name="certificateNo" id="certifiateNo" placeholder="Enter Certificate Number" required>
                <input type="submit" class="search" name="search" id="search" value="Check Here">
            </form>
            <div class="respon">
                <table border="1">
                    <tr>
                        <th>NAME</th>
                        <th>Sur NAME</th>
                        <th>Address</th>
                        <th>Date</th>
                        <th>Module</th>
                        <th>Certificate No</th>
                    </tr>

                    <?php
                    if (isset($_POST['search'])) {
                        $certificateNo = $_POST['certificateNo'];
                        global $wpdb;
                        $result = $wpdb->get_results("SELECT * FROM insertrecord Where certificateNo = '$certificateNo'");
                        if ($result) {
                            foreach ($result as $r) { ?>

                                <tr>
                                    <td><?php echo $r->name; ?> </td>
                                    <td> <?php echo $r->surName; ?> </td>
                                    <td> <?php echo $r->address; ?> </td>
                                    <td><?php echo $r->date; ?> </td>
                                    <td> <?php echo $r->module; ?> </td>
                                    <td> <?php echo $r->certificateNo; ?> </td>

                                </tr>

                    <?php
                            }
                        } else {
                            echo "<h2>Nothing Found</h2>";
                        }
                    }
                    ?>

                </table>
            </div>



        </div><!-- #content -->

    </div><!-- #primary -->


</div><!-- #content-wrap -->

<?php get_footer(); ?>