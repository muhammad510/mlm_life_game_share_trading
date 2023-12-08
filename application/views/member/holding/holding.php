<?php

/***************************************************************************************************
 * Copyright (c) 2020. by Camwel Corporate Solution PVT LTD
 * This project is developed and maintained by Camwel Corporate Solution PVT LTD.
 * Nobody is permitted to modify the source or any part of the project without permission.
 * Project Developer: Camwel Corporate Solution PVT LTD
 * Developed for: Camwel Corporate Solution PVT LTD
 **************************************************************************************************/
?>
<div style="margin: 10px;">

    <a href="<?php echo base_url()."Member/invest/{$this->session->user_id}"?>" class="btn btn-primary" style="float:right;">Invest More</a>
    <a href="javascript:void(0);" onclick="print_all()" class="btn btn-danger" ><span class="fa fa-print" title="Print all Investment Report"></span></a>
</div><br>

<table id="example" class="table table-striped">
    <thead>
        <tr>
            <th>S.N.</th>
            <th>Invested</th>
            <th>No of share</th>
            <th>Investment For</th>
            <th>Investment Date</th> 
            <th></th>           
        </tr>
    </thead>
    <tbody>
        
       <?php
      
        foreach($share as $i=>$sh):?>
        <tr>
            <td><?php echo ++$i;?></td>
            <td><?php echo $sh['topup_amount'];?></td>
            <td><?php echo $sh['share_quantity'];?></td>
            <td><?php echo $sh['invested_in'];?></td>
            <td><?php echo $sh['date'];?></td>
            <td><span class="fa fa-print" onclick="print_invest('<?php echo $sh['id']; ?>')"  title="Click Here to Print Investment Receipt"></span></td>
        </tr>
       <?php endforeach;?>

    </tbody>
</table>
</div>

<script>
    function print_invest(id)
    {
       $.ajax({
        url:base_url+"Member/print_invest",
        type:"POST",
        data:{'id':id},
        success:function(data)
        {
            popup(data);
        }
       })
    }

    function print_all()
    {
       $.ajax({
        url:base_url+"Member/print_invest_all",
        type:"POST",      
        success:function(data)
        {
            popup(data);
        }
       })
    }

    function popup(data) {
        var frame1 = $('<iframe />');
        frame1[0].name = "frame1";
        frame1.css({
            "position": "absolute",
            "top": "-1000000px"
        });
        $("body").append(frame1);
        var frameDoc = frame1[0].contentWindow ? frame1[0].contentWindow : frame1[0].contentDocument.document ? frame1[0].contentDocument.document : frame1[0].contentDocument;
        frameDoc.document.open();
        //Create a new HTML document.
        frameDoc.document.write('<html>');
        frameDoc.document.write('<head>');
        frameDoc.document.write('<title></title>');
        frameDoc.document.write('<link rel="stylesheet" href="' + base_url + 'backend/bootstrap/css/bootstrap.min.css">');
        frameDoc.document.write('<link rel="stylesheet" href="' + base_url + 'backend/dist/css/font-awesome.min.css">');
        frameDoc.document.write('<link rel="stylesheet" href="' + base_url + 'backend/dist/css/ionicons.min.css">');
        frameDoc.document.write('<link rel="stylesheet" href="' + base_url + 'backend/dist/css/AdminLTE.min.css">');
        frameDoc.document.write('<link rel="stylesheet" href="' + base_url + 'backend/dist/css/skins/_all-skins.min.css">');
        frameDoc.document.write('<link rel="stylesheet" href="' + base_url + 'backend/plugins/iCheck/flat/blue.css">');
        frameDoc.document.write('<link rel="stylesheet" href="' + base_url + 'backend/plugins/morris/morris.css">');
        frameDoc.document.write('<link rel="stylesheet" href="' + base_url + 'backend/plugins/jvectormap/jquery-jvectormap-1.2.2.css">');
        frameDoc.document.write('<link rel="stylesheet" href="' + base_url + 'backend/plugins/datepicker/datepicker3.css">');
        frameDoc.document.write('<link rel="stylesheet" href="' + base_url + 'backend/plugins/daterangepicker/daterangepicker-bs3.css">');
        frameDoc.document.write('</head>');
        frameDoc.document.write('<body>');
        frameDoc.document.write(data);
        frameDoc.document.write('</body>');
        frameDoc.document.write('</html>');
        frameDoc.document.close();
        setTimeout(function() {
            window.frames["frame1"].focus();
            window.frames["frame1"].print();
            frame1.remove();
        }, 500);

        return true;
    }
   
</script>