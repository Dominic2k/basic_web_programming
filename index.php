<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP</title>
    <style>
        .form_score {
            background-color: #ccc;
            width: 300px;
        }
        .title {
            color: blue;
        }
        .kq {
            color: red;
        }
    </style>
</head>
<body>
    <?php
        error_reporting(0) ;
        function check_svg($number1, $number2, $y) {
            $svg = 0;
            
            if ($y == 1) {
                $svg = ($number1 + $number2) / 2;
            }elseif ($y == 2) {
                $svg = ($number1 + ($number2 * 2) ) / 3;
            }
            return $svg;
        }
        $smt1 = $_POST['smt1'];
        $smt2 = $_POST['smt2'];
        $year = $_POST['year'];
        $result = check_svg($smt1, $smt2, $year);
        $kq = "";
        if($result > 8) {
            $kq = "Học sinh giỏi";
        }elseif ($result > 5) {
            $kq = "Học sinh khá";
        }elseif ($result > 3) {
            $kq = "Học sinh trung bình";
        }else {
            $kq = "Học sinh yếu kém tệ hại";
        }
    ?>
    <form class="form_score" action="index.php" method="POST">
        <p class="title">Bảng điểm của em</p>
        <label for="">Semester1: 
            <input class="input" type="number" name="smt1" value="<?php echo $smt1; ?>">
        </label>
        <br>
        <label for="">Semester2: 
            <input class="input" type="number" name="smt2" value="<?php echo $smt2; ?>">
        </label>
        <br>
        <label for="" class="input">Year: 
            <select name="year">
                <option value="1" <?php echo ($year == 1) ? 'selected' : ''; ?> >1</option>
                <option value="2" <?php echo ($year == 2) ? 'selected' : ''; ?> >2</option>
                <?php
                
                ?>
            </select>
        </label>
        <br>
        <label for="">Sumarise:
            <input class="sumarise" type="number" name="sumarise" disabled value="<?php echo $result; ?>">
        </label>
        <br>
        <p class='kq'> <?php echo $kq; ?></p>
        <button type="submit">Ok</button>
        <button type="reset" onclick="window.location.href='http://localhost/dat_php/index.php'">Cancel</button>
    </form>
</body>
</html>

