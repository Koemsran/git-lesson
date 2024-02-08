<?php

require 'models/category.model.php';

$categories = getCategories();

$number = 10;

require "views/category/category.view.php";