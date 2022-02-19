<html>
    <head>
        <title>Filtered Table - Assignment03</title> <!--Page title-->
        <link rel="stylesheet" href="styles.css"> <!--Link to external stylesheet used.-->
        <link rel="preconnect" href="https://fonts.gstatic.com"><!--External fonts imported from fonts.google.com-->
        <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@700&family=Della+Respira&family=Montserrat&display=swap" rel="stylesheet">
    </head>
    <body>
        <h1>Filtered Table</h1>  <!--Main heading of page-->
        <?php 

            /**
             * This page displays filtered table by category based on user's choice.
             * Data is displayed in a table with the heading being the name of the category that the user picked.
             */

            require 'connect.php';    //connection to the database is required before any action can take place

            $category = $_POST["categoryName"];  //user's choice for name of category is collected and assigned to a variable $category.
            
            //select query which retrieves data from table by categories is assigned to the variable $sql
            $sql = "SELECT * FROM products WHERE category='$category'";
            
            $result = mysqli_query($mysqli, $sql);  //$result is a reference to the number of rows returned.
            
            if (!mysqli_query($mysqli, $sql))
            {
            /* if mysqli_query() returns FALSE it means an error occurred */
                echo 'Query error: ' . mysqli_error($mysqli);
            }

            $rows = $result->fetch_all(MYSQLI_ASSOC);  //$rows is the number of rows containing data that matches select criteria in table.

            //table is displayed with table headers for the specific category chosen by the user.
            echo '<h2>'.$category.'</h2>';
            echo '<table>';
            echo '<tr>';
            echo '<th>Code</th>';
            echo '<th>Name</th>';
            echo '<th>Price</th>';
            echo '</tr>';
            foreach($rows as $row) {  //all rows containing the data retrieve are displayed in the table.
                echo //'<td>'.$row['category'].'</td>',
                '<td>'. $row['code'].'</td>',
                '<td>'. $row['name'].'</td>',
                '<td>'. $row['price'].'</td>';
                echo '</tr>';
            }
            //Navigation button that returns user to main page.
            echo '<button class="addProductButton"><a href="http://localhost:4434/Assignment03/mainPage.php">Return to Main Page</a></button>';
            //Navigation button that returns user to page where user chooses filter option.
            echo '<button><a href="http://localhost:4434/Assignment03/filterByCategory.html">Return to Filter Page</a></button>';
        ?>
    </body>
</html> <!--eof: displayByCategory.php-->
