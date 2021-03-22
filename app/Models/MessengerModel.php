<?php namespace App\Models;

use CodeIgniter\Model;

class MessengerModel extends Model
{
	/**
	 * @author 배진모
	 * @see 슬랙 보내기
	 * @param array $data - slack_url, message
	 * @return array $model_result - 슬랙 보낸 결과
	 */
	public function procSendSlack($data)
	{
		$slack_url = $data["slack_url"]; // 슬랙 url
		$message = $data["message"];
		$payload["text"] = $message;

		$payload_json = json_encode($payload, TRUE);

		$ch = curl_init(); // curl 초기화
		$headers = array(); //헤더정보
		array_push($headers, "cache-control: no-cache");
		array_push($headers, "content-type: application/json; charset=utf-8");

		curl_setopt($ch,CURLOPT_URL, $slack_url);
		curl_setopt($ch,CURLOPT_POST, true);
		curl_setopt($ch,CURLOPT_POSTFIELDS, $payload_json);
		curl_setopt($ch,CURLOPT_RETURNTRANSFER, true);
		curl_setopt($ch,CURLOPT_CONNECTTIMEOUT ,3);
		curl_setopt($ch,CURLOPT_TIMEOUT, 20);
		curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
		$response = curl_exec($ch);
		curl_close($ch);
	}

	/**
	 * @author 배진모
	 * @see 슬랙 보내기
	 * @param array $data - telegram_url, message, chat_id
	 * @return array $model_result - 텔레그램 보낸 결과
	 */
	public function procSendTelegram($data)
	{
		$bot_id = env("telegram.bot.id". null);

		$chat_id = $data["chat_id"]; // 텔레그램 chat_id
		$message = $data["message"]; // 보내는 메시지

		$telegram_url = "https://api.telegram.org/".$bot_id."/sendmessage?chat_id=".$chat_id."&user=1&pass=2&phone=3&text=".$message;

		$ch = curl_init(); // curl 초기화
		$headers = array(); //헤더정보
		array_push($headers, "cache-control: no-cache");
		array_push($headers, "content-type: application/json; charset=utf-8");

		curl_setopt($ch,CURLOPT_URL, $telegram_url);
		// curl_setopt($ch,CURLOPT_POST, true);
		// curl_setopt($ch,CURLOPT_POSTFIELDS, $payload_json);
		curl_setopt($ch,CURLOPT_RETURNTRANSFER, true);
		curl_setopt($ch,CURLOPT_CONNECTTIMEOUT ,3);
		curl_setopt($ch,CURLOPT_TIMEOUT, 20);
		curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
		$response = curl_exec($ch);
		curl_close($ch);
	}

}