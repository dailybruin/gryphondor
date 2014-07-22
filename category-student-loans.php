<?php/*
Template Name: Student Loans
*/ ?>
<?php get_header(); ?>

<h1>Student Loan Calculator</h1>

<form method="GET">

    <div style="background-color: #ccc; border: 1px solid #ddd; padding: 20px;">
        <div style="display: inline-block; text-align: center; margin-right: 20px;">
            Enter debt principal:<br/>
            <span style="font-size: 18pt; position: relative; left: 20px;">$</span><input style="padding-left: 24px; width: 150px; height: 30px; font-size: 14pt;" type="text" name="principal"/>
        </div>
        <div style="display: inline-block; text-align: center; margin-right: 20px;">
            Interest Rate:<br/>
            <input style="text-align: right; padding-right: 34px; font-size: 14pt; height: 30px; width: 50px;" type="text" name="rate"></input><span style="font-size: 18pt; position: relative; right: 30px;">%</span>
        </div>
        <div style="display: inline-block;">
            <center>
                <input type="submit" name="submit" value="Calculate"></input>
            </center>
        </div>
    </div>

</form>

<?php
    if (isset($_GET['submit'])){
    $principal = $_GET['principal'];
    $rate = $_GET['rate'];

    $interest_rate = $rate/100;
    $annual_total = ($principal*$interest_rate)/(1 - pow((1 + $interest_rate),-10));

    $monthly_installment = $annual_total/12;
    $total_cost = $annual_total*10;
    $interest = $total_cost - $principal;

    settype($monthly_installment, "integer");
    settype($total_cost, "integer");
    settype($interest, "integer");

    if($principal != "" && $rate != "") {
        echo "<h5>Loan Principal</h5>";
        echo "<h1>$" . number_format($principal) . "</h1><hr/>";
        echo "<h5>Interest</h5>";
        echo "<h1>$" . number_format($interest) . "</h1><hr/>";
        echo "<h5>Total Cost</h5>";
        echo "<h1>$" . number_format($total_cost) . "</h1><hr/>";
        echo "<h5>Monthly Installment:</h5>";
        echo "<h1>$" . number_format($monthly_installment) . "</h1><hr/>";
        echo "<h5>Loan Term</h5>";
        echo "<h1>10yrs</h1>";
    }
    else
        echo "Invalid input. Please try again.";
}
?>

<?php get_footer(); ?>
