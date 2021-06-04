<?php
/*
    Template Name: Insert  
*/
?>

<?php get_header(); ?>
<style>
    #content-wrap {
        background-color: #000;
    }

    .insertRecord {
        width: 550px;
        margin: 0 auto;
        background-color: #fff;
        color: #000;
        padding-bottom: 20px;
    }

    .insertRecord h1 {
        font-size: 30px;
        text-align: center;
        padding-top: 16px;
    }

    .insertRecord .input {
        width: 80%;
        margin: 0 10%;
        margin-bottom: 10px;
        outline: none;
        background: none;
        border-radius: 0;
        border: 0;
        border-bottom: 1px solid #ccc;
    }

    .insertRecord #submit {
        display: block;
        width: 80%;
        margin: 0 10%;
        margin-bottom: 20px;
    }

    @media screen and (max-width:800px) {
        .insertRecord {
            width: 90%;
        }
    }
</style>

<div id="content-wrap" class="container clr">
    <div id="primary" class="content-area clr">
        <div id="content" class="site-content clr">
            <form method="POST" class="insertRecord">
                <h1>New Particepent Record</h1>

                <input class="input" type="text" name="name" id="name" placeholder="Enter Name" required>

                <input class="input" type="text" name="surName" id="surName" placeholder="Enter SurName" required>

                <input class="input" type="text" name="address" id="address" placeholder="Enter Address" required>

                <input class="input" type="date" name="date" id="date" placeholder="Enter Date" required>

                <input class="input" type="text" name="module" id="module" placeholder="Enter Module" required>

                <input class="input" type="text" name="certificateNo" id="certificateNo" placeholder="Enter Certificate Number" required>
                <input type="submit" name="submit" id="submit" value="Submit">
            </form>

        </div><!-- #content -->

    </div><!-- #primary -->


</div><!-- #content-wrap -->


<?php get_footer(); ?>