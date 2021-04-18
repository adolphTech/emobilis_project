<?php
include("config.php");
error_reporting(0);
?>
<?php if ($_SESSION['login'] != "") {
    ?>
    <header>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <strong>Welcome: </strong><?php echo htmlentities($_SESSION['sname']); ?>
                    &nbsp;&nbsp;
                </div>

            </div>
        </div>
    </header>
<?php } ?>
<!-- HEADER END-->
<div class="navbar navbar-inverse set-radius-zero">
    <div class="container">

        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <div class="left-div" style="display: flex">
                <img src="../ady-logo.png" alt="" height="10%" width="10%">
                <a href=""><h4 style="color:#fff; font-size:24px;4px; line-height:24px;padding: 5px;">Why-Academy</h4></a>
            </div>
        </div>
    </div>
</div>
<!--            <div class="left-div">-->
<!--                <img src="../includes/ady-logo.png" alt="" height="20%" width="20%">-->
<!--            </div>-->

