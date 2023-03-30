<?php


    $result = 1;

    if ( $result > 0 )
    {
        $result =$result / 2;
        print "$result \n";
        print "positive \n";
    }
    else 
    {
        print "$result";
        print "Negative ";
    }

    $result = -1;
    if ($result > 0)
    {
        $result = $result / 2;
        print "result";
        print "positive";
    }
    else 
    {
        print "$result \n";
        print "Negative \n \n \n";
    }


    $a = 123;
    $b = 456;
    $c = 123.0;

    if($a == $b)
    {
    print "$a 값이 $b 값과 같습니다.\n";
    }

    if($a != $b)
    {
    print "$a 값이 $b 값과 같지 않습니다.\n";
    }
    if($a < $b)
    print "$a 값이 $b 값보다 작습니다.\n";

    if($a > $b)
    print "$a 값이 $b 값보다 큽니다. \n";

    if($a <= $b)
    print  "$a 값이 $b 값보다 작거나 같습니다 \n";

    if($a >= $b)
    print "a 값이 $b 값보다 크거나 같습니다 \n";

    if($a === $b)
    print "a 값이 $c 값과 동일합니다. \n";

    if($a == $c)
    print "$a 값이 $c 값과 같습니다.";

    if($a === $c)
    print "$a 값이 $c 값과 동일합니다";

?>