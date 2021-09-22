<?php

Route::get('/', 'PagesController@Home');

Route::resource('tasks', 'TasksController');