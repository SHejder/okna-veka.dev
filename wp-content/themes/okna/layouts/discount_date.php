<?php

/**
 * Created by PhpStorm.
 * User: User
 * Date: 005 05.10.18
 * Time: 20:44
 */
class discount_date
{
    public function showDate()
    {
        $date = 0;
        if (date(j) < 10) {
            $date = 10;
        } elseif (date(j) > 10 && date(j) < 20) {
            $date = 20;
        } elseif (date(j) > 20 && date(j) < date(t)) {
            $date = date(t);
        }


        return ($date . $this->month());
    }

    private function month()
    {
        switch (date(n)) {
            case 1:
                return $month = " " . "января";
                break;
            case 2:
                return $month = " " . "февраля";
                break;
            case 3:
                return $month = " " . "марта";
                break;
            case 4:
                return $month = " " . "апреля";
                break;
            case 5:
                return $month = " " . "мая";
                break;
            case 6:
                return $month = " " . "июня";
                break;
            case 7:
                return $month = " " . "июля";
                break;
            case 8:
                return $month = " " . "августа";
                break;
            case 9:
                return $month = " " . "сентября";
                break;
            case 10:
                return $month = " " . "октября";
                break;
            case 11:
                return $month = " " . "ноября";
                break;
            case 12:
                return $month = " " . "декабря";
                break;

        }
    }

}