<?php

class Name extends DataMapper {

// Optionally, don't include a constructor if you don't need one.
function __construct($id = NULL)
{
    parent::__construct($id);
}

// Optionally, you can add post model initialisation code
function post_model_init($from_cache = FALSE)
{
}
}
