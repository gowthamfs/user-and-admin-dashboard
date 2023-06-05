<?php

include("includes/header.php");
// include("includes/navbar.php");
include("../middleWare/middlewareAdmin.php");

?>

<div class="container">
    <div class="card">
        <div class="card-header">
            <h3>Add Your Categories</h3>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-md-6">
                    <label for="">Name</label>
                    <input type="text" class="form-control" placeholder="Enter name">
                </div>
                <div class="col-md-6">
                    <label for="">Subject</label>
                    <input type="text" class="form-control" placeholder="Enter subject">
                </div>
                <div class="col-12">
                    <label for="">Description</label>
                    <input type="text" class="form-control" placeholder="Enter description">
                </div>

                <div class="col-6">
                    <label for="">Status</label>
                    <input type="radio" name="check">
                </div>

                <div class="col-6">
                    <label for="">Popular</label>
                    <input type="radio" name="check">
                </div>

                <div class="col-12">
                    <label for="">Meta Description</label>
                    <input type="text" class="form-control" placeholder="Enter meta description">
                </div>

                <div class="col-12">
                    <label for="">Meta Description</label>
                    <input type="text" class="form-control" placeholder="Enter meta description">
                </div>

                <div class="col-12 my-5">
                    <textarea name="message" id="" cols="30" rows="5"></textarea>
                </div>

                
            </div>
        </div>
    </div>
</div>


<!-- <?php include("includes/footer.php"); ?> -->