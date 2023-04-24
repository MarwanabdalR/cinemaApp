<?php

    function lang($phrase) {
        static $lang= array(
            'HOME_ADMIN'        => 'Admin Area',
            'catagories'        => 'sections',
            'ITEM'              => 'Items',
            'MEMBER'            => 'Members',
            'STATISTICS'        => 'Statistics',
            'LOGS'              => 'Logs',
            '' => '',
            '' => '',
        );
        return $lang[$phrase];
    }

    

// array(
//     'marwan' => 'abd'
// );
// echo $lang['marwan'];