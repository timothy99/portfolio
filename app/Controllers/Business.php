<?php namespace App\Controllers;

use App\Models\BusinessModel;
use App\Models\TextModel;

class Business extends BaseController
{
	/**
	 * @author 배진모
	 * @see 휴폐업 조회 화면
	 * @param null
	 * @return view
	 */
	public function businessSearch()
	{
		$view = view("business/businessSearch");

		return $view;
	}

	/**
	 * @author 배진모
	 * @see 휴폐업 조회
	 * @param post
	 * @return json
	 */
	public function businessInfo()
	{
		$business_model = new BusinessModel();
		$text_model = new TextModel();

		logMessage($this->request->getPost()); // 어떤 값이 들어왔는지 로그를 남김

		$license_num = $this->request->getPost("license_num") == null ? null : $this->request->getPost("license_num");

		$data = array();
		$data["license_num"] = $license_num;

		$business_info = $business_model->getBusinessInfo($data); // 휴폐업조회

		echo json_encode($business_info);
	}

}