<?php

namespace Zofe\ThemeDesk;

use Zofe\Rapyd\Themes\RapydThemeServiceProvider;

/** Activate with RAPYD_THEME=desk (config rapyd.theme). */
class ThemeServiceProvider extends RapydThemeServiceProvider
{
    protected string $name = 'desk';

    protected string $path = __DIR__ . '/..';
}
