<?php

const hostname = 'localhost';
const username = 'root';
const password = '';
const dbname = 'betting';

$connection = mysqli_connect(hostname, username, password, dbname) or die(mysqli_error($connection));
