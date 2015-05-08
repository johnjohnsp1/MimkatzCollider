<?php

function md5_hash($string){
    $a = "67452301";
    $b = "efcdab89";
    $c = "98badcfe";
    $d = "10325476";

    $A = $a ;
    $B = $b ;
    $C = $c ;
    $D = $d ;
    $words = ConvertToArray($string);    
    for($i = 0; $i <= count($words)/16-1; $i++){
            $a  = $A;
            $b  = $B;
            $c  = $C;
            $d  = $D;

            /* ROUND 1 */  
            FF ($A, $B, $C, $D, $words[0 + ($i * 16)], 7, "d76aa478"); 
            FF ($D, $A, $B, $C, $words[1 + ($i * 16)], 12, "e8c7b756"); 
            FF ($C, $D, $A, $B, $words[2 + ($i * 16)], 17, "242070db"); 
            FF ($B, $C, $D, $A, $words[3 + ($i * 16)], 22, "c1bdceee"); 
            FF ($A, $B, $C, $D, $words[4 + ($i * 16)], 7, "f57c0faf");  
            FF ($D, $A, $B, $C, $words[5 + ($i * 16)], 12, "4787c62a"); 
            FF ($C, $D, $A, $B, $words[6 + ($i * 16)], 17, "a8304613"); 
            FF ($B, $C, $D, $A, $words[7 + ($i * 16)], 22, "fd469501"); 
            FF ($A, $B, $C, $D, $words[8 + ($i * 16)], 7, "698098d8"); 
            FF ($D, $A, $B, $C, $words[9 + ($i * 16)], 12, "8b44f7af"); 
            FF ($C, $D, $A, $B, $words[10 + ($i * 16)], 17, "ffff5bb1"); 
            FF ($B, $C, $D, $A, $words[11 + ($i * 16)], 22, "895cd7be");  
            FF ($A, $B, $C, $D, $words[12 + ($i * 16)], 7, "6b901122"); 
            FF ($D, $A, $B, $C, $words[13 + ($i * 16)], 12, "fd987193"); 
            FF ($C, $D, $A, $B, $words[14 + ($i * 16)], 17, "a679438e"); 
            FF ($B, $C, $D, $A, $words[15 + ($i * 16)], 22, "49b40821"); 

            /* ROUND 2 */
            GG ($A, $B, $C, $D, $words[1 + ($i * 16)], 5, "f61e2562"); 
            GG ($D, $A, $B, $C, $words[6 + ($i * 16)], 9, "c040b340"); 
            GG ($C, $D, $A, $B, $words[11 + ($i * 16)], 14, "265e5a51"); 
            GG ($B, $C, $D, $A, $words[0 + ($i * 16)], 20, "e9b6c7aa"); 
            GG ($A, $B, $C, $D, $words[5 + ($i * 16)], 5, "d62f105d"); 
            GG ($D, $A, $B, $C, $words[10 + ($i * 16)], 9, "2441453"); 
            GG ($C, $D, $A, $B, $words[15 + ($i * 16)], 14, "d8a1e681"); 
            GG ($B, $C, $D, $A, $words[4 + ($i * 16)], 20, "e7d3fbc8"); 
            GG ($A, $B, $C, $D, $words[9 + ($i * 16)], 5, "21e1cde6"); 
            GG ($D, $A, $B, $C, $words[14 + ($i * 16)], 9, "c33707d6"); 
            GG ($C, $D, $A, $B, $words[3 + ($i * 16)], 14, "f4d50d87"); 
            GG ($B, $C, $D, $A, $words[8 + ($i * 16)], 20, "455a14ed"); 
            GG ($A, $B, $C, $D, $words[13 + ($i * 16)], 5, "a9e3e905"); 
            GG ($D, $A, $B, $C, $words[2 + ($i * 16)], 9, "fcefa3f8"); 
            GG ($C, $D, $A, $B, $words[7 + ($i * 16)], 14, "676f02d9"); 
            GG ($B, $C, $D, $A, $words[12 + ($i * 16)], 20, "8d2a4c8a"); 

            /* ROUND 3 */
            HH ($A, $B, $C, $D, $words[5 + ($i * 16)], 4, "fffa3942"); 
            HH ($D, $A, $B, $C, $words[8 + ($i * 16)], 11, "8771f681"); 
            HH ($C, $D, $A, $B, $words[11 + ($i * 16)], 16, "6d9d6122"); 
            HH ($B, $C, $D, $A, $words[14 + ($i * 16)], 23, "fde5380c"); 
            HH ($A, $B, $C, $D, $words[1 + ($i * 16)], 4, "a4beea44"); 
            HH ($D, $A, $B, $C, $words[4 + ($i * 16)], 11, "4bdecfa9"); 
            HH ($C, $D, $A, $B, $words[7 + ($i * 16)], 16, "f6bb4b60"); 
            HH ($B, $C, $D, $A, $words[10 + ($i * 16)], 23, "bebfbc70"); 
            HH ($A, $B, $C, $D, $words[13 + ($i * 16)], 4, "289b7ec6"); 
            HH ($D, $A, $B, $C, $words[0 + ($i * 16)], 11, "eaa127fa"); 
            HH ($C, $D, $A, $B, $words[3 + ($i * 16)], 16, "d4ef3085"); 
            HH ($B, $C, $D, $A, $words[6 + ($i * 16)], 23, "4881d05"); 
            HH ($A, $B, $C, $D, $words[9 + ($i * 16)], 4, "d9d4d039"); 
            HH ($D, $A, $B, $C, $words[12 + ($i * 16)], 11, "e6db99e5"); 
            HH ($C, $D, $A, $B, $words[15 + ($i * 16)], 16, "1fa27cf8"); 
            HH ($B, $C, $D, $A, $words[2 + ($i * 16)], 23, "c4ac5665"); 

            /* ROUND 4 */
            II ($A, $B, $C, $D, $words[0 + ($i * 16)], 6, "f4292244"); 
            II ($D, $A, $B, $C, $words[7 + ($i * 16)], 10, "432aff97"); 
            II ($C, $D, $A, $B, $words[14 + ($i * 16)], 15, "ab9423a7"); 
            II ($B, $C, $D, $A, $words[5 + ($i * 16)], 21, "fc93a039"); 
            II ($A, $B, $C, $D, $words[12 + ($i * 16)], 6, "655b59c3"); 
            II ($D, $A, $B, $C, $words[3 + ($i * 16)], 10, "8f0ccc92"); 
            II ($C, $D, $A, $B, $words[10 + ($i * 16)], 15, "ffeff47d"); 
            II ($B, $C, $D, $A, $words[1 + ($i * 16)], 21, "85845dd1"); 
            II ($A, $B, $C, $D, $words[8 + ($i * 16)], 6, "6fa87e4f"); 
            II ($D, $A, $B, $C, $words[15 + ($i * 16)], 10, "fe2ce6e0"); 
            II ($C, $D, $A, $B, $words[6 + ($i * 16)], 15, "a3014314"); 
            II ($B, $C, $D, $A, $words[13 + ($i * 16)], 21, "4e0811a1"); 
            II ($A, $B, $C, $D, $words[4 + ($i * 16)], 6, "f7537e82"); 
            II ($D, $A, $B, $C, $words[11 + ($i * 16)], 10, "bd3af235"); 
            II ($C, $D, $A, $B, $words[2 + ($i * 16)], 15, "2ad7d2bb"); 
            II ($B, $C, $D, $A, $words[9 + ($i * 16)], 21, "eb86d391"); 

            $A=AddUnsigned(hexdec2($A),hexdec2($a));
            $B=AddUnsigned(hexdec2($B),hexdec2($b));
            $C=AddUnsigned(hexdec2($C),hexdec2($c));
            $D=AddUnsigned(hexdec2($D),hexdec2($d));    
    }

   $MD5 = WordToHex($A).WordToHex($B).WordToHex($C).WordToHex($D);
   return $MD5;
}

