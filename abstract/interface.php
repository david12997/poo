<?php

//this is a form of implement abtraction 

interface StoreInterface
{
    //here we difine methods and propertys that we'll use in others class
    public function Pay();
    public function Buy();
    public function Delivery();

}