<?php
    function GetParamFromGet( $parametr, $defaultValue='' )
    {
        $result = $defaultValue;
        if(isset( $_GET[$parametr] ))
        {
            $result= $_GET[$parametr];
        }
        return $result;
    }