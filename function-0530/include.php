<style>
    * {
        font-family: 'Courier New', Courier, monospace;
    }
</style>

<?php
echo sum(10, 25);

function sum(...$args)
{
    $sum = 0;
    foreach ($args as $arg) {
        $sum += $arg;
    }
    return $sum;
}


function stars($shape = '正三角形', $stars = 7)
{
    switch ($shape) {
        case "正三角形":
        case 'equilateral triangle':
            for ($i = 0; $i < $stars; $i++) {
                for ($k = 0; $k < $stars - 1 - $i; $k++) {
                    echo "&nbsp;";
                }

                for ($j = 0; $j < $i * 2 + 1; $j++) {
                    echo "*";
                }
                echo "<br>";
            }
            break;
        case '菱形':
        case 3:
            $odd = ($stars % 2 == 0) ? $stars + 1 : $stars;
            $mid = (($odd + 1) / 2) - 1;
            $tmp = 0;
            for ($i = 0; $i < $stars; $i++) {
                if ($i <= $mid) {
                    $tmp = $i;
                } else {
                    // $tmp--;
                    $tmp = $tmp - 1;
                }
                for ($k = 0; $k < $mid - $tmp; $k++) {
                    echo "&nbsp;";
                }
                for ($j = 0; $j < $tmp * 2 + 1; $j++) {
                    echo "*";
                }
                echo "<br>";
            }
            break;
        case '矩形';
            for ($i = 0; $i < $stars; $i++) {

                for ($j = 0; $j < $stars; $j++) {
                    if ($i == 0 || $i == $stars - 1) {
                        echo "*";
                    } else if ($j == 0 || $j == $stars - 1) {
                        echo "*";
                    } else {
                        echo "&nbsp;";
                    }
                }
                echo "<br>";
            }
            break;
    }
}


// stars();
// stars('菱形', 11);
// stars('矩形', 7);
/**
 * 使用迴圈來畫星星
 * @param $shape 形狀名，字串
 * @param $stars 星星的大小，數值
 */
function dd($array)
{
    echo "<pre>";
    print_r($array);
    echo "</pre>";
}


?>