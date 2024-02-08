<?php

require 'models/category.model.php';

$categories = getCategories();

$hi = "hi";

require "views/category/category.view.php";