-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th10 29, 2020 lúc 07:13 AM
-- Phiên bản máy phục vụ: 10.4.14-MariaDB
-- Phiên bản PHP: 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `qlda1`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `chitietct`
--

CREATE TABLE `chitietct` (
  `id` int(11) NOT NULL,
  `id_ct` int(11) NOT NULL,
  `ngay` int(11) NOT NULL,
  `ten` text COLLATE utf8_unicode_ci NOT NULL,
  `noidungngay` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `chitietct`
--

INSERT INTO `chitietct` (`id`, `id_ct`, `ngay`, `ten`, `noidungngay`) VALUES
(1, 5, 1, 'ĐÓN KHÁCH - SƠN TRÀ - MỸ KHÊ - SUNWHEEL', '<p>Quý khách tự túc phương tiện ra sân bay Nội Bài – Đáp chuyến bay lúc 6h25p đi Đà Nẵng.</p>\r\n								<p>Sáng 7h40: HDV Đón quý khách tại Đà Nẵng (Sân bay, Ga, điểm hẹn trung tâm) từ 07h00 đến 13h00 (sau thời gian này, quý khách tự túc nhập đoàn) đưa đi ăn trưa với đặc sản nổi tiếng Đà Nẵng “Bánh tráng thịt heo 2 đầu da & Mỳ Quảng”. Nhận phòng Khách sạn 3* nghỉ ngơi.</p>\r\n								<p>Chiều: Khởi hành đi Bán Đảo Sơn Trà mục kích phố biển Đà Nẵng trên cao, viếng Linh Ứng Tự – nơi có tượng Phật Bà 67m cao nhất Việt Nam và tắm biển Mỹ Khê Đà Nẵng.</p>\r\n								<p>Tối:Ăn tối nhà hàng. Trãi nghiệm cảm giác với Vòng quay Mặt trời SUN WHEEL – Top 10 vòng quay cao nhất Thế Giới, chiêm ngưởng vẻ đẹp Đà Thành về đêm rực rỡ ánh đèn. (Vé Sun Wheel tự túc)</p>'),
(2, 5, 2, 'CÙ LAO CHÀM – PHỐ CỔ HỘI AN', '<p>Sáng: Điểm tâm. Khởi hành vào Hội An ngồi tàu cao tốc tại biển Cửa Đại – Hội An đi Cù Lao Chàm khu dự trữ sinh quyển thế giới, gồm cụm đảo ngoài khơi biển Đông cách Hội An 12 hải lý. Tham quan chùa Hải Tạng hơn 400 trăm năm tuổi. Âu thuyền khu vực tranh bão của ngư dân, khu làng chài và khu lăng miếu cổ.</p>\r\n						        <p>Trưa: Ăn trưa nhà hàng Cù Lao Chàm</p>\r\n						        <p>Chiều: Tiếp tục thăm khu bảo tồn biển và tham gia các hoạt động lặn biển (Snokelling) khám phá san hô… tắm biển.Về lại đất liền khởi hành qua Hội An bách bộ tham quan và mua sắm Phố Cổ với: Chùa Cầu Nhật Bản, Nhà Cổ hàng trăm năm tuổi, Hội Quán Phước Kiến & Xưởng thủ công mỹ nghệ. Trở về Đà Nẵng theo con đường biển mang tên Đại tướng Võ Nguyên Giáp.Tham quan Làng đá Non Nước ngắm nhìn Ngũ Hành Sơn</p>\r\n						        <p>Tối: Ăn tối Nhà hàng. Tự do khám Đà Thành về đêm.</p>'),
(3, 5, 3, 'BÀ NÀ NÚI CHÚA – TẮM BIỂN MỸ KHÊ', '<p>Sáng: Điểm tâm. Khởi hành đi tham quan Bà Nà – Núi Chúa (Vé cáp treo Bà Nà tự túc), nơi có những khoảnh khoắc giao mùa bất ngờ Xuân – Hạ – Thu – Đông trong một ngày. Qúy khách sẽ tận hưởng cảm giác bồng bền khi ngồi trên Cabin lơ lững giữa chừng mây. Viếng chùa Linh Ứng với tượng Phật Thích Ca cao 27m, viếng đền thờ Bà Chúa Mẫu Thượng Ngàn. Tham gia vui chơi tại công viên Fantasy Park: với các trò chơi phiêu lưu mới lạ như: Vòng Quay Tình Yêu, Phi Công Skiver, Đường Đua Lửa, Ngôi Nhà Ma và Khu trưng bày hơn 40 tượng sáp những nhân vật nổi tiếng trên thế giới…</p>\r\n						        <p>Trưa: Ăn trưa nhà hàng tại chân núi Bà Nà.</p>\r\n						        <p>Chiều: Khởi hành về lại trung tâm thành phố,quý khách sẽ được trầm mình bên bờ biển xinh đẹp Mỹ Khê.</p>\r\n						        <p>Tối: Ăn tối tại nhà hàng hải sản. Thưởng ngoạn du thuyền trên sông Hàn ngắm cảnh Đà Thành về đêm, chụp ảnh Cầu Quay Sông Hàn, cầu Rồng phun lửa và nước vào cuối tuần</p>'),
(4, 5, 4, 'BẢO TÀNG ĐÀ NẴNG – MUA SẮM – TIỄN KHÁCH', '<p>Sáng: Điểm tâm. Tham quan Bảo Tàng Đà Nẵng – Nơi trưng bày các kỷ vật phản ảnh đời sống văn hóa, lịch sử và con người Xứ Quảng. Chụp hình lưu niệm Trung tâm hành chính – Biểu tượng vươn lên mạnh mẽ của thành phố Đà Nẵng.</p>\r\n						        <p>Trưa: Ăn trưa nhà hàng. Quý khách tiếp tục thưởng thức không gian Café và mua sắm quà lưu niệm tại Da Nang Souvenir. (Do chuyến bay trễ 23h00 khởi hành nên Quý khách sẽ bị phụ thu thêm 250.000/1 phòng)\r\n								21h00: Tiễn quý khách tại sân bay Đà Nẵng (các chuyến sau 14h00). Chia tay Quý khách và kết thúc chương trình. Hẹn gặp lại quý khách!</p>'),
(5, 6, 1, 'ĐÓN KHÁCH - SƠN TRÀ - MỸ KHÊ - SUNWHEEL', '<p>Quý khách tự túc phương tiện ra sân bay Nội Bài – Đáp chuyến bay lúc 6h25p đi Đà Nẵng.</p>\r\n								<p>Sáng 7h40: HDV Đón quý khách tại Đà Nẵng (Sân bay, Ga, điểm hẹn trung tâm) từ 07h00 đến 13h00 (sau thời gian này, quý khách tự túc nhập đoàn) đưa đi ăn trưa với đặc sản nổi tiếng Đà Nẵng “Bánh tráng thịt heo 2 đầu da & Mỳ Quảng”. Nhận phòng Khách sạn 3* nghỉ ngơi.</p>\r\n								<p>Chiều: Khởi hành đi Bán Đảo Sơn Trà mục kích phố biển Đà Nẵng trên cao, viếng Linh Ứng Tự – nơi có tượng Phật Bà 67m cao nhất Việt Nam và tắm biển Mỹ Khê Đà Nẵng.</p>\r\n								<p>Tối:Ăn tối nhà hàng. Trãi nghiệm cảm giác với Vòng quay Mặt trời SUN WHEEL – Top 10 vòng quay cao nhất Thế Giới, chiêm ngưởng vẻ đẹp Đà Thành về đêm rực rỡ ánh đèn. (Vé Sun Wheel tự túc)</p>'),
(6, 6, 2, 'CÙ LAO CHÀM – PHỐ CỔ HỘI AN', '<p>Sáng: Điểm tâm. Khởi hành vào Hội An ngồi tàu cao tốc tại biển Cửa Đại – Hội An đi Cù Lao Chàm khu dự trữ sinh quyển thế giới, gồm cụm đảo ngoài khơi biển Đông cách Hội An 12 hải lý. Tham quan chùa Hải Tạng hơn 400 trăm năm tuổi. Âu thuyền khu vực tranh bão của ngư dân, khu làng chài và khu lăng miếu cổ.</p>\r\n						        <p>Trưa: Ăn trưa nhà hàng Cù Lao Chàm</p>\r\n						        <p>Chiều: Tiếp tục thăm khu bảo tồn biển và tham gia các hoạt động lặn biển (Snokelling) khám phá san hô… tắm biển.Về lại đất liền khởi hành qua Hội An bách bộ tham quan và mua sắm Phố Cổ với: Chùa Cầu Nhật Bản, Nhà Cổ hàng trăm năm tuổi, Hội Quán Phước Kiến & Xưởng thủ công mỹ nghệ. Trở về Đà Nẵng theo con đường biển mang tên Đại tướng Võ Nguyên Giáp.Tham quan Làng đá Non Nước ngắm nhìn Ngũ Hành Sơn</p>\r\n						        <p>Tối: Ăn tối Nhà hàng. Tự do khám Đà Thành về đêm.</p>'),
(7, 6, 3, 'BÀ NÀ NÚI CHÚA – TẮM BIỂN MỸ KHÊ', '<p>Sáng: Điểm tâm. Khởi hành đi tham quan Bà Nà – Núi Chúa (Vé cáp treo Bà Nà tự túc), nơi có những khoảnh khoắc giao mùa bất ngờ Xuân – Hạ – Thu – Đông trong một ngày. Qúy khách sẽ tận hưởng cảm giác bồng bền khi ngồi trên Cabin lơ lững giữa chừng mây. Viếng chùa Linh Ứng với tượng Phật Thích Ca cao 27m, viếng đền thờ Bà Chúa Mẫu Thượng Ngàn. Tham gia vui chơi tại công viên Fantasy Park: với các trò chơi phiêu lưu mới lạ như: Vòng Quay Tình Yêu, Phi Công Skiver, Đường Đua Lửa, Ngôi Nhà Ma và Khu trưng bày hơn 40 tượng sáp những nhân vật nổi tiếng trên thế giới…</p>\r\n						        <p>Trưa: Ăn trưa nhà hàng tại chân núi Bà Nà.</p>\r\n						        <p>Chiều: Khởi hành về lại trung tâm thành phố,quý khách sẽ được trầm mình bên bờ biển xinh đẹp Mỹ Khê.</p>\r\n						        <p>Tối: Ăn tối tại nhà hàng hải sản. Thưởng ngoạn du thuyền trên sông Hàn ngắm cảnh Đà Thành về đêm, chụp ảnh Cầu Quay Sông Hàn, cầu Rồng phun lửa và nước vào cuối tuần</p>'),
(8, 6, 4, 'BẢO TÀNG ĐÀ NẴNG – MUA SẮM – TIỄN KHÁCH', '<p>Sáng: Điểm tâm. Tham quan Bảo Tàng Đà Nẵng – Nơi trưng bày các kỷ vật phản ảnh đời sống văn hóa, lịch sử và con người Xứ Quảng. Chụp hình lưu niệm Trung tâm hành chính – Biểu tượng vươn lên mạnh mẽ của thành phố Đà Nẵng.</p>\r\n						        <p>Trưa: Ăn trưa nhà hàng. Quý khách tiếp tục thưởng thức không gian Café và mua sắm quà lưu niệm tại Da Nang Souvenir. (Do chuyến bay trễ 23h00 khởi hành nên Quý khách sẽ bị phụ thu thêm 250.000/1 phòng)\r\n								21h00: Tiễn quý khách tại sân bay Đà Nẵng (các chuyến sau 14h00). Chia tay Quý khách và kết thúc chương trình. Hẹn gặp lại quý khách!</p>'),
(9, 7, 1, 'ĐÀ NẴNG – NGŨ HÀNH SƠN - ĐÔ THỊ CỔ HỘI AN ', '<p>– Sáng: Đón khách theo điểm hẹn tai tại Đà Nẵng (từ 07h30 đến 08h00). Khởi hành tham quan khu di tích – danh thắng Ngũ Hành Sơn (khám phá các hang động, vãn cảnh đẹp non nước trời mây, viếng những ngôi chùa thiêng), Làng Nghề Điêu Khắc Đá Non Nước. Tiếp tục vào Hội An nhận phòng KS nghỉ ngơi.</p>\r\n								<p>– Trưa: Ăn trưa nhà hàng tại Hội An</p>\r\n								<p>– Chiều: Bách bộ tham quan và mua sắm Phố Cổ với: Chùa Cầu Nhật Bản, Bảo tàng văn hóa Sa Huỳnh, Nhà Cổ hàng trăm năm tuổi, Hội Quán Phước Kiến & Xưởng thủ công mỹ nghệ – thưởng thức ca nhạc truyền thống lúc 15h15.</p>\r\n								<p>– Tối: Ăn tối nhà hàng, thưởng thức đặc sản Hội An (Cao Lầu – Bánh Bao – Bánh Vạc – Hoành Thánh). Tự do thưởng ngoạn vẻ đẹp Phố Cổ Hội An, rực rỡ soi bóng bên dòng sông Hoài, từng là thương cảng sầm uất của người Chăm thế kỉ thứ II và Việt Nam từ thế kỉ XVI</p>'),
(10, 7, 2, 'CỐ ĐÔ HUẾ', '<p>– Sáng: Điểm tâm. Rời Hội An đi Cố Đô Huế – Di sản văn hoá Thế Giới, ghé tham quan mua sắm tại Siêu Thị Đặc Sản Miền Trung, tiếp tục hành trình xuyên hầm đường bộ đèo Hải vân, dừng chân chụp ảnh làng Chài Lăng Cô.</p>\r\n						        <p>– Trưa: Ăn trưa nhà hàng và nhận phòng K/sạn nghỉ ngơi.</p>\r\n						        <p>– Chiều: Tham quan Đại Nội (Hoàng Cung của 13 vị vua triều Nguyễn, triều đại phong kiến cuối cùng của Việt Nam: Ngọ Môn, Điện Thái Hoà, Tử Cấm Thành, Thế Miếu, Hiển Lâm Các, Cửu Đỉnh) và Chùa Thiên Mụ cổ kính, xây dựng từ những năm đầu của thế kỉ XVII.</p>\r\n						        <p>– Tối: Ăn tối nhà hàng với đặc sản xứ Huế (Bánh bèo, lọc, nậm, khoái,…). Ngồi thuyền Rồng nghe CA HUẾ và thả hoa đăng cầu may trên dòng Hương thơ mộng.</p>'),
(11, 7, 3, 'HUẾ - PHONG NHA', '<p>– Sáng: Điểm tâm sớm. Rời Huế đi Phong Nha – Kẻ Bàng – Di Sản Thiên Nhiên Thế Giới. Viếng thăm Thánh Địa La Vang (Được phong tặng là Tiểu Vương Cung Thánh Đường) và chụp ảnh Vĩ tuyến 17 – Cầu Hiền Lương – Sông Bến Hải (Giới tuyến tạm thời chia cắt 2 miền Nam – Bắc suốt 20 năm từ 1954-1973).</p>\r\n						        <p>– Trưa: Ăn trưa nhà hàng tại Phong Nha.</p>\r\n						        <p>– Chiều: Ngồi thuyền ngược sông Son chinh phục động Phong Nha: hang Bi Ký, Cô Tiên & Cung Đình dưới sâu lòng núi nơi có con sông ngầm từ Lào chảy sang, chiêm ngưỡng các khối thạch nhũ tuyệt đẹp được kiến tạo bởi thiên nhiên qua hàng ngàn thiên niên kỷ. Khởi hành về Huế theo đường Trường Sơn – Hồ Chí Minh Huyền Thoại.</p>\r\n						        <p>– Tối: Ăn tối nhà hàng và ngủ K/sạn tại Huế. Quý khách tự do thưởng ngoạn vẻ đẹp Cố Đô về đêm với cầu Tràng Tiền rực rỡ sắc màu.</p>'),
(12, 7, 4, 'Tiễn khách', '<p>– Sáng: Điểm tâm. Tham quan lăng Tự Đức – lãng mạn, trữ tình phản ánh chính cuộc đời của vị vua tài hoa nhưng gặp phải tình cảnh đất nước éo le, lăng Khải Định lộng lẫy- kết hợp tinh xảo hai nền kiến trúc, văn hoá Đông – Tây; mua sắm đặc sản chợ Đông Ba.</p>\r\n						        <p>– Trưa: Ăn trưa nhà hàng.</p>\r\n						        <p>– Chiều: Tiễn khách ga Huế/ sân bay Huế từ 14h00 đến 17h00 và sân bay Đà Nẵng từ 17h00 đến 23h00. Chào thân ái tiễn khách. Kết thúc chương trình. (sau thời gian này, khách tự túc ra sân bay hoặc phụ thu xe tiễn)</p>'),
(13, 8, 1, 'ĐÀ NẴNG – NGŨ HÀNH SƠN - ĐÔ THỊ CỔ HỘI AN ', '<p>– Sáng: Đón khách theo điểm hẹn tai tại Đà Nẵng (từ 07h30 đến 08h00). Khởi hành tham quan khu di tích – danh thắng Ngũ Hành Sơn (khám phá các hang động, vãn cảnh đẹp non nước trời mây, viếng những ngôi chùa thiêng), Làng Nghề Điêu Khắc Đá Non Nước. Tiếp tục vào Hội An nhận phòng KS nghỉ ngơi.</p>\r\n								<p>– Trưa: Ăn trưa nhà hàng tại Hội An</p>\r\n								<p>– Chiều: Bách bộ tham quan và mua sắm Phố Cổ với: Chùa Cầu Nhật Bản, Bảo tàng văn hóa Sa Huỳnh, Nhà Cổ hàng trăm năm tuổi, Hội Quán Phước Kiến & Xưởng thủ công mỹ nghệ – thưởng thức ca nhạc truyền thống lúc 15h15.</p>\r\n								<p>– Tối: Ăn tối nhà hàng, thưởng thức đặc sản Hội An (Cao Lầu – Bánh Bao – Bánh Vạc – Hoành Thánh). Tự do thưởng ngoạn vẻ đẹp Phố Cổ Hội An, rực rỡ soi bóng bên dòng sông Hoài, từng là thương cảng sầm uất của người Chăm thế kỉ thứ II và Việt Nam từ thế kỉ XVI</p>'),
(14, 8, 2, 'CỐ ĐÔ HUẾ', '<p>– Sáng: Điểm tâm. Rời Hội An đi Cố Đô Huế – Di sản văn hoá Thế Giới, ghé tham quan mua sắm tại Siêu Thị Đặc Sản Miền Trung, tiếp tục hành trình xuyên hầm đường bộ đèo Hải vân, dừng chân chụp ảnh làng Chài Lăng Cô.</p>\r\n						        <p>– Trưa: Ăn trưa nhà hàng và nhận phòng K/sạn nghỉ ngơi.</p>\r\n						        <p>– Chiều: Tham quan Đại Nội (Hoàng Cung của 13 vị vua triều Nguyễn, triều đại phong kiến cuối cùng của Việt Nam: Ngọ Môn, Điện Thái Hoà, Tử Cấm Thành, Thế Miếu, Hiển Lâm Các, Cửu Đỉnh) và Chùa Thiên Mụ cổ kính, xây dựng từ những năm đầu của thế kỉ XVII.</p>\r\n						        <p>– Tối: Ăn tối nhà hàng với đặc sản xứ Huế (Bánh bèo, lọc, nậm, khoái,…). Ngồi thuyền Rồng nghe CA HUẾ và thả hoa đăng cầu may trên dòng Hương thơ mộng.</p>'),
(15, 8, 3, 'HUẾ - PHONG NHA', '<p>– Sáng: Điểm tâm sớm. Rời Huế đi Phong Nha – Kẻ Bàng – Di Sản Thiên Nhiên Thế Giới. Viếng thăm Thánh Địa La Vang (Được phong tặng là Tiểu Vương Cung Thánh Đường) và chụp ảnh Vĩ tuyến 17 – Cầu Hiền Lương – Sông Bến Hải (Giới tuyến tạm thời chia cắt 2 miền Nam – Bắc suốt 20 năm từ 1954-1973).</p>\r\n						        <p>– Trưa: Ăn trưa nhà hàng tại Phong Nha.</p>\r\n						        <p>– Chiều: Ngồi thuyền ngược sông Son chinh phục động Phong Nha: hang Bi Ký, Cô Tiên & Cung Đình dưới sâu lòng núi nơi có con sông ngầm từ Lào chảy sang, chiêm ngưỡng các khối thạch nhũ tuyệt đẹp được kiến tạo bởi thiên nhiên qua hàng ngàn thiên niên kỷ. Khởi hành về Huế theo đường Trường Sơn – Hồ Chí Minh Huyền Thoại.</p>\r\n						        <p>– Tối: Ăn tối nhà hàng và ngủ K/sạn tại Huế. Quý khách tự do thưởng ngoạn vẻ đẹp Cố Đô về đêm với cầu Tràng Tiền rực rỡ sắc màu.</p>'),
(16, 8, 4, 'Tiễn khách', '<p>– Sáng: Điểm tâm. Tham quan lăng Tự Đức – lãng mạn, trữ tình phản ánh chính cuộc đời của vị vua tài hoa nhưng gặp phải tình cảnh đất nước éo le, lăng Khải Định lộng lẫy- kết hợp tinh xảo hai nền kiến trúc, văn hoá Đông – Tây; mua sắm đặc sản chợ Đông Ba.</p>\r\n						        <p>– Trưa: Ăn trưa nhà hàng.</p>\r\n						        <p>– Chiều: Tiễn khách ga Huế/ sân bay Huế từ 14h00 đến 17h00 và sân bay Đà Nẵng từ 17h00 đến 23h00. Chào thân ái tiễn khách. Kết thúc chương trình. (sau thời gian này, khách tự túc ra sân bay hoặc phụ thu xe tiễn)</p>'),
(17, 9, 1, 'ĐÓN KHÁCH - SƠN TRÀ - MỸ KHÊ - SUNWHEEL', '<p>Quý khách tự túc phương tiện ra sân bay Nội Bài – Đáp chuyến bay lúc 6h25p đi Đà Nẵng.</p>\r\n								<p>Sáng 7h40: HDV Đón quý khách tại Đà Nẵng (Sân bay, Ga, điểm hẹn trung tâm) từ 07h00 đến 13h00 (sau thời gian này, quý khách tự túc nhập đoàn) đưa đi ăn trưa với đặc sản nổi tiếng Đà Nẵng “Bánh tráng thịt heo 2 đầu da & Mỳ Quảng”. Nhận phòng Khách sạn 3* nghỉ ngơi.</p>\r\n								<p>Chiều: Khởi hành đi Bán Đảo Sơn Trà mục kích phố biển Đà Nẵng trên cao, viếng Linh Ứng Tự – nơi có tượng Phật Bà 67m cao nhất Việt Nam và tắm biển Mỹ Khê Đà Nẵng.</p>\r\n								<p>Tối:Ăn tối nhà hàng. Trãi nghiệm cảm giác với Vòng quay Mặt trời SUN WHEEL – Top 10 vòng quay cao nhất Thế Giới, chiêm ngưởng vẻ đẹp Đà Thành về đêm rực rỡ ánh đèn. (Vé Sun Wheel tự túc)</p>'),
(18, 9, 2, 'CÙ LAO CHÀM – PHỐ CỔ HỘI AN', '<p>Sáng: Điểm tâm. Khởi hành vào Hội An ngồi tàu cao tốc tại biển Cửa Đại – Hội An đi Cù Lao Chàm khu dự trữ sinh quyển thế giới, gồm cụm đảo ngoài khơi biển Đông cách Hội An 12 hải lý. Tham quan chùa Hải Tạng hơn 400 trăm năm tuổi. Âu thuyền khu vực tranh bão của ngư dân, khu làng chài và khu lăng miếu cổ.</p>\r\n						        <p>Trưa: Ăn trưa nhà hàng Cù Lao Chàm</p>\r\n						        <p>Chiều: Tiếp tục thăm khu bảo tồn biển và tham gia các hoạt động lặn biển (Snokelling) khám phá san hô… tắm biển.Về lại đất liền khởi hành qua Hội An bách bộ tham quan và mua sắm Phố Cổ với: Chùa Cầu Nhật Bản, Nhà Cổ hàng trăm năm tuổi, Hội Quán Phước Kiến & Xưởng thủ công mỹ nghệ. Trở về Đà Nẵng theo con đường biển mang tên Đại tướng Võ Nguyên Giáp.Tham quan Làng đá Non Nước ngắm nhìn Ngũ Hành Sơn</p>\r\n						        <p>Tối: Ăn tối Nhà hàng. Tự do khám Đà Thành về đêm.</p>'),
(19, 9, 3, 'BÀ NÀ NÚI CHÚA – TẮM BIỂN MỸ KHÊ', '<p>Sáng: Điểm tâm. Khởi hành đi tham quan Bà Nà – Núi Chúa (Vé cáp treo Bà Nà tự túc), nơi có những khoảnh khoắc giao mùa bất ngờ Xuân – Hạ – Thu – Đông trong một ngày. Qúy khách sẽ tận hưởng cảm giác bồng bền khi ngồi trên Cabin lơ lững giữa chừng mây. Viếng chùa Linh Ứng với tượng Phật Thích Ca cao 27m, viếng đền thờ Bà Chúa Mẫu Thượng Ngàn. Tham gia vui chơi tại công viên Fantasy Park: với các trò chơi phiêu lưu mới lạ như: Vòng Quay Tình Yêu, Phi Công Skiver, Đường Đua Lửa, Ngôi Nhà Ma và Khu trưng bày hơn 40 tượng sáp những nhân vật nổi tiếng trên thế giới…</p>\r\n						        <p>Trưa: Ăn trưa nhà hàng tại chân núi Bà Nà.</p>\r\n						        <p>Chiều: Khởi hành về lại trung tâm thành phố,quý khách sẽ được trầm mình bên bờ biển xinh đẹp Mỹ Khê.</p>\r\n						        <p>Tối: Ăn tối tại nhà hàng hải sản. Thưởng ngoạn du thuyền trên sông Hàn ngắm cảnh Đà Thành về đêm, chụp ảnh Cầu Quay Sông Hàn, cầu Rồng phun lửa và nước vào cuối tuần</p>'),
(20, 9, 4, 'BẢO TÀNG ĐÀ NẴNG – MUA SẮM – TIỄN KHÁCH', '<p>Sáng: Điểm tâm. Tham quan Bảo Tàng Đà Nẵng – Nơi trưng bày các kỷ vật phản ảnh đời sống văn hóa, lịch sử và con người Xứ Quảng. Chụp hình lưu niệm Trung tâm hành chính – Biểu tượng vươn lên mạnh mẽ của thành phố Đà Nẵng.</p>\r\n						        <p>Trưa: Ăn trưa nhà hàng. Quý khách tiếp tục thưởng thức không gian Café và mua sắm quà lưu niệm tại Da Nang Souvenir. (Do chuyến bay trễ 23h00 khởi hành nên Quý khách sẽ bị phụ thu thêm 250.000/1 phòng)\r\n								21h00: Tiễn quý khách tại sân bay Đà Nẵng (các chuyến sau 14h00). Chia tay Quý khách và kết thúc chương trình. Hẹn gặp lại quý khách!</p>');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `chitietgia`
--

CREATE TABLE `chitietgia` (
  `id` int(11) NOT NULL,
  `id_gia` int(11) NOT NULL,
  `phuongtien` text COLLATE utf8_unicode_ci NOT NULL,
  `lichkhoihanh` text COLLATE utf8_unicode_ci NOT NULL,
  `gia` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `chitietgia`
--

INSERT INTO `chitietgia` (`id`, `id_gia`, `phuongtien`, `lichkhoihanh`, `gia`) VALUES
(1, 1, 'Máy bay', 'Thứ 5 và thứ 7 hàng tuần', 28000000),
(2, 2, 'Máy bay', 'Hàng ngày', 2250000),
(3, 3, 'Ô tô', 'Hàng ngày', 3600000),
(5, 5, 'Máy bay', 'Thứ 4 và thứ 7 hàng tuần', 5900000),
(9, 10, 'hh', 'hh', 35322);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `chuongtrinh`
--

CREATE TABLE `chuongtrinh` (
  `id` int(11) NOT NULL,
  `id_tour` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `chuongtrinh`
--

INSERT INTO `chuongtrinh` (`id`, `id_tour`) VALUES
(5, 5),
(6, 7),
(7, 8),
(8, 9),
(9, 10);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `giatour`
--

CREATE TABLE `giatour` (
  `id` int(11) NOT NULL,
  `id_tour` int(11) NOT NULL,
  `thongtingia` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `giatour`
--

INSERT INTO `giatour` (`id`, `id_tour`, `thongtingia`) VALUES
(1, 5, '<div>– Xe vận chuyển tốt đời mới phục vụ theo chương trình. </div>\r\n						<div>– Ngủ 2 khách/phòng khách sạn tiện nghi 3* Đà Nẵng. (Khách sạn 3*: Bamboo Green, Luxury )</div>\r\n						<div>– Ăn các bữa theo tour: 03 bữa sáng buffet + 07 bữa chính tiêu chuẩn 120.000 VNĐ/suất.</div>\r\n						<div>– Vé các điểm tham quan.</div>\r\n						<div>– Du thuyền Sông Hàn.</div>\r\n						<div>– Tàu cao tốc Cù Lao Chàm (Phí biên phòng, dụng cụ lặn ngắm san hô)</div>\r\n						<div>– Hướng dẫn viên tiếng Việt phục vụ tận tình.</div>\r\n						<div>– Phục vụ 02 chai 0.5l/khách /ngày.</div>\r\n						<div>– Bảo hiểm du lịch: 20.000.000 VNĐ/vụ.</div>'),
(2, 7, '<div>– Xe vận chuyển tốt đời mới phục vụ theo chương trình. </div>\r\n						<div>– Ngủ 2 khách/phòng khách sạn tiện nghi 3* Đà Nẵng. (Khách sạn 3*: Bamboo Green, Luxury )</div>\r\n						<div>– Ăn các bữa theo tour: 03 bữa sáng buffet + 07 bữa chính tiêu chuẩn 120.000 VNĐ/suất.</div>\r\n						<div>– Vé các điểm tham quan.</div>\r\n						<div>– Du thuyền Sông Hàn.</div>\r\n						<div>– Tàu cao tốc Cù Lao Chàm (Phí biên phòng, dụng cụ lặn ngắm san hô)</div>\r\n						<div>– Hướng dẫn viên tiếng Việt phục vụ tận tình.</div>\r\n						<div>– Phục vụ 02 chai 0.5l/khách /ngày.</div>\r\n						<div>– Bảo hiểm du lịch: 20.000.000 VNĐ/vụ.</div>'),
(3, 8, '<div>– Xe vận chuyển tốt đời mới đón – tiễn và phục vụ theo chương trình.(15, 25, 35, 45 chỗ tùy theo số lượng khách của mỗi tour) </div>\r\n						<div>– Ngủ 2khách/phòng khách sạn tiện nghi 3 sao tiện nghi :hệ thống máy nước nóng lạnh, ĐT, phòng tắm riêng, phòng 2-3 người…\r\n						<br>\r\n						trường hợp lẻ nam, lẻ nữ:  ngủ phòng ba\r\n						<br>\r\n						trường hợp đi 1 người, phụ thu phòng đơn nếu không tìm được người ghép</div>\r\n						<div>– Ăn các bữa theo tour: 03 bữa sáng buffet + 04 bữa trưa + 03 bữa tối tiêu chuẩn 100,000 VNĐ/suất (thưởng thức đặc sản Hội An & Huế)</div>\r\n						<div>– Ca Huế sông Hương: Thuyền Rồng, Nhạc Công, Ca sĩ + Thả hoa đăng cầu may.</div>\r\n						<div>– Thuyền du lịch Phong Nha.</div>\r\n						<div>– Vé tham quan các điểm.</div>\r\n						<div>– Hướng dẫn viên tiếng Việt phục vụ tận tình.</div>'),
(5, 10, '<div>– Xe vận chuyển tốt đời mới đón – tiễn và phục vụ theo chương trình.(15, 25, 35, 45 chỗ tùy theo số lượng khách của mỗi tour) </div>\r\n						<div>– Ngủ 2khách/phòng khách sạn tiện nghi 3 sao tiện nghi :hệ thống máy nước nóng lạnh, ĐT, phòng tắm riêng, phòng 2-3 người…\r\n						<br>\r\n						trường hợp lẻ nam, lẻ nữ:  ngủ phòng ba\r\n						<br>\r\n						trường hợp đi 1 người, phụ thu phòng đơn nếu không tìm được người ghép</div>\r\n						<div>– Ăn các bữa theo tour: 03 bữa sáng buffet + 04 bữa trưa + 03 bữa tối tiêu chuẩn 100,000 VNĐ/suất (thưởng thức đặc sản Hội An & Huế)</div>\r\n						<div>– Ca Huế sông Hương: Thuyền Rồng, Nhạc Công, Ca sĩ + Thả hoa đăng cầu may.</div>\r\n						<div>– Thuyền du lịch Phong Nha.</div>\r\n						<div>– Vé tham quan các điểm.</div>\r\n						<div>– Hướng dẫn viên tiếng Việt phục vụ tận tình.</div>'),
(10, 9, '3');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tour`
--

CREATE TABLE `tour` (
  `id` int(11) NOT NULL,
  `ten` text COLLATE utf8_unicode_ci NOT NULL,
  `tgian` text COLLATE utf8_unicode_ci NOT NULL,
  `diadiem` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `khoihanh` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `gia` int(11) NOT NULL,
  `anh_thumb` text COLLATE utf8_unicode_ci NOT NULL,
  `anh` text COLLATE utf8_unicode_ci NOT NULL,
  `thongtin` text COLLATE utf8_unicode_ci NOT NULL,
  `uudai` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tour`
--

INSERT INTO `tour` (`id`, `ten`, `tgian`, `diadiem`, `khoihanh`, `gia`, `anh_thumb`, `anh`, `thongtin`, `uudai`) VALUES
(5, 'Đà Nẵng - Sơn Trà - Bà Nà', '4 ngày 3 đêm', 'Đà Nẵng', 'thứ 5 và thứ 7 hàng tuần', 4500000, 'img/bana5.jpg', 'img/anhbana.jpg', 'Việc Đà Nẵng được chọn là thành phố đáng sống nhất Việt Nam là đề tài nhận được rất nhiều sự quan tâm và tranh cãi của người Việt nói chung và Đà Nẵng nói riêng, bởi nó đánh động vào lòng tự hào, sự kiêu hãnh trong mỗi con người đối với tình yêu quê hương, đất nước… không những thế những thắng cảnh ở đây đẹp mê hồn luôn níu giữ các du khách đến mà không muốn về ….', '- Mũ du lịch của công ty du lịch - Vỏ hộ chiếu - Thẻ hành lý'),
(7, 'ĐÀ NẴNG – BÀ NÀ – KHU TẮM BÙN GALINA', '3 ngày 2 đêm', 'Đà Nẵng', 'Hàng ngày', 2250000, 'img/bana2.jpg', 'img/bana2.jpg', 'Việc Đà Nẵng được chọn là thành phố đáng sống nhất Việt Nam là đề tài nhận được rất nhiều sự quan tâm và tranh cãi của người Việt nói chung và Đà Nẵng nói riêng, bởi nó đánh động vào lòng tự hào, sự kiêu hãnh trong mỗi con người đối với tình yêu quê hương, đất nước… không những thế những thắng cảnh ở đây đẹp mê hồn luôn níu giữ các du khách đến mà không muốn về ….', '- Mũ du lịch của công ty du lịch - Vỏ hộ chiếu - Thẻ hành lý'),
(8, 'ĐÀ NẴNG – HỘI AN – HUẾ', '4 ngày 3 đêm', 'Đà Nẵng', 'Hàng ngày', 3600000, 'img/hoian.jpg', 'img/hoian.jpg', 'Việc Đà Nẵng được chọn là thành phố đáng sống nhất Việt Nam là đề tài nhận được rất nhiều sự quan tâm và tranh cãi của người Việt nói chung và Đà Nẵng nói riêng, bởi nó đánh động vào lòng tự hào, sự kiêu hãnh trong mỗi con người đối với tình yêu quê hương, đất nước… không những thế những thắng cảnh ở đây đẹp mê hồn luôn níu giữ các du khách đến mà không muốn về ….', '- Mũ du lịch của công ty du lịch - Vỏ hộ chiếu - Thẻ hành lý'),
(9, 'ĐÀ NẴNG – SƠN TRÀ – NGŨ HÀNH SƠN – HỘI AN – HUẾ', '5 ngày 4 đêm', 'Đà Nẵng', 'Thứ 4, 7 hàng tuần', 35000, 'img/noibat3.jpg', 'img/noibat3.jpg', 'Theo Con đường di sản, Quý khách lần lượt đi qua những địa danh nổi tiếng miền Trung đầy nắng và gió Lào để đến với một Động Phong Nha diễm lệ mà kỳ bí, Cố Đô Huế nhẹ nhàng sâu lắng mà trầm mặc, Phố Cổ Hội An cổ kính mà thanh tao và con bao điều thú vị khác đang chào đón Quý khách…', 'Theo Con đường di sản, Quý khách lần lượt đi qua những địa danh nổi tiếng miền Trung đầy nắng và gió Lào để đến với một Động Phong Nha diễm lệ mà kỳ bí, Cố Đô Huế nhẹ nhàng sâu lắng mà trầm mặc, Phố Cổ Hội An cổ kính mà thanh tao và con bao điều thú vị khác đang chào đón Quý khách…'),
(10, 'HÀ NỘI – ĐÀ NẴNG – SƠN TRÀ – HỘI AN – BÀ NÀ – HUẾ', '5 ngày 4 đêm', 'Hà Nội', 'Thứ 4, 7 hàng tuần', 5900000, 'img/bana4.jpg', 'img/bana4.jpg', 'Việc Đà Nẵng được chọn là thành phố đáng sống nhất Việt Nam là đề tài nhận được rất nhiều sự quan tâm và tranh cãi của người Việt nói chung và Đà Nẵng nói riêng, bởi nó đánh động vào lòng tự hào, sự kiêu hãnh trong mỗi con người đối với tình yêu quê hương, đất nước… không những thế những thắng cảnh ở đây đẹp mê hồn luôn níu giữ các du khách đến mà không muốn về ….', '- Mũ du lịch của công ty du lịch - Vỏ hộ chiếu - Thẻ hành lý'),
(13, 'ĐÀ NẴNG – BÀ NÀ – KHU TẮM BÙN GALINA 22', '3', 'hà nội', 'đà nẵng', 5000000, 'img/bana3.jpg', 'img/bienmykhe.jpg', '', '');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `ttdk`
--

CREATE TABLE `ttdk` (
  `id_dk` int(11) NOT NULL,
  `hoten` varchar(80) COLLATE utf8_unicode_ci NOT NULL,
  `sdt` varchar(11) COLLATE utf8_unicode_ci NOT NULL,
  `tentour` varchar(80) COLLATE utf8_unicode_ci NOT NULL,
  `giatour` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `tgdk` datetime NOT NULL DEFAULT current_timestamp(),
  `tthai` varchar(20) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `ttdk`
--

INSERT INTO `ttdk` (`id_dk`, `hoten`, `sdt`, `tentour`, `giatour`, `email`, `tgdk`, `tthai`) VALUES
(17, 'hhhhhh', '333333333', 'Du lịch Đà Nẵng: Đà Nẵng - Sơn Trà - Bà Nà', '4,500,000 vnđ', 'fgdfsdf', '2020-10-11 15:18:46', 'Duyệt tour'),
(19, 'Nguyen Hưng', '2321521312', 'Du lịch Đà Nẵng: Đà Nẵng - Sơn Trà - Bà Nà', '4,500,000 vnđ', '', '2020-10-13 14:14:07', 'Duyệt tour'),
(23, 'Nguyen Hưng', '12342312', 'Du lịch Đà Nẵng: Đà Nẵng - Sơn Trà - Bà Nà', '4,500,000 vnđ', '', '2020-10-13 14:29:16', ''),
(24, 'sơn', '12421412', 'Du lịch Đà Nẵng: ĐÀ NẴNG – BÀ NÀ – KHU TẮM BÙN GALINA', '2,250,000 vnđ', '', '2020-10-13 14:30:21', 'Duyệt tour');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `ttnd`
--

CREATE TABLE `ttnd` (
  `id_ng` int(11) NOT NULL,
  `hoten` varchar(80) COLLATE utf8_unicode_ci NOT NULL,
  `tendn` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `matkhau` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `remk` varchar(20) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `ttnd`
--

INSERT INTO `ttnd` (`id_ng`, `hoten`, `tendn`, `matkhau`, `email`, `remk`) VALUES
(12, 'Nguyễn Hưng', 'hungnguyen1901', 'Hung1234', 'hungnguyen22.12@gmail.com', 'Hung1234'),
(19, 'hungnguyen', '12345678', '12345678', 'hgffghf@sfsf.com', '12345678');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users`
--

CREATE TABLE `users` (
  `userid` int(11) NOT NULL,
  `username` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(18) COLLATE utf8_unicode_ci NOT NULL,
  `level` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `users`
--

INSERT INTO `users` (`userid`, `username`, `password`, `level`) VALUES
(1, 'admin', 'admin', 1);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `chitietct`
--
ALTER TABLE `chitietct`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_ct` (`id_ct`);

--
-- Chỉ mục cho bảng `chitietgia`
--
ALTER TABLE `chitietgia`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_gia` (`id_gia`);

--
-- Chỉ mục cho bảng `chuongtrinh`
--
ALTER TABLE `chuongtrinh`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_tour` (`id_tour`);

--
-- Chỉ mục cho bảng `giatour`
--
ALTER TABLE `giatour`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_tour` (`id_tour`);

--
-- Chỉ mục cho bảng `tour`
--
ALTER TABLE `tour`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `ttdk`
--
ALTER TABLE `ttdk`
  ADD PRIMARY KEY (`id_dk`);

--
-- Chỉ mục cho bảng `ttnd`
--
ALTER TABLE `ttnd`
  ADD PRIMARY KEY (`id_ng`);

--
-- Chỉ mục cho bảng `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`userid`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `chitietct`
--
ALTER TABLE `chitietct`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT cho bảng `chitietgia`
--
ALTER TABLE `chitietgia`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT cho bảng `chuongtrinh`
--
ALTER TABLE `chuongtrinh`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT cho bảng `giatour`
--
ALTER TABLE `giatour`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT cho bảng `tour`
--
ALTER TABLE `tour`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT cho bảng `ttdk`
--
ALTER TABLE `ttdk`
  MODIFY `id_dk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT cho bảng `ttnd`
--
ALTER TABLE `ttnd`
  MODIFY `id_ng` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT cho bảng `users`
--
ALTER TABLE `users`
  MODIFY `userid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `chitietct`
--
ALTER TABLE `chitietct`
  ADD CONSTRAINT `chitietct_ibfk_1` FOREIGN KEY (`id_ct`) REFERENCES `chuongtrinh` (`id`);

--
-- Các ràng buộc cho bảng `chitietgia`
--
ALTER TABLE `chitietgia`
  ADD CONSTRAINT `chitietgia_ibfk_1` FOREIGN KEY (`id_gia`) REFERENCES `giatour` (`id`);

--
-- Các ràng buộc cho bảng `chuongtrinh`
--
ALTER TABLE `chuongtrinh`
  ADD CONSTRAINT `chuongtrinh_ibfk_1` FOREIGN KEY (`id_tour`) REFERENCES `tour` (`id`);

--
-- Các ràng buộc cho bảng `giatour`
--
ALTER TABLE `giatour`
  ADD CONSTRAINT `giatour_ibfk_1` FOREIGN KEY (`id_tour`) REFERENCES `tour` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
