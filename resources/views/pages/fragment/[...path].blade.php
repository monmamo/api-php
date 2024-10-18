<?php
$slug = implode('.',$path);
echo view('articles.'.$slug)->fragment('content');
