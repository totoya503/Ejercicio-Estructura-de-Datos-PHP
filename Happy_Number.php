class Solution {
    /**
     * @param Integer $n
     * @return Boolean
     */
    function isHappy($n) {
        $seen = [];

        while ($n !== 1 && !in_array($n, $seen)) {
            $seen[] = $n;
            $n = $this->getSumOfSquares($n);
        }

        return $n === 1;
    }

    private function getSumOfSquares($num) {
        $sum = 0;
        while ($num > 0) {
            $digit = $num % 10;
            $sum += $digit * $digit;
            $num = intdiv($num, 10);
        }
        return $sum;
    }
}
