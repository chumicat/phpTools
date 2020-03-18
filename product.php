/**
 * @author Chumicat
 * calculate product of multiple arrays
 *
 * it just like to nested all array together
 * example:
 *     product([1,2], [3,4], [5,6,7])
 *     = [135, 136, 137, 145, 146, 147, 235, 236, 237, 245, 246, 247]
 *
 * @param array $arrays an array contain multiple 1D array
 * @return int $val
 */

function product(...$arrays):array {
  // recursive until limited to two arrays
  $first = $arrays[0];
  $second = [];
  switch (count($arrays)) {
    case 0: case 1:
      return $arrays[0];
    case 2: 
      $second = $arrays[1]; break;
    default:
      $second = product(...array_slice($arrays, 1)); break;
  }
  
  // product two arrays
  $ret = [];
  foreach ($first as $ele_1) {
    foreach ($second as $ele_2) {
      $ret[] = $ele_1.$ele_2;
    }
  }
  return $ret;
}
