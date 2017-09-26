<?php

use App\Jobs\FakerJob;

Route::view('/', 'welcome');

Route::get('queue', function () {
	FakerJob::dispatch();
});
