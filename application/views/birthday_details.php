<?php
    include_once('birthdays.php');

    $person = new Birthday();
    $person->birthReminder();

    include_once('layout/header.php');
?>
<ol class="breadcrumb">
  <li><a href="https://sbsharma.com">Home</a></li>
  <li><a href="https://sbsharma.com/php">PHP</a></li>
  <li class="active">Birthday Reminder</li>
</ol>

<div class="container">
    <div class="page-header">
        <h1>Birthday Details (View and Add)<small></small></h1>
    </div>

    <div class="row">
        <div class="col-md-4 col-md-offset-4">
            <!-- <div class="panel panel-default theme-color mt-1">
                <div class="panel-heading theme-color text-center"> <span class="glyphicon glyphicon-gift"></span> What is today?</div>
                <div class="panel-body">
				
                </div>
                <div class="panel-footer theme-color text-center">
                    Powered by 
                    <a class="link-color" href="https://sbsharma.com" target="_blank">www.sbsharma.com</a>
                </div>
            </div> -->
        </div>
    </div>
</div>

<?php

    include_once('layout/footer.php');

?>