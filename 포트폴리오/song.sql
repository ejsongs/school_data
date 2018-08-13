-- phpMyAdmin SQL Dump
-- version 4.2.12deb2+deb8u2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: 17-06-24 14:59
-- 서버 버전: 5.5.54-0+deb8u1
-- PHP 버전: 5.6.30-0+deb8u1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- 데이터베이스: `song`
--

-- --------------------------------------------------------

--
-- 테이블 구조 `board`
--

CREATE TABLE IF NOT EXISTS `board` (
`idx` int(11) NOT NULL,
  `title` varchar(15) NOT NULL,
  `date` varchar(15) NOT NULL,
  `hit` varchar(15) NOT NULL DEFAULT '0',
  `content` varchar(200) NOT NULL,
  `name` varchar(20) NOT NULL,
  `file` varchar(255) NOT NULL,
  `file_enc` varchar(255) NOT NULL,
  `created_at` date DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=27 DEFAULT CHARSET=utf8mb4;

--
-- 테이블의 덤프 데이터 `board`
--

INSERT INTO `board` (`idx`, `title`, `date`, `hit`, `content`, `name`, `file`, `file_enc`, `created_at`) VALUES
(26, 'adfa', '', '2', 'a', 'a', 'index.php', 'b16cb611a87aff5ebfca1a533b4515f2index.php', '2017-05-31');

-- --------------------------------------------------------

--
-- 테이블 구조 `curious`
--

CREATE TABLE IF NOT EXISTS `curious` (
`idx` int(11) NOT NULL,
  `title` varchar(40) NOT NULL,
  `name` varchar(20) NOT NULL,
  `email` varchar(20) NOT NULL,
  `category` varchar(5) NOT NULL,
  `about` varchar(999) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- 테이블의 덤프 데이터 `curious`
--

INSERT INTO `curious` (`idx`, `title`, `name`, `email`, `category`, `about`) VALUES
(1, 'asdfb', 'd', 'c', 'store', 'afds');

-- --------------------------------------------------------

--
-- 테이블 구조 `faq`
--

CREATE TABLE IF NOT EXISTS `faq` (
`idx` int(11) NOT NULL,
  `title` varchar(200) NOT NULL,
  `answer` varchar(9999) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8;

--
-- 테이블의 덤프 데이터 `faq`
--

INSERT INTO `faq` (`idx`, `title`, `answer`) VALUES
(1, '제휴할인과 사용가능한 상품권은 무엇인가요?', '서가앤쿡에서 사용 가능한 상품권은 전국 어느 매장에서나 사용 가능한 ''모바일 상품권''이 있으며, 카카오톡 선물하기나 네이버, G마켓, 11번가 등에서 구매를 할 수 있습니다. 모바일 상품권 이외에 별도 제휴할인은 없음을 알려드립니다.'),
(2, '영업시간이 어떻게 되나요?', '저희 서가앤쿡의 영업시간은 각 지점별로 상이하게 운영되고 있으며 홈페이지나 유선을 통하여 매장정보를 확인 하실 수 있습니다.\r\n(문의 : 070-4610-2580 )'),
(3, '매장마다 브레이크 타임 및 휴무일은 다르나요?', '네 그렇습니다. 저희 서가앤쿡 매장은 각 매장별 지점 정보가 상이하므로 홈페이지 Store란 확인 및 방문하실 지점을 유선으로 확인 가능합니다. 매장 사정에 따라 변경 가능성이 있으므로 확인하시어 이용에 불편함이 없으시길 바랍니다.'),
(4, '매장마다 오픈 시간 및 마감시간은 동일한가요?', '아닙니다. 저희 서가앤쿡 매장은 각 매장별 지점 정보가 상이하므로 홈페이지 Store란 확인 및 각 지점 유선으로 확인 가능합니다. 오픈시간 및 마지막 주문시간을 확인하시어 지점 방문 시 불편함이 없으시길 바랍니다.'),
(5, '포장도 가능한가요?', '네. 물론입니다. 식사 후 남으신 음식이 있으신 경우 저희 서버분께 말씀해 주시면 정성껏 포장해드리고 있습니다. 또한 지점을 방문하여 Take-out 서비스도 가능하오니 많은 이용 바랍니다. 다만, 유선상으로 이루어지는 선주문 Take-out 서비스와 음료 Take-out 서비스는 어려우시니 이 점 양해 부탁드립니다.'),
(6, '돌잔치&생일파티 서비스도 있나요?', '죄송합니다. 현재 서가앤쿡에서는 돌잔치와 생일파티를 진행하고 있지 않습니다.'),
(7, '런치시간이 있나요?', '저희 서가앤쿡은 별도의 런치 타임의 서비스가 진행되고 있지 않습니다.'),
(8, '주말과 평일 요금 다른가요?', '아닙니다. 저희 서가앤쿡에서는 365일 일정한 가격과 메뉴로 고객 분들께 찾아 갑니다.'),
(9, '처음 방문해 보는데 어떻게 이용하나요?', '서가앤쿡은 Home, Original 매장으로 분류되어 있으며 Home 매장에는(스테이크 샐러드 2종류 , 에그타타 6종류 , 화덕피자 6 종류, 파스타 11종류, 필라프 및 리조또 9종류, 사이드 디쉬 6종류 , 음료 22종류) Original 매장은 ( 샐러드 8종류 , 로꼬모꼬 및 필라프 7종류, 리조또 4종류 , 파스타 11종류 , 음료 17종) 구분이 되어 있으며 2인분 기준의 푸짐한 양으로 제공되고 있습니다. 두분의 경우 1메뉴를 추천하며, 세분의 경우 2메뉴를 주문하여 드시는 것을 추천해드립니다.'),
(10, 'Home 매장과 Original 매장의 차이점은 무엇 인가요 ??', 'Original 매장 : Since 2006 서가앤쿡의 향수를 잊지 않기 위하여 기존 서가앤쿡의 편안함과 따뜻함이 느껴지는 장소의 추억을 유지하는 매장입니다. \r\nHome 매장 : 마치 친구집에서 먹는 저녁식사 처럼 편안하고 가족같은 분위기를 전해 드리며, 화덕과 오븐을 이용한 조리메뉴가 추가 되어 더욱 다양한 음식을 드실 수 있습니다. Home매장의 가장 큰 특징은 메뉴 구성에 더욱 특별함이 있습니다. 구분된 매장 정보는 홈페이지 Store란에 표시 되어 있습니다.'),
(11, '프랜차이즈인가요?', '네. 저희 서가앤쿡은 프랜차이즈로 직영점과 가맹점으로 구성되어 있으며 대구동성로를 시작으로 전주효자점, 인천구월점, 타임스퀘어점, 부천중동점을 직영점으로 운영하고 입니다. 직영점을 제외한 모든 지점은 가맹점이며 꾸준히 직,가맹점을 늘려가고 있습니다.'),
(12, '	예약이 가능한가요?', '네. 예약은 가능하오나 각 지점별로 예약운영이 상이하므로 본사를 통한 예약과 인터넷 예약은 어려우며 예약시 각 지점 매장정보를 통하여 확인하신 후 이용부탁드립니다.'),
(13, '	서가앤쿡 지점은 모두 오픈 주방인가요 ?', '네 , 그렇습니다. 서가앤쿡의 모든 주방은 오픈 형으로서 청결함과 정직하게 요리하는 주방의 모습을 고객 분들께 보여드림으로써 요리에 대한 신뢰감을 전해 드리고자 오픈형 주방을 고집하고 있습니다.'),
(14, '	가맹점 문의는 하고 싶은데 어떻게 해야 하나요 ?', '현재 서가앤쿡은 패밀리 브랜드로서 프랜차이즈 전문기업인 주)에스앤에스컴퍼니를 본사로 두고 있습니다. 이에 본사 측으로 유선 문의를 주시면 친절히 답변하여 드리겠습니다. (문의 : 070-4610-2580)');

-- --------------------------------------------------------

--
-- 테이블 구조 `menu`
--

CREATE TABLE IF NOT EXISTS `menu` (
`idx` int(11) NOT NULL,
  `foodImg` varchar(300) NOT NULL,
  `foodName` varchar(50) NOT NULL,
  `foodEx` text NOT NULL,
  `price` int(10) NOT NULL,
  `category` varchar(10) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=utf8;

--
-- 테이블의 덤프 데이터 `menu`
--

INSERT INTO `menu` (`idx`, `foodImg`, `foodName`, `foodEx`, `price`, `category`) VALUES
(1, '"./image/pasta.jpg"', '목살 한상', '서가앤쿡에서 인기있는 메인 메뉴 두가지를 한 상 가득 푸짐하게 나만의 스타일로 즐기세요. ...', 29800, '한상'),
(2, '"./image/pasta.jpg"', '치즈 한상', '치즈피자 중 택1\r\n(토마토 미트 치즈피자/ 링링링 치즈피자/ 불 고구마 치즈피자)+ \r\n...', 29800, '한상'),
(3, '"./image/pasta.jpg"', '파스타 한상', '메인 메뉴 두가지를 한 상 가득 푸짐하게 나만의 스타일로\r\n택1 (새우필라프/ 김치필라프/...', 29800, '한상'),
(4, '"./image/pasta.jpg"', '폭립 한상', '메인 메뉴 두가지를 한 상 가득 푸짐하게 나만의 스타일로\r\n폭립 스테이크 샐러드 + 택1 ...', 29800, '한상'),
(5, '"./image/pasta.jpg"', '콘 홀릭 피자 ', '서가앤쿡만의 마법 치즈가루를 만나 먹을 때 마다 입안에서 옥수수가 톡톡 터지는 중독적인 맛...', 10800, '피자'),
(6, '"./image/pasta.jpg"', '스테이크 샐러드 피자 ', '목살 스테이크가 피자 위로! 명불허전 서가앤쿡 시그니처가 피자로 재해석된 메뉴\r\n', 14800, '피자'),
(7, '"./image/pasta.jpg"', '더블 포테이토 피자 ', '감자가 소스로, 그 위에 다시 감자와 베이컨이 토핑된 세상에 없던 피자\r\n', 14800, '피자'),
(8, '"./image/pasta.jpg"', '스테이크 샐러드 피자 ', '목살 스테이크가 피자 위로! 명불허전 서가앤쿡 시그니처가 피자로 재해석된 메뉴\r\n', 14800, '피자'),
(9, '"./image/pasta.jpg"', '하얀 토마토 파스타 ', '하얀크림 속에 빨간 미트 토마토가 만나 직접 만들어 먹는 수제 로제 파스타\r\n', 19800, '파스타'),
(10, '"./image/pasta.jpg"', '베이컨 까르보나라 ', '부드러운 크림 소스와 베이컨의 조화가 돋보이는 서가앤쿡의 베스트 셀러!', 19800, '파스타 '),
(11, '"./image/pasta.jpg"', '핫 스파이시 해물 파스타 ', '여러 가지 해산물과 함께 매콤하게 볶아낸 중화풍의 파스타', 19800, '파스타 '),
(12, '"./image/pasta.jpg"', '미트 토마토 파스타 ', '토마토와 허브의 향이 적절히 어우러진 소스에 돼지고기가 먹기 좋게 씹히는 파스타', 19800, '파스타 '),
(13, '"./image/pasta.jpg"', '보코니치 샐러드 ', '보코치니 치즈, 몬테레이 잭 치즈, 특수야채, 레몬드레싱\r\n', 12000, '사이드'),
(14, '"./image/pasta.jpg"', '연어 샐러드 ', '신성한 영언와 상큼한 레몬드레싱으로 다이어트에 좋은 서가앤쿡만의 웰빙 연어 샐러드 ', 12000, '사이드'),
(15, '"./image/pasta.jpg"', '갈릭 브레드', '신선한 바게트와 향긋한 마늘향이 잘 어우러진 먹기 편하고 중독성이 강한 서가앤쿡 갈릭 브레드\r\n', 1000, '사이드'),
(16, '"./image/pasta.jpg"', '샐러드 추가', '서가앤쿡만의 특별한 갈릭 드레싱을 뿌린 상큼한 샐러드', 4000, '사이드'),
(17, '"./image/pasta.jpg"', '청순 청포도 에이드 ', '청포도 본연의 싱그럽고 상큼한 맛을 풍부하게 느낄 수 있는 에이드\r\n', 7000, '음료'),
(18, '"./image/pasta.jpg"', '라즈베리 에이드 ', '산딸기를 가득 넣어 달콤함과 톡톡 튀는 과즙이 느껴지는 라즈베리 에이드\r\n', 7000, '음료'),
(19, '"./image/pasta.jpg"', '한라봉 에이드 ', '한라봉의 향긋함과 달콤함이 입안 가득 퍼지는 서가앤쿡 한라봉 에이드\r\n', 7000, '음료'),
(20, '"./image/pasta.jpg"', '핑크 자몽 모히또 ', '자몽의 달콤하고 쌉싸름한 맛과 과육이 씹히는 향긋한 핑크 자몽 모히토', 8000, '음료');

-- --------------------------------------------------------

--
-- 테이블 구조 `news`
--

CREATE TABLE IF NOT EXISTS `news` (
`idx` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `title` varchar(50) NOT NULL,
  `content` varchar(500) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- 테이블의 덤프 데이터 `news`
--

INSERT INTO `news` (`idx`, `name`, `title`, `content`, `date`) VALUES
(1, '관리자', '경주공지사항1', '공지사항입니다.', '2017-06-01');

-- --------------------------------------------------------

--
-- 테이블 구조 `notice`
--

CREATE TABLE IF NOT EXISTS `notice` (
`idx` int(11) NOT NULL,
  `date` date NOT NULL,
  `title` text NOT NULL,
  `hit` int(50) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8;

--
-- 테이블의 덤프 데이터 `notice`
--

INSERT INTO `notice` (`idx`, `date`, `title`, `hit`) VALUES
(1, '2017-05-15', '서가앤쿡 포항양덕점 5월 17일(수) 임시 휴무 안내', 5000),
(2, '2017-05-12', '서가앤쿡 충주점 6월중 오픈', 11),
(3, '2017-05-12', '서가앤쿡 안양1번가점 6월 1일(목)~6월 5일(월) 임시 휴무 안내', 0),
(4, '2017-05-10', '서가앤쿡 평택점 5월 10일(수) 임시 휴무 안내', 2),
(5, '2016-10-26', '서가앤쿡 현풍점 12월 16일 오픈', 8888),
(6, '2016-12-16', '서가앤쿡 건강주의보 [잠시만 레시피를 변경하겠습니다]', 999999),
(8, '2016-11-25', '	2016년 본사 워크샵 일정 안내', 6565656),
(9, '2015-01-15', '서가앤쿡과 소통하기', 333),
(10, '2017-06-08', '경주 공지사항 1', 11);

--
-- 덤프된 테이블의 인덱스
--

--
-- 테이블의 인덱스 `board`
--
ALTER TABLE `board`
 ADD PRIMARY KEY (`idx`);

--
-- 테이블의 인덱스 `curious`
--
ALTER TABLE `curious`
 ADD PRIMARY KEY (`idx`);

--
-- 테이블의 인덱스 `faq`
--
ALTER TABLE `faq`
 ADD PRIMARY KEY (`idx`);

--
-- 테이블의 인덱스 `menu`
--
ALTER TABLE `menu`
 ADD PRIMARY KEY (`idx`);

--
-- 테이블의 인덱스 `news`
--
ALTER TABLE `news`
 ADD PRIMARY KEY (`idx`);

--
-- 테이블의 인덱스 `notice`
--
ALTER TABLE `notice`
 ADD PRIMARY KEY (`idx`);

--
-- 덤프된 테이블의 AUTO_INCREMENT
--

--
-- 테이블의 AUTO_INCREMENT `board`
--
ALTER TABLE `board`
MODIFY `idx` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=27;
--
-- 테이블의 AUTO_INCREMENT `curious`
--
ALTER TABLE `curious`
MODIFY `idx` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- 테이블의 AUTO_INCREMENT `faq`
--
ALTER TABLE `faq`
MODIFY `idx` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=15;
--
-- 테이블의 AUTO_INCREMENT `menu`
--
ALTER TABLE `menu`
MODIFY `idx` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=21;
--
-- 테이블의 AUTO_INCREMENT `news`
--
ALTER TABLE `news`
MODIFY `idx` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- 테이블의 AUTO_INCREMENT `notice`
--
ALTER TABLE `notice`
MODIFY `idx` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=11;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
