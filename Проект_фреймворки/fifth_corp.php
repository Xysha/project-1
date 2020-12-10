<!DOCTYPE html>
<html lang="ru">
<?php
               $connection=mysqli_connect('server80.hosting.reg.ru', 'u1233910_default', 'r!00bH5u', 'u1233910_default');
                if($connection == 0)
                {
                    echo 'Error';
                    echo mysqli_connect_error();
                    exit();
                }
?>
<head>
    <meta charset="UTF-8">
    <title>Корпус 1</title>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"
        integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
        crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
        integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"
        integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy"
        crossorigin="anonymous"></script>
    <link rel="stylesheet" href="corpusa.css">
</head>
<body class="body">
    <h1 class="title">
        Корпус 5
    </h1>
    <div class="menu">
        <a class="corpus" href="index.html">Главная</a>
        <a class="corpus first_corp" href="first_corp.html">Корпус 1</a>
        <a class="corpus" href="third_corp.html">Корпус 3</a>
        <a class="corpus" href="fifth_corp.html">Корпус 5</a>
    </div>
    <div class="container">
        <div class="row">


            <div class="function">
              <h2 class="request">Забронируйте машинку</h2>
                <form class="form">
                    <input class="line" type="text" name="number_sm" placeholder="Номер">
                    <input class="line" type="text" name="time_start" placeholder="начало">
                    <input class="line" type="text" name="timing" placeholder="срок">
                    <input class="button" type="button" value="Отправить">
                </form>
            
                <!--<label for="customRange3">Стиральная машина №</label>
                            <input type="range" class="custom-range" min="0" max="5" step="1" id="customRange3">-->
            
            </div>
            
          <?php
                $sql = 'SELECT * FROM `washer` WHERE 1';
                $res=mysqli_query($connection, $sql);
                $ind = 0;
                while($washer = mysqli_fetch_array($res)){
                    echo '<tr class="block' . ++$ind . '">
                    <tr class="block block_03">
                            <th>Стиралка 2</th>
                            <th>Этаж 3</th>
                            <th>Занято</th>
                            <th>13:45</th>
                        </tr>';
                }
            ?>

            <div class="visual">
                <div class="stiralki">
                    <table class="table_row">
                        <!-- <tr class="block block_01">
                            <th>Стиралка 1</th>
                            <th>Этаж 1</th>
                            <th>Свободно</th>
                            <th>--</th>
                        </tr>
                        <tr class="block block_02">
                            <th>Стиралка 1</th>
                            <th>Этаж 5</th>
                            <th>Свободно</th>
                            <th>--</th>
                        </tr> -->
                        <tr class="block block_03">
                            <th>Стиралка 2</th>
                            <th>Этаж 3</th>
                            <th>Занято</th>
                            <th>13:45</th>
                        </tr>
                        <tr class="block block_04">
                            <th>Стиралка 1</th>
                            <th>Этаж 4</th>
                            <th>Занято</th>
                            <th>21:23</th>
                        </tr>
                    </table>
                </div>
            </div>

        </div>
    </div>
</body>


</html>



