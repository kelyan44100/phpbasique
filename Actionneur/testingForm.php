<?php

require_once '../impl/AppServiceImpl.php';

$appService = AppServiceImpl::getInstance();

$createdtesting = $appService->createTesting($_POST['nameTesting'], $_POST['nombreTesting']);
