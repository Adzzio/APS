<?php
require_once 'Controller/CalcCtrl.class.php';

$smarty = new Smarty();
$smarty->assign('app_url',_APP_URL);
$smarty->assign('root_path',_ROOT_PATH);
$smarty->assign('page_title','Przykład 04');
$smarty->assign('page_description','Profesjonalne szablonowanie oparte na bibliotece Smarty');
$smarty->assign('page_header','Szablony Smarty');


if (!empty($_POST)) {
    $application = new App\CalcCtrl();
    $application->getParams();
    $errors = $application->validate();
    if (!empty($errors)) {
        $smarty->assign('error', implode("<br>", $errors));
    } else {
        $application->execute();
    }

    $smarty->assign('result',$application->showResult());
    $smarty->display(_ROOT_PATH.'/app/View/CalcView.tpl');
    return;
}

$smarty->display(_ROOT_PATH.'/app/View/CalcView.tpl');
