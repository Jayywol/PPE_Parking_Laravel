<?php

function convertDate($date)
{
    return date("Y-m-d", strtotime($date));
}
