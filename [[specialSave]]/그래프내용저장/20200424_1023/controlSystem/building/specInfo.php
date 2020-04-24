<?php include $_SERVER['DOCUMENT_ROOT'] . '/controlSystem/common/page/head.php'; ?>
<body>
<div class="container">
	<div class="contents">
		<div class="section pageTop">
			<div class="leftGroup">
				<div class="iconCase">
					<a href="javascript:void(0);" class="hamburgerIcon">
						<img src="/controlSystem/common/img/icon_hamburger.png" alt="">
					</a>
				</div>
			</div>
			<div class="centerGroup">
				<div class="pageTitle">
					통합관제시스템
				</div>
			</div>
			<div class="rightGroup">
				<div class="timeCase">
					2020-01-10 14:45:55
				</div>
			</div>
		</div>
		<div class="section mainControl">
			<div class="leftGroup">
				<div class="searchComp">
					<div class="relative">
						<input type="text" class="tbox full" placeholder="search">
						<a href="javascript:void(0);" class="btn searchBtn">
							<img src="/controlSystem/common/img/icon_search.png">
						</a>
					</div>
					<ul class="searchResult">
						<li>가나다 중학교</li>
						<li>나나 중학교</li>
						<li>나미 중학교</li>
						<li class="searchNone" style="display : none;">Empty</li>
					</ul>
				</div>
			</div>







			<!-- :: ksg_20200413_2158 open 센터  파트  -->
			<div class="centerGroup">

				<!-- :: ksg_20200413_2202 single : 상단 지역구 선택 버튼 -->
				<div class="areaMap initialMod">
					<a href="javascript:void(0);" class="mainArea">전체</a>
					<i class="arrowRighttIcon"></i>
					<a href="javascript:void(0);" class="subArea">서울</a>
					<i class="arrowRighttIcon"></i>
					<a href="javascript:void(0);" class="subArea">가나다중학교</a>
					<i class="arrowRighttIcon"></i>
					<a href="javascript:void(0);" class="subArea">1학년 1반</a>
				</div>


				<!-- :: ksg_20200414_1036 open : 상단 전체시설물 등 탭 파트 -->
					<div class="tabGroup multiSort">
						<ul class="tabBox">
							<li>
								<a href="javascript:void(0);" class="tabBtn activated">이산화탄소</a>
							</li>
							<li>
								<a href="javascript:void(0);" class="tabBtn">미세먼지</a>
							</li>
							<li>
								<a href="javascript:void(0);" class="tabBtn">초미세먼지</a>
							</li>
							<li>
								<a href="javascript:void(0);" class="tabBtn">VOC</a>
							</li>
							<li>
								<a href="javascript:void(0);" class="tabBtn">라돈</a>
							</li>
						</ul>
						<ul class="tabBox">
							<li>
								<a href="javascript:void(0);" class="tabBtn activated">일</a>
							</li>
							<li>
								<a href="javascript:void(0);" class="tabBtn">주</a>
							</li>
							<li>
								<a href="javascript:void(0);" class="tabBtn">월</a>
							</li>
							<li>
								<a href="javascript:void(0);" class="tabBtn">년</a>
							</li>
						</ul>
					</div>
						
				<!-- :: ksg_20200414_1036 close : 상단 전체시설물 등 탭 파트 -->






				<!-- :: ksg_20200423_1818 open : 중간 그래프 파트  -->
				<div class="graphPairGroup">
					<div class="graphComp">



						<canvas id="chart" style="height : 100%; width : 100%; min-width : 246px;"></canvas>



					</div>
					<div class="statusComp narrowSort">
						<div class="title">
							<input class="tbox dateSearch" value="Dec 11.2019" readonly/>
						</div>
						<div class="compCon">
							<ul>
								<li>
									<div>
										<span>최고 :</span>
										<span>아주나쁨</span>
									</div>
									<div>1506 PPM</div>
								</li>
							</ul>
						</div>
					</div>
				</div>
				<!-- :: ksg_20200423_1818 close : 중간 그래프 파트  -->


















				<!-- :: ksg_20200414_1123 open : 중앙 시설물 관리 테이블 파트  -->
				<div class="tableGroup" style="display:none!important;">

					<!-- :: ksg_20200414_1142 single : 테이블 파트 -->
					<div class="tableColorShell">
						<table class="buildingListSort">
							<colgroup>
								<col width="5%"/>
								<col width="12%"/>
								<col width="12%"/>
								<col width="12%"/>
								<col width="12%"/>
								<col width="13%"/>
								<col width="12%"/>
								<col width="12%"/>
								<col width="5%"/>
							</colgroup>
							<thead>
								<th>메모</th>
								<th>시설물명</th>
								<th>주소</th>
								<th>연락처</th>
								<th>관리업체</th>
								<th>관리자</th>
								<th>마지막로그인</th>
								<th>등록일</th>
								<th>관리</th>
							</thead>
							<tbody>
							<tr>
								<td>
									<a href="javascript:void(0);" class="innerBtn">메모</a>
								</td>
								<td>
									<div>마포고등학교</div>
								</td>
								<td>
									<div>서울시 마포구 마포대로 36</div>
								</td>
								<td>
									<div>010-1233-567*</div>
								</td>
								<td>
									<div>에이디치히얌</div>
									<div>서울북부교육청</div>
								</td>
								<td>
									<div>bububu</div>
									<div>1234-4666-444*</div>
								</td>
								<td>
									<div>2020-03-05</div>
									<div>18:00</div>
								</td>
								<td>
									<div>2020-03-08</div>
									<div>11:00</div>
								</td>
								<td>
									<a href="javascript:void(0);" class="innerBtn">수정</a>
									<a href="javascript:void(0);" class="innerBtn delBtnSort">삭제</a>
								</td>
							</tr>
							<tr>
								<td>
									<a href="javascript:void(0);" class="innerBtn">메모</a>
								</td>
								<td>
									<div>마포고등학교</div>
								</td>
								<td>
									<div>서울시 마포구 마포대로 36</div>
								</td>
								<td>
									<div>010-1233-567*</div>
								</td>
								<td>
									<div>에이디치히얌</div>
									<div>서울북부교육청</div>
								</td>
								<td>
									<div>bububu</div>
									<div>1234-4666-444*</div>
								</td>
								<td>
									<div>2020-03-05</div>
									<div>18:00</div>
								</td>
								<td>
									<div>2020-03-08</div>
									<div>11:00</div>
								</td>
								<td>
									<a href="javascript:void(0);" class="innerBtn">수정</a>
									<a href="javascript:void(0);" class="innerBtn delBtnSort">삭제</a>
								</td>
							</tr>
							<tr>
								<td>
									<a href="javascript:void(0);" class="innerBtn">메모</a>
								</td>
								<td>
									<div>마포고등학교</div>
								</td>
								<td>
									<div>서울시 마포구 마포대로 36</div>
								</td>
								<td>
									<div>010-1233-567*</div>
								</td>
								<td>
									<div>에이디치히얌</div>
									<div>서울북부교육청</div>
								</td>
								<td>
									<div>bububu</div>
									<div>1234-4666-444*</div>
								</td>
								<td>
									<div>2020-03-05</div>
									<div>18:00</div>
								</td>
								<td>
									<div>2020-03-08</div>
									<div>11:00</div>
								</td>
								<td>
									<a href="javascript:void(0);" class="innerBtn">수정</a>
									<a href="javascript:void(0);" class="innerBtn delBtnSort">삭제</a>
								</td>
							</tr>
							<tr>
								<td>
									<a href="javascript:void(0);" class="innerBtn">메모</a>
								</td>
								<td>
									<div>마포고등학교</div>
								</td>
								<td>
									<div>서울시 마포구 마포대로 36</div>
								</td>
								<td>
									<div>010-1233-567*</div>
								</td>
								<td>
									<div>에이디치히얌</div>
									<div>서울북부교육청</div>
								</td>
								<td>
									<div>bububu</div>
									<div>1234-4666-444*</div>
								</td>
								<td>
									<div>2020-03-05</div>
									<div>18:00</div>
								</td>
								<td>
									<div>2020-03-08</div>
									<div>11:00</div>
								</td>
								<td>
									<a href="javascript:void(0);" class="innerBtn">수정</a>
									<a href="javascript:void(0);" class="innerBtn delBtnSort">삭제</a>
								</td>
							</tr>
							<tr>
								<td>
									<a href="javascript:void(0);" class="innerBtn">메모</a>
								</td>
								<td>
									<div>마포고등학교</div>
								</td>
								<td>
									<div>서울시 마포구 마포대로 36</div>
								</td>
								<td>
									<div>010-1233-567*</div>
								</td>
								<td>
									<div>에이디치히얌</div>
									<div>서울북부교육청</div>
								</td>
								<td>
									<div>bububu</div>
									<div>1234-4666-444*</div>
								</td>
								<td>
									<div>2020-03-05</div>
									<div>18:00</div>
								</td>
								<td>
									<div>2020-03-08</div>
									<div>11:00</div>
								</td>
								<td>
									<a href="javascript:void(0);" class="innerBtn">수정</a>
									<a href="javascript:void(0);" class="innerBtn delBtnSort">삭제</a>
								</td>
							</tr>
							</tbody>
						</table>


						<!-- :: ksg_20200414_1528 single : 페이징 파트 -->
						<ul class="pagingBox">
							<!-- <li>
								<a href="javascript:void(0);" class="prevBtn"></a>
							</li> -->
							<li>
								<a href="javascript:void(0);" class="pagingBtn activated">1</a>
							</li>
							<li>
								<a href="javascript:void(0);" class="pagingBtn">2</a>
							</li>
							<li>
								<a href="javascript:void(0);" class="pagingBtn">3</a>
							</li>
							<li>
								<a href="javascript:void(0);" class="pagingBtn">4</a>
							</li>
							<li>
								<a href="javascript:void(0);" class="pagingBtn">5</a>
							</li>
							<li>
								<a href="javascript:void(0);" class="nextBtn"></a>
							</li>
						</ul>

					</div>

				</div>
				<!-- :: ksg_20200414_1123 close : 중앙 시설물 관리 테이블 파트  -->



			
			</div>
			<!-- :: ksg_20200413_2158 close 센터  파트  -->





			
			<div class="rightGroup">
				<!-- :: 외부 공기질 구간 -->
				<div class="statusComp externalAir">
					<div class="title">
						현재 외부 공기질
					</div>
					<div class="compCon">
						<table class="statusTable">
							<colgroup>
								<col width="50%">
								<col width="50%">
							</colgroup>
							<tbody>
							<tr>
								<td>
									초미세먼지
								</td>
								<td>
									미세먼지
								</td>
							</tr>
							<tr>
								<td>
									<i class="statusLight good"></i>
									<span>30</span>
								</td>
								<td>
									<i class="statusLight good"></i>
									<span>30</span>
								</td>
							</tr>
							</tbody>
						</table>
					</div>
				</div>
				<!-- :: 농도범위 구간 -->
				<div class="statusComp density">
					<div class="title">
						농도범위
					</div>
					<div class="compCon">
						
						<ul>
							<li>
								<i class="statusLight good"></i>
								<span>좋음(0~15)</span>
							</li>
							<li>
								<i class="statusLight normal"></i>
								<span>보통(16~30)</span>
							</li>
							<li>
								<i class="statusLight bad"></i>
								<span>나쁨(31~45)</span>
							</li>
							<li>
								<i class="statusLight worst"></i>
								<span>매우나쁨(46~60)</span>
							</li>
						</ul>
					</div>
				</div>




				<!-- :: ksg_20200414_1528 single : 장비관리 파트 -->
				<div class="statusComp deviceManageMod">
					<ul class="compList buildingSort">
						<li>
							<a href="javascript:void(0);">1학년 1반</a>
						</li>
						<li>
							<a href="javascript:void(0);">1학년 2반</a>
						</li>
						<li>
							<a href="javascript:void(0);">1학년 3반</a>
						</li>
					</ul>
					<a href="javascript:void(0);" class="manageBtn deviceSort">장비관리</a>
				</div>





			</div>
			<div class="bottomGroup">
				<div class="noticeComp">
					<div class="barTitle">공지사항</div>
					<div class="noticeSlider">
						<div>가나다 중학교 미세먼지 나쁨</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<script src="/controlSystem/common/js/Chart.min.js"></script>
