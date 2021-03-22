<?php namespace App\Controllers;

use App\Models\MessengerModel;

class Messenger extends BaseController
{
	/**
	 * @author 배진모
	 * @see 슬랙 보내기 화면
	 * @param null
	 * @return view
	 */
	public function slack()
	{
		$view = view("messenger/slack");

		return $view;
	}

	/**
	 * @author 배진모
	 * @see 슬랙 발송
	 * @param POST slack_message
	 * @param POST slack_message
	 * @return void
	 */
	public function slackSend()
	{
		$messenger_model = new MessengerModel(); // 모델 선언

		$slack_url = $this->request->getPost("slack_url") == null ? null : $this->request->getPost("slack_url"); // slack url
		$message = $this->request->getPost("message") == null ? null : $this->request->getPost("message"); // message

		$data = array();
		$data["slack_url"] = $slack_url;
		$data["message"] = $message;
		$model_result = $messenger_model->procSendSlack($data);
	}

	/**
	 * @author 배진모
	 * @see 텔레그램 보내기 화면
	 * @param null
	 * @return json
	 */
	public function telegram()
	{
		$view = view("messenger/telegram");

		return $view;
	}

	/**
	 * @author 배진모
	 * @see 텔레그램 발송
	 * @param POST slack_message
	 * @param POST slack_message
	 * @return void
	 */
	public function telegramSend()
	{
		$messenger_model = new MessengerModel(); // 모델 선언

		$chat_id = $this->request->getPost("chat_id") == null ? null : $this->request->getPost("chat_id"); // chat_id
		$message = $this->request->getPost("message") == null ? null : $this->request->getPost("message"); // message

		$data = array();
		$data["chat_id"] = $chat_id;
		$data["message"] = $message;
		$model_result = $messenger_model->procSendTelegram($data);
	}

}