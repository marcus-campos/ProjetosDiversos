<?php
require_once 'input.class.php';
require_once 'class.inputfilter_clean.php';  
$filter = new InputFilter();
$input = new Input();
if (isset($_GET)) {
    $_GET = $filter->process($_GET);
    $_GET = $input->get;
}
if (isset($_POST)) {
    $_POST = $filter->process($_POST);
    $_POST = $input->post;
}
if (isset($_FILES))
    $_FILES = $input->files;
?>
