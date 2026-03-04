<?php

return [
    'host' => 'smtp.gmail.com',
    'port' => 587,
    'encryption' => 'tls', // tls (STARTTLS) o ssl (SMTPS)
    'username' => 'webs.delvalle@gmail.com',
    'password' => 'fkylmccydjpbkiqz',
    'from_email' => 'webs.delvalle@gmail.com',
    'from_name' => 'UNEG Sitio Web',
    'recipients' => [
        ['email' => 'elizabeth.cisneros@uneg.edu.mx', 'name' => ''],
        ['email' => 'jair.uneg@gmail.com', 'name' => ''],
    ],
    'recipients_buzon' => [
        ['email' => 'gabriel.riancho@uneg.edu.mx', 'name' => ''],
        ['email' => 'elizabeth.cisneros@uneg.edu.mx', 'name' => ''],
        ['email' => 'jair.uneg@gmail.com', 'name' => ''],
    ],
    'recipients_egresados' => [
        ['email' => 'elizabeth.cisneros@uneg.edu.mx', 'name' => ''],
        ['email' => 'jair.uneg@gmail.com', 'name' => ''],
    ],
];
