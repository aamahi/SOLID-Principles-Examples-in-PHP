<?php

Class Payment{
    function pay(payableInterface $payment){
        $payment->pay();
    }
}
interface payableInterface{
    function pay();
}


Class CraditCard implements payableInterface {
    function pay()
    {
        // take nessary steps to pay with Cradit Card
    }
}
Class Bkash implements payableInterface {
    function pay()
    {
        // take nessary steps to pay with Bkash
    }
}

Class DebitCard implements payableInterface {
    function pay()
    {
        // take nessary steps to pay with DebitCard
    }
}

$craditCard = New CraditCard('cradit card number');
$bkash = New Bkash('Bkash number');
$debitCard= New DebitCard('debit card number');

$py = New Payment();
$py->pay($craditCard);
$py->pay($bkash);
$py->pay($debitCard);