<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <style>
        .wrapper {
            position: relative;
        }

        .gold-box {
            position: absolute;
            z-index: 6;
            width: 80px;
            left: 95px;
            top: -13em;
            font-size: 12px;
            font-weight: bold;
        }

        .gold-box-2 {
            position: absolute;
            z-index: 6;
            width: 80px;
            left: 260px;
            top: -25em;
            font-size: 12px;
        }

        .gold-box-3 {
            position: absolute;
            z-index: 6;
            width: 200px;
            left: 20px;
            top: -28em;
            font-size: 12px;
            font-weight: bold;
        }

        .gold-box-image {
            position: absolute;
            z-index: 6;
            width: 200px;
            left: 70px;
            top: -19em;
        }
    </style>
</head>

<body>
    <div class="container mt-5">
        <img src="/format/<?php echo $simper->coorporate_images; ?>" alt="background" width="50%">

        <div class="wrapper">
            <div class="gold-box-image">
                <img src="/photo/<?php echo $simper->images_emp; ?>" alt="photo" width="50%">
            </div>
        </div>

        <div class="wrapper">
            <table style="width:200px;" class="gold-box-3">
                <tr>
                    <td style="text-align: center;"><?php echo $simper->name_emp ?></td>
                </tr>
            </table>
        </div>

        <div class="wrapper">
            <table style="width:600px" class="gold-box">
                <tr>
                    <td><?php echo $simper->nik ?></td>
                </tr>
                <tr>
                    <td>PT HJF</td>
                </tr>
                <tr>
                    <td><?php echo $simper->position_name ?></td>
                </tr>
                <tr>
                    <td><?php echo $simper->dept_name ?></td>
                </tr>
                <tr>
                    <td><?php echo date('d F Y'); ?></td>
                </tr>
                <tr>
                    <?php for ($i = count($detail); $i >= 0; $i--) {
                        if ($i == 0) { ?>
                            <td><?php echo date('d F Y', strtotime($detail[$i]->issue_date)); ?></td>
                    <?php
                            //break;
                        }
                    } ?>
                </tr>
                <tr>
                    <td>PT.<?php echo $simper->coorporate_name ?>-SIM-<?php echo $simper->id ?></td>
                </tr>
            </table>
        </div>


        <div class="wrapper">
            <table style="width:200px" class="gold-box-2">
                <?php foreach ($detail as $d) {  ?>
                    <tr style="text-align: center;">
                        <td><?php echo $d->unit_name; ?></td>
                        <td><?php echo $d->issue_date; ?></td>
                    </tr>
                <?php } ?>
            </table>
        </div>
    </div>
</body>

</html>