<?php

function routeToPage(string $uri, array $pathList)
{
    /**
     * @param string $uri URI path.
     * @param array $pathList List of available path.
     * 
     * @return void This funtion will return nothing.
     * */
    if (array_key_exists($uri, $pathList)) {
        return require($pathList[$uri]); // Require path to file if available
    }
}
