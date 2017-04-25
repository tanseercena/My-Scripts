<?php
/* manage excel index 
*   Example -> getNextColumn('A') => return B
*   getNextColumn('AZ') => return BA  
*/
   function getNextColumn($prevColumn = ''){
    if($prevColumn == ''){
        return 'A';
    }
    if(strlen($prevColumn)==1&&$prevColumn!="Z"){
        $prevColumn++;
        return $prevColumn; 
    }
    
    
    $colum = '';
    $list = str_split($prevColumn);
    
    if(count($list)==1&&$list[0]=='Z')
    {
        $list[0] = "A";
        $list[1] = "A";
    }
    else if(count($list)==2&&$list[1]!='Z')
    {
        $list[1]++;
    }else if(count($list)==2&&$list[1]=='Z')
    {
            $list[0]++;
            $list[1] = "A";
    }
    return implode('',$list);
}


