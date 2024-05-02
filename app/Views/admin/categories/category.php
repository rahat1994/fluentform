<?php

use FluentForm\App\Helpers\Helper;
use FluentForm\Framework\Helpers\ArrayHelper;

?>
<?php
do_action_deprecated(
    'fluentform_global_menu',
    [],
    FLUENTFORM_FRAMEWORK_UPGRADE,
    'fluentform/global_menu',
    'Use fluentform/global_menu instead of fluentform_global_menu.'
);
do_action('fluentform/global_menu');

?>