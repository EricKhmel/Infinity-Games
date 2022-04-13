<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Infinity Games</title>
    <style>
        ul {
            list-style-type: none;
            margin: 0;
            padding: 0;
            overflow: hidden;
            background-color: #333;
        }

        li {
            float: left;
        }

        lir {
            float: right;
        }

        li a {
            display: block;
            color: white;
            text-align: center;
            padding: 14px 16px;
            text-decoration: none;
        }

            li a:hover {
                background-color: #111;
            }
    </style>
</head>

    <body style="font-family:monospace">
    <nav>
        <ul>
            <li><img src="images/logo2.png" width="75" height="44"></li>
            <li><a href="index.php">Home</a></li>
            <li><a href="request.php">Request a Game</a></li>
            <li><a href="browse.php">Browse</a></li>
            <lir>
              <input type="text" id="search" placeholder="Search">
              <a href=""><button style="margin-right:25px; margin-top: 13px;" type="button">
                <img src="https://static.thenounproject.com/png/424965-200.png" width="10" height="10"></button>
              </a>
            </lir>
            <li><a href="login.php">Login</a></li>
        </ul>
    </nav>


        <h1 style="font-family: monospace">
            Request A Game
        </h1>

        <form style="font-family: monospace">
            <label for="title">Title: </label>
            <input type="text" id="title" name="title"><br><br>
            <label for="publisher">Publisher: </label>
            <input type="text" id="publisher" name="publisher"><br><br>
            <label for="year">Release Year: </label>
            <input type="text" id="year" name="year"><br><br>
            <input type="submit" value="Submit">
        </form>
    </body>

</html>