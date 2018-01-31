<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <?php require_once('inc\css.inc.php'); ?>
    
  </head>
  <body>

<?php
    require_once 'header.php';
?>


 <!-- Add Task and End Buttons -->
 <div class="card bg-dark" >
  <div class="card-block">
    <button type="button" class="btn btn-secondary" id="add_task" data-toggle="modal" data-target="#add_task_modal" style="display:none;">Add Task</button>
    <button type="button" class="btn btn-secondary" id="shift"></button>    
  </div>
 </div>


<!-- Tasks Panel -->
<div class="container-fluid conn" >
    <div class="row" style="display:none;">
        <div class="offset-1 col-5">
        <!-- Today Tasks -->
            <div class="card w-100">
            <div class="card-header">
                Today's Tasks
            </div>
            <div class="card-block today_tasks card-block-height">
               
                <!-- Today's Task Lists -->

                <div class="btn-group w-100 task" role="group">
                <button type="button" class="btn btn-secondary taskname">Taskname</button>
                <button type="button" class="btn btn-secondary">Right</button>
                </div>
               

            </div>
            </div>
        </div>
        <div class="col-5">
            <!-- Future Tasks -->
            <div class="card w-100">
            <div class="card-header">
                Future Tasks
            </div>
            <div class="card-block card-block-height">
            		
            <div class="btn-group w-100 task" role="group">
                <button type="button" class="btn btn-secondary taskname">Taskname</button>
                <button type="button" class="btn btn-secondary">Right</button>
                </div>
                

            </div>
            </div>
        </div>
    </div>
    </div>

     <!-- Include Add Task Modal -->
     <?php 
        include 'addtask.task_panel.php';
     ?>


    <?php
     require_once 'inc/js.inc.php'; 
     ?>
    <script src="scripts/task_panel.js"></script>


</body>
</html>
   