<?php 

class Helper{
    
    //Add methods here
    //password mactching
     public function passwordMatch($pw1,$pw2)
    {
       if ($pw1==$pw2) 
       return true;
       else 
       return false;
    }
    public function isValidLength($str, $min=8, $max=20)
    {
        if (strlen($str)<$min||strlen($str)>$max) return true;
        else
        return false;
    }

    //check on empty post

    public function isEempty($postValues)
    {
        foreach ($postValues as $value){
            if ($value=='') {
                return true;
            }
                return false;
        }
        
    }
    // check password isSecure

    public function isSecure($pw)
    {
        if (preg_match("~[A-Z]+~", $pw)&& preg_match("~[a-z]+~", $pw)&& preg_match("~0-9+~", $pw)) {
           return true;
           else
           return false;
        }
    }

    //keep user data in the form
    public function keepValues($val, $type, $atts='')
    {
        switch ($type){
            case 'textbox':
                echo "value='$val'";
                break;
            case 'textarea':
                echo $val;
                break;
            case 'select':
                if($val == $attr)
                echo 'selected';
                break;
            default:
                echo '';
        }
    }
}
