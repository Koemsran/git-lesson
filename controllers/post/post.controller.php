<?php

$heading = "Post Page";

require 'models/post.model.php';

$posts = getPosts();

$kemsran = "bopha";
$yon = 'yon';

require "views/post/post.view.php";