<?php

session_start();

unset($_SESSION['count']);

session_destroy(); // Elimina completamente la session