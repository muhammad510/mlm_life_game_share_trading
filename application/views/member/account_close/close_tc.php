<div id="succ"></div>
<div id="close_">
    <?php
    $amount = 0;
    foreach ($share as $i => $sh) : $amount = $amount + $sh['topup_amount'];
    endforeach; ?>

    &nbsp;&nbsp;
    <strong>MR/MRS&nbsp;&nbsp;:<span><?php echo $member['name'] . '(' . $member['id'] . ')'; ?></span></strong>
    <p style=" text-indent: 50px;">Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptates dignissimos maxime quos veniam repellendus consequatur corrupti animi iusto dolore quae cumque et ullam aut ratione voluptas, error corporis tempore enim sed. Esse suscipit amet iste veritatis animi fugiat similique incidunt at maiores velit vitae exercitationem quasi, odio, placeat itaque assumenda rerum sed blanditiis. Optio nisi quis molestiae impedit eveniet animi, adipisci rem sint excepturi deserunt aut facere molestias culpa perferendis magni aspernatur similique dolores mollitia voluptatibus aliquid rerum labore id consequuntur. Autem consequuntur dolorum voluptatem optio distinctio reiciendis consectetur, obcaecati voluptatum porro eos delectus ea fuga dolore magnam ratione iusto!</p>

    <p class="text-center"><span><strong>Total Investment:&nbsp;&nbsp;</strong></span><span></span><?php echo $amount; ?></p>
    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Totam, illo error eligendi facilis quod facere laudantium asperiores dolorem quasi nisi eveniet perspiciatis cumque natus voluptas ex, doloremque quaerat voluptatem corrupti molestiae minus rem beatae id deserunt eum. Fugiat, labore accusantium, sit non error doloribus velit quos officiis eligendi fugit autem illum. Eos mollitia, quam quaerat labore sit consequatur dignissimos ab velit consectetur saepe quisquam animi sapiente enim neque. Dolorum dolor, ullam nihil ducimus veritatis eius nostrum molestiae! Eum maxime fuga ut, laborum harum facilis molestiae porro, ipsum quidem quaerat, nulla quasi laudantium eos iste quod tempora incidunt debitis. Ipsa asperiores aliquam nihil exercitationem alias sequi reiciendis architecto, illum magni quaerat nostrum fugiat vel, laudantium temporibus. Dignissimos, voluptatum? Eum facilis ab quam et distinctio velit sunt! Sit dolorem minus facilis dolore rem delectus ex tempora cum provident consectetur officiis quia voluptate porro, nulla commodi qui dicta sint doloremque accusamus a nobis molestiae! Nemo sint facilis ratione rem aspernatur exercitationem eum! Soluta odit itaque repellendus? Maiores unde tempore libero quae eaque! Inventore, magni nam commodi aliquid architecto quas distinctio dolorum vel, nobis eius esse, perspiciatis repellat eveniet dolorem fugiat ab quam recusandae in et! Vero minus, ex pariatur sit dolor cum magnam!</p>
<?php if($close_info==''):?>

    <a id="close_account" href="javascript:void(0);" class="btn btn-danger">Close Acount</a>
    <?php endif;?>


</div>


<script>
    // $(document).ready(function() {
    //     $.ajax({
    //         type: "post",
    //         url: base_url + "Member/check_closed_account",
    //         dataType:"json",
    //         success: function(data) {
    //             if (data.icon=='success') {
    //                 $('#close_').hide();
    //                 $("#succ").html(data.text);
    //             }
    //             // location.reload(true);
    //         }
    //     })

    // });


    $(document).on('click', '#close_account', function() {

        if (confirm("Are You sure to close your account?")) {
            $.ajax({
                type: "post",
                url: base_url + "Member/closed_account",
                success: function(data) {
                  

                       if (Popup(data))
                       {
                        $('#close_account').hide();
                        $("#succ").html("<p>Your account close successfully</p>")
                       }
                   
                    // location.reload(true);
                }

            })

        }



    });

    function Popup(data) {
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