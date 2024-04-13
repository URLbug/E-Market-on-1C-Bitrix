<div class="col-sm-3">
    <h2>Контактная информация</h2>
    <div class="heading-border b-color-1"></div>
    <strong class="media-heading">Адрес</strong>
    <?php
        $APPLICATION->IncludeFile(
            INCLUDE_PATH . '/contact/address.php',
            [],
            [
                'MODE' => 'text',
            ]
        );
    ?>

    <strong class="media-heading">Номер телефона</strong>
    <?php
    $APPLICATION->IncludeFile(
        INCLUDE_PATH . '/contact/phone.php',
        [
            'HTML' => 'Y'
        ],
        [
            'MODE' => 'text',
        ]
    );
    ?>


    <strong class="media-heading">E-mail адрес</strong>
    <?php
    $APPLICATION->IncludeFile(
        INCLUDE_PATH . '/contact/support_email.php',
        [],
        [
            'MODE' => 'text',
        ]
    );

    $APPLICATION->IncludeFile(
        INCLUDE_PATH . '/contact/email.php',
        [
            'HTML' => 'Y'
        ],
        [
            'MODE' => 'text',
        ]
    );
    ?>
</div>