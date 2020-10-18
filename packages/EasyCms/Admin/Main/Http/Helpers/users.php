<?php
    if (! function_exists('bouncer')) {
        function bouncer()
        {
            return app()->make(\Pkg\EasyCms\Admin\Main\Bouncer::class);
        }
    }
?>