<script>

// :: 이산화탄소, 미세먼지 등 탭 & 일주월년 탭 색상 변경 스크립트..
$(document).on('click', 'a.tabBtn', function(){
	$(this).parents().siblings('li').children('.tabBox a.tabBtn').removeClass('activated');
	$(this).addClass('activated');
});




// :: 차트 스크립트 (시작)
let chart    = document.getElementById('chart').getContext('2d')



    // gradient = chart.createLinearGradient(0, 0, 0, 280);

// gradient.addColorStop(0, '#a2bcef');
// gradient.addColorStop(0.4, '#f8fafe');
// gradient.addColorStop(1, '#fff');


let data  = {
    labels: [ '0', '', '2', '', '4', '', '6', '', '8', '', '10', '', '12', '', '14', '', '16', '', '18', '', '20', '', '22', '', '24' ],
    datasets: [{
			label: 'Custom Label Name',
			backgroundColor: "transparent",
			// pointBackgroundColor: '#4d42e5',
			pointRadius: 0,
			pointHoverRadius: 0,
			borderWidth: 4,
			borderColor: '#e83b7b',
			data: [10, 10, 10, 10, 10, 10, 10, 40, 40, 40, 40, 70, 70, 65, 130, 70, 130, 65, 130, 70, 130, 70, 130, 15, 40]
    }]
};

let options = {

	layout: {
        padding: {
            left: 0,
            right: 0,
            top: 30,
            bottom: 0
		},
		margin: {
            left: 0,
            right: 0,
            top: 0,
            bottom: 0
		}
	},
		
	responsive: false,
	maintainAspectRatio: true,
	animation: {
		easing: 'easeInOutQuad',
		duration: 520
		
	},
	scales: {
		xAxes: [{
			gridLines: {
				display : 'true',
				drawTicks : 'true',
				tickMarkLength: 10,		// :: 틱과 그래프 사이의 거리(패딩과는 달리, 틱 자신의 그리드라인과의 거리는 벌릴 수 없다.)
				color: '#a2bcef',
				lineWidth: 1,
				drawOnChartArea: false,		// :: false일 때, 본격적인 차트 구역 내에서는 그리드라인이 사라진다. 
			},
			ticks: {
                autoSkip: false,
                maxRotation: 0,
				// minRotation: 0
				fontSize: 20,
				fontStyle : 500,
				fontColor : '#fff',
				padding : 10,		// :: 틱과 그래프 사이의 거리(tickMarkLength와는 달리, 자신의 그리드 라인과도 멀어진다.)
				userCallback: function(item, index) {
                  if (!(index % 2)) return item;
               	}	// :: 인덱스 옆에 표시된 숫자 만큼 틱 표시를 생략한다. 
            }
		}],
		yAxes: [{
			
			gridLines: {
				// color: 'rgba(200, 200, 200, 0.08)',
				// lineWidth: 1
			},
			gridLines: {
				color: '#a2bcef',
				lineWidth: 1,
				drawBorder: false,
				zeroLineWidth: 1,		// :: 맨 하위 그리드라인(수치 0 부분)의 두께만 따로 조정하는 내용.
				zeroLineColor: "#a2bcef",		// :: 맨 하위 그리드라인(수치 0 부분)의 색상만 따로 조정하는 내용.
			},
			ticks: {
				autoSkip: false,		// :: y축 단위계 생략되지 않게 하는 내용 1.
				stepSize : 1,			// :: y축 단위계 생략되지 않게 하는 내용 2.
				min: 0,
				max: 150,
				autoSkip : false,
				maxRotation: 0,
                // minRotation: 0,
				padding : 10,
				fontSize: 20,
				fontStyle : 500,
				fontColor : '#fff',
				fontFamily : 'Noto Sans KR',
				callback: function(label, index, labels) {

					switch (label) {
						case 0:
							return '0';
						case 25:
							return '25';
						case 50:
							return '50';
						case 75:
							return '75';
						case 100:
							return '100';
						case 125:
							return '125';
						case 150:
							return '150';
					}
				}
			}
			
		}]
	},
	elements: {
		line: {
			tension: 0
		}
	},
	legend: {
		display: false
	},
	point: {
		backgroundColor: 'white'
	},
	tooltips: {
		titleFontFamily: 'Open Sans',
		backgroundColor: 'rgba(0,0,0,0.3)',
		titleFontColor: 'red',
		caretSize: 5,
		cornerRadius: 2,
		xPadding: 10,
		yPadding: 10
	}
};

let chartInstance = new Chart(chart, {
    type: 'line',
    data: data,
	options: options
});
// :: 차트 스크립트 (끝)

</script>
</body>
</html>