function WordToHex($lValue) { 
    $WordToHexValue = "";
    for ($lCount = 0;$lCount<=3;$lCount++) { 
        $lByte = (hexdec2($lValue)>>($lCount*8)) & 255; 
        $C = dechex($lByte);
        $WordToHexValue .= (strlen($C)=='1')?"0".dechex($lByte):dechex($lByte); 
    }
    return $WordToHexValue;
}

function F($X, $Y, $Z){    
        $X = hexdec2($X); 
        $Y = hexdec2($Y);
        $Z = hexdec2($Z);
        $calc = (($X & $Y) | ((~ $X) & $Z)); // X AND Y OR NOT X AND Z
        return  $calc; 
}

function G($X, $Y, $Z){
        $X = hexdec2($X);
        $Y = hexdec2($Y);
        $Z = hexdec2($Z);
        $calc = (($X & $Z) | ($Y & (~ $Z))); // X AND Z OR Y AND NOT Z
        return  $calc; 
}

function H($X, $Y, $Z){
        $X = hexdec2($X);
        $Y = hexdec2($Y);
        $Z = hexdec2($Z);
        $calc = ($X ^ $Y ^ $Z); // X XOR Y XOR Z
        return  $calc; 
}

function I($X, $Y, $Z){
        $X = hexdec2($X);
        $Y = hexdec2($Y);
        $Z = hexdec2($Z);
        $calc = ($Y ^ ($X | (~ $Z))) ; // Y XOR (X OR NOT Z)
        return  $calc; 
}

function AddUnsigned($lX,$lY) { 
    $lX8 = ($lX & 0x80000000);
    $lY8 = ($lY & 0x80000000);
    $lX4 = ($lX & 0x40000000);
    $lY4 = ($lY & 0x40000000);
    $lResult = ($lX & 0x3FFFFFFF)+($lY & 0x3FFFFFFF);
    if ($lX4 & $lY4) {
        $res = ($lResult ^ 0x80000000 ^ $lX8 ^ $lY8);
        if($res < 0)
            return '-'.dechex(abs($res));
        else
            return dechex($res); 
    }
    if ($lX4 | $lY4) {
        if ($lResult & 0x40000000) {
            $res = ($lResult ^ 0xC0000000 ^ $lX8 ^ $lY8);
            if($res < 0)
                return '-'.dechex(abs($res));
            else
                return dechex($res); 
        } else {
            $res = ($lResult ^ 0x40000000 ^ $lX8 ^ $lY8);
            if($res < 0)
                return '-'.dechex(abs($res));
            else
                return dechex($res);
        }
    } else {
        $res = ($lResult ^ $lX8 ^ $lY8);
        if($res < 0)
            return '-'.dechex(abs($res));
        else
            return dechex($res);
    }
}
function hexdec2($hex , $debug = false)
{  
    if(substr($hex, 0,1) == "-")
    {
        return doubleval('-'.hexdec("0x". str_replace("-", "", $hex )));
    }
    return hexdec("0x".$hex);
}

function FF(&$A, $B, $C, $D, $M, $s, $t){  
        $Level1 = hexdec2(AddUnsigned( F($B, $C, $D) , bindec($M) ));
        $level2 = hexdec2(AddUnsigned($Level1, hexdec2($t)));  
        $A = hexdec2(AddUnsigned(hexdec2($A),$level2));
        $A = rotate($A, $s); 
        $A =  AddUnsigned($A , hexdec2($B)) ; 
}

function GG(&$A, $B, $C, $D, $M, $s, $t){
        $Level1 = hexdec2(AddUnsigned( G($B, $C, $D) , bindec($M) ));
        $level2 = hexdec2(AddUnsigned($Level1, hexdec2($t)));  
        $A = hexdec2(AddUnsigned(hexdec2($A),$level2));
        $A = rotate($A, $s); 
        $A =  AddUnsigned($A , hexdec2($B)) ;  
}

function HH(&$A, $B, $C, $D, $M, $s, $t){
        $Level1 = hexdec2(AddUnsigned( H($B, $C, $D) , bindec($M) ));
        $level2 = hexdec2(AddUnsigned($Level1, hexdec2($t)));  
        $A = hexdec2(AddUnsigned(hexdec2($A),$level2));
        $A = rotate($A, $s); 
        $A =  AddUnsigned($A , hexdec2($B)) ;  
}

function II(&$A, $B, $C, $D, $M, $s, $t){
        $Level1 = hexdec2(AddUnsigned( I($B, $C, $D) , bindec($M) ));
        $level2 = hexdec2(AddUnsigned($Level1, hexdec2($t)));  
        $A = hexdec2(AddUnsigned(hexdec2($A),$level2));
        $A = rotate($A, $s); 
        $A =  AddUnsigned($A , hexdec2($B)) ;  
}

function rotate ($decimal, $bits , $debug = false) { 
    return  (($decimal << $bits) |  shiftright($decimal, (32 - $bits))  & 0xffffffff);
}
function shiftright($decimal , $right)
{ 
    if($decimal < 0)
    {
        $res = decbin($decimal >> $right);
        for ($i=0; $i < $right; $i++) { 
            $res[$i] = "";
        }
        return bindec($res) ;
    } else 
    {
        return ($decimal >> $right);
    }
}

function ConvertToArray($string) {
    $lWordCount;
    $lMessageLength = strlen($string);	
	//printf('Message Length = %d'.PHP_EOL, $lMessageLength);
    $lNumberOfWords_temp1=$lMessageLength + 8;
    $lNumberOfWords_temp2=($lNumberOfWords_temp1-($lNumberOfWords_temp1 % 64))/64;
    $lNumberOfWords = ($lNumberOfWords_temp2+1)*16; 
    $lWordArray=Array("");
    $lBytePosition = 0;
    $lByteCount = 0;  
	
	
	while ( $lByteCount < $lMessageLength ) {
        $lWordCount = ($lByteCount-($lByteCount % 4))/4;
		//printf('WordCount = %d'.PHP_EOL, $lWordCount);
        $lBytePosition = ($lByteCount % 4)*8;
		//printf('Byte Position = %d'.PHP_EOL, $lBytePosition);
        if(!isset($lWordArray[$lWordCount]))
            $lWordArray[$lWordCount] = 0;
        $lWordArray[$lWordCount] = ($lWordArray[$lWordCount] | (ord($string[$lByteCount])<<$lBytePosition));
        $lByteCount++;
		
    }	
	//printf('ByteCount = %d'.PHP_EOL, $lByteCount); //DEBUG
	
    $lWordCount = ($lByteCount-($lByteCount % 4))/4;
    $lBytePosition = ($lByteCount % 4)*8;
    if(!isset($lWordArray[$lWordCount]))
        $lWordArray[$lWordCount] = 0;
	
    //Remove Appending 1 to End
	//$lWordArray[$lWordCount] = $lWordArray[$lWordCount] | (0x80<<$lBytePosition);
    $lWordArray[$lNumberOfWords-2] = $lMessageLength<<3;
    $lWordArray[$lNumberOfWords-1] = $lMessageLength>>29; 
	
    for ($i=0; $i < $lNumberOfWords; $i++) { 
        if(isset($lWordArray[$i]))
            $lWordArray[$i] = decbin($lWordArray[$i]);
		//This removes Leght and Padding of Zeros...
        //else
          //  $lWordArray[$i] = '0';
    }  
	
    return $lWordArray;
}; 
