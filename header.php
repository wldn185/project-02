
  <!-- 1.제이쿼리 라이브러리 연결 -->
  <script src="./script/jquery-3.7.1.js"></script>
  <script src="https://code.jquery.com/ui/1.13.2/jquery-ui.js"></script>
  <!-- 2. 제이쿼리 메인 -->
  <script defer src="./script/common.js"></script>
  <script defer src="./script/main.js"></script>
  <!-- 3. 제이쿼리 쿠키플러그인 -->
  <script src="./script/jquery.cookie.js"></script>
  <!-- Swiper JS -->
  <script defer src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

  <!-- 헤더영역 -->
  <header>
    <!-- 메인로고 -->
    <h1>
      <a href="index.html" title="메인페이지로 바로가기">
        <img src="./images/logo.png" alt="상단로고">
      </a>
    </h1>
    <!-- 모바일 로그인 버튼 -->
    <a href="#none" title="로그인"><i class="fa-solid fa-user"></i></a>
    <!-- 모바일 토글버튼 -->
    <label for="toggle" id="label_toggle">
      <i class="fa-solid fa-bars"></i>
    </label>
    <input type="checkbox" id="toggle">
    <!-- 모바일 내비게이션 -->
    <nav class="m_gnb">
      <label for="toggle" class="fas fa-times"><span>닫기</span></label>
      <!-- 검색폼 -->
      <fieldset>
        <legend>검색</legend>
        <input type="search" id="m_search" placeholder="검색어" maxlength="50">
        <label for="m_search" class="fas fa-search"><span>검색버튼</span></label>
      </fieldset>
      <!-- 모바일 내비게이션 내부 -->
      <ul class="m_gnb_inner">
        <li><a href="#none" title="회사소개">회사소개<i class="fas fa-angle-down"></i></a>
          <ul class="m_sub">
            <li><a href="about.html" title="회사소개">회사소개</a></li>
            <li><a href="#" title="사업분야">사업분야</a></li>
            <li><a href="#" title="연구개발">연구개발</a></li>
            <li><a href="#" title="글로벌">글로벌</a></li>
            <li><a href="#" title="CI/BI">CI/BI</a></li>
            <li><a href="#" title="인재채용">인재채용</a></li>
          </ul>
        </li>
        <li><a href="#none" title="브랜드">브랜드<i class="fas fa-angle-down"></i></a>
          <ul class="m_sub">
            <li><a href="brand.html" title="브랜드소개">브랜드소개</a></li>
            <li><a href="#" title="화장품">화장품</a></li>
            <li><a href="#" title="메이크업">메이크업</a></li>
            <li><a href="#" title="컨셔스뷰티">컨셔스뷰티</a></li>
            <li><a href="#" title="메티컬뷰티">메티컬뷰티</a></li>
            <li><a href="#" title="바디케어">바디케어</a></li>
            <li><a href="#" title="남성케어">남성케어</a></li>
            <li><a href="#" title="뷰티컬렉션">뷰티컬렉션</a></li>
          </ul>
        </li>
        <li><a href="#none" title="제품소개">제품소개<i class="fas fa-angle-down"></i></a>
          <ul class="m_sub">
            <li><a href="#" title="케어용품">케어용품</a></li>
            <li><a href="#" title="생활용품">생활용품</a></li>
            <li><a href="#" title="음료">음료</a></li>
          </ul>
        </li>
        <li><a href="#none" title="esg">ESG<i class="fas fa-angle-down"></i></a>
          <ul class="m_sub">
            <li><a href="esg.html" title="esg">ESG</a></li>
            <li><a href="#" title="기후변화대응">기후변화대응</a></li>
            <li><a href="#" title="사회환경가치제품">사회환경가치제품</a></li>
            <li><a href="#" title="환경안전경영">환경안전경영</a></li>
            <li><a href="#" title="사회책임">사회책임</a></li>
          </ul>
        </li>
        <li><a href="#none" title="공지사항">공지사항<i class="fas fa-angle-down"></i></a>
          <ul class="m_sub">
            <li><a href="http://wldn185.dothome.co.kr/bbs/bbs/board.php?bo_table=notice2" title="공지사항">공지사항</a></li>
            <li><a href="#" title="보도자료">보도자료</a></li>
            <li><a href="#" title="광고">광고</a></li>
            <li><a href="#" title="생활문화정보">생활문화정보</a></li>
            <li><a href="#" title="news">NEWS</a></li>
            <li><a href="#" title="lg생활건강">LG생활건강</a></li>
          </ul>
        </li>
        <li><a href="#none" title="고객센터">고객센터<i class="fas fa-angle-down"></i></a>
          <ul class="m_sub">
            <li><a href="#" title="고객응대절차">고객응대절차</a></li>
            <li><a href="#" title="간편해결">간편해결</a></li>
            <li><a href="#" title="고객의소리">고객의소리</a></li>
            <li><a href="#" title="FAQ">FAQ</a></li>
          </ul>
        </li>
      </ul>
      <a href="index.html"><img src="./images/logo2.png" alt="로고"></a>
      <div class="h_lang">
        <i class="fa-solid fa-globe" title="언어설정"></i>
        <ul>
          <li class="h_lang_act">KR</li>
          <li>EN</li>
          <li>CN</li>
        </ul>
      </div>
    </nav>

    <!-- 메인내비게이션 -->
    <nav class="gnb">
      <ul>
        <!-- 회사소개 2단메뉴 -->
        <li class="menu menu_about">
          <a class="menu_name" href="about.html" title="회사소개페이지로 바로가기">회사소개</a>
          <div class="sub_menu">
            <div class="sub_leftbox">
              <h5>회사소개</h5>
              <p>아모레퍼시픽의 브랜드는 전통적인 뷰티의 영역을 과감히 넘고자 노력합니다. 창조적인 아이디어에 기술 혁신을 더해 효능의 가치를 높인 차세대 뷰티 제품을 만들고, 건강한 삶을 돌보기 위한
                솔루션을 제안합니다. 전 세계 고객과 직접 소통하며 아름다움을 향한 여정을 이어갑니다.</p>
              <a href="about.html" class="btn_viewmore"><img src="./images/button/btn_viewmore.png" alt=""></a>
            </div>
            <span class="vertical_line"></span>
            <div class="sub_rightbox">
              <ul>
                <li>
                  <a href="#none" title="회사소개">회사소개 <i class="fa-solid fa-chevron-right"></i></a>
                  <ul class="sub_rightbox_inner act">
                    <li><a href="#none" title="회사개요">회사개요</a></li>
                    <li><a href="#none" title="수상내역">수상내역</a></li>
                    <li><a href="#none" title="연혁">연혁</a></li>
                    <li><a href="#none" title="사업장소소개">사업장소소개</a></li>
                    <li><a href="#none" title="전국매장찾기">전국매장찾기</a></li>
                  </ul>
                </li>
                <li>
                  <a href="#none" title="사업분야">사업분야 <i class="fa-solid fa-chevron-right"></i></a>
                  <ul class="sub_rightbox_inner">
                    <li><a href="#none" title="beautiful">beautiful</a></li>
                    <li><a href="#none" title="healthy">healthy</a></li>
                    <li><a href="#none" title="refreshing">refreshing</a></li>
                  </ul>
                </li>
                <li>
                  <a href="#none" title="연구개발">연구개발 <i class="fa-solid fa-chevron-right"></i></a>
                  <ul class="sub_rightbox_inner">
                    <li><a href="#none" title="Innovation">Innovation</a></li>
                    <li><a href="#none" title="Formulation R&D">Formulation R&D</a></li>
                    <li><a href="#none" title="Materials R&D">Materials R&D</a></li>
                    <li><a href="#none" title="Scent Berry Perfume">Scent Berry Perfume</a></li>
                    <li><a href="#none" title="Package R&D">Package R&D</a></li>
                    <li><a href="#none" title="Design R&D">Design R&D</a></li>
                  </ul>
                </li>
                <li>
                  <a href="#none" title="글로벌">글로벌 <i class="fa-solid fa-chevron-right"></i></a>
                  <ul class="sub_rightbox_inner">
                    <li><a href="#none" title="미국">미국</a></li>
                    <li><a href="#none" title="중국">중국</a></li>
                    <li><a href="#none" title="연혁">연혁</a></li>
                    <li><a href="#none" title="베트남">베트남</a></li>
                    <li><a href="#none" title="싱가포르">싱가포르</a></li>
                    <li><a href="#none" title="캐나다">캐나다</a></li>
                    <li><a href="#none" title="일본">일본</a></li>
                    <li><a href="#none" title="태국">태국</a></li>
                    <li><a href="#none" title="말레이시아">말레이시아</a></li>
                    <li><a href="#none" title="영국">영국</a></li>
                  </ul>
                </li>
                <li>
                  <a href="#none" title="CI/BI">CI/BI <i class="fa-solid fa-chevron-right"></i></a>
                  <ul class="sub_rightbox_inner">
                    <li><a href="#none" title="CI">CI</a></li>
                    <li><a href="#none" title="BI">BI</a></li>
                  </ul>
                </li>
                <li>
                  <a href="#none" title="인재채용">인재채용 </a>
                </li>
              </ul>
            </div>
          </div>
        </li>
        <!-- 브랜드 2단메뉴 -->
        <li class="menu menu_brand">
          <a class="menu_name" href="brand.html" title="브랜드소개페이지로 바로가기">브랜드</a>
          <div class="sub_menu">
            <div class="sub_leftbox">
              <h5>브랜드</h5>
              <p>아모레퍼시픽의 브랜드는 전통적인 뷰티의 영역을 과감히 넘고자 노력합니다. 창조적인 아이디어에 기술 혁신을 더해 효능의 가치를 높인 차세대 뷰티 제품을 만들고, 건강한 삶을 돌보기 위한
                솔루션을 제안합니다. 전 세계 고객과 직접 소통하며 아름다움을 향한 여정을 이어갑니다.</p>
              <a href="brand.html" class="btn_viewmore"><img src="./images/button/btn_viewmore.png" alt=""></a>
            </div>
            <span class="vertical_line"></span>
            <div class="sub_rightbox">
              <ul>
                <li>
                  <div class="sub_rightbox_inner inner_info act">
                    <a href="#none" title="이미지"><img src="./images/brand/brand_cont_beautiful_01.png" alt=""></a>
                    <a href="#none" title="이미지"><img src="./images/brand/brand_cont_beautiful_22.png" alt=""></a>
                    <a href="#none" title="이미지"><img src="./images/brand/brand_cont_beautiful_12.png" alt=""></a>
                    <a href="#none" title="이미지"><img src="./images/brand/brand_cont_beautiful_26.png" alt=""></a>
                    <a href="#none" title="이미지"><img src="./images/brand/brand_cont_beautiful_11.png" alt=""></a>
                    <a href="#none" title="이미지"><img src="./images/brand/brand_cont_beautiful_13.png" alt=""></a>
                    <a href="#none" title="이미지"><img src="./images/brand/brand_cont_beautiful_24.png" alt=""></a>
                    <a href="#none" title="이미지"><img src="./images/brand/brand_cont_beautiful_15.png" alt=""></a>
                    <a href="brand.html" title="브랜드페이지로 바로가기"><img src="./images/button/btn_more_redline.png"
                        alt=""></a>
                  </div>
                </li>
                <li>
                  <a href="#none" title="화장품">화장품 <i class="fa-solid fa-chevron-right"></i></a>
                  <ul class="sub_rightbox_inner">
                    <li><a href="#none" title="더후">더후</a></li>
                    <li><a href="#none" title="The saga of Soo">The saga of Soo</a></li>
                    <li><a href="#none" title="OHUI">OHUI</a></li>
                    <li><a href="#none" title="숨37">숨37</a></li>
                    <li><a href="#none" title="belif">belif</a></li>
                    <li><a href="#none" title="the therapy">the therapy</a></li>
                    <li><a href="#none" title="VDL">VDL</a></li>
                    <li><a href="#none" title="ISA KNOX">ISA KNOX</a></li>
                    <li><a href="#none" title="Sooryehan">Sooryehan</a></li>
                    <li><a href="#none" title="BEAUTE">BEAUTE</a></li>
                    <li><a href="#none" title="OURWHY">OURWHY</a></li>
                    <li><a href="#none" title="YEHAWDAM">YEHAWDAM</a></li>
                    <li><a href="#none" title="Dr.Belmeur">Dr.Belmeur</a></li>
                  </ul>
                </li>
                <li>
                  <a href="#none" title="메이크업">메이크업 <i class="fa-solid fa-chevron-right"></i></a>
                  <ul class="sub_rightbox_inner">
                    <li><a href="#none" title="CODE glokolor">CODE glokolor</a></li>
                    <li><a href="#none" title="TPSY">TPSY</a></li>
                    <li><a href="#none" title="VDIVOV">VDIVOV</a></li>
                    <li><a href="#none" title="Glint">Glint</a></li>
                    <li><a href="#none" title="fmgt">fmgt</a></li>
                  </ul>
                </li>
                <li>
                  <a href="#none" title="컨셔스뷰티">컨셔스뷰티 <i class="fa-solid fa-chevron-right"></i></a>
                  <ul class="sub_rightbox_inner">
                    <li><a href="#none" title="UGLY LOVELY">UGLY LOVELY</a></li>
                    <li><a href="#none" title="freshian">freshian</a></li>
                  </ul>
                </li>
                <li>
                  <a href="#none" title="메디컬뷰티">메디컬뷰티 <i class="fa-solid fa-chevron-right"></i></a>
                  <ul class="sub_rightbox_inner">
                    <li><a href="#none" title="CNP Laboratory">CNP Laboratory</a></li>
                    <li><a href="#none" title="CNP Rx">CNP Rx</a></li>
                    <li><a href="#none" title="CARE+ ZONE">CARE+ ZONE</a></li>
                  </ul>
                </li>
                <li>
                  <a href="#none" title="바디케어">바디케어 <i class="fa-solid fa-chevron-right"></i></a>
                  <ul class="sub_rightbox_inner">
                    <li><a href="#none" title="BEYOND">BEYOND</a></li>
                  </ul>
                </li>
                <li>
                  <a href="#none" title="남성케어">남성케어 <i class="fa-solid fa-chevron-right"></i></a>
                  <ul class="sub_rightbox_inner">
                    <li><a href="#none" title="VONIN">VONIN</a></li>
                  </ul>
                </li>
                <li>
                  <a href="#none" title="뷰티컬렉션">뷰티컬렉션 <i class="fa-solid fa-chevron-right"></i></a>
                  <ul class="sub_rightbox_inner">
                    <li><a href="#none" title="Nature Collection">Nature Collection</a></li>
                    <li><a href="#none" title="생활정원">생활정원</a></li>
                  </ul>
                </li>
              </ul>
            </div>

          </div>
        </li>
        <!-- 제품소개 2단메뉴 -->
        <li class="menu menu_product">
          <a class="menu_name" href="product.html" title="제품소개페이지로 바로가기">제품소개</a>
          <div class="sub_menu">
            <div class="sub_leftbox">
              <h5>제품소개</h5>
              <p>아모레퍼시픽의 브랜드는 전통적인 뷰티의 영역을 과감히 넘고자 노력합니다. 창조적인 아이디어에 기술 혁신을 더해 효능의 가치를 높인 차세대 뷰티 제품을 만들고, 건강한 삶을 돌보기 위한
                솔루션을 제안합니다. 전 세계 고객과 직접 소통하며 아름다움을 향한 여정을 이어갑니다.</p>
              <a href="product.html" class="btn_viewmore"><img src="./images/button/btn_viewmore.png" alt=""></a>
            </div>
            <span class="vertical_line"></span>
            <div class="sub_rightbox">
              <ul>
                <li>
                  <a href="#none" title="케어용품">케어용품 <i class="fa-solid fa-chevron-right"></i></a>
                  <ul class="sub_rightbox_inner act">
                    <li><a href="#none" title="엘라스틴">엘라스틴</a></li>
                    <li><a href="#none" title="오가니스트">오가니스트</a></li>
                    <li><a href="#none" title="리엔">리엔</a></li>
                    <li><a href="#none" title="닥터그루트">닥터그루트</a></li>
                    <li><a href="#none" title="실크테라피">실크테라피</a></li>
                    <li><a href="#none" title="벨먼">벨먼</a></li>
                    <li><a href="#none" title="피지오겔">피지오겔</a></li>
                    <li><a href="#none" title="강남glow">강남glow</a></li>
                  </ul>
                </li>
                <li>
                  <a href="#none" title="생활용품">생활용품 <i class="fa-solid fa-chevron-right"></i></a>
                  <ul class="sub_rightbox_inner">
                    <li><a href="#none" title="페리오">페리오</a></li>
                    <li><a href="#none" title="죽염치약">죽염치약</a></li>
                    <li><a href="#none" title="reach">reach</a></li>
                    <li><a href="#none" title="샤프란">샤프란</a></li>
                    <li><a href="#none" title="아우라">아우라</a></li>
                    <li><a href="#none" title="한입">한입</a></li>
                    <li><a href="#none" title="테크">테크</a></li>
                    <li><a href="#none" title="수퍼타이">수퍼타이</a></li>
                    <li><a href="#none" title="fiji">fiji</a></li>
                    <li><a href="#none" title="산소크린">산소크린</a></li>
                    <li><a href="#none" title="주거용품">주거용품</a></li>
                    <li><a href="#none" title="홈스타">홈스타</a></li>
                    <li><a href="#none" title="자연퐁">자연퐁</a></li>
                    <li><a href="#none" title="퐁퐁">퐁퐁</a></li>
                    <li><a href="#none" title="safe">safe</a></li>
                    <li><a href="#none" title="아우라">아우라</a></li>
                    <li><a href="#none" title="샤프란케어">샤프란케어</a></li>
                    <li><a href="#none" title="베비언스">베비언스</a></li>
                    <li><a href="#none" title="메소스">메소스</a></li>
                    <li><a href="#none" title="시리우스">시리우스</a></li>
                    <li><a href="#none" title="선물세트">선물세트</a></li>
                    <li><a href="#none" title="미니스">미니스</a></li>
                  </ul>
                </li>
                <li>
                  <a href="#none" title="음료">음료 <i class="fa-solid fa-chevron-right"></i></a>
                  <ul class="sub_rightbox_inner">
                    <li><a href="#none" title="코카콜라">코카콜라</a></li>
                    <li><a href="#none" title="환타">환타</a></li>
                    <li><a href="#none" title="암바사">암바사</a></li>
                    <li><a href="#none" title="스프라이트">스프라이트</a></li>
                    <li><a href="#none" title="닥터페퍼">닥터페퍼</a></li>
                    <li><a href="#none" title="캐나다 드라이">캐나다 드라이</a></li>
                    <li><a href="#none" title="씨그램">씨그램</a></li>
                    <li><a href="#none" title="갈배사이다">갈배사이다</a></li>
                    <li><a href="#none" title="미닛메이드">미닛메이드</a></li>
                    <li><a href="#none" title="콰일촌">콰일촌</a></li>
                    <li><a href="#none" title="코코팜">코코팜</a></li>
                    <li><a href="#none" title="갈아만든 배">갈아만든 배</a></li>
                    <li><a href="#none" title="봉봉">봉봉</a></li>
                    <li><a href="#none" title="조지아">조지아</a></li>
                    <li><a href="#none" title="태양의 마테차">태양의 마테차</a></li>
                    <li><a href="#none" title="태양의 식후비법W">태양의 식후비법W</a></li>
                    <li><a href="#none" title="샤프란케어">샤프란케어</a></li>
                    <li><a href="#none" title="파워에이드">파워에이드</a></li>
                    <li><a href="#none" title="토레타">토레타</a></li>
                    <li><a href="#none" title="몬스터 에너지">몬스터 에너지</a></li>
                    <li><a href="#none" title="구론산">구론산</a></li>
                    <li><a href="#none" title="휘오">휘오</a></li>
                    <li><a href="#none" title="평창수">평창수</a></li>
                    <li><a href="#none" title="글라소 비타민워터">글라소 비타민워터</a></li>
                  </ul>
                </li>
              </ul>
            </div>

          </div>
        </li>
        <!-- ESG 2단메뉴 -->
        <li class="menu menu_esg">
          <a class="menu_name" href="esg.html" title="esg소개페이지로 바로가기">ESG</a>
          <div class="sub_menu">
            <div class="sub_leftbox">
              <h5>ESG</h5>
              <p>LG생활건강은 2050년 탄소중립을 실현하기 위한 다양한 감축과제를 단계적으로 도입하여 미래세대를 위한 환경적 책임을 다하고 이를 통해 고객가치를 확대해 나가겠습니다.</p>
              <a href="esg.html" class="btn_viewmore"><img src="./images/button/btn_viewmore.png" alt=""></a>
            </div>
            <span class="vertical_line"></span>
            <div class="sub_rightbox">
              <ul>
                <li>
                  <a href="#none" title="ESG">ESG <i class="fa-solid fa-chevron-right"></i></a>
                  <ul class="sub_rightbox_inner act">
                    <li><a href="#none" title="CEO 메시지">CEO 메시지</a></li>
                    <li><a href="#none" title="추진전략">추진전략</a></li>
                    <li><a href="#none" title="주요 ESG성과">주요ESG성과</a></li>
                    <li><a href="#none" title="통합리스크관리">통합리스크관리</a></li>
                    <li><a href="#none" title="유엔 글로벌 콤팩트">유엔 글로벌 콤팩트</a></li>
                  </ul>
                </li>
                <li>
                  <a href="#none" title="기후변화대응">기후변화대응 <i class="fa-solid fa-chevron-right"></i></a>
                  <ul class="sub_rightbox_inner">
                    <li><a href="#none" title="탄소중립선언2050">탄소중립선언2050</a></li>
                    <li><a href="#none" title="생물다양성">생물다양성</a></li>
                  </ul>
                </li>
                <li>
                  <a href="#none" title="사회환경가치제품">사회환경가치제품 <i class="fa-solid fa-chevron-right"></i></a>
                  <ul class="sub_rightbox_inner">
                    <li><a href="#none" title="사회환경가치제품 개발">사회환경가치제품 개발</a></li>
                    <li><a href="#none" title="F오픈이노베이션">오픈이노베이션</a></li>
                    <li><a href="#none" title="제품특허관리">제품특허관리</a></li>
                    <li><a href="#none" title="친환경 제품포장">친환경 제품포장</a></li>
                    <li><a href="#none" title="친환경 라벨링 제품">친환경 라벨링 제품</a></li>
                  </ul>
                </li>
                <li>
                  <a href="#none" title="환경안전경영">환경안전경영 <i class="fa-solid fa-chevron-right"></i></a>
                  <ul class="sub_rightbox_inner">
                    <li><a href="#none" title="친환경안전경영 성과">친환경안전경영 성과</a></li>
                    <li><a href="#none" title="ESH 운영 성과">ESH 운영 성과</a></li>
                    <li><a href="#none" title="친환경 공정관리">친환경 공정관리</a></li>
                    <li><a href="#none" title="친환경 물류">친환경 물류</a></li>
                    <li><a href="#none" title="임직원 안전 및 보건">임직원 안전 및 보건</a></li>
                  </ul>
                </li>
                <li>
                  <a href="#none" title="사회책임">사회책임 <i class="fa-solid fa-chevron-right"></i></a>
                  <ul class="sub_rightbox_inner">
                    <li><a href="#none" title="사회공헌">사회공헌</a></li>
                    <li><a href="#none" title="동반성장 파트너십">동반성장 파트너십</a></li>
                    <li><a href="#none" title="임직원 가치 제고">임직원 가치 제고</a></li>
                    <li><a href="#none" title="고객가치 향상">고객가치 향상</a></li>
                    <li><a href="#none" title="정책">정책</a></li>
                  </ul>
                </li>
              </ul>
            </div>

          </div>
        </li>
        <!-- 공지사항 2단메뉴 -->
        <li class="menu menu_notice">
          <a class="menu_name" href="http://wldn185.dothome.co.kr/bbs/bbs/board.php?bo_table=notice2"
            title="공지사항페이지로 바로가기">공지사항</a>
          <div class="sub_menu">
            <div class="sub_leftbox">
              <h5>공지사항</h5>
              <p>LG생활건강은 늘 새로운 소식과 즐거운 이야기로 고객 여러분을 찾아 갑니다. 뷰티/생활/건강 각 분야별 생활속의 도움이 되는 정보를 제공 합니다.</p>
              <a href="http://wldn185.dothome.co.kr/bbs/bbs/board.php?bo_table=notice2" class="btn_viewmore"><img
                  src="./images/button/btn_viewmore.png" alt=""></a>
            </div>
            <span class="vertical_line"></span>
            <div class="sub_rightbox">
              <ul>
                <li><a href="#none" title="보도자료">보도자료</a></li>
                <li><a href="#none" title="광고">광고</a></li>
                <li><a href="#none" title="생활문화정보">생활문화정보</a></li>
                <li><a href="#none" title="NEWS">NEWS</a></li>
                <li><a href="#none" title="LG생활건강스토리">LG생활건강스토리</a></li>
              </ul>
            </div>

          </div>
        </li>
        <!-- 고객센터 2단메뉴 -->
        <li class="menu menu_cus">
          <a href="customer.html" title="고객센터페이지로 바로가기">고객센터</a>
          <div class="sub_menu">
            <div class="sub_leftbox">
              <h5>고객센터</h5>
              <p>고객의 소리에 언제나 귀를 기울이며 고객의 기대사항을 적극 발굴하여 해결하면서 고객과의 행복한 미래를 만들어 갑니다.</p>
              <a href="cus.html" class="btn_viewmore"><img src="./images/button/btn_viewmore.png" alt=""></a>
            </div>
            <span class="vertical_line"></span>
            <div class="sub_rightbox">
              <ul>
                <li><a href="#none" title="고객대응절차">고객대응절차</a></li>
                <li><a href="#none" title="간편해결">간편해결</a></li>
                <li><a href="#none" title="고객의 소리">고객의 소리</a></li>
                <li><a href="#none" title="FAQ">FAQ</a></li>
              </ul>
            </div>

          </div>
        </li>
      </ul>
    </nav>
    <nav class="h_nav">
      <ul>
        <li><a href="login.html" title="로그인">로그인</a></li>
        <li>
          <form action="#" method="post" id="search">
            <input type="text" id="search_text" placeholder="검색어">
            <i class="fa-solid fa-magnifying-glass" title="검색창"></i>
          </form>

        </li>
        <li class="h_lang">
          <i class="fa-solid fa-globe" title="언어설정"></i>
          <ul>
            <li class="h_lang_act">KR</li>
            <li>EN</li>
            <li>CN</li>
          </ul>
        </li>
      </ul>
    </nav>
  </header>