/**
 * @author Chumicat
 * Method factor a number and return it's factor and each count

 * @param int $val integer that you want to factor
 * @return array $cnt with each key-value pair as prime => count
 */

function primeCnt (int $val) {
    function cntOfPrimeInVal($prime, $value, &$result) {
        for (; $value % $prime == 0; $value /= $prime, ++$cnt) {}
        if ($cnt) $result[$prime] = $cnt;
    }

    cntOfPrimeInVal(2, $val, $primeCnt);
    for ($i=3; $i<=$val; $i+=2) {
        cntOfPrimeInVal($i, $val, $primeCnt);
    }
    return $primeCnt ?? [];
}
