<?php
// Include config file
require_once 'config.php';

// Define variables and initialize with empty values
$name = $description =  "";
$name_err = $description_err  = "";

// Processing form data when form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Validate name
    $name = trim($_POST["name"]);
    if (empty($name)) {
        $name_err = "Please enter a name.";
    } elseif (!filter_var(trim($_POST["name"]), FILTER_VALIDATE_REGEXP, array("options" => array("regexp" => "/^[a-zA-Z'-.\s ]+$/")))) {
        $name_err = 'Please enter a valid name.';
    } else {
        $name = $input_name;
    }
    // Validate description
    $description = trim($_POST["description"]);
    if (empty($input_product_code)) {
        $product_code_err = "Please enter a description.";
    } elseif (!filter_var(trim($_POST["description"]), FILTER_VALIDATE_REGEXP, array("options" => array("regexp" => "/^[a-zA-Z'-.\s ]+$/")))) {
        $product_code_err = 'Please enter a valid description.';
    } else {
        $description = $input_description;
    }

//     // Validate price
//     $input_product_price = trim($_POST["product_price"]);
//     if (empty($input_product_price)) {
//         $product_price_err = "Please enter a name.";
//     } elseif (!filter_var(trim($_POST["product_price"]), FILTER_VALIDATE_REGEXP, array("options" => array("regexp" => "/^[a-zA-Z'-.\s ]+$/")))) {
//         $product_price_err = 'Please enter a valid name.';
//     } else {
//         $product_price = $input_product_price;
//     }
// // Validate image
// $input_product_image = trim($_POST["product_image"]);
// if (empty($input_product_image)) {
//     $product_image_err = "Please enter a name.";
// } elseif (!filter_var(trim($_POST["product_image"]), FILTER_VALIDATE_REGEXP, array("options" => array("regexp" => "/^[a-zA-Z'-.\s ]+$/")))) {
//     $product_image_err = 'Please enter a valid name.';
// } else {
//     $product_image = $input_image_code;
// }
// // Validate password
// $input_product_qty = trim($_POST["product_qty"]);
// if (empty($input_product_qty)) {
//     $product_qty_err = "Please enter a name.";
// } elseif (!filter_var(trim($_POST["product_qty"]), FILTER_VALIDATE_REGEXP, array("options" => array("regexp" => "/^[a-zA-Z'-.\s ]+$/")))) {
//     $product_qty_err = 'Please enter a valid name.';
// } else {
//     $product_qty = $input_qty_code;
}
    // Check input errors before inserting in database
    // if (empty($name_err) && empty($avatar_err) && empty($email_err) && empty($address_err)) {
        // Prepare an insert statement
        $sql = "INSERT INTO categories (name, description) VALUES (?,?)";

        if ($stmt = $mysqli->prepare($sql)) {
            // Bind variables to the prepared statement as parameters
            $stmt->bind_param("ss", $name,$description );
            // Set parameters
            $name = $input_name;
            $description = $input_description;
         
        
            // Attempt to execute the prepared statement
            if ($stmt->execute()) {
                // Records created successfully. Redirect to landing page
                header("location: index.php");
                exit();
            } else {
                echo "Something went wrong. Please try again later.";
            }
        }

        // Close statement
        $stmt->close();
    

    // Close connection
    $mysqli->close();

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Create Record</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <style type="text/css">
        .wrapper {
            width: 500px;
            margin: 0 auto;
        }
    </style>
</head>

<body>
    <div class="wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="page-header">
                        <h2>Create Record</h2>
                    </div>
                    <p>Please fill this form and submit to add user record to the database.</p>
                    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
                        <div class="form-group <?php echo (!empty($name_err)) ? 'has-error' : ''; ?>">
                            <label>Product Name</label>
                            <input type="text" name="name" class="form-control" value="<?php echo $name; ?>">
                            <span class="help-block">
                                <?php echo $name_err; ?>
                            </span>
                        </div>

                        <!-- <div class="form-group <?php echo (!empty($product_code_err)) ? 'has-error' : ''; ?>">
                            <label>Product Code</label>
                            <input type="text" name="product_code" class="form-control" value="<?php echo $product_code; ?>">
                            <span class="help-block">
                                <?php echo $product_code_err; ?>
                            </span>
                        </div>
                     

                        <div class="form-group <?php echo (!empty($product_price_err)) ? 'has-error' : ''; ?>">
                            <label>Product Name</label>
                            <input type="text" name="product_name" class="form-control" value="<?php echo $product_name; ?>">
                            <span class="help-block">
                                <?php echo $product_name_err; ?>
                            </span>
                        </div>
                        <div class="form-group <?php echo (!empty($product_name_err)) ? 'has-error' : ''; ?>">
                            <label>Product Name</label>
                            <input type="text" name="product_name" class="form-control" value="<?php echo $product_name; ?>">
                            <span class="help-block">
                                <?php echo $product_name_err; ?>
                            </span>
                        </div>
                       
                    
                        <input type="submit" class="btn btn-primary" value="Submit">
                        <a href="index.php" class="btn btn-default">Cancel</a>
                    </form>
                </div>
            </div>
        </div>
    </div> -->
</body>

</html>