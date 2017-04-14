/* manage excel index */
    function getColumn($prevColumn){
        if(strlen($prevColumn)==1&&$prevColumn!="Z")
            { $prevColumn++;return $prevColumn; }
        
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
        }else if(count($list)==2&&$list[1]=='Z'&&$list[0]=='E')
        {
                $list[0] = "F";
                $list[1] = "A";
        }
        else if(count($list)==2&&$list[1]=='Z'&&$list[0]=='D')
        {
                $list[0] = "E";
                $list[1] = "A";
        }
        else if(count($list)==2&&$list[1]=='Z'&&$list[0]=='C')
        {
                $list[0] = "D";
                $list[1] = "A";
        }
        else if(count($list)==2&&$list[1]=='Z'&&$list[0]=='B')
        {
                $list[0] = "C";
                $list[1] = "A";
        }
        else if(count($list)==2&&$list[1]=='Z')
        {
                $list[0] = "B";
                $list[1] = "A";
        }
        return implode('',$list);
    }
