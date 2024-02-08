<?php

require 'models/category.model.php';

$categories = getCategories();

$number = 10;

$hi = "hi";

require "views/category/category.view.php";