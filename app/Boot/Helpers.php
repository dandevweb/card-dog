<?php

declare(strict_types=1);

function url(string $path = null): string
{
    if (strpos($_SERVER['HTTP_HOST'], "localhost")  !== false) {
        if ($path) {
            return CONF_URL_TEST . "/" . ($path[0] == "/" ? mb_substr($path, 1) : $path);
        }
        return CONF_URL_TEST;
    }

    if ($path) {
        return CONF_URL_BASE . "/" . ($path[0] == "/" ? mb_substr($path, 1) : $path);
    }

    return CONF_URL_BASE;
}

function asset(string $path = null, $theme = CONF_VIEW_THEME): string
{
    if (strpos($_SERVER['HTTP_HOST'], "localhost")  !== false) {
        if ($path) {
            return CONF_URL_TEST . "/public/{$theme}/" . ($path[0] == "/" ? mb_substr($path, 1) : $path);
        }
        return CONF_URL_TEST . "/public/{$theme}";
    }

    if ($path) {
        return CONF_URL_BASE . "/public/{$theme}/" . ($path[0] == "/" ? mb_substr($path, 1) : $path);
    }

    return CONF_URL_BASE . "/public/{$theme}";
}