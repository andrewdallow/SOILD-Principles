<?php

/**
 * Class use to retrieve the required view.
 */
class RetrieveView
{
    public function getDataView(DataView $view)
    {
        return $view->showDataView();
    }
}