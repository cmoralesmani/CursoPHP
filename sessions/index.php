<?php

// Las Sessiones son unicas por clientes

session_start();

$_SESSION['count'] = 0;

echo '<p>Session</p>';