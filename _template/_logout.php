<?php
session_start();
session_destroy();
header("Location:http://construction.test/");
