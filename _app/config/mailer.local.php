<?php

return [
    'host' => 'localhost',
    'port' => 25,
    'encryption' => 'none', // tls (STARTTLS), ssl (SMTPS) o none (relay local)
    'smtp_auth' => false,
    'username' => '',
    'password' => '',
    'from_email' => 'no-reply@uneg.edu.mx',
    'from_name' => 'UNEG Sitio Web',
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
