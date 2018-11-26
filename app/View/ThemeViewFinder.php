<?php
/**
 * Created by PhpStorm.
 * User: ns
 * Date: 2018/5/8
 * Time: 16:20
 */
namespace App\View;
use Illuminate\View\FileViewFinder;

class ThemeViewFinder extends FileViewFinder
{
    protected $activeTheme;
    protected $basePath;

    public function setBasePath($path)
    {
        $this->basePath = $path;
    }

    public function setActive($theme)
    {
        $this->activeTheme = $theme;
        array_unshift($this->paths, $this->basePath.'/'.$theme.'/views');
    }

    public function setHints($hints)
    {
        $this->hints = $hints;
    }
}
