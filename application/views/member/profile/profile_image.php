<?php

/***************************************************************************************************
 * Copyright (c) 2020. by Camwel Corporate Solution PVT LTD
 * This project is developed and maintained by Camwel Corporate Solution PVT LTD.
 * Nobody is permitted to modify the source or any part of the project without permission.
 * Project Developer: Camwel Corporate Solution PVT LTD
 * Developed for: Camwel Corporate Solution PVT LTD
 **************************************************************************************************/
?>

<div class="row">
    <div class="col-md-3"></div>

    <div class="col-md-6">
        <form method="post" action="<?php echo base_url()?>Member/upload_profile_image" enctype="multipart/form-data">
            <label>Select Profile Picture</label>
            <input type="file" name="pic" required class="form-control"><br />
            <input type="submit" class="form-control btn btn-danger" value="upload">

        </form>

    </div>
    <div class="col-md-3"></div>

</div>