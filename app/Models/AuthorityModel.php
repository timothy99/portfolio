<?php namespace App\Models;

use CodeIgniter\Model;
use App\Models\QueryModel;

class AuthorityModel extends Model
{
	/**
	 * @author 배진모
	 * @see IP를 체크하여 회사 IP가 아니면 다른곳으로 보냄
	 * @param null
	 * @return void
	 */
	public function checkIP()
	{
		$query_model = new QueryModel();

		$request = service("request"); // IP확인을 위한 서비스 호출
		$ip_address = $request->getIPAddress(); // 접속한 IP확인

		$db_table = "ipBlock";
		$db_select = array();
		array_push($db_select, array("ip", TRUE)); // IP
		$db_where = array();
		array_push($db_where, array("del_yn", "N", TRUE)); // 삭제안된데이터만 조회

		// IP관리에서 접속 가능한 IP확인
		$db_data = array();
		$db_data["db_table"] = $db_table;
		$db_data["db_select"] = $db_select;
		$db_data["db_where"] = $db_where;
		$db_result = $query_model->dbList($db_data);
		$ip_list = $db_result["db_list"];

		// 접속한 IP가 접속가능한지 확인하여 결과 반환
		$ip_result = false;
		foreach($ip_list as $no => $val) {
			$ip = $val->ip;
			if($ip_address == $ip) {
				$ip_result = true;
			}
		}

		if($ip_result == false) { // 회사 아이피가 아니면 다른데로 돌려버림
			header("Location: https://k-voucher.kr"); // 특정 사이트로 보내버림
			exit; // 해당 턴을 종료함
		}
	}

	/**
	 * @author 배진모
	 * @see 주소를 검색해서 도메인으로만 접속하였으면 (segment없이) main/main으로 보내고 그렇지 않으면 uri_path 반환
	 * @param null
	 * @return char $uri_path
	 */
	public function sendRedirect()
	{
		$base_url = base_url(); // 도메인 입력
		$uri = service("uri"); // 현재 주소가 로그인이 필요한지 확인
		$segments = $uri->getSegments(); // uri 세그멘트 확보
		if($segments == null) { // 도메인으로만 접속한 경우(segment가 없는 상태)
			header("Location: $base_url/company/demandList"); // 특정 사이트로 보내버림
			exit;
		} else {
			$segment0 = $segments[0]; // 제일 첫번째 세그멘트
			$segment1 = $segments[1]; // 두번째 세그멘트
			$uri_path = $segment0."/".$segment1; // 2개를 합쳐 현재 접근하는 컨트롤러의 주소 계산
		}

		return $uri_path;
	}

	/**
	 * @author 배진모
	 * @see 로그인이 되어 있지 않을 경우 허용된 주소가 아닌경우 로그인창으로 보냄
	 * @param $uri_path
	 * @return null
	 */
	public function checkLogin($uri_path)
	{
		$query_model = new QueryModel();

		$session = service("session");
		$sess_user_id = $session->get("user_id"); // 세션의 ID를 찾음(로그인한 상태인지)

		$db_table = "ncv_url";
		$db_select = array();
		array_push($db_select, array("url_link", TRUE)); // IP
		$db_where = array();
		array_push($db_where, array("del_yn", "N", TRUE)); // 삭제안된데이터만 조회
		array_push($db_where, array("use_yn", "Y", TRUE)); // 사용중인 링크만 조회

		// IP관리에서 접속 가능한 IP확인
		$db_data = array();
		$db_data["db_table"] = $db_table;
		$db_data["db_select"] = $db_select;
		$db_data["db_where"] = $db_where;
		$db_result = $query_model->dbList($db_data);
		$url_list = $db_result["db_list"];

		$uri_result = false;
		foreach($url_list as $no => $val) {
			$url_link = $val->url_link;
			if($uri_path == $url_link) {
				$uri_result = true;
			}
		}

		if($uri_result == false && $sess_user_id == null) { // 허용된 주소가 아니고 ID도 없는경우
			$base_url = base_url(); // 기본 url 입력
			$session->destroy(); // 세션 삭제
			header("Location: $base_url/user/login"); // 로그인 하는 사이트로 보냄
			exit;
		}
	}
}