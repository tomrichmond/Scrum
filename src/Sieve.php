<?php

namespace Src;
class Sieve
{
    public function getPrimes($max)
    {
        $foundPrimes = array();

        if ($max < 2) {
            return $foundPrimes;
        }

        $a = array_fill(0, $max, true);

        $a[0] = false;
        $a[1] = false;

        $this->findPrimes($max, $a);

        return array_keys(array_filter($a, fn($v) => $v));
    }

    /**
     * @param       $max
     * @param array $a
     *
     * @return array
     *
     */
    private function findPrimes($max, array &$a): array
    {
        for ($i = 2; $i <= $max; $i++) {
            if ($a[$i] == true) {
                for ($j = $i * 2; $j <= $max; $j = $j + $i) {
                    $a[$j] = false;
                }
            }
        }

        return array($i, $a);
    }
}
