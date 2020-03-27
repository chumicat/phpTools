function prime (int $ed) {
    if ($ed < 2) return [];    
    
    $primes = [2];
    for ($i = 3; $i <= $ed; $i += 2) {
        $isPrime = true;
        foreach ($primes as $prime){
            if (!($i%$prime)) {
                $isPrime = false;
                break;
            }
        }
        if ($isPrime) $primes[] = $i;
    }
    
    return $ret;
}

function primeRange (int $p0, $p1 = null) {
    if ($p1 !== null and $p0 >= 2 and $p1 > $p0) {
        $st = $p0;
        $ed = $p1;
    } elseif ($p1 === null and $p0 >= 2) {
        $st = 2;
        $ed = $p0;
    } else {
        return [];
    }
    
    $primes = [2];
    $ret = $st == 2 ? [2] : [];
    for ($i = 3; $i <= $ed; $i += 2) {
        $isPrime = true;
        foreach ($primes as $prime){
            if (!($i%$prime)) {
                $isPrime = false;
                break;
            }
        }
        if ($isPrime) {
            $primes[] = $i;
            if ($st <= $i) {
                $ret[] = $i;
            }
        }
    }
    
    return $ret;
}
