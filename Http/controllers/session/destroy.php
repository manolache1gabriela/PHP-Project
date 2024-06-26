<?php

use Core\Authenticator;

(new Authenticator)->logout($_SESSION);

header('location: /');
exit();
