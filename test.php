<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <style>
        table{
            width: 600px;
            border: thin solid black;
            border-collapse: collapse;
        }
        tr,td{
            border: thin solid gray;
            text-align: center;
            
        }
        .css1{
            background-color:cyan;
            color: red;
            font-weight: bold;
        }
        .css2{
            background-color:yellow;
            color: blue;
            font-weight: bold;
        }
    </style>
</head>
<body>
    <!--반복문으로 1~999 표 출력
        3의 배수 먼저 if 문으로 배경색, 글자색 입력
        3,6,9가 들어가는 숫자 조건식-->
    <table>
    <?php
        /*$num = 0;
        $row = 0;
        while ($num<1000){
            echo"<tr>";
            while($row<10){
                if($num%3==0){
                    echo"<td class='css1'>$num</td>";
                }
                elseif($num%10==3 or $num%10 == 6 or $num%10 ==9){
                    echo"<td class='css2'>$num</td>";
                }
                elseif($num/10%3==3 or $num%10 == 6 or $num%10 ==9){
                    echo"<td class='css2'>$num</td>";
                }
                else{
                echo"<td>$num</td>";
                }
                $num++;
                $row++;
            }
            $row=0;
            echo"</tr>";
        }*/
        $a=10;
        $a/=3;
        echo"$a";
    ?>
    </table>
</body>
</html>