Sube TODO el contenido de esta carpeta a:
delvalle.qodexia.site/public_html/

Debe quedar asi en el servidor:
- /public_html/buzon-uneg-relay-mailer.php
- /public_html/vendor/phpmailer/phpmailer/src/Exception.php
- /public_html/vendor/phpmailer/phpmailer/src/PHPMailer.php
- /public_html/vendor/phpmailer/phpmailer/src/SMTP.php

Antes de probar:
1) Edita /public_html/buzon-uneg-relay-mailer.php
2) Pon tu App Password real en:
   $smtpPassword = '...';

Endpoint esperado:
https://delvalle.qodexia.site/buzon-uneg-relay-mailer.php
