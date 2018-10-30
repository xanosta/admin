<?php

$blogs = $query->selectAllBlogs('US', 'en');

require 'view/index.view.php';