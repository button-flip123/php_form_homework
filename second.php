<?php 
    function calculateBMI():void{
        if(isset($_POST['button_submit'])){
            $masa = $_POST['masa'];
            $visina = $_POST['visina'];
            $result = $masa / pow($visina,2);
            echo '<p step = 0.1 style="font-family: "Roboto Slab"; font-size:"12px" ">Vas Body Mass Index je: '.$result.'</p>';
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>bmi calculator</title>
</head>
<body>
    <header class="header">
        <div class="bmi-box">
            <form action="" method="POST">
                <h3 id = "naslov">BMI Calculator</h3>
                <div class="mt-3 mb-3">
                    <label for="visina" class="form-label" id="text_label">Unesite visinu: </label>
                    <input type="number" name="visina" step=any id="visina_input_box" class="form-control">
                </div>

                <div class="mt-3 mb-3">
                    <label for="masa" class="form-label" id="text_label">Unesite masu: </label>
                    <input type="number" name="masa" step=0.1 id="masa_input_box" class="form-control">
                </div>

                <div class="mt-3 mb-3">
                    <?php calculateBMI(); ?>
                </div>

                <div class="mt-3 mb-3">
                    <button type="submit" name="button_submit" id = "button_submit">Submit</button>
                </div>
            </form>
        </div>
    </header>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>