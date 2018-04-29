<?php

/**
 * Class use to retrieve the required view.
 */
class ViewHandler
{
    public function getDataView(DataView $view)
    {
        return $view->showDataView();
    }
}