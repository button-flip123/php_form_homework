<?php 
        function checkSubmit():void{
            if(isset($_GET['submit_masa'])){
            $masa = $_GET['masa'];
            $rezultat = $masa * 10;
            echo '<p style="font-family:"Roboto Slab"; font-size:14px;">Masa je: '.$rezultat.'</p>';
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>forma_zadaca</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Roboto+Slab:wght@100..900&display=swap');
        @import url('https://fonts.googleapis.com/css2?family=Nanum+Gothic&display=swap');
        .header.header{
            height: 100vh;
            width: 100%;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .header .weight-calculation{
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
            width: 50%;
            background-color: aliceblue;
            border-radius: 20px;
        }

        .header #masa_label{
            font-family: 'Roboto Slab';
            font-size: 14px;
        }

        .header #naslov{
            text-align: center;
            margin-top: 10px;
            font-family: 'Nanum Gothic';
            font-size: 28px;
        }

        .header #submit_btn{
            display: flex;
            justify-content: center;
            align-items: center;
            border: none;
            background-color:darkcyan;
            color: white;
            padding: 15px 32px;
            text-align: center;
            text-decoration: none;
            font-size: 12px;
            font-family: 'Roboto Slab';
            border-radius: 40px;
        }

        .header #submit_btn:hover{
            background-color: lightskyblue;
            color: black;
        }
    </style>
</head>
<body>
    <header class="header">
        <div class="weight-calculation">
            <form action="" method="GET">
                <h3 id = "naslov">Calculator of weight</h3>
                <div class="mb-4 mt-4" style="margin-left:10px;">
                    <label for="masa" class = "form-label" id="masa_label">Unesite masu:</label>
                    <input type="number" id="masa" name="masa" class="form-control">
                </div>

                <div class="mb-4 mt-2" style="margin-left:10px; font-family:'Roboto Slab'; font-family: 14px;">
                    <?php checkSubmit(); ?>
                </div>

                <div class="mb-4 mt-2" style="margin-left:10px;">
                    <button type="submit" name="submit_masa" id="submit_btn">Submit</button>
                </div>
            </form>
        </div>
    </header>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>  
</body>
</html>