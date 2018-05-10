<?php

function formatPrice($vlrprice)
{
    return number_format($vlrprice, 2, "," ,".");

}