<html>
    <head>
        <title>Product List - Assignment03</title>  <!--Page title-->
        <link rel="stylesheet" href="styles.css"> <!--Link to external stylesheet-->
        <link rel="preconnect" href="https://fonts.gstatic.com"><!--External fonts imported from fonts.google.com-->
        <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@700&family=Della+Respira&family=Montserrat&display=swap" rel="stylesheet">
    </head>
    <body>
        <h1>Product List</h1> <!--Main heading of the page-->
    
        <?php 
            /**
             * Author: Abundance Esim
             * This page would display the unfiltered table with products of different categories.
             * It contains two buttons for adding products and for filtering the table by categories.
             * The buttons are links to other pages with appropriate capabilites.
             */
            require 'connect.php'; //this page requires a connection to the database to be created first before any other action can take place.

            error_reporting (E_ALL ^ E_NOTICE);  //ignoring error messages that may show

            $category = $_POST["category"];
            $code = $_POST["code"];
            $name = $_POST["name"];
            $price = $_POST["price"];

            error_reporting (E_ALL ^ E_NOTICE);  //ignoring error messages that may show

            //assign sql insert query to variable $stmt.
            $stmt = $mysqli->prepare("INSERT INTO products VALUES (?, ?, ?, ?)");
            $stmt->bind_param('sssi', $category, $code, $name, $price);  //binding the parameters and corresponding datatypes with the query.
            $stmt->execute();  //the statement is executed.

            //sql query to select all data from products table
            //query is assigned to the variable "$sql".
            $sql = 'SELECT * FROM products';
            $result  = mysqli_query($mysqli, $sql);

            if (!mysqli_query($mysqli, $sql))
            {
            /* if mysqli_query() returns FALSE it means an error occurred */
                echo 'Query error: ' . mysqli_error($mysqli);
            }

            //number of rows is the result of the fetched association
            $rows = $result->fetch_all(MYSQLI_ASSOC);

            //create table with table headings.
            echo '<table class="main">';
            echo '<tr>';
            echo '<th>Category</th>';
            echo '<th>Code</th>';
            echo '<th>Name</th>';
            echo '<th>Price</th>';
            echo '</tr>';
            foreach($rows as $row) {  //for all rows, print out the available information from the database into the table.
                echo '<td>'.$row['category'].'</td>',
                '<td>'. $row['code'].'</td>',
                '<td>'. $row['name'].'</td>',
                '<td>'. $row['price'].'</td>';
                echo '</tr>';
            }

            //this button redirects the user to the page for adding products to the database.
            echo '<button class="addProductButton"><a href="http://localhost:4434/Assignment03/addProduct.php">Add New Product</a></button>'; 
            //this button redirects the user to the page for filtering table results by category.
            echo '<button><a href="http://localhost:4434/Assignment03/filterByCategory.html">Filter by Category</a></button>';
            $mysqli->close(); //connection is closed.
        ?>
    </body> 
</html> <!--eof: mainPage.php-->
