<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        $N=71;
        $a=1;
        
        for( $i = 2;$i<N-1;$i++)
        {
            if($N%$i==0)
            {
                $a++;
            }
        }
        if($a==2)
        {
            echo ("la so ng t");
        }
        else
        {
            echo ("k phai la so ng t");
        }
        ?>
    </body>
</html>
