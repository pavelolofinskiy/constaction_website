<?php
require 'projects.php';

$projectKey = isset($_GET['project']) ? $_GET['project'] : '';
if (array_key_exists($projectKey, $projects)) {
    $projectTitle = $projects[$projectKey]['title'];
    $projectImage = $projects[$projectKey]['image'];
    $projectPlace = $projects[$projectKey]['place'];
    $projectDescription = $projects[$projectKey]['description'];
    $projectSecondDescription = $projects[$projectKey]['description2'];
    $projectSpace = $projects[$projectKey]['space'];
} else {
    // Handle case where project does not exist
    die('Project not found.');
}

include 'project_template.php';
?>