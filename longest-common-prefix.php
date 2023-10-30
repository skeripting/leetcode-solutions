<?php
class Solution {
    /**
     * @param String[] $strs
     * @return String
     */
    function longestCommonPrefix($strs) {
        # Start w/ common idx length of 1
        $str_0 = $strs[0];
        $common_idx_length = 1; 
        $unmatched_prefix = false; 
        $common_prefix = "";
        while (!$unmatched_prefix && $common_idx_length <= strlen($str_0)) {
            $common_prefix = substr($str_0, 0, $common_idx_length);
            foreach ($strs as $i=>$str) {
                $prefix = substr($str, 0, $common_idx_length);
                if ($prefix != $common_prefix) {
                    $unmatched_prefix = true; 
                    $common_idx_length--;
                    $common_prefix = substr($str_0, 0, $common_idx_length);
                    break; 
                }
            }
            $common_idx_length++;
        }
        return $common_prefix; 
    }
}
?>
