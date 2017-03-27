<?php

require_once "session.php";

login_clear();

header("Location: index.php");
exit;