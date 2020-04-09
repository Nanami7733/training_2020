<?php
//10-2-1
// 例外処理を定義しよう

echo "start\n";
try{
    $date = new DateTime("199x-01-01");
    echo $date->format('Y/m/d') . "\n";
}catch(Exception $e){
    echo $e -> getMessage()."\n";
}finally{
    echo "end\n";
}


//10-3 出力とは別の例外メッセージ
echo "start\n";
try {
    $date = new DateTime("199x-01-01");
    echo $date->format('Y/m/d') . "\n";
} catch (Exception $e) {
    echo "指定された日付が不正です\n";
    // echo "発生した例外:", $e, "\n";
    fputs(STDERR, $e->getMessage() . "\n");
} finally {
    echo "end\n";
}





//10-4　意図的な例外

echo "start\n";
try {
    throw new Exception("意図的な例外");
    echo "例外を投げた後\n";
} catch (Exception $e) {
    echo "例外発生:" . $e->getMessage() . "\n";
} finally {
    echo "end\n";
}



//10-5　例外の種類

echo "start\n";
try {
    throw new RangeException("意図的な例外");　//1 
    echo "例外を投げた後\n";
} catch (RangeException $e) {               //2
    echo "例外発生：" . $e->getMessage() . "\n";
} finally {
    echo "end\n";
}
//1と2の○○Exeptionの種類はそろえる必要が和ある




//10-6
echo "start\n";
try {
    $pattern = 0;
    if ($pattern == 0) {
        throw new RangeException("意図的な範囲例外");
    } else if ($pattern == 1) {
        throw new LengthException("意図的な長さ例外");
    } else {
        throw new InvalidArgumentException("意図的なその他例外");
    }
    echo "例外を投げた後\n";
} catch (RangeException $e) {                       //Range,LengthそれぞれにおいてExeptionをキャッチする
    echo "例外発生1：" . $e->getMessage() . "\n";
} catch (LengthException $e) {
    echo "例外発生2：" . $e->getMessage() . "\n";
} catch (Exception $e) {                            //Exeptionは、クラス内においてすーぱークラスとして働く。
    echo "例外発生3：" . $e->getMessage() . "\n";
} finally {
    echo "end\n";
}




//10-7
function test_exception($date) {
    echo "2\n";
    try {
        echo "3\n";
        return new DateTime($date);
        echo "4\n";
    } catch (Exception $e) {
        echo "5\n";
        throw $e;
    }
    echo "6\n";
}

echo "1\n";

try {
    $datetime = test_exception("199x-01-01");
    echo "7\n";
} catch (Exception $e) {
    echo "8\n";
}
echo "9\n";



//10-7-1
function test_exception($date) {
    try {
        return new DateTime($date);
    } catch (Exception $e) {
        echo "不正な日付です\n";
        throw $e;
    }
}

echo "start\n";
try{
    $dateTime = test_exception("199x-01-01");
}catch (Exception $e){
    echo "end";
}



?>