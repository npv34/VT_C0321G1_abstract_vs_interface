<?php


interface ActionInterface extends BaseInterface
{
    function create();
    function delete();
    function edit();
    function getAll();
}