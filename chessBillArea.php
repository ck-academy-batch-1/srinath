<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Todays task</title>
    <style>
        /* Setting the border styles */
        div {
            border: 2px solid black;
            padding: 10px;
        }
    </style>
</head>
<body>
<h1>Chess Board</h1>
<?php
// Define the size of the board
$square = 8;

// Create the HTML for the table
echo "<table style='border: 1px solid black;'>";
for ($i = 0; $i < $square; $i++) {
    // Create a new row for each iteration of the outer loop
    echo "<tr>";
    for ($j = 0; $j < $square; $j++) {
        // Determine if the current cell should be black or white based on its position
        if (($i + $j) % 2 == 0) {
            $color = "white";
        } else {
            $color = "black";
        }
        // Create a new cell with the appropriate background color
        echo "<td style='background-color: {$color}; height: 50px; width: 50px;'></td>";
    }
    // Close the current row after all cells have been created
    echo "</tr>";
}
// Close the table after all rows and cells have been created
echo "</table>";
?>

<h1>Electricity Bill</h1>

<?php


// Function to calculate the electricity bill based on units consumed
function calculateBill($units){
    $amount = 0;
    
    // Calculate the slab-wise rates and apply to units consumed
    if($units <= 50){
        $amount = $units * 2.60;
    }
    elseif($units >= 51 && $units <= 150){
        $amount = 50 * 2.60 + ($units - 50) * 3.22;
    }
    elseif($units >= 151 && $units <= 250){
        $amount = 50 * 2.60 + 100 * 3.22 + ($units - 150) * 4.05;
    }
    elseif($units > 250){
        $amount = 50 * 2.60 + 100 * 3.22 + 100 * 4.05 + ($units - 250) * 5.00;
    }
    
    // Add surcharge and tax to the final amount
    $surcharge = $amount * 0.10;
    $totalAmount = $amount + $surcharge + ($amount * 0.06);
    
    return round($totalAmount, 2);
}

// Test the function with sample units consumed
$unitsConsumed = 175;
$totalAmount = calculateBill($unitsConsumed);
echo "<div>";
// Generate the bill statement for the customer
echo "Electricity Bill Statement for the Month<br>";
echo "-------------------------------------<br>";
echo "Units Consumed: ".$unitsConsumed."<br>";
echo "Amount Charges @ Rs. 2.60 per unit for first 50 units: Rs. ".min(($unitsConsumed*2.6), (2.6*50))."<br>";
echo "Amount Charges @ Rs. 3.22 per unit for next 100 units: Rs. ".($unitsConsumed<=50?0:min(($unitsConsumed-50)*3.22, 3.22*100))."<br>";
echo "Amount Charges @ Rs. 4.05 per unit for next 100 units: Rs. ";
if($unitsConsumed<=150){
    echo "0";
}
elseif($unitsConsumed>250){
    echo min((($unitsConsumed-250)*5.0), (4.05*100));
}
else{
    echo min(($unitsConsumed-150)*4.05, 4.05*100);
}
echo "<br>";
echo "Amount Charges @ Rs. 5.00 per unit for remaining units: Rs. ";
if($unitsConsumed<=250){
    echo "0";
}
else{
    echo (($unitsConsumed-250)*5.0);
}
echo "<br>";
echo "-------------------------------------<br>";
echo "Sub Total: Rs. ".$totalAmount."<br>";
echo "Surcharge Amount @ 10%: Rs. ".round($totalAmount*0.1, 2)."<br>";
echo "Total Customer Electric Bill: Rs. ".calculateBill($unitsConsumed)."<br>";
echo "</div>";

?>


    <h1>Calculate Area of Shapes</h1>

    <form method = "post">   
Base: <input type="number" name="base">   
<br><br>  
Height: <input type="number" name="height"><br>   
<input type = "submit" name = "submit" value="Calculate">   
</form>   
</body>   
</html>  
<?php   
if(isset($_POST['submit']))  
    {   
$base = $_POST['base'];   
$height = $_POST['height'];   
$area = ($base*$height) / 2;   
echo "The area of a triangle with base as $base and height as $height is $area";   
}   
?>

</body>
</html>