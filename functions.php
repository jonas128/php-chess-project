<?php

declare(strict_types=1);

function getPageName($name)
{
    return $name;
}


function getPoint($pieces, $getPoint)
{
    foreach ($pieces as $piece) {

        if ($getPoint === $piece['points']) {
            return "Denna schackpjäs relativa värde är $getPoint.";
        }
    }
}
