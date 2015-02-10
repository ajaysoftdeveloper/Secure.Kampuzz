<?php

class NF {
    public static function format_date_local($date)
    {
        if (($date <> "") && ($date <> "0000-00-00") && ($date <> "0000-00-00 00:00:00"))
        {
            return date("d-m-Y", strtotime($date));
        }
    }
}