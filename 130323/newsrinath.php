<!DOCTYPE html>
<html>
<head>
    <title>PHP Exercise</title>
</head>
<body>
    
<?php //definingclass as printChar

echo "<h1>display a string </h1>";
    class printChar {
        public $alphabet;  //public property alphabet
        
        function __construct($char) //construct defined
        { 
            $this->alphabet = $char;  //this predefined 
        }
        
        function call()        //call method defined 
        { 
            echo $this->alphabet;  //print the alphabet
        }
    }

    $output = new printChar("Who is the Boss");  //used new to create instance for $output
    $output->call();  //output call
?>
<?php
echo "<h1>factorial</h1>";

class nFactorial //factorial class created 
{  
  public function evaluate($num) // with method evaluate and argument as num
  { 
    if ($num == 1)  //checks if num is equal to 1
    {
      return 1;  //true
    }
    return $num * $this->evaluate($num - 1);  //false does recursive
  }
}

$output1 = new nFactorial();
echo $output1->evaluate(5); // Output 5 factorial
?>
<h2>Calculator</h2>
<form method="post" action="">
    <input type="number" name="num1" placeholder="Enter first number" required><br><br>
    <input type="number" name="num2" placeholder="Enter second number" required><br><br>

    <button type="submit" name="operation" value="addition">+</button>
    <button type="submit" name="operation" value="subtraction">-</button>
    <button type="submit" name="operation" value="multiplication">*</button>
    <button type="submit" name="operation" value="division">/</button>
    <br><br>
</form>
<?php
class Calculator
{
    private $num1;
    private $num2;

    public function __construct($n1, $n2) //constructing the variable
    {
        $this->num1 = $n1;
        $this->num2 = $n2;
    }

    public function add()  
    { 
        return $this->num1 + $this->num2;
    }

    public function subtract()
    {
        return $this->num1 - $this->num2;
    }

    public function multiply()
    {
        return $this->num1 * $this->num2;
    }

    public function divide()
    {
        if ($this->num2 == 0)
        {
            throw new Exception("Cannot divide by zero"); //used try and catch to throw when divide by zero
        } else
        {
            return $this->num1 / $this->num2;
        }
    }
}


    if ($_SERVER["REQUEST_METHOD"] == "POST") // to verify if the form was submitted:
    {
        
        $n1 = $_POST["num1"]; // to get the form input
        $n2 = $_POST["num2"]; // to get the form input
        
        
        $calc = new Calculator($n1, $n2); // to create a new calculator object
        
        try // Perform the selected operation:
        {
            if (isset($_POST["operation"]))  //if data are set then it will process the switch case
            {
                switch($_POST["operation"])
                {
                    case "addition":
                        $result = $calc->add();
                        break;
                    case "subtraction":
                        $result = $calc->subtract();
                        break;  
                    case "multiplication":
                        $result = $calc->multiply();
                        break;  
                    case "division":
                        $result = $calc->divide();
                        break; 
                }
            }
            echo "Result: " . $result;
        } catch (Exception $e) {
            echo "Error: " . $e->getMessage();
        }
    }
?>


</body>
</html>


