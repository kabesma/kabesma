<?php
//use App\Models\kabesma_themes;

if (! function_exists('themes_path')) {
    /**
     * Get the path to the resources folder.
     *
     * @param  string  $path
     * @return string
     */
    function themes_path($theme = 'default')
    {
        $result = $theme;

        return base_path('themes/'.$result);
    }
}

if (! function_exists('themes_route_path')) {

    function themes_route_path($route = 'default')
    {
        try {
            $dbtheme = App\Models\kabesma_themes::where('activated', '=', 1)->first();
            $theme  = $dbtheme->name;
        } catch (Exception $e) {
            $theme = 'default';
        }

        return base_path('themes/'.$theme.'/routes/front.php');
    }
}
