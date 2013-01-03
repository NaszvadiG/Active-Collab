<?php

//require
require_once '../../../autoload.php';
require_once 'config.php';

use \TijsVerkoyen\ActiveCollab\ActiveCollab;

// create instance
$ac = new ActiveCollab(TOKEN, API_URL);

try {
//    $response = $ac->projectsMilestones('api-example');
    // @todo  $response = $ac->projectsMilestonesAdd();
    // @todo  $response = $ac->projectsMilestonesGet();
    // @todo  $response = $ac->projectsMilestonesEdit();
    // @todo  $response = $ac->projectsMilestonesReschedule();

    // @todo  $response = $ac->apiIsAlive();

//    $response = $ac->info();
//    $response = $ac->infoLabelsProject();
//    $response = $ac->infoLabelsAssignment();
//    $response = $ac->infoRoles();
//    $response = $ac->infoRolesProject();

//    $response = $ac->people();
    // @todo  $response = $ac->peopleAddCompany();
    // @todo  $response = $ac->peopleCompanyGet();
    // @todo  $response = $ac->peopleCompanyEdit();
    // @todo  $response = $ac->peopleCompanyUserAdd();
    // @todo  $response = $ac->peopleCompanyUserGet();
    // @todo  $response = $ac->peopleCompanyUserEdit();

//    $response = $ac->projects();
    // @todo  $response = $ac->projectsArchive();
    // @todo  $response = $ac->projectsAdd();
    // @todo  $response = $ac->projectsGet();
    // @todo  $response = $ac->projectsEdit();

//    $response = $ac->projectsPeople('api-example');
    // @todo  $response = $ac->projectsPeopleAdd();
    // @todo  $response = $ac->projectsPeopleReplace();
    // @todo  $response = $ac->projectsPeopleChangePermissions();
    // @todo  $response = $ac->projectsPeopleRemove();

//    $response = $ac->projectsDiscussions('api-example');
    // @todo  $response = $ac->projectsDiscussionsAdd();
    // @todo  $response = $ac->projectsDiscussionsGet();
    // @todo  $response = $ac->projectsDiscussionsEdit();

//    $response = $ac->projectsTasks('api-example');
    // @todo  $response = $ac->projectsTasksArchive();
    // @todo  $response = $ac->projectsTasksAdd();
    // @todo  $response = $ac->projectsTasksGet();
    // @todo  $response = $ac->projectsTasksEdit();

//    $response = $ac->projectsTracking('api-example');
    // @todo  $response = $ac->projectsTrackingTimeAdd();
    // @todo  $response = $ac->projectsTrackingTimeGet();
    // @todo  $response = $ac->projectsTrackingTimeEdit();
    // @todo  $response = $ac->projectsTrackingExpensesAdd();
    // @todo  $response = $ac->projectsTrackingExpensesGet();
    // @todo  $response = $ac->projectsTrackingExpensesEdit();

    // @todo  $response = $ac->status();
    // @todo  $response = $ac->statusAdd();
} catch (Exception $e) {
    var_dump($e);
}

// output
var_dump($response);
