<?php
// project_template.php

require 'projects.php';

$projectKey = isset($_GET['project']) ? $_GET['project'] : '';
if (array_key_exists($projectKey, $projects)) {
    $project = $projects[$projectKey];
    $projectTitle = $project['title'];
    $projectImage = $project['image'];
    $projectPlace = $project['place'];
    $projectDescription = $project['description'];
    $projectSecondDescription = $project['description2'];
    $projectSpace = $project['space'];
} else {
    die('Project not found.');
}

include 'project_template.php';
?>