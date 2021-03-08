<?php
require_once dirname(__FILE__).'/../config_credit.php';

require_once _ROOT_PATH.'/lib/smarty/Smarty.class.php';

function getVariables(&$variables) {
    $variables['amount'] = isset($_REQUEST['amount']) ? $_REQUEST['amount'] : null;
    $variables['percentage'] = isset($_REQUEST['percentage']) ? $_REQUEST['percentage'] : null;
    $variables['years'] = isset($_REQUEST['years']) ? $_REQUEST['years'] : null;
}

function validate(&$variables, &$messages, &$infos) {
    if (! (isset($variables['amount']) && isset($variables['percentage']) && isset($variables['years']))) {
        return false;
    }

    $infos [] = "Przekazano parametry.";

    if ($variables['amount'] == "") {
        $messages [] = "Nie podano wysokości kredytu.";
    }
    if ($variables['percentage'] == "") {
        $messages [] = "Nie podano wartości oprocentowania.";
    }
    if ($variables['years'] == "") {
        $messages [] = "Nie podano okresu kredytowania.";
    }

    if (! empty($messages)) return false;
    
    if (! is_numeric($variables['amount'])) {
        $messages [] = "Wysokość kredytu nie jest liczbą!";
    }
    if (! is_numeric($variables['percentage'])) {
        $messages [] = "Oprocentowanie nie jest liczbą!";
    }
    if (! is_numeric($variables['years'])) {
        $messages [] = "Okres kredytowania nie jest liczbą!";
    }

    if (! empty($messages)) return false;
    else return true;
}  


function calculate(&$variables, &$messages, &$infos, &$result) {

    $infos [] = "Podane parametry są poprawne. Wykonuję obliczenia.";

    $amount = intval($variables['amount']);
    $percentage = floatval($variables['percentage']);
    $years = intval($variables['years']);

    $result = (($percentage/100 * $amount) + $amount) / ($years*12);

    $result = round($result, 2);
    
}

$variables = array();
$messages = array();
$infos = array();
$result = null;

getVariables($variables);
if (validate($variables, $messages, $infos)) {
    calculate($variables, $messages, $infos, $result);
}

$smarty = new Smarty();

$smarty -> assign('app_url',_APP_URL);
$smarty -> assign('root_path',_ROOT_PATH);
$smarty -> assign('page_title', 'Kalkulator Kredytowy: Szablonowanie Smarty');

$smarty -> assign('variables', $variables);
$smarty -> assign('messages', $messages);
$smarty -> assign('infos', $infos);
$smarty -> assign('result', $result);


$smarty -> display(_ROOT_PATH.'/app/credit_view.tpl');