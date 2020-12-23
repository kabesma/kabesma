<?php

if (! function_exists('themes_path')) {
    /**
     * Get the path to the resources folder.
     *
     * @param  string  $path
     * @return string
     */
    function themes_path($path = '', $theme = 'default')
    {
//        try {
//            $dbtheme = Theme::where('activated', '=', 1)->first();
//            $theme  = $dbtheme->name;
//        } catch (Exception $e) {
//            $theme = 'default';
//        }

        $result = $path;

        return base_path('themes/'.$result);
    }
}
