<?php
session_start();
if (!isset($_SESSION['username'])) {
    header('location:login.php');
    exit();
}
?>
<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>MarketPlace</title>
</head>
<body>
    <h1 class="text-center text-warning mt-2">Hello <?php echo htmlspecialchars($_SESSION['username']); ?>, Welcome To Marketplace</h1>

    <div class="container">
        <a href="logout.php" class="btn btn-primary mt-5">Logout</a>

        <h1>Hypermarket Pricing Calculator</h1>
        <form action="marketplace.php" method="post">
            <div id="product-forms">
                <div class="product-form">
                    <div>
                        <label for="product text-success">Product Name:</label>
                        <input type="text" name="product[]" required class="mt-2">
                    </div>
                    <div>
                        <label for="buying_price">Buying Price:</label>
                        <input type="number" step="0.01" name="buying_price[]" required class="mt-2">
                    </div>
                    <div>
                        <label for="vat">VAT (%):</label>
                        <input type="number" step="0.01" name="vat[]" required class="mt-2">
                    </div>
                    <div>
                        <label for="general_expenses">General Expenses (%):</label>
                        <input type="number" step="0.01" name="general_expenses[]" required class="mt-2">
                    </div>
                    <div>
                        <label for="profit_margin">Profit Margin (%):</label>
                        <input type="number" step="0.01" name="profit_margin[]" required class="mt-2">
                    </div>
                </div>
            </div>
            <!-- <button type="button" onclick="addProduct()" class="btn btn-secondary mt-3">Add Another Product</button> -->
            <button type="submit" name="calculate" class="btn btn-primary mt-3">Calculate Prices</button>
        </form>

        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $products = $_POST['product'];
            $buying_prices = $_POST['buying_price'];
            $vats = $_POST['vat'];
            $general_expenses = $_POST['general_expenses'];
            $profit_margins = $_POST['profit_margin'];
            echo "<h2>Pricing Results</h2>";
            echo "<table class='table table-bordered'>";
            echo "<tr><th>Product</th><th>Buying Price</th><th>VAT</th><th>General Expenses</th><th>Profit Margin</th><th>Selling Price</th></tr>";

            for ($i = 0; $i < count($products); $i++) {
                $product = htmlspecialchars($products[$i]);
                $buying_price = floatval($buying_prices[$i]);
                $vat = floatval($vats[$i]);
                $general_expense = floatval($general_expenses[$i]);
                $profit_margin = floatval($profit_margins[$i]);

                $vat_amount = ($vat / 100) * $buying_price;
                $general_expense_amount = ($general_expense / 100) * $buying_price;
                $profit_margin_amount = ($profit_margin / 100) * $buying_price;

                $selling_price = $buying_price + $vat_amount + $general_expense_amount + $profit_margin_amount;

                echo "<tr>
                        <td>$product</td>
                        <td>Ksh $buying_price</td>
                        <td>Ksh $vat_amount</td>
                        <td>ksh $general_expense_amount</td>
                        <td>ksh $profit_margin_amount</td>
                        <td>Ksh $selling_price</td>
                      </tr>";
            }
            echo "</table>";
        }
        ?>

        <!-- <script>
            function addProduct() {
                const productForms = document.getElementById('product-forms');
                const productForm = document.createElement('div');
                productForm.classList.add('product-form');
                productForm.innerHTML = `
                    <hr>
                      <h2 class="text-success m-2">Adding Another product</h2>
                    <div>
                        <label for="product">Product Name:</label>
                        <input type="text" name="product[]" required class="mt-2">
                    </div>
                    <div>
                        <label for="buying_price">Buying Price:</label>
                        <input type="number" step="0.01" name="buying_price[]" required class="mt-2">
                    </div>
                    <div>
                        <label for="vat">VAT (%):</label>
                        <input type="number" step="0.01" name="vat[]" required class="mt-2">
                    </div>
                    <div>
                        <label for="general_expenses">General Expenses (%):</label>
                        <input type="number" step="0.01" name="general_expenses[]" required class="mt-2">
                    </div>
                    <div>
                        <label for="profit_margin">Profit Margin (%):</label>
                        <input type="number" step="0.01" name="profit_margin[]" required class="mt-2">
                    </div>
                `;
                productForms.appendChild(productForm);
            }
        </script> -->
    </div>
</body>
</html>
