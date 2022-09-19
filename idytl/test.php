<html><body><?php
    
    $var = "World!";
    $int = 0;
    $float = 0.0;
    
    echo "Hello, $var<br>";
    echo "Hello, " . $var . "<br>";
    
    //comment
    #comment
    /*comment*/
    
    $int = 9;
    $float = 12.0;
    
    echo $int + $float + "<br>";
    
    printFunc();
    
    function printFunc()
    {
        global $var;
        echo "Hello, $var<br>";
    }
    
</html></body><?
