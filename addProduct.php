<html>
    <head>
        <title>Add Product - Assignment03</title> <!--Page title-->
        <link rel="stylesheet" href="styles.css"> <!--Link to external stylesheet-->
        <link rel="preconnect" href="https://fonts.gstatic.com"><!--External fonts imported from fonts.google.com-->
        <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@700&family=Della+Respira&family=Montserrat&display=swap" rel="stylesheet">
    </head>
    <body>
        <?php
            /**
             * This page provides a form for the users to enter data about a specific product.
             * The page would send the retrieved data to mainPage.php which would add them to the database and then display them in the product list table.
             */
        ?>
        <div class="addProductPage"> <!--div containing elements of class "addProductPage"-->
            <h1>Add Product</h1> <!--Main heading of the page.-->
            <h2>Please enter product information:</h2>
            <form action="http://localhost:4434/Assignment03/mainPage.php" method="POST"> <!--The form gets user input using method "POST", and it redirects the user to the main page.-->
                <span>
                    <table> <!--The form displays a table containing various labels and input fields prompt the user to enter their data(product data).-->
                        <tr>
                            <td><label for="category">Category:</label></td>
                            <td><input type="text" name="category" required></td>
                        </tr>
                        <tr>
                            <td><label for="code" name="code">Code:</label></td>
                            <td><input type="text" name="code" required></td>
                        </tr>
                        <tr>
                            <td><label for="name" name="name">Name:</label></td>
                            <td><input type="text" name="name" required></td>
                        </tr>
                        <tr>
                            <td><label for="price" name="price">Price:</label></td>
                            <td><input type="number" name="price" required></td>
                        </tr>
                        <tr>
                            <!--Navigation button that redirects user to main page.-->
                            <td><button><a href="http://localhost:4434/Assignment03/mainPage.php">Return to Main Page</a></button></td>
                            <!--Button that submits the data from the form to the main page(mainPage.php) for insertion of the data into the database.-->
                            <td><button class="addProduct">Add Product</button></td>
                            <!--Navigation button that redirects user to page the displays various categories for user to choose from to filter the table.-->
                            <td><button><a href="http://localhost:4434/Assignment03/filterByCategory.html">Go to Filter Page</a></button></td>
                        </tr>
                    </table>
                </span>
            </form>
        </div>
    </body>
</html>
<?php 
