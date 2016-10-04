<?php

Route::get('/', function()
{
    return Redirect::to('user/group/city');
});

Route::get('user/group/city', 'UserController@showUserGroupByCity');

Route::get('user/group/department', 'UserController@showUserGroupByDepartment');
