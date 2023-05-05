<?php 

function view($fileName, $data = null)
{
    $layoutContent = renderLayout($data);
    $viewContent = renderView($fileName, $data);
    echo str_replace('{{content}}', $viewContent, $layoutContent);
}

function renderLayout($data = null)
{
    ob_start();
    include_once( VIEWS_PATH . 'layout.php');
    return ob_get_clean();

}

function renderView($file, $data = null)
{
    ob_start();
    include_once( VIEWS_PATH . $file .'.php');
    return ob_get_clean();
}

?>