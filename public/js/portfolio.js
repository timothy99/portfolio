moment.locale('ko'); // 날짜 한국어 언어팩 실행
$("#search_date").daterangepicker({ // 날짜 기본 셋팅
	locale: {
		format: "YYYY-MM-DD"
	}
});

// 날짜 적용
function date_change(range) {
	document.getElementById("date0").className = "btn btn-default";
	document.getElementById("date1").className = "btn btn-default";
	document.getElementById("date2").className = "btn btn-default";
	document.getElementById("date3").className = "btn btn-default";
	document.getElementById("date4").className = "btn btn-default";
	document.getElementById("date5").className = "btn btn-default";
	document.getElementById("date6").className = "btn btn-default";
	document.getElementById("date"+range).className = "btn btn-success";

	if(range == 0) { // 오늘
		var start_date = moment().format("YYYY-MM-DD");
		var end_date = moment().format("YYYY-MM-DD");
	}

	if(range == 1) { // 어제
		var start_date = moment().subtract(1, "days").format("YYYY-MM-DD");
		var end_date = moment().format("YYYY-MM-DD");
	}

	if(range == 2) { // 1주일
		var start_date = moment().subtract(6, "days").format("YYYY-MM-DD");
		var end_date = moment().format("YYYY-MM-DD");
	}

	if(range == 3) { // 이번주
		var start_date = moment().startOf("week").format("YYYY-MM-DD");
		var end_date = moment().format("YYYY-MM-DD");
	}

	if(range == 4) { // 1개월
		var start_date = moment().subtract(29, "days").format("YYYY-MM-DD");
		var end_date = moment().format("YYYY-MM-DD");
	}

	if(range == 5) { // 이번달
		var start_date = moment().startOf("month").format("YYYY-MM-DD");
		var end_date = moment().endOf("month").format("YYYY-MM-DD");
	}

	if(range == 6) { // 3개월
		var start_date = moment().subtract(2, "month").startOf("month").format("YYYY-MM-DD");
		var end_date = moment().endOf("month").format("YYYY-MM-DD");
	}

	document.getElementById("search_date").value = start_date+" - "+end_date;
}
