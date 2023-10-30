<?php
# https://leetcode.com/problems/roman-to-integer
class Solution {
    /**
     * @param String $s
     * @return Integer
     */
    function romanToInt($s) {
        $rom_to_int = array(
            "I" => 1,
            "V" => 5,
            "X" => 10,
            "L" => 50,
            "C" => 100,
            "D" => 500,
            "M" => 1000
        );
        $total_value = 0;
        for ($i = 0; $i < strlen($s); $i++) {
            $current_rom_numeral = substr($s, $i, 1);
            $subtracted = false;
            if (($i + 1) < strlen($s)) {
                $next_rom_numeral = substr($s, $i + 1, 1);
                if ($current_rom_numeral == "I") {
                    if ($next_rom_numeral == "V") {
                        $total_value += 4;
                        $subtracted = true;
                    }
                    else if ($next_rom_numeral == "X") {
                        $total_value += 9;
                        $subtracted = true;
                    }
                }
                else if ($current_rom_numeral == "X") {
                    if ($next_rom_numeral == "L") {
                        $total_value += 40;
                        $subtracted = true;
                    }
                    else if ($next_rom_numeral == "C") {
                        $total_value += 90;
                        $subtracted = true;
                    }
                }
                else if ($current_rom_numeral == "C") {
                    if ($next_rom_numeral == "D") {
                        $total_value += 400;
                        $subtracted = true;
                    }
                    else if ($next_rom_numeral == "M") {
                        $total_value += 900;
                        $subtracted = true;
                    }
                }
            }
            
            if (!$subtracted) {
                $current_rom_numeral_value = $rom_to_int[$current_rom_numeral];
                $total_value += $current_rom_numeral_value;
            }
            else {
                $i++;
            }
            
        }
        return $total_value;
    }
}
?>
