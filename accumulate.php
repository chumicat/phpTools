/**
 * @author Chumicat
 * iterator each element and accumulate with function
 *
 * example:
 *     accumulate([1,3,5,7], function($a, $b){return $a+$b;})
 *     = [1, 4, 9, 16]
 *     
 *     accumulate([1,3,5,7], function($a, $b){return $a+$b;}, sum([1,3,5,7]))
 *     = [16, 15, 12, 7, 0]
 *
 *     accumulate([1,3,5,7], function($a, $b){return $a+$b;}, sum([1,3,5,7], true))
 *     = [15, 12, 7, 0]
 *
 * @param array $val array we want to accumulate
 * @param function $val accumulate function between each element
 * @param  $ini initial value of the accumulate, if set, first element in return array will be $ini
 * @param bool $shift true if we want to delete first value
 * @return array $ret return the accumulate result
 */

function accumulate(array $arr, $funct, $ini = null, $shift = false) {
    $ret = $ini === null ? [] : [$ini];
    foreach ($arr as $val)
        $ret[] = $funct(end($ret), $val);
    if ($shift) array_shift($ret);
    return $ret;
}
