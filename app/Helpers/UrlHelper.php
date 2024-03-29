<?php

use App\Config\App;

function asset_url($file)
{
    return App::BASE_URL . '/' . $file;
}
function route($route, $id = null)
{
    $transform_url = str_replace('.', '/', $route);
    $url = App::BASE_URL . '/' . $transform_url;

    if ($id) $url .= '/' . $id;

    return $url;
}
function segment_url($segment)
{
    $segments = explode('/', $_SERVER['REQUEST_URI']);
    return $segments[$segment] ?? null;
}
function vite_url($file)
{
    return App::VITE_URL . '/' . $file;
}
if (!function_exists('arrayToObject')) {
    function arrayToObject($array)
    {
        if (empty($array)) return null;
        $object = new stdClass();
        foreach ($array as $key => $value) {
            if (is_array($value))
                $object->$key = arrayToObject($value);
            else
                $object->$key = $value;
        }
        return $object;
    }
}

