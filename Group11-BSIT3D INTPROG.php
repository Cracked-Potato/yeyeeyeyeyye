
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Group 11</title>
    <style>
        /* CSS styles for the page */
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: lightskyblue;
        }

        header {
            background-color: darkgreen;
            color: white;
            padding: 10px 20px;
            text-align: center;
        }

        .container {
            padding-top: 30px;
            align-items: center;
            display: flex;
            border-radius: 10px;
            max-width: 1200px;
            margin: 100px auto;
            padding: 20px;
            background: white;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        }

        .team-member {
            display: flex;
            align-items: center;
            margin-bottom: 20px;
            padding: 10px;
            border: 1px solid #ddd;
            border-radius: 10px;
        }

        .team-member img {
            border-radius: 10px;
            width: 100px;
            height: 150px;
            margin-right: 15px;
        }

        .team-member h3 {
            margin: 0;
            font-size: 1.2em;
        }

        .team-member p {
            margin: 5px 0;
            color: #555;
        }

        .btn {
            display: inline-block;
            padding: 10px 15px;
            margin-top: 10px;
            color: white;
            background-color: lightskyblue;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        .btn:hover {
            background-color: darkgreen;
        }
    </style>
</head>
<body>

<header>
    <h1>Meet Our Team</h1>
</header>

<div class="container">

    <?php
  
    $team = [
        ['name' => 'Paul Riceann Castro', 'role' => 'Bahay Provider', 'img' => 'paul.jpg'],
        ['name' => 'Lorenz Gabriel Diaropa', 'role' => 'Unan Provider', 'img' => 'lorenz.jpg'],
        ['name' => 'John Gabriel Edma', 'role' => 'Pancit Canton Provider', 'img' => 'gab.jpg'],
        ['name' => 'Jhercy Commbras', 'role' => 'Pancit Canton Cooker', 'img' => 'jhercy.jpg'],
        ['name' => 'Adrian Javier', 'role' => 'Food Eater', 'img' => 'adi.jpg']
    ];

    foreach ($team as $member) {
        echo '
        <div class="team-member">
            <img src="' . $member['img'] . '" alt="' . $member['name'] . '">
            <div>
                <h3>' . $member['name'] . '</h3>
                <p>' . $member['role'] . '</p>
                <button class="btn" onclick="showAlert(\'' . $member['name'] . '\')">Say Hi</button>
            </div>
        </div>
        ';
    }
    ?>
</div>

<script>
 
    function showAlert(name) {
        alert('Hello Master, ' + name + '!');
    }
</script>

</body>
</html>


