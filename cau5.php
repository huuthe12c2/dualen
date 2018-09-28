<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="public/css/styles.css">
    <?php
    require 'data.php';
    ?>
    
</head>

<body>
   <form class="title">
       ID: <input type="txt" name="id">
       <input type="submit" value="Tim Kiem">
   </form>
   <?php 
        if (empty($_GET['id'])) 
        {
            echo "Ban chua nhap so id!!!";
        }
        else
        {
            for ($i=0; $i < 5 ; $i++) 
            { 
                if($users[$i]['id']==$_GET['id'])
                {?>
                    <table class="bodertab">
                    <tr>
                        <tr>
                            <td class="boder1 boderfon">ID</td>
                            <td class="boder1 boderfon">Name</td>
                            <td class="boder1 boderfon">Gmail</td>
                            <td class="boder1 boderfon">Yahoo</td>
                        </tr>
                        <tr>

                            <td class="boder1 boderfon1"><?php echo $users[$i]['id']; ?> </td>
                            <td class="boder1 boderfon1"><?php echo $users[$i]['name']; ?></td>
                            <td class="boder1 boderfon1"><?php echo $users[$i]['email']['gmail']; ?></td>
                            <td class="boder1 boderfon1"><?php echo $users[$i]['email']['yahoo']; ?></td>
                        </tr>
                    </tr>
                </table>
                <?php
                break;
                }
                else
                {
                    if($i==4)
                    {
                        echo "ID nay khong ton tai!!!";
                    }
                }
            }
        }
    ?>
</body>
</html>


 