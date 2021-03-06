<?php 

// declaring functions
// function arguments
// default values for arguments
// multiple arguments
// Multiple optional arguments
// changing argument values
//returning value from a function
// using a return value in an if statement
// returning an array from a function
// multiple return statements
// functions that return true or false
// assignment and function call inside a test expression




function page_header($page_id, $color = 'red', $title = 'my 1site'){
    print '<html><head><title>Welcome to ' . $title . '</title></head>';
    print '<body bg="#' . $color . '"><h1>' . $page_id .'</h1>';
}

page_header('1');
print 'Welcome, $user';

page_footer();


function page_footer(){
    print '<br>';
    print '<br>';
    print 'No time, make it.';
    print '</body></html>';
}


function countdown($top){
    while($top > 0){
        print "$top..";
        $top--;
    }
}

$counter = 5;
countdown($counter);


function restaurant_check($meal,$tax,$tip){
    $tax_amount = $meal * ($tax / 100);
    $tip_amount = $meal * ($tip / 100);
    
    $total_notip = $meal + $tax_amount;
    $total_amount = $meal + $tax_amount + $tip_amount;

    return array($total_amount, $total_notip);
}

$price = restaurant_check(500,20,10);
print '<br>';
//print "$" . "$price";

$totals = restaurant_check(500,20,10);

if ($total[0] < 1000){
    print 'total amount plus tip is less than 1000';
}

if ($total[1] < 200){
    print 'Amount with no tip is less than 200';
}



$total = restaurant_check(15.22,8.25,15);

print '<br>';
print 'I only have $20 in cash, so...';

if ($total > 10){
    print 'I will pay using credit card';
} else {
    print 'I will pay using cash';
}


function payment_method($cash_in_hand, $amount){
    if ($amount > $cash_in_hand){
        return 'Credit Card';
    } else {
        return 'Cash';
    }
}

print $total[0];
$method_used = payment_method(1000,$total[1]);
print '<br>';
print $method_used;



function can_pay_cash($cash_in_hand, $amount){
    if ($amount > $cash_in_hand){
        return FALSE;
    } else {
        return TRUE;
    }
}


$available_total = restaurant_check(16.22,8.25,15);
print '<br>';
print '<br>';
print $available_total[0];

if (can_pay_cash(2000,$available_total[0])){
    print '<br>';
    print '<br>';
    print 'I can pay in cash';
} else {
    print '<br>';
    print '<br>';
    print 'Time for credit card';
}


function complete_bill($meal,$tax,$tip,$cash_in_hand){
    $tax_amount = $meal * ($tax / 100);
    $tip_amount = $meal * ($tip / 100);
    $total_amount = $meal + $tax_amount + $tip_amount;

    if ($total_amount > $cash_in_hand){
        return FALSE;
    } else {
        return $total_amount;
    }
}


if ($total = complete_bill(15.22,8.25,15,10)){
    print '<br>';
    print '<br>';
    print  "Am happy to pay $total";
} else{
    print '<br>';
    print '<br>';
    print 'I dont have enough money can i wash some dishes';
}


?>