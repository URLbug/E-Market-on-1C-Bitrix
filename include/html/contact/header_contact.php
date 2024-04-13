<div class="col-sm-7">
    <ul class="list-inline">
        <li>
            <a href="tel:<?php
            $APPLICATION->IncludeFile(
                INCLUDE_PATH . '/contact/phone.php',
                [],
                [
                    'SHOW_BORDER' => false,
                    'MODE' => 'php',
                ]
            );
            ?>" ><i class="fa fa-mobile"></i>
                <?php
                $APPLICATION->IncludeFile(
                    INCLUDE_PATH . '/contact/phone.php',
                    [],
                    [
                        'MODE' => 'text',
                    ]
                );
                ?>
            </a>
        </li>

        <li>
            <a href="mailto:<?php
            $APPLICATION->IncludeFile(
                INCLUDE_PATH . '/contact/email.php',
                [],
                [
                    'SHOW_BORDER' => false,
                    'MODE' => 'php',
                ]
            );
            ?>">
                <i class="fa fa-envelope-o"></i>
                <?php
                $APPLICATION->IncludeFile(
                    INCLUDE_PATH . '/contact/email.php',
                    [],
                    [
                        'MODE' => 'text',
                    ]
                );
                ?>
            </a>
        </li>
    </ul>
</div>