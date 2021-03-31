<?php

namespace Config;

use CodeIgniter\Events\Events;
use CodeIgniter\Exceptions\FrameworkException;
use App\Models\AuthorityModel; // 권한관리 모델

/*
 * --------------------------------------------------------------------
 * Application Events
 * --------------------------------------------------------------------
 * Events allow you to tap into the execution of the program without
 * modifying or extending core files. This file provides a central
 * location to define your events, though they can always be added
 * at run-time, also, if needed.
 *
 * You create code that can execute by subscribing to events with
 * the 'on()' method. This accepts any form of callable, including
 * Closures, that will be executed when the event is triggered.
 *
 * Example:
 *      Events::on('create', [$myInstance, 'myMethod']);
 */

Events::on('pre_system', function () {
	if (ENVIRONMENT !== 'testing')
	{
		if (ini_get('zlib.output_compression'))
		{
			throw FrameworkException::forEnabledZlibOutputCompression();
		}

		while (ob_get_level() > 0)
		{
			ob_end_flush();
		}

		ob_start(function ($buffer) {
			return $buffer;
		});
	}

	/*
	 * --------------------------------------------------------------------
	 * Debug Toolbar Listeners.
	 * --------------------------------------------------------------------
	 * If you delete, they will no longer be collected.
	 */
	if (CI_DEBUG)
	{
		Events::on('DBQuery', 'CodeIgniter\Debug\Toolbar\Collectors\Database::collect');
		Services::toolbar()->respond();
	}
});

/*
	사용자 추가 이벤트
	권한 모델을 만들어서 이벤트 체크, 현재는 누구나 접근이 가능한 상태이기 때문에 아래 이벤트에 대해서는 모두 주석처리
*/
Events::on("post_controller_constructor", function()
{
	// $authority_model = new AuthorityModel();
	// $authority_model->checkIP(); // IP를 체크하여 지정된 IP가 아니면 다른곳으로 보냄
	// $uri_path = $authority_model->sendRedirect(); // 주소를 검색해서 도메인으로만 접속하였으면 (segment없이) main/main으로 보내고 그렇지 않으면 uri_path 반환
	// $authority_model->checkLogin($uri_path); // 로그인이 되어 있지 않을 경우 허용된 주소가 아닌 경우 로그인창으로 보냄
});