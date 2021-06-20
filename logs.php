<?php
$rh = $_REQUEST["Degree"];
$arr = array();
foreach($_POST['Degree'] as $r) {
  array_push($arr, $r);
}
$data = file_get_contents('https://NeutralizeCarbon.neeltron.repl.co/input_web?rh='.$arr[0].'&ah='.$arr[1].'&vh='.$arr[2]);
echo $data;
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Guarden</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/bbbootstrap/libraries@main/choices.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.3/css/all.css"
        integrity="sha384-SZXxX4whJ79/gErwcOYf+zWLeJdY/qpuqC4cAa9rOGUstPomtqpuNWT9wdPEn2fk" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/logs.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.3/css/all.css"
        integrity="sha384-SZXxX4whJ79/gErwcOYf+zWLeJdY/qpuqC4cAa9rOGUstPomtqpuNWT9wdPEn2fk" crossorigin="anonymous">
</head>

<body>
    <nav>
        <a class="logo" href="./index.html">
            <img src="./img/logo.svg" alt="Logo" width="70px" height="70px">
            Guarden
        </a>
        <div class="buttons">
            <a class="signIn" href="./consumption.html">Check Consumption</a>
            <a class="signUp" href="./remedies.html">Check Remedies</a>
        </div>
    </nav>

    <main>
        <div class="form-body">
            <div class="row">
                <div class="form-holder">
                    <div class="form-content">
                        <div class="form-items">
                            <h3>Your Carbon Footprint</h3>
                            <p>Fill in the data below.</p>

                            <form method = "post" action = "https://FunctionalPrevailingQuadrants.neeltron.repl.co/logs.php" class="requires-validation" novalidate style="flex-direction: column;">

                                <div id="insert_field">
                                    <div class="field" style="display: flex">
                                        <div class="form-group">
                                            <div class="input-group">
                                                <select class="form-control" id="form">
                                                    <option value="Appliance">Appliance</option>
                                                    <option value="Refrigerator">Refrigerator</option>
                                                    <option value="AC">AC</option>
                                                    <option value="Vehicle">Vehicle</option>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="nopadding">
                                            <div class="form-group">
                                                <input type="number" class="form-control" id="Degree" name="Degree[]"
                                                    value="" placeholder="Hours Used">
                                            </div>
                                        </div>

                                        <div class="input-group-btn">
                                            <button class="btn btn-success" type="button" onclick="new_field();"><i
                                                    class="fa fa-plus" aria-hidden="true"
                                                    style="margin: 13px;"></i></button>
                                        </div>

                                    </div>


                                </div>

                            
                            <div class="form-button mt-3">
                                <button id="submit" type="submit" class="btn btn-primary">Submit</button>
                            </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</body>

<script src="http://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js" type="text/javascript"></script>
<script src="https://cdn.jsdelivr.net/gh/bbbootstrap/libraries@main/choices.min.js"></script>
<script src="./js/script.js"></script>

</html>