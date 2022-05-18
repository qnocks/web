<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Нейросути</title>
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>

<header class="header">
    <div class="container">
        <div class="header__inner">
            <a href="index.html" class="header__logo"><div>Нейросути</div></a>

            <nav class="nav">
                <a class="nav__link" href="second.html">Как это работает?</a>
                <a class="nav__link" href="sources.html">Источники информации</a>
                <a class="nav__link" href="javascript.html">JavaScript</a>
                <a class="nav__link" href="#">Анкета</a>
                <a class="nav__link" href="db.php">БД</a>
                <a class="nav__link" href="#">XML</a>
            </nav>
        </div>
    </div>
</header>


<div class="intro">
    <div class="container">
        <div class="intro__inner">
            <h2 class="intro__suptitle">Работа с базой данных</h2>
            <h1 class="intro__title">PHP</h1>

            <a class="btn" href="second.html">Подробнее</a>
        </div>
    </div>
</div><!-- /.intro -->
    <h2>List of Neural network types</h1>
    <br>
    <table class="table">
        <thead>
			<tr>
				<th>ID</th>
				<th>Name</th>
				<th>Year</th>
				<th>Author's first name</th>
				<th>Author's last name</th>
			</tr>
		</thead>

        <tbody>
            <?php
            $servername = "localhost";
			$username = "root";
			$password = "";
			$database = "suai-web";

			// Create connection
			$connection = new mysqli($servername, $username, $password, $database);

            // Check connection
			if ($connection->connect_error) {
				die("Connection failed: " . $connection->connect_error);
			}

			$sql = "SELECT * FROM neural_network_type";
			$result = $connection->query($sql);

            if (!$result) {
				die("Invalid query: " . $connection->error);
			}

            // read data of each row
			while($row = $result->fetch_assoc()) {
                echo "<tr>
                    <td>" . $row["id"] . "</td>
                    <td>" . $row["name"] . "</td>
                    <td>" . $row["year"] . "</td>
                    <td>" . $row["author_first_name"] . "</td>
                    <td>" . $row["author_last_name"] . "</td>
                </tr>";
            }

            $connection->close();
            ?>
        </tbody>
    </table>

    <hr>

    <h2>List of Neural network</h1>

    <table class="table">
        <thead>
			<tr>
				<th>ID</th>
				<th>Name</th>
				<th>Year</th>
                <th>Type ID</th>
                <th>Author's first name</th>
                <th>Author's last name</th>
			</tr>
		</thead>

        <tbody>
            <?php
            $servername = "localhost";
			$username = "root";
			$password = "";
			$database = "suai-web";

			// Create connection
			$connection = new mysqli($servername, $username, $password, $database);

            // Check connection
			if ($connection->connect_error) {
				die("Connection failed: " . $connection->connect_error);
			}

			$sql = "SELECT * FROM neural_network";
			$result = $connection->query($sql);

            if (!$result) {
				die("Invalid query: " . $connection->error);
			}

            // read data of each row
			while($row = $result->fetch_assoc()) {
                echo "<tr>
                    <td>" . $row["id"] . "</td>
                    <td>" . $row["name"] . "</td>
                    <td>" . $row["year"] . "</td>
                    <td>" . $row["type_id"] . "</td>
                    <td>" . $row["author_first_name"] . "</td>
                    <td>" . $row["author_last_name"] . "</td>
                </tr>";
            }

            $connection->close();
            ?>
        </tbody>
    </table>
</body>
</html>
