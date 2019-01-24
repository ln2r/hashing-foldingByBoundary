<?php
    /**
     * Folding by Boundary
     * Transfor given key to an address by folding the key
     * @param key data key (needs to be integer/number)
     * @param addressAlloc max address that can be stored (needs to be trailing zero number)
     * @return result transformed key
     * 
     * @example
     * // return 654
     * foldingByBoundary(12345678912, 1000);
     */
    function foldingByBoundary($key, $addressAlloc){
        $addressDigit = strlen($addressAlloc) - 1; // getting the digit of the address, and since 'address index' always start from 0 we do -1
        $keyLength = strlen($key); // getting the length of the key

        $keyData = []; // used for storing the splitted key
        $result = []; // used for storing calculation result

        // splitting the key
        for($i = 0; $i < $keyLength; $i += $addressDigit){
            $splittedKey = substr($key, $i, $addressDigit);

            array_push($keyData, $splittedKey);
        }  
        
        // reversing the key if the index is even
        for($i = 0; $i < sizeof($keyData); $i++){
            if($i % 2 == 0){
                $keyData[$i] = strrev($keyData[$i]);
            }
            // splitting the reversed key for calculation
            $keyData[$i] = str_split($keyData[$i]);
        }

        // calculating the key
        for($i = 0; $i < $addressDigit; $i++){
            $rowResult = 0;

            for($j = 0; $j < sizeof($keyData); $j++){
                // adding 0 to array that empty (undefined), so it can be calculated
                if(empty($keyData[$j][$i])){
                    $keyDigit = 0;
                }else{
                    $keyDigit = $keyData[$j][$i];
                }

                $rowResult = $rowResult + $keyDigit;
            }

            // taking the last digit of the result
            if(strlen($rowResult) > 1){
                $rowResult = substr($rowResult, 1, 1);
            }
            
            // storing the result to array
            array_push($result, $rowResult);
        }

        // joining the result
        $result = join("", $result);

        return $result;
    }

    // Edit this section for testing, read the @example
    echo foldingByBoundary(12345678912, 1000)
?>