<?php

namespace Database\Seeders;

use App\Models\Product;
use Carbon\Carbon;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Product::insert([
            [
                'category_id' => 1,
                'name' => 'Bảng Từ Trắng Viết Bút Lông Deli - Bảng Mica Hít Nam Châm Nhiều Kích Cỡ - Có Khay Đựng - Phù Hợp Học Sinh Văn Phòng - EV450 / EV600 / EV900',
                'price' => '297000',
                'description' => 'Bảng từ trắng viết bút lông Deli EV450 / EV600 / EV900 là dòng sản phẩm tiện dụng với mọi gia đình với nhiều kích thước ( 45x60 , 90x60 , 120x 90cm). 

                Với kích thước nhỏ tiện dụng, sử dụng khung nhôm nhỏ hoặc khung nhựa nên rất phù hợp với:
                
                Ghi chú chung tại phòng khách, bếp tại gia đình
                Làm bảng học tập tại góc học tập và làm việc cá nhân
                Ghi chú thông tin tại góc làm việc cá nhân tại nhà, văn phòng
                Làm bảng tập vẽ, viết chữ cho các bé đang học chữ hoặc lớp 1
                Và nhiều công dụng khác
                Với sản phẩm bảng từ trắng Deli bạn sẽ thật dễ dàng ghi chú thông tin, học tập
                Bé sẽ thích thú hơn khi tập vẽ và viết
                Bạn sẽ học tiếng anh nhanh hơn bằng cách ghi nhớ các từ mới mỗi ngày trên bảng
                Bạn sẽ không quên những việc quan trọng, ngày kỷ niệm quan trọng khi ghi nhớ trên bảng
                Và rất nhiều lợi ích khác từ bảng từ Deli mà bạn sẽ tự khám phá
                Một chiếc bảng viết thì bề mặt là quan trọng nhất, tuy nhiên kết cấu bảng với khung nhôm, hậu nhựa phía sau bảng sẽ giúp bảng cứng cáp, chắc chắn chống cong vênh và mối mọt trong cả điều kiện thời tiết nồm ẩm và bất lợi.',
                'amount' => '47',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ],
            [
                'category_id' => 1,
                'name' => 'Ống cắm bút đựng đồ văn phòng son mĩ phẩm Deli - 4 / 5 / 8 ngăn - Màu morandi pastel',
                'price' => '60000',
                'description' => 'TÍNH NĂNG SẢN PHẨM:

                Chất liệu nhựa cứng có độ bền cao, chịu được va đập
                
                Màu sắc đa dạng, chi tiết xem hình ảnh trong phần phân loại sản phẩm
                
                 
                
                THÔNG TIN SẢN PHẨM:
                
                Mã sản phẩm: 8939/8940/8941
                
                Màu sắc: morandi ( xanh dương, xanh lá, trắng be)
                
                Kích cỡ phân loại: 4 ngăn, 5 ngăn nhỏ, 5 ngăn to, 8 ngăn',
                'amount' => '0',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ],
            [
                'category_id' => 1,
                'name' => 'File đựng tài liệu lá A4 / Túi tài liệu lá A4 20-40-60 lá',
                'price' => '89000',
                'description' => 'File đựng tài liệu A4 cứng cáp, bền bỉ được sử dụng để bảo quản hồ sơ, tài liệu học tập và làm việc. Bên cạnh đó, cặp đựng tài liệu giúp việc sắp xếp, cất giữ các loại tài liệu, giấy tờ một cách dễ dàng và gọn gàng , tránh tình trạng thất lạc. File tài liệu dung lượng lớn được dùng cho nhiều nhu cầu sử dụng khác nhau

 

                ƯU ĐIỂM:
                
                Sức chứa lớn, tiện dụng. Chất liệu bền bỉ. Màu sắc nhẹ nhàng, đơn giản Thiết kế: Túi có 20-40-60 lá tài liệu có thể chứa và phân loại các loại tài liệu khác nhau.
                
                Có nhiều ngăn lựa chọn giúp truy cập tài liệu nhanh chóng và dễ dàng; tiện dụng cho việc lưu trữ theo từng mục đich sử dụng
                
                20 lá: lưu trữ được 80 tờ A4
                40 lá: lưu trữ được 150 tờ A4
                60 lá: lưu trữ được 180 tờ A4
                Bìa lá trong suốt giúp việc tìm và sắp xếp tài liệu trở nên dễ dàng hơn.
                
                Màu sắc túi tài liệu lưu trữ hồ sơ tươi sáng, trẻ trung, mẫu mã đa dạng
                
                Chất lượng: túi đựng tài liệu được làm bằng vật liệu Polypropylene (PP) an toàn, bền và giúp bảo vệ tài liệu không bị thấm nước.
                
                Thiết kế các lá tài liệu trong suốt liên kết  chắc chắn bảo quản tài liệu tránh rơi ra ngoài trong quá trình di chuyển
                
                Tập đựng hồ sơ lý tưởng để sử dụng tại nhà, văn phòng, trường học, trong các cuộc họp, hội nghị hay đi công tác',
                'amount' => '66',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ],
            [
                'category_id' => 1,
                'name' => 'Băng keo, dính hai mặt trong suốt siêu dính chống nước Deli',
                'price' => '34000',
                'description' => 'TÍNH NĂNG SẢN PHẨM:

                ️ Độ dính cao độ dính lâu dài và mạnh mẽ.
                ️ Độ trong suốt cao vẫn có thể nhìn thấy rõ ràng sau lớp băng dính, tăng cường lực dính và độ dẻo dai của băng.
                ️ Có khả năng chống dung môi hóa học tốt.
                ️ Đã vượt qua bài kiểm tra về độ an toàn và chất lượng sản phẩm.
                
                THÔNG TIN SẢN PHẨM:
                
                Thương hiệu: Deli
                
                Tên sản phẩm: Băng keo, dính hai mặt siêu dính trong suốt chống nước Deli
                Quy cách đóng gói: 1 cuộn
                Thông số kĩ thuật',
                'amount' => '3',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ],
            [
                'category_id' => 1,
                'name' => 'Dao rọc giấy Deli chất liệu kim loại với lưỡi thép SK5',
                'price' => '25000',
                'description' => 'TÍNH NĂNG SẢN PHẨM:
                ️Thiết kế nắp đậy bẻ lưỡi dao ở phần đuôi
                ️Thân dao làm bằng thép
                ️Thiết kế cài bút
                ️Hệ thống khóa cố định tự động
                ️Quy cách: Loại 13 lưỡi
                ️Kích cỡ: 130x115x10MM
                
                THÔNG TIN SẢN PHẨM:
                Tên sản phẩm: Dao rọc giấy Deli
                Mã sản phẩm: 2058TÍNH NĂNG SẢN PHẨM:
                ️Thiết kế nắp đậy bẻ lưỡi dao ở phần đuôi
                ️Thân dao làm bằng thép
                ️Thiết kế cài bút
                ️Hệ thống khóa cố định tự động
                ️Quy cách: Loại 13 lưỡi
                ️Kích cỡ: 130x115x10MM
                
                THÔNG TIN SẢN PHẨM:
                Tên sản phẩm: Dao rọc giấy Deli
                Mã sản phẩm: 2058',
                'amount' => '8',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ],
            [
                'category_id' => 1,
                'name' => 'Băng Keo trong , Băng Dính Dán Thùng Titapha (6 x 100 Yards)',
                'price' => '129000',
                'description' => '[Lốc 6 Cuộn] Băng Keo trong , Băng Dính Dán Thùng Titapha (6 x 100 Yards)

                Băng Keo trong bám dính tốt trên nhiều bề mặt khác nhau
                
                Thành phần không chứa hóa chất độc hại, an toàn khi sử dụng
                
                Có độ bền cao, chịu lực tác động tốt
                
                Dễ dàng dán, dính, cắt khi sử dụng.
                
                Rất tiện lợi cho việc đóng gói Hàng hóa, đóng thùng',
                'amount' => '47',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ],
            [
                'category_id' => 1,
                'name' => 'Kệ Đọc Sách, Giá Đỡ Đọc Sách, Giá Đỡ Đọc Kinh Bằng Gỗ Tre',
                'price' => '145000',
                'description' => 'Thông tin sản phẩm:

                Tên sản phẩm: Giá đỡ đọc sách, ipad – Giá đỡ đọc kinh
                
                Chất liệu: Gỗ tre tự nhiên
                
                Kích thước: 35 x 27 x 3 cm
                
                Trọng lượng: 900 gram
                
                Màu: vàng tre
                
                Kết cấu của giá đỡ đọc sách, ipad – Giá đỡ đọc kinh:
                
                Tấm đỡ sách hình chữ nhật, bằng gỗ tre, kích thước …
                Chân đế bằng gỗ tre, có 7 rãnh giúp điều chỉnh độ nghiêng của sách phù hợp với các tư thế đọc khác nhau.
                Thanh chống bằng kim loại để điều chỉnh độ nghiêng của sách cùng với tấm đỡ và chân đế.
                2 kẹp kim loại dùng để giữ trang sách
                Công dụng giá đỡ đọc sách, ipad – Giá đỡ đọc kinh:
                
                Giữ sách, ipad đúng tư thế, tránh mỏi tay, mỏi cổ khi đọc lâu
                Tiện dụng cho người đọc kinh, truyền đạo để giữ sách kinh trong suốt thời gian giảng thuyết
                Có thể dùng để giữ bản nhạc cho nhạc công, nhạc trưởng
                Có thể dùng để giữ menu trên bàn ăn',
                'amount' => '3',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ],
            [
                'category_id' => 1,
                'name' => 'BAO THƯ GIẤY KRAFT A4 - 25X35CM',
                'price' => '145000',
                'description' => 'Bao thư  giấy Kraft (xấp 100 cái) được thiết kế để vừa khổ giấy A4, phù hợp cho việc lưu trữ, ký gởi giấy tờ nhanh gọn.

                Bao thư được cắt định hình bằng khuôn và dán bằng dây chuyền tự động nên sắc nét đều đẹp, 100 cái đều giống nhau, trắng sạch, đóng gói gọn gàng.
                
                Bao thư được làm từ giấy ford trắng, mịn, bám mực tốt, không chứa các thành phần có hại cho sức khỏe của người dùng.
                
                Bạn có thể thoải mái ghi chữ trên bao thư mà không sợ làm hư giấy.
                
                - Kích thước: 25cm x 35cm x nắp ngang 3cm
                
                - Chất liệu: giấy Kraft
                
                - Đóng gói: 100 cái /bao',
                'amount' => '0',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ],
            [
                'category_id' => 2,
                'name' => 'Bộ bút Bộ bút Gel nhiều màu/ Set bút gel nhiều màu – 12 màu- Ngòi 0.5mm',
                'price' => '129000',
                'description' => 'Bút mực gel Resun phù hợp để ghi chép hằng ngày phục vụ nhu cầu học tập và làm việc. Với thiết kế đơn giản và nhẹ nhàng, bút mực gel Resun phù hợp với mọi độ tuổi. ƯU ĐIỂM: Màu sắc phong phú : 12 màu *Hồng / Tím / Xanh dương / Xanh lá / Cam / Đen/ Hồng cam / Xanh lá nhạt / Vàng / Tím đậm / Xanh dương đậm / Xanh dương nhạt Mực đều màu, độ bền cao Kích thước (hộp) 15x12 cm Nét bút 0.5 Trọng lượng (hộp) 120GR Màu Sắc 12 màu Ngòi viết: nét 0.5mm thông dụng được dùng để ghi chú, ghi chép hằng ngày. Ngòi bút sử dụng thép chống rỉ giúp bút mềm, mượt mà, không bị tắt mực trong quá trình sử dụng Mực đều màu, nhanh khô phù hợp với người ghi chép nhiều, tốc ký, ghi chú. Ngòi bút được bao bọc bởi lớp vở nhựa đục rất chắc chắn, có độ bền cao. Thân bút thon dài dễ cầm và lưu trữ tạo cảm giác thoải mái khi sử dụng.',
                'amount' => '70',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ],
            [
                'category_id' => 2,
                'name' => 'Bút Bi Nước Mực Gel Bấm Ngòi 0.5mm Deli - Có Ngòi Thay Thế Viết Trơn Đều Phù Hợp Ghi Chép Văn Phòng Học Sinh Sổ Tay - A575',
                'price' => '18000',
                'description' => 'Bút Bi Nước Mực Gel Bấm Ngòi 0.5mm Deli A575 có kiểu dáng hiện đại, vừa tay cầm, tạo sự thoải mái cho người sử dụng. Ngòi bút êm ái, mực ra đều không bị nhòe, cho chữ viết sắc nét và đẹp như mong muốn.
                Mực gel cao cấp, mau khô, không đóng cặn, không độc hại, an toàn cho sức khỏe.
                Ngòi bút sản xuất theo công nghệ tiên tiến nên viết êm, mực chảy đều, nét viết mềm mại.
                Các phân tử màu không hòa tan trong nước nên mực kháng nước và bền mầu. Mực ra đều, đậm, nhanh khô và không bị lem.
                Phần đệm tay được bao bọc bởi cao sụ mềm tạo cảo giác êm ái và không gây mỏi tay khi viết lâu.
                Thân bút trong suốt cho phép bạn quan sát lượng mực còn lại trong ruột bút.
                Gài bút thuận tiện để gài vào túi áo, bìa, tập sách…
                Bút có thiết kế đẹp mắt, họa tiết xinh xắn phù hợp với nhiều đối tượng khác nhau. Ngoài ra️ bút gel Deli, nhiều màu sắc cho bạn lựa chọn.',
                'amount' => '24',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ],
            [
                'category_id' => 2,
                'name' => 'Bút chì lục giác Deli - loại 2B/HB - 30 chiếc/hộp - 58166 / 58167',
                'price' => '99000',
                'description' => 'TÍNH NĂNG SẢN PHẨM:
                ️ Khả năng ứng dụng cao cho việc làm mỹ thuật, văn phòng.
                ️ Sản phẩm được thiết kế hình lục giác, dễ sử dụng. Sơn bên ngoài không độc hại.
                ️ Chất liệu chì gỗ, nét chì mượt mà.
                THÔNG TIN CHI TIẾT SẢN PHẨM:
                Loại sản phẩm: Hộp bút chì HB/ 2B (30 Chiếc/ hộp)
                Mã sản phẩm: 58166 / 58167
                Màu sắc: 4 Màu – Xanh dương, Xanh lá, Tím và Hồng
                --------------------------------------------------------------------------------------------------------------------------------
                Tự hào là một trong những nhãn hàng văn phòng phẩm lớn nhất tại Việt Nam, @Delivietnam không ngừng nỗ lực và phát triển trong lĩnh vực phân phối các sản phẩm cho các đơn vị văn phòng, trường học,... Với phương châm sản xuất những sản phẩm chất lượng tốt nhất và luôn đặt khách hàng làm trọng tâm, sứ mệnh của Deli là làm hài hòng người tiêu dùng toàn cầu với những sản phẩm chất lượng cao, độ tin cậy tuyệt đối và thân thiện với người dùng.
                
                Khách hàng lựa chọn các sản phẩm của @Delivietnam sẽ được cam kết:
                Sản phẩm chính hãng từ nhà máy Deli, nguồn gốc rõ ràng và chất lượng đạt tiêu chuẩn.
                Bảo hành theo quy định của nhà sản xuất.
                Giá cả hợp lý, cạnh tranh, rẻ nhất thị trường.
                Hỗ trợ đổi trả hàng cho những sản phẩm bị thiếu.',
                'amount' => '5',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ],
            [
                'category_id' => 2,
                'name' => 'Bút bi TriTouch ngòi 0.7mm (hộp 12 cái)',
                'price' => '60000',
                'description' => 'Thân bút được thiết kế thẳng,nhựa trong suốt dáng bút khỏe mạnh, nắp gài vát dáng Châu Âu
                Bút ra mực đều viết trơn.
                Đầu bi có cỡ 0.7mm cho ra các  nét mảnh, nét trung bình và nét đậm phù hợp nhiều đối tượng sử dụng như nhân viên văn phòng, sinh viên, học sinh và sở thích của nhiều khách hàng khác nhau.
                Bút thích hợp cho những đơn vị tổ chức hội thảo, hoặc hội nghị
                Màu mực tươi có 2 màu mực  Đen - Đỏ đáp ứng đa dạng nhu cầu, mục đích sử dụng của từng khách hàng.
                Tay cầm có vân chống trơn trượt
                Đóng gói: 12 chiếc/hộp',
                'amount' => '0',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ],
            [
                'category_id' => 2,
                'name' => 'Bút Quay Nghệ Thuật Pen Spinning',
                'price' => '45000',
                'description' => 'Số lượng: 1 Cây
                Màu Bút : Đen hoặc Trắng ( Viền Ngẫu Nhiên)
                Màu mực: Ngẫu Nhiên:  Đen hoặc Xanh
                Ngòi: 0,5mm
                Chiều dài: 20,8cm
                Trọng lượng: Khoảng 18g',
                'amount' => '78',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ],
            [
                'category_id' => 2,
                'name' => 'Bút chì lục giác Deli - bút chì gỗ - loại 2B/HB - 10 chiếc/hộp - 33158 / 33159',
                'price' => '36000',
                'description' => 'TÍNH NĂNG SẢN PHẨM:
                ️ Khả năng ứng dụng cao cho việc làm mỹ thuật, văn phòng.
                ️ Sản phẩm được thiết kế hình lục giác, dễ sử dụng. Sơn bên ngoài không độc hại.
                ️ Chất liệu chì gỗ, nét chì mượt mà.
                ️ Đầu tẩy chì bằng nhựa PVC không độc hại, an toàn cho người sử dụng.
                
                THÔNG TIN CHI TIẾT:
                Loại sản phẩm: Bút chì HB/ 2B (10 chiếc)
                Màu sắc: Đen và đỏ
                Mã sản phẩm: 33158 / 33159
                --------------------------------------------------------------------------------------------------------------------------------------------
                
                Tự hào là một trong những nhãn hàng văn phòng phẩm lớn nhất tại Việt Nam, @Delivietnam không ngừng nỗ lực và phát triển trong lĩnh vực phân phối các sản phẩm cho các đơn vị văn phòng, trường học,... Với phương châm sản xuất những sản phẩm chất lượng tốt nhất và luôn đặt khách hàng làm trọng tâm, sứ mệnh của Deli là làm hài hòng người tiêu dùng toàn cầu với những sản phẩm chất lượng cao, độ tin cậy tuyệt đối và thân thiện với người dùng.
                
                Khách hàng lựa chọn các sản phẩm @Delivietnam sẽ được cam kết:
                Sản phẩm chính hãng từ nhà máy Deli, nguồn gốc rõ ràng và chất lượng đạt tiêu chuẩn.
                Bảo hành theo quy định của nhà sản xuất.
                Giá cả hợp lý, cạnh tranh, rẻ nhất thị trường.',
                'amount' => '9',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ],
            [
                'category_id' => 2,
                'name' => 'Bộ 10 Bút Gel Thiên Long Doraemon GEL-012/DO',
                'price' => '110000',
                'description' => 'Tính năng nổi bật:
                Bút có thiết kế đơn giản nhưng khoa học, thân tròn, nhỏ rất phù hợp với tay cầm của học sinh
                tiểu học.
                Thân bút bằng nhựa trắng đục, in transfer flm hình nhân vật Doraemon rất thu hút.
                Mực màu đậm và tươi sáng, viết êm trơn, ra đều và liên tục
                Đặc điểm bút Gel-012/DO
                Đầu bi: 0.5mm, dạng needle , sản suất tại Thụy Sĩ.
                Bút dạng đậy nắp, có grip.
                Độ dài viết được: 500-1000m.
                Mực đạt chuẩn: ASTM D-4236, EN71/3.
                Lợi ích:
                Grip giúp êm tay và chống trơn tuột khi sử dụng lâu.
                Thiết kế bút hiện đại, được in bằng kỹ thuật cao cấp làm tăng thêm tính sang trọng cho sản phẩn, phù hợp cho giới văn phòng.
                Bảo quản:
                Tránh va chạm vào các vật cứng quá mạnh.
                Tránh để sản phẩm ở gần nhiệt độ quá cao.
                Đặc điểm nổi bật:
                Bút Gel là nhãn hàng Bút viết ra đời nhằm mang đến sự tiện lợi, thoải mái cho người sử dụng. Thiết kế bút phù hợp với người Việt, tạo cho người viết không bị mỏi tay. Đầu bi cao cấp giúp mực trợn mượt, phù hợp cho người viết nhiều, tốc ký như học sinh phổ thông, sinh viên. Vỏ bút làm bằng nhựa trong giúp người viết dễ dàng kiểm tra lượng mực của bút, viết được đến khi hết mực mà không lo tắc hay lắng cặn.
                Với thiết kế trang nhã, màu sắc tươi sáng phù hợp với nhu cầu sử dụng của nhiều người, Bút Gel đã trở thành người bạn đồng hành của nhiều học sinh.',
                'amount' => '43',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ],
            [
                'category_id' => 2,
                'name' => 'Combo 20 Bút Bi Nước Văn Phòng BB011 - Bút bi nước 3 màu xanh đỏ đen',
                'price' => '17000',
                'description' => 'Bút Bi Nước Văn Phòng : 3 Màu Xanh - Đỏ - Đen - Thiết kế ngòi bút 0,5mm - Thân bút vừa vặn - Mực ra đều và liên tục - Mua combo 20 chiếc siêu tiết kiệm.',
                'amount' => '74',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ],
            [
                'category_id' => 3,
                'name' => 'Bút màu marker chuyên nghiệp Deli -kèm túi vải',
                'price' => '230000',
                'description' => 'Bút màu marker chuyên nghiệp Deli được chia thành cấp độ nghiệp dư và cấp độ chuyên nghiệp. Cấp độ chuyên nghiệp sử dụng đầu sợi có mật độ cao và khối lượng không gian mạnh. Nó chủ yếu được sử dụng để vẽ tay chuyên nghiệp.
                ️Màu sắc phân lớp có độ trung thực cao và quà trình chuyển đổi tự nhiên làm cho mọi phần của tác phẩm trở nên cân đối.
                ️Bút marker Deli có màu sắc tươi sáng và đáp ứng nhu cầu nghệ thuật chuyên nghiệp. Các nhà thiết kế có thể thể hiện kỹ năng và thể hiện sự sáng tạo chuyên nghiệp trong hoạt hình, kiến trúc, quần áo,
                ️Mực đầu sợi bút có mật độ cao, lưu trữ mực đều, không dễ trổ lông.
                ️Đầu bút được làm từ chất liệu sợi mật độ cao, lưu mực đều, mực chảy đều từ ngòi, mượt mà, nét vẽ mềm mại, không dễ bị xổ lông khi sử dụng thường xuyên.
                ️Thiết kế hai đầu dày và mỏng, tập trung vào biểu hiện sáng tạo trong thiết kế
                ️Có thể vẽ hai loại bút có độ dày khác nhau theo ý muốn, đáp ứng các góc vẽ khác nhau:
                Đầu tròn nhọn
                Đầu vuông
                Ngòi nét của bút marker đầu vuông thường được sử dụng để đánh bóng một khu vực rộng lớn
                ️Ngòi nét của bút marker tròn nhỏ được nâng lên một chút ở đỉnh bên để làm cho đường kẻ mỏng hơn
                THÔNG TIN SẢN PHẨM
                
                Tên sản phẩm: Bút màu marker chuyên nghiệp Deli
                Mã phân loại sản phẩm: 70806-30, 70806-40 70806-60, 70806-80
                Quy cách đóng gói: Túi vải Oxford
                Sản phẩm phối màu: 30 màu, 40 màu, 60 màu, 80 màu
                Phụ kiện đi kèm: bảng thử màu',
                'amount' => '32',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ],
            [
                'category_id' => 3,
                'name' => 'Bút chì màu gốc dầu cao cấp Deli',
                'price' => '215000',
                'description' => 'Bút chì màu gốc dầu cao cấp Deli - 6565 / 6566 / 6567 thích hợp cho vẽ chuyên nghiệp, thiết kế, phác họa, vẽ truyện tranh.
                Màu sắc đa dạng, màu sắc tươi sáng, nét vẽ tinh tế độ bám màu tốt, có thể mix màu, chồng lớp dễ dàng tạo nên những nét vẽ màu sắc độc đáo, sinh động. Sản phẩm phù hợp với người mới bắt đầu đến nâng cao về mỹ thuật.
                ️Thiết kế tinh xảo, thân thiện với người dùng. Dễ làm sắc nét với đồ chuốt thông dụng.
                Tuân thủ các quy định hiện hành về sản xuất với chất lượng tốt, không độc hại, an toàn cho sức khoẻ người sử dụng.
                Thân chì mềm, nhẹ với chất liệu gỗ và ruột chì bền với kích thước 3.8 mm tạo nét vẽ rõ ràng.',
                'amount' => '42',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ],
            [
                'category_id' => 3,
                'name' => 'Bộ Màu Nước Nén Water Color Cao Cấp 24 36 48 Màu Tặng Bút Lông Nước, Mút, Cọ, Tẩy, Bút Chì, Gọt, Màu Trắng Deli',
                'price' => '233000',
                'description' => 'Bộ Màu Nước Nén Water Color Cao Cấp Deli 73936 dạng nén đang được giới họa sỹ tin dùng và cho ra sản phẩm cực đẹp.
                Với đặc điểm là dạng khay nén đa dụng, dễ dàng sử dụng, thì sản phẩm này là lựa chọn hoàn hảo cho các tín đồ mê vẽ, cả với những bạn đam mê vẽ hội họa, học sinh, sinh viên, và những người mới bắt đầu học vẽ đều có thể sử dụng.
                Bộ màu gồm các viên nén màu được đựng trong hộp đựng xinh xắn, còn được tặng kèm cọ vẽ đi kèm quá tiện dụng để lưu trữ hoặc mang đi xa.
                Có kèm cọ nước, bông mút vệ sinh tiện dụng giúp mang theo bên người khi ra ngoài hoặc đi học.
                Sản phẩm không chứa hóa chất độc hại nên bạn có thể yên tâm sử dụng. Màu sắc tươi sáng, khô nhanh.
                Bộ màu nước hộp thiếc bắt mắt có thể dùng làm quà tặng, biếu vô cùng tinh tế.
                THÔNG TIN CHI TIẾT
                
                Mã sản phẩm: 73936
                
                Phân loại sản phẩm: 24 / 36 /48
                
                Kích thước: 179mm x 193mm
                
                Set gồm:
                
                1 hộp màu dạng sắt với đủ màu
                1 cọ vẽ thường
                1 cọ dạng bút bơm nước
                1 bút chì
                1 mút xốp
                1 tuýp dung dịch pha màu
                1 tẩy + 1 gọt
                Số lượng chi tiết tùy từng phân loại màu',
                'amount' => '20',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ],
            [
                'category_id' => 3,
                'name' => 'Bút chì màu dạng cốc Deli - bút chì gỗ khô tự nhiên an toàn',
                'price' => '50000',
                'description' => 'TÍNH NĂNG SẢN PHẨM

                Bút chì màu dạng cốc Deli 7070 được làm từ gỗ trầm cao cấp giúp gọt dễ dàng.
                
                ️Nét cọ mịn, chuyển tiếp tự nhiên, độ bão hòa màu cao, không dễ phai.
                
                Có 12/24/36/48 màu màu sắc để chọn theo yêu cầu sử dụng.
                
                ️Có miếng mút bảo vệ chì.
                
                THÔNG TIN SẢN PHẨM:
                
                Tên sản phẩm: Bút chì màu cốc học sinh Deli
                
                Mã sản phẩm: 7070
                
                Phân loại sản phẩm: 12/24/36/48 màu',
                'amount' => '42',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ],
            [
                'category_id' => 3,
                'name' => 'Bút màu marker hai đầu cao cấp Deli',
                'price' => '125000',
                'description' => 'TÍNH NĂNG SẢN PHẨM:
                ️Sản phẩm được sử dụng với nhiều mục đích mỹ thuật, phù hợp với người mới bắt đầu cho đến chuyên nghiệp.
                ️Màu sắc sặc sỡ - thiết kế 2 đầu bút
                ️Một đầu chuyên dùng để vẽ, 1 đầu chuyên dùng để tô. Ngoài ra 2 đầu bút còn đem lại các hiệu ứng màu khác nhau giúp đáp ứng các phong cách vẽ khiến bức tranh của trẻ trở nên phong phú.
                ️Mực hấp thụ đều, khô ngay tức thì, khó lem ra tay giúp trẻ luôn giữ tay sạch sẽ.
                ️Mực không bị nhòe, khó phai màu
                ️Thân bút hình vuông vát tròn các cạnh
                ️Chống trơn trượt, dễ dàng cầm nắm sử dụng
                ️Đầu bút được thiết kế tích hợp 2 loại sợi đặc biệt giúp tăng độ bền, giúp cho nét bút mềm mại hơn, mực ra đều màu hơn.
                ️Sản phẩm đã được kiểm nghiệm, chứng nhận AN TOÀN ĐỐI VỚI TRẺ NHỎ
                
                THÔNG TIN CHI TIẾT
                Tên sản phẩm: Bút màu Marker hai đầu Deli - 70816
                Mã sản phẩm: 70816 – 12/ 70816 – 24/ 70816 – 36/ 70816 – 48/ 70816 – 60/ 70816 – 80
                Phân loại: 12 / 24/ 36/ 48/ 60 Màu
                Thương hiệu: Deli
                Quy cách: Hộp nhựa chắc chắn, an toàn, dễ sử dụng - bảo quản
                Kích thước ngòi bút: Đầu tròn 6mm/ Đầu dẹt 1mm
                Thân bút: hình vuông
                Thiết kế nắp đóng chắc chắn
                Vỏ bút: màu trắng',
                'amount' => '67',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ],
            [
                'category_id' => 3,
                'name' => 'Bút lông 20 màu Pastel Washable Fiber Pen Thiên Long Colokit SWM',
                'price' => '80000',
                'description' => 'Bộ 20 màu Pastel Washable Fiber Pen thích hợp trang trí sổ tay, planner, penpal, góc học tập, album, handmade, calligraphy, bullet màu Pastel - màu Vintage - màu dịu mát và ấm áp, mang lại sự nhẹ nhàng, thanh lịch, thoải mái…cho cảm giác mới lạ, nổi bật cá tính.

                Mực không độc hại với người sử dụng, dễ dàng rửa sạch bằng nước trên các bề mặt như da, vảộ sản phẩm màu Pastel Fiber Pen gồm: Blue, Red, Lilac, Pink, Orange, Green, Yellow, Apricot, Brown, Magenta, Violet, Light Sky, Gold, Gray, Sepia, Pearl, Dark Blue, Turquoise, Honey Yellow, Palm Leaf.',
                'amount' => '82',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ],
            [
                'category_id' => 3,
                'name' => 'Bút lông 36 màu Fiber Pen Washable - Nét mảnh nét to',
                'price' => '88000',
                'description' => '- Màu sắc tươi sáng.
                - Có 36 màu khác nhau, thỏa thích sáng tạo
                
                - Việc tự mình vẽ tranh và tô màu giúp cho khả năng tư duy và sự sáng tạo của bé phát triển tốt hơn.
                
                - Bộ bút lông 36 màu Fiber Pen Washable Colokit SWM-C006 chất liệu mực an toàn có thể rửa được, không độc hại, không tạo mùi khó chịu khi sử dụng. An toàn với sức khỏe của bé. Sản phẩm đạt chứng nhận không độc hại, bảo vệ môi trường từ EU và US.
                
                * Đặc biệt: có thể rửa được.',
                'amount' => '62',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ],
            [
                'category_id' => 3,
                'name' => 'Bộ Màu Nước Solid Water Color Cao Cấp 12/18/24/36 Màu',
                'price' => '120000',
                'description' => 'Bộ Màu Nước Solid Water Color Cao Cấp 12/18/24/36 Màu - Tặng Kèm 2 Bút Nước, 2 Mút, 1 Palette - Chuyên Dùng Cho Học Sinh, Sinh Viên, Vẽ Chuyên Nghiệp - Hàng Chính Hãng - VinBuy

                * Lưu ý : -  Bộ 12 màu : Chỉ tặng kèm 01 bút nước, 1 mút, 1 Palette
                
                               - Bộ 18, 24, 36 màu : Tặng kèm 02 bút nước, 2 mút, 1 Palette',
                'amount' => '41',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ],
            [
                'category_id' => 3,
                'name' => 'Bút màu sáp dầu học sinh hộp nhựa Deli',
                'price' => '52000',
                'description' => 'TÍNH NĂNG SẢN PHẨM:

                ️Sản phẩm được lựa chọn và tin dùng bởi khách hàng học sinh, người làm nghệ thuật.
                
                ️Sản phẩm có thiết kế vừa tay, giúp cầm nắm và tô màu dễ dàng, dễ mang theo.
                
                ️Chất liệu an toàn, có mùi thơm dễ chịu.
                
                ️Có thể rửa bằng nước.
                
                ️Màu sắc tươi sáng mịn màng trên các loại giấy, khó tẩy, lâu phai nhờ đó các tác phẩm của bé sẽ trở nên sống động và bất mắt hơn
                
                ️Bút sáp Deli có mực ra đều màu, phản quang tốt giúp màu sắc tươi sáng hơn, nhờ đó các tác phẩm của bé trở nên thật sinh động, bắt mắt.
                
                Dầu sáp dầu mềm, có thể chồng màu và phối hợp các màu dễ hơn so với bút sáp màu.
                
                **Lưu ý:
                
                Do khả năng chồng màu của sáp dầu cao nên sẽ có thể có độ bám dính tay cao. Người dùng lưu ý mặc đồ tối màu / áo tạp dề bảo hộ để tránh lưu lại vào áo. -> Nếu sản phẩm bám vào da hoặc quần áo, người dùng có thể dễ dàng rửa sạch bằng xà phòng thường.
                
                Tính chất của màu sáp dầu mềm và dễ gãy khi va đạp mạnh. Tuy nhiên sẽ không ảnh hưởng tới sắc tố màu khi bị va đập.
                
                THÔNG TIN SẢN PHẨM:
                
                Tên sản phẩm: Cốc bút sáp màu
                
                Mã sản phẩm: 72090/ 72091/ 72092
                
                Phân loại sản phẩm: 12 / 18 / 24 màu',
                'amount' => '14',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ],
            [
                'category_id' => 3,
                'name' => 'Bút sáp nến Deli',
                'price' => '30000',
                'description' => 'BÚT SÁP NẾN DELI

                TÍNH NĂNG SẢN PHẨM:
                ️Thiết kế đẹp mắt
                ️Sản phẩm có thiết kế vừa tay, giúp cầm nắm và tô màu dễ dàng, dễ mang theo
                ️Chất liệu an toàn, có mùi thơm dễ chịu
                ️Màu sắc tươi sáng mịn màng trên các loại giấy, khó tẩy, lâu phai
                ️Bút sáp Deli có mực ra đều màu, phản quang tốt giúp màu sắc tươi sáng hơn
                
                THÔNG TIN SẢN PHẨM:
                Tên sản phẩm: Bút sáp nến Deli
                Mã sản phẩm: EC20800/EC20810/EC20820
                Phân loại: 12/18/24 màu',
                'amount' => '36',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ],
            [
                'category_id' => 4,
                'name' => 'Bảng Viết Điện Tử 3d Bảng Vẽ Đa Sắc Dành Cho Bé Tự Xóa Được Thông Minh 12 Inch Màn Hình Lcd Đồ Họa Bút Dạy Học',
                'price' => '104000',
                'description' => 'Bảng Vẽ VikiToys Điện Tử 3d Bảng Viết Vẽ Đa Sắc Dành Cho Bé Tự Xóa Được Thông Minh 12 Inch Màn Hình Lcd Đồ Họa Bút Dạy Học
                Ưu điểm
                Không có ánh sáng chói, không có ánh sáng xanh, bảo vệ mắt cận thị phù hợp hơn cho trẻ em.
                Trình bày văn bản giống như giấy thực sự chính xác từng tuyệt vời.
                Một cú nhấn để xóa ngay lập tức dấu vết của bức tranh.
                Chữ viết rõ ràng và viết trơn tru rất tiện lợi.
                Nhiều màu sắc khác nhau để bạn lựa chọn, đáp ứng nhu cầu khác nhau của bạn.
                Siêu nhẹ siêu bền được thiết kế để tạo cảm giác giống như viết bằng bút trên giấy.
                Hình ảnh vẫn giữ nguyên bao lâu khi bạn cần và có thể xóa chỉ bằng một nút bấm.
                Tạo lại nhiều lần mà không cần sạc hoặc kết nối.
                Thiết kế nhẹ và di động làm cho nó hoàn hảo để sử dụng tại nhà văn phòng trường học hoặc các mục đích sử dụng khác.
                Thông số kỹ thuật:
                Màn hình: LCD
                Chất liệu: Nhựa ABS
                Màu tùy chọn: Hồng, xanh
                Trọng lượng xấp xỉ. 131g
                Pin (lithium mangan): 3V
                Danh sách gói hàng:
                1 x Bảng viết
                1 x Bút',
                'amount' => '22',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ],
            [
                'category_id' => 4,
                'name' => 'Hộp đựng bút / túi đựng bút đa năng bằng vải cao cấp, nhiều ngăn dành cho HS-SV văn phòng',
                'price' => '150000',
                'description' => 'Hộp bút/ túi bút là sản phẩm không thể thiếu của các bạn học sinh – sinh viên. Với mẫu mã đa dạng, thiết kế tiện dụng và sức chứa LỚN, mẫu hộp bút này là lựa chọn phù hợp với các bạn yêu thích sự đáng yêu và có nhiều bút, dụng cụ hoc tập. Không những thế, sản phẩm còn phù hợp để mỹ phẩm, vật dụng hằng ngày gọn gàng trong túi xách.  
                ƯU ĐIỂM:
                Sức chứa lớn, tiện dụng. Chất liệu chống dơ, chống nước. Màu sắc nhẹ nhàng, đơn giản
                CHI TIẾT SẢN PHẨM:
                
                - Hộp bút có sức chứa LỚN, có thể đựng trên 55 cây bút, thước kẻ 20cm và máy tính bỏ túi, phù hợp với các bạn đam mê sưu tầm bút viết và đồ dùng học tập
                
                - Có 2 ngăn gồm 1 ngăn lớn và 1 ngăn nhỏ phía trước có thể dùng đựng đồ makeup, máy tính, điện thoại
                
                - Khả năng chứa vượt trội giúp bạn sắp xếp đồ dùng hợp lý, tiết kiệm thời gian tìm kiếm vật dụng
                
                - Hộp bút làm từ chất liệu vải màu sắc tinh tế, nhẹ nhàng và đơn giản, chống bám bụi và chống nước.
                
                - Thiết kế quai xách để bạn dễ dàng đem túi đi mọi nơi một cách dễ dàng.
                
                - Khoá kéo được thiết kế tinh tế, kéo mượt mà dễ dàng đóng mở.',
                'amount' => '27',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ],
            [
                'category_id' => 4,
                'name' => 'Combo 12 Đất Sét Tự Khô Nhật An Toàn Nặn Hình Cao Cấp Siêu Nhẹ Dành Cho Bé Làm Butter Slime Trang Trí Gương',
                'price' => '40000',
                'description' => 'Combo 12 Đất Sét Tự Khô Nhật An Toàn Nặn Hình Cao Cấp Siêu Nhẹ Dành Cho Bé Làm Butter Slime Trang Trí Gương
                - Nặn mô hình, tượng làm tiểu cảnh, chibi
                - Làm móc khóa - Trộn với Slime thành Clay Slime, Slime Bơ
                - In dấu tay chân em bé lưu giữ kỷ niệm Softclay nặn hình, làm Butter slime, Đất sét tự khô
                - Noel, hàng trang trí Tết và các dịp lễ khác . . . phục vụ cho công việc học tập, vui chơi và làm đẹp của các bạn trẻ.
                - Màu sắc : nhiều màu, màu sắc rất tươi sáng
                - Tình trạng sản phẩm: 100% hoàn toàn mới
                - Số lượng : 1 bịch đất sét 12 màu, tương đương với 12 gói màu, kèm bộ dụng cụ
                Tính năng:
                - Đất sét sau khi nặn để trong không khí với nhiệt độ thường sau 1 ngày sẽ khô lại, dạng khô mềm như squishy chứ không khô cứng như đất nặn thường.
                - Nặn mô hình, tượng làm tiểu cảnh, chibi, làm nhẫn, làm hoa và nhiều hình dạng khác nhau
                - In dấu tay chân em bé lưu giữ kỷ niệm.
                Thông số kỹ thuật:
                - Nếu đất bị ẩm hoặc nhão quá thì bạn có thể mở túi zip để ngoài nhiệt độ thường cho đất tự khô lại. (Lưu ý kiểm tra thường xuyên để đạt được độ khô mong muốn).
                - Chất liệu: Đất sét.
                - Kích thước: 5.5 x 5.5 x 22.5 (cm)
                - Trọng lượng: 105g.
                Cách chơi:
                - Bước 1: Lau khô tay. Lấy 1 ít đất sét ra và vo lại, lúc này đất sét có thể hơi dính. Khoảng 3 - 4 phút sau đất sét sẽ bắt đầu tự khô lại.
                - Bước 2: Làm tương tự. Bước vò đất sét thành 1 cục tròn hơi tốn thời gian cần sự kiên nhẫn.
                - Bước 3: Khi đất sét đã thành 1 cục tròn, bỏ vào hủ tránh gió. 
                - Bước 4: Nặn hình theo ý thích.',
                'amount' => '90',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ],
            [
                'category_id' => 4,
                'name' => 'Tập Học Sinh Tiki Lan Tỏa Niềm Vui 96 Trang (Lốc 10 Cuốn) - Mẫu Ngẫu Nhiên',
                'price' => '79000',
                'description' => 'Tập Học Sinh Tiki Lan Tỏa Niềm Vui 96 Trang (Lốc 10 Cuốn) - Mẫu Ngẫu Nhiên

                Tập Học Sinh Tiki Lan Tỏa Niềm Vui 96 Trang (Lốc 10 Cuốn) sẽ là sự lựa chọn lý tưởng dành cho các em học sinh trong năm học mới. Tập 96 trang, được làm từ chất liệu giấy Ford trắng đẹp và mịn, giấy có độ trắng tự nhiên, không lóa mắt khi viết, giấy viết không lem. Lốc 10 cuốn  với những hình ảnh về các vùng đất Việt Nam thân yêu sẽ tạo cho các em niềm vui học tập mỗi ngày.
                
                Thông tin sản phẩm
                
                Chất giấy cao cấp
                
                Tập Học Sinh Tiki Lan Tỏa Niềm Vui (Lốc 10 cuốn) được làm từ loại giấy Ford cao cấp với độ trắng đạt 92% ISO, ăn mực tốt với hầu hết các loại bút. Tập học sinh 4 ô ly ngang, to, rõ ràng giúp các em viết chữ dễ dàng hơn.
                
                Tập được đóng chắc chắn
                
                Bìa tập dày, chắc chắn cho hiệu quả bảo quản bền lâu. Gáy tập được đóng chắc chắn với loại ghim tốt nhất. Bạn sẽ có một cuốn tập thật đáng yêu và chất lượng
                
                Lốc 10 cuốn tiện dụng
                
                Lốc Tập Học Sinh Tiki Lan Tỏa Niềm Vui gồm 10 cuốn với hình ảnh đáng yêu, ngộ nghĩnh về 10 vùng miền khác nhau trên đất nước Việt Nam sẽ tạo thêm niềm vui đến trường mỗi ngày cho các em nhỏ.',
                'amount' => '83',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ],
            [
                'category_id' => 4,
                'name' => 'Gọt Chì Mini Deli - Lưỡi Thép Không Gỉ - Hồng/Xanh Dương/Vàng - Màu Ngẫu Nhiên - ER01000 / ER01100',
                'price' => '18000',
                'description' => 'TÍNH NĂNG SẢN PHẨM:
                ️Thiết kế nhỏ gọn dễ dàng cầm, nắm
                ️Lưỡi hợp kim cao cấp vô cùng sắc bén
                ️Được thiết kế với độ chính xác cao để tránh làm gãy ngòi chì
                ️Vỏ trong suốt giúp kiểm soát lượng vụn chì
                
                THÔNG TIN SẢN PHẨM:
                Tên sản phẩm: Gọt chì mini Deli
                Mã sp: ER01000
                Chất liệu: vỏ nhựa ABS, lưỡi thép không gỉ
                Màu sắc: Hồng, Xanh dương, Vàng
                -----------------------------------------------------------------------------------------------
                Tự hào là một trong những nhãn hàng văn phòng phẩm lớn nhất tại Việt Nam, @Delivietnam không ngừng nỗ lực và phát triển trong lĩnh vực phân phối các sản phẩm cho các đơn vị văn phòng, trường học,... Với phương châm sản xuất những sản phẩm chất lượng tốt nhất và luôn đặt khách hàng làm trọng tâm, sứ mệnh của Deli là làm hài hòng người tiêu dùng toàn cầu với những sản phẩm chất lượng cao, độ tin cậy tuyệt đối và thân thiện với người dùng.
                
                Khách hàng lựa chọn các sản phẩm của @Delivietnam sẽ được cam kết:
                Sản phẩm chính hãng từ nhà máy Deli, nguồn gốc rõ ràng và chất lượng đạt tiêu chuẩn.
                Bảo hành theo quy định của nhà sản xuất.
                Giá cả hợp lý, cạnh tranh, rẻ nhất thị trường.
                Hỗ trợ đổi trả hàng cho những sản phẩm bị thiếu.',
                'amount' => '5',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ],
            [
                'category_id' => 4,
                'name' => 'Bộ thước kẻ, thước đo độ, eke học sinh - Bộ dụng cụ học tập 4 chiếc - 79529',
                'price' => '15000',
                'description' => 'TÍNH NĂNG SẢN PHẨM:
                ️Túi kéo khoá PVC trong suốt, tiện lợi khi mang theo
                ️Thước đo bán trong suốt, giúp việc đo chính xác hơn
                
                THÔNG TIN SẢN PHẨM:
                Tên sản phẩm: Hộp 4 dụng cụ đo Deli
                Mã sản phẩm: 79529
                Quy cách đóng gói: Túi kéo zip
                Sản phẩm bao gồm:
                1 Thước kẻ
                1 Thước đo độ
                2 Thước eke
                ------------------------------------------------------------------------------------------------------------------
                Tự hào là một trong những nhãn hàng văn phòng phẩm lớn nhất tại Việt Nam, @Delivietnam không ngừng nỗ lực và phát triển trong lĩnh vực phân phối các sản phẩm cho các đơn vị văn phòng, trường học,... Với phương châm sản xuất những sản phẩm chất lượng tốt nhất và luôn đặt khách hàng làm trọng tâm, sứ mệnh của Deli là làm hài hòng người tiêu dùng toàn cầu với những sản phẩm chất lượng cao, độ tin cậy tuyệt đối và thân thiện với người dùng.
                
                Khách hàng lựa chọn các sản phẩm của @Delivietnam sẽ được cam kết:
                Sản phẩm chính hãng từ nhà máy Deli, nguồn gốc rõ ràng và chất lượng đạt tiêu chuẩn.
                Bảo hành theo quy định của nhà sản xuất.
                Giá cả hợp lý, cạnh tranh, rẻ nhất thị trường.
                Hỗ trợ đổi trả hàng cho những sản phẩm bị thiếu.',
                'amount' => '58',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ],
            [
                'category_id' => 4,
                'name' => 'Gọt bút chì mini Deli - Màu ngẫu nhiên - E0594',
                'price' => '12000',
                'description' => 'TÍNH NĂNG SẢN PHẨM:
                ️Chất liệu ABS cho thời gian dài sử dụng
                ️Kích thước mini cầm tay để dễ sử dụng và mang theo
                ️Lưỡi dao sắc bén để đảm bảo độ mài sắc
                ️Vị trí lưỡi cắt chính xác để đảm bảo mài sắc và dễ dàng
                ️Lưỡi dao sắc bén để đảm bảo độ mịn
                
                THÔNG TIN SẢN PHẨM:
                Tên sản phẩm: Gọt chì mini Deli
                Mã sản phẩm: E0594
                Màu sắc: Hồng/ Cam/ Xanh dương/ Xanh lá
                Chất liệu: phủ ABS, lưỡi dao hợp kim kẽm + thép không gỉ
                -------------------------------------------------------------------------------------------------------------
                Tự hào là một trong những nhãn hàng văn phòng phẩm lớn nhất tại Việt Nam, @Delivietnam không ngừng nỗ lực và phát triển trong lĩnh vực phân phối các sản phẩm cho các đơn vị văn phòng, trường học,... Với phương châm sản xuất những sản phẩm chất lượng tốt nhất và luôn đặt khách hàng làm trọng tâm, sứ mệnh của Deli là làm hài hòng người tiêu dùng toàn cầu với những sản phẩm chất lượng cao, độ tin cậy tuyệt đối và thân thiện với người dùng.
                
                Khách hàng lựa chọn các sản phẩm của @Delivietnam sẽ được cam kết:
                Sản phẩm chính hãng từ nhà máy Deli, nguồn gốc rõ ràng và chất lượng đạt tiêu chuẩn.
                Bảo hành theo quy định của nhà sản xuất.
                Giá cả hợp lý, cạnh tranh, rẻ nhất thị trường.
                Hỗ trợ đổi trả hàng cho những sản phẩm bị thiếu.',
                'amount' => '42',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ],
            [
                'category_id' => 4,
                'name' => 'Vở Vẽ Học Sinh A4 Deli 20 Trang - Màu Hồng/Xanh - 1 Quyển - 73382',
                'price' => '35000',
                'description' => 'TÍNH NĂNG SẢN PHẨM:
                ️Vở vẽ được thiết kế theo phong cách mới, độc đáo, khác biệt, phù hợp với học sinh, sinh viên yêu thích hội họa, vẽ tranh.
                ️Giấy vẽ khổ A4 có độ chống lóa mắt so với các loại giấy thông thường.
                
                THÔNG TIN SẢN PHẨM:
                Tên sản phẩm: Vở vẽ học sinh
                Mã sản phẩm: 73382
                Màu sắc: Xanh/ Hồng
                Kích thước: A4
                Số lượng: 20 trang / 1 quyển
                ----------------------------------------------------------------------------------------------------------------------
                
                Tự hào là một trong những nhãn hàng văn phòng phẩm lớn nhất tại Việt Nam, @Delivietnam không ngừng nỗ lực và phát triển trong lĩnh vực phân phối các sản phẩm cho các đơn vị văn phòng, trường học,... Với phương châm sản xuất những sản phẩm chất lượng tốt nhất và luôn đặt khách hàng làm trọng tâm, sứ mệnh của Deli là làm hài hòng người tiêu dùng toàn cầu với những sản phẩm chất lượng cao, độ tin cậy tuyệt đối và thân thiện với người dùng.
                
                Khách hàng lựa chọn các sản phẩm của @Delivietnam sẽ được cam kết:
                Sản phẩm chính hãng từ nhà máy Deli, nguồn gốc rõ ràng và chất lượng đạt tiêu chuẩn.
                Bảo hành theo quy định của nhà sản xuất.
                Giá cả hợp lý, cạnh tranh, rẻ nhất thị trường.
                Hỗ trợ đổi trả hàng cho những sản phẩm bị thiếu.',
                'amount' => '6',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ],
            [
                'category_id' => 5,
                'name' => 'FLASHCARD PHONETICS - Nhớ dễ dàng những con số',
                'price' => '250000',
                'description' => 'Một trong những phương pháp được các nhà Kỷ gia siêu trí nhớ và các Siêu trí tuệ Việt Nam sử dụng để luyện tập kĩ năng ghi nhớ chính xác hàng dãy số dài mà không sai sót đó là phương pháp CHỮ CÁI QUY ƯỚC.
                Flashcard 100 số - Phonetics là bộ thẻ quy ước các con số sang hình ảnh của chữ cái giúp chúng ta có cơ sở dữ liệu để ghi nhớ các kiến thức một cách dễ dàng.
                
                Theo khoa học, não bộ con người có khả năng ghi nhớ hình ảnh tốt hơn và lâu hơn rất nhiều so với nhớ chữ số và thông tin số. Flashcard được sáng tạo nhờ vào việc quy ước chữ cái dựa trên âm đầu của từ để tạo ra hình ảnh cho những con số, từ đó nhớ các số dựa trên các hình ảnh liên quan.
                
                
                Bộ Flashcard 100 số Phonetics do Kỷ lục gia Siêu trí nhớ Thế giới Nguyễn Phùng Phong (Huân chương giáo dục Người đồng hành Thiên nga trắng - Hoàng gia Ba Lan) xây dựng:
                - Công cụ luyện tập gối đầu giường của các Siêu trí tuệ.
                - Nắm bắt kĩ thuật ghi nhớ hiệu quả bằng cách mã hóa con số thành chữ cái.
                - Kích hoạt não bộ phát triển, nhanh nhạy, sáng tạo.',
                'amount' => '8',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ],
            [
                'category_id' => 5,
                'name' => 'Thẻ Flashcard Glenn Doman Cho Bé',
                'price' => '499000',
                'description' => 'NXB: NXB Lao Động
                Độ tuổi áp dụng: 0 – 6 tuổi
                Kích thước: thẻ A5 (21cm x 15cm)
                Số lượng: 300 thẻ
                Sản phẩm thế giới xung quanh Glenn Doman
                Flashcard Dạy Trẻ Thế Giới Xung Quanh Glenn Doman 300 thẻ, nằm trong lộ trình học chuyên sâu. Bộ thẻ được thiết chuẩn theo phương pháp Glenn Doman Hoa Kỳ. Mặt trước của thẻ là hình ảnh trực quan sinh động, mặt sau là 10 bit thông tin bổ sung ý nghĩa cho hình ảnh. Cung cấp cho trẻ những tri thức bách khoa về thế giới quan, từ đó kích thích niềm say mê học hỏi và tìm tòi khám phá của trẻ.',
                'amount' => '52',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ],
            [
                'category_id' => 5,
                'name' => 'Flashcard Tiếng Trung - Thẻ Học Từ Vựng Tiếng Trung',
                'price' => '199000',
                'description' => 'CHI TIẾT FLASHCARD TỪ VỰNG 1+2
                Tên sản phẩm: Flashcard - Flashcard Tiếng Trung - Thẻ Học Từ Vựng Tiếng Trung - Phạm Dương Châu (Phiên bản có hình ảnh)
                Tác giả: Phạm Dương Châu
                Thương hiệu: Dương Châu
                Công dụng: Bộ thẻ cầm tay giúp nhớ nhanh từ vựng tiếng Trung theo phương pháp học từ vựng với 214 bộ thủ tiếng Hán.
                
                ĐẶC ĐIỂM FLASHCARD TỪ VỰNG 3+4
                → Gồm: 6 cọc thẻ, khoảng 400 từ vựng tiếng Trung từ cơ bản tới nâng cao.
                → Phiên bản mới có hình và in màu sắc → kích thích não bộ ghi nhớ và hứng thú học tập
                → Nhỏ gọn tiện lợi mang theo, học mọi lúc mọi nơi mà không phụ thuộc vào smartphone, không cần mang theo sách vở.',
                'amount' => '15',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ],
            [
                'category_id' => 5,
                'name' => 'Bộ Thẻ Học Thông Minh Glenn Doman',
                'price' => '480000',
                'description' => 'Dạy Trẻ Thế Giới Xung Quanh” cung cấp một chương trình về thông tin kích thích thị giác được thiết kế nhằm giúp con bạn khai thác tiềm năng tự nhiên để học bất kỳ thứ gì. Bạn sẽ thấy thật dễ dàng và vui thú ra sao khi dạy cho con bạn biết về nghệ thuật, khoa học tự nhiên. Con bạn sẽ nhận biết được sâu bọ trong vườn, biết về các quốc gia trên thế giới, khám phá được vẻ đẹp của các bức tranh của Van Gogh và nhiều thứ khác.

                Hãy giúp trẻ phát triển một cách đầy đủ hơn khả năng của trẻ. Hãy cho con đứng trên đôi vai của chính bạn, hãy cho trẻ xuất phát điểm từ những hiểu biết của bạn, hãy trao cho con khả năng học hỏi ngay từ khi con được sinh ra. Chúc bạn sẽ thành công với phương pháp của Glenn Doman – phương pháp đã được hầu như tất cả các bà mẹ Mỹ đã thực hành.',
                'amount' => '73',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ],
            [
                'category_id' => 5,
                'name' => 'Bộ Thẻ học Thông minh - 416 Thẻ Flashcards Tiếng Anh',
                'price' => '68000',
                'description' => 'Với những ưu việt trong thiết kế và cách dạy, Bộ Thẻ học Thông minh 16 chủ đề theo định hướng Giáo dục sớm Glenn Doman đã được chứng minh mang đến nhiều lợi ích trong việc giáo dục các bé như:

                Phát triển toàn diện tư duy cả về ngôn ngữ lẫn trí tưởng tượng
                
                Phát triển trí nhớ bao gồm cả trí nhớ ngắn hạn và dài hạn
                
                Giúp bé tiếp cận và hòa đồng với môi trường thế giới xung quanh
                
                Giúp bé được làm quen và vui chơi cùng Toán học.
                
                Hoàn thiện và phát triển cả IQ và EQ của bé',
                'amount' => '20',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ],
            [
                'category_id' => 5,
                'name' => 'FLASHCARD SachID Moon',
                'price' => '50000',
                'description' => 'Kích thước: 72x72mm

                Số trang: 70 trang
                
                Sản phẩm độc quyền thuộc Moon
                
                1. Sử dụng cả hai mặt của flashcard một cách hợp lý, xem cả hai mặt nhiều lần để nhớ thông tin.
                
                2. Không đưa quá nhiều thông tin vào 1 tấm flashcard.
                
                3. Sử dụng minh họa.
                
                4. Luôn mang flashcard bên mình.
                
                5. Thay đổi thứ tự các tấm flashcard.
                
                6. Đánh dấu flashcard.',
                'amount' => '69',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ],
            [
                'category_id' => 5,
                'name' => 'GDKids - Dạy Trẻ Học Toán Glenn Doman',
                'price' => '300000',
                'description' => 'NXB: NXB Thanh niên
                Độ tuổI: 0-6 tuổi
                Khối lượng: 1kg
                Kích thước: 21cm x 21cm
                Sản Phẩm Dạy Trẻ Học Toán Glenn Doman
                Dotcard Dạy Trẻ học Toán Glenn Doman 59 thẻ, được thiết kế theo chương trình cơ bản, có mặt trước là chấm tròn đỏ, mặt sau là chữ số tương ứng. Bộ thẻ được thiết kế theo phương pháp Glenn Doman chuẩn Hoa Kỳ. Thông qua cách tráo thẻ nhanh 1 giây/thẻ, bộ thẻ Toán Dot 59 thẻ giúp bé phát triển tư duy logic, khả năng phân tích và xử lý thông tin cực kỳ thông minh bằng não phải.',
                'amount' => '42',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ],
            [
                'category_id' => 5,
                'name' => 'Flashcard - Combo Flashcard Tiếng Trung 12 và 34 - Từ Vựng HSK 4 - Học Tiếng Trung Qua Bộ Thủ Và Hình Ảnh',
                'price' => '349000',
                'description' => 'Combo Flashcard Tiếng Trung 12 và 34 - Phiên Bản Có Hình Ảnh - Phạm Dương Châu

                Công dụng:
                
                Bộ thẻ cầm tay giúp nhớ nhanh từ vựng tiếng Trung theo phương pháp học từ vựng với 214 bộ thủ tiếng Hán tương đương HSK 4
                
                
                ĐẶC ĐIỂM SẢN PHẨM
                
                → Gồm:
                Bộ 12: 6 cọc thẻ, hơn 400 từ vựng tiếng Trung từ cơ bản tới nâng cao.
                Bộ 34: 8 cọc thẻ, hơn 1000 từ vựng tiếng Trung từ mức độ trung cấp (bộ tiếp nối của bộ 12)
                → Phiên bản mới có hình và in màu sắc → kích thích não bộ ghi nhớ và hứng thú học tập
                → Nhỏ gọn tiện lợi mang theo, học mọi lúc mọi nơi mà không phụ thuộc vào smartphone, không cần mang theo sách vở.',
                'amount' => '81',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ],
            [
                'category_id' => 6,
                'name' => 'Sổ tay bìa Da PU A5 ghi chép 360 trang mẫu hươu sang trọng Tặng kèm bút viết',
                'price' => '65000',
                'description' => 'LALUNAVN giới thiệu các bạn thêm 1 mẫu sổ ghi chép nhìn sang trọng lịch sự xịn xò luôn nè các bạn uii, làm quà tặng sinh nhật, hay ghi chép thông tin bao sang chảnh luôn nè

                Sổ tay ghi chép Mẫu Hươu Sống Động Sang Trọng.
                
                Sổ Tay Bìa Da A5 / 360 Trang
                Gói hàng bao gồm: 1 Sổ tay chất lượng cao ( KHÔNG BAO GỒM BÚT ĐI KÈM )
                
                Sổ tay ghi chép giúp bạn có thể vẽ, viết,
                
                Sổ tay ghi chép có nhiều màu cho bạn yêu lựa chọn thoải mái
                
                Sổ tay ghi chép kích thước : 14.5* 21 cm
                
                Sổ tay ghi chép số trang: 180 tờ/ 360 trang
                
                Sổ tay ghi chép với chất lượng vượt trội, thẩm mỹ cao
                
                Chất lượng giấy có 2 phân loại là 80GSM cơ bản và loại 100GSM nâng cao dày dặn hơn , viết calligraphy , bullet, thư pháp , bút nước , marker rất ít thấm ra mặt sau
                
                Trọng lượng 1 cuốn sổ da PU 80GSM là 500g
                
                Trong lượng 1 cuốn sổ da PU 100GSM là 600G
                
                Chất lượng da PU mềm chất lượng cao, họa tiết tinh tế tạo cảm giác thoải mái khi chạm vào
                
                Sổ da giấy chất lượng cao, tạo cảm giác thoải mái khi viết .Giấy bảo vệ thị lực, viết êm không lem mực
                
                Sổ da có ruy băng dấu trang dễ tìm kiếm thông tin',
                'amount' => '16',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ],
            [
                'category_id' => 6,
                'name' => 'Bìa sổ tay bìa nhựa / Bìa gáy còng có thể thay lõi, ruột sổ nhiều size A5-B5-A4',
                'price' => '50000',
                'description' => 'BÌA SỔ TAY NHỰA / BÌA GÁY CÒNG CÓ THỂ THAY THẾ GIẤY - KHÔNG KÈM RUỘT SỔ
                Để giúp việc ghi chép trở nên dễ dàng và hiệu quả hơn, các mẫu sổ gáy còng đã ra đời. Việc sử dụng các mẫu sổ có thể thay thế ruột sổ giúp người dùng vừa có thể thuận tiện trong việc sử dụng (thay các loại giấy khác nhau, thay mới, thêm/bớt giấy…) cũng như tiết kiệm chi phí.
                Bìa gáy còng/ sổ gáy còng là sản phẩm giúp ích cho việc tiết kiệm chi phí không chỉ của học sinh- sinh viên mà còn của nhân viên văn phòng, người đi làm.
                ------------------------------------------------------------------------------------------
                ƯU ĐIỂM:
                Sổ có nhiều size, nhiều màu.
                Bìa nhựa dẻo, chống nước
                Còng kim loại chắc chắn
                Kích thước	A5 – B5- A4
                Màu sắc 	Nhiều màu
                Chất liệu	Bìa nhựa PP  
                Xuất xứ 	Trung Quốc
                Bìa nhựa còng/ sổ gáy còng có nhiều kích thước tuỳ vào nhu cầu sử dụng
                A5 - 20 lỗ
                B5 - 26 lỗ
                A4 - 30 lỗ
                Bìa nhựa dẻo, dễ dàng bỏ túi khi mang theo và không thấm nước. Tuy nhiên, vẫn cứng cáp, giữ hình thức sổ.
                Gáy còng nhựa được làm bằng chất liệu cao cấp, cứng cáp. Có thể dễ dàng đóng mở để thay thế giấy bên trong.
                Thiết kế rảnh nhỏ trên bìa sổ giúp cố định dây buộc, thuận tiện cho việc mang theo.
                Thiết kế gáy còng có thể thay thế, thêm, bớt giấy trong quá trình sử dụng',
                'amount' => '86',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ],
            [
                'category_id' => 6,
                'name' => 'Sổ Tay Classic Notebook - Ruột Sổ Chấm Bi | FURIIN',
                'price' => '11000',
                'description' => 'Classic Notebook là một dòng sổ tay đặc trưng do FURIIN sản xuất. Sản phẩm được thiết kế tối giản, tập trung vào công năng cũng như trải nghiệm người dùng.
                Sổ tay FURIIN có khả năng giở phẳng 180 độ, ruột sổ chất giấy mỹ thuật Premium Ivory định lượng 100 GSM giúp bạn dễ dàng sử dụng với nhiều loại bút và mực khác nhau. Bìa mềm giấy mỹ thuật nhập khẩu giúp gia tăng khả năng sử dụng cũng như độ thẩm mỹ.',
                'amount' => '63',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ],
            [
                'category_id' => 6,
                'name' => 'Sổ tay ghi chép da PU đen sang trọng thanh lịch hội nghị 224 trang giấy 80gsm - B109',
                'price' => '50000',
                'description' => 'Chất lượng da PU mềm chất lượng cao, họa tiết tinh tế tạo cảm giác thoải mái khi chạm vào
                Sổ da giấy chất lượng cao, tạo cảm giác thoải mái khi viết .Giấy bảo vệ thị lực, viết êm không lem mực
                Sổ da có ruy băng dấu trang dễ tìm kiếm thông tin
                Có 2 loại A5 : 140mm x 206mm 32K :126mm x 187mm',
                'amount' => '61',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ],
            [
                'category_id' => 6,
                'name' => 'Sổ tay ghi chép phong cách vintage',
                'price' => '79000',
                'description' => 'Sổ tay ghi chép phong cách vintage

                Mô tả chi tiết sản phẩm
                
                Sổ tay vintage tạo cảm giác mới lạ và vô cùng chất lượng. Chú trọng phong cách vintage nên giúp quyển sổ tay trở nên sang trọng và đặc biệt hơn. Thích hợp để bạn sử dụng làm sổ tay ghi chép, nhật ký, du lịch hoặc làm quà tặng cho những người thân yêu, đồng nghiệp, sếp, đối tác,để thể hiện sự trang trọng.
                
                Kích thước: 15x21.8cm
                
                Số trang: 200 trang
                
                Chất liệu: dầy dặn, không lem mực trang sau khi sử dụng bút bi, bút mưc, bút gel hay thậm chí là bút mức nhẹ, mịn chống lóa , chống mỏi mắt khi sử sựng lâu dài
                
                Ruột Mix : kẻ ngang và trơn',
                'amount' => '5',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ],
            [
                'category_id' => 6,
                'name' => 'Sổ tay ghi chép A5 gáy xoắn 60 trang Deli - Kẻ ngang - Màu ngẫu nhiên - LA560',
                'price' => '35000',
                'description' => 'SỔ TAY GHI CHÉP A5 GÁY XOẮN 60 TRANG DELI
                TÍNH NĂNG SẢN PHẨM:
                Sổ được làm bằng chất liệu chống lóa, bảo vệ cho đôi mắt của bạn
                ️Giấy kẻ ngang thuận tiện cho việc ghi chép thông tin
                ️Sổ bìa có các màu cổ điển, trang trọng
                THÔNG TIN SẢN PHẨM:
                
                Tên sản phẩm: Sổ tay ghi chép A5 gáy xoắn
                Số trang: 60 trang Deli
                Mã sản phẩm: LA560-01
                Kích thước 210x148mm
                Trọng lượng giấy: 70g
                Giấy kẻ ngang
                ----------------------------------------------------------------------------------------------------
                
                Tự hào là một trong những nhãn hàng văn phòng phẩm lớn nhất tại Việt Nam, @Delivietnam không ngừng nỗ lực và phát triển trong lĩnh vực phân phối các sản phẩm cho các đơn vị văn phòng, trường học,... Với phương châm sản xuất những sản phẩm chất lượng tốt nhất và luôn đặt khách hàng làm trọng tâm, sứ mệnh của Deli là làm hài hòng người tiêu dùng toàn cầu với những sản phẩm chất lượng cao, độ tin cậy tuyệt đối và thân thiện với người dùng.
                
                Khách hàng lựa chọn các sản phẩm của @Delivietnam sẽ được cam kết:
                
                Sản phẩm chính hãng từ nhà máy Deli, nguồn gốc rõ ràng và chất lượng đạt tiêu chuẩn.',
                'amount' => '27',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ],
            [
                'category_id' => 6,
                'name' => 'Sổ tay ghi chép / sổ lò xo ghi chép A5 - B5 - A4 160 trang – giấy kẻ ngang – giấy ô vuông',
                'price' => '65000',
                'description' => 'Sổ ghi chép là sản phẩm được sử dụng hằng ngày không chỉ của học sinh- sinh viên mà còn của nhân viên văn phòng, người đi làm. Để giúp việc ghi chép trở nên dễ dàng và hiệu quả hơn, các mẫu sổ gáy lò xo đã ra đời.
                ƯU ĐIỂM:
                Sổ có nhiều size, nhiều màu và loại giấy cho nhiều mục đích sử dụng
                Giấy có màu trắng be tự nhiên, dày dặn
                Bìa nhựa dẻo, chống nước
                Kích thước
                A5 – B5- A4
                Màu sắc
                5 màu (xanh lá, đỏ, kem, nâu, trăng trong
                Định lượng giấy
                80gsm
                Số tờ
                80 tờ
                160 trang
                Xuất xứ
                Trung Quốc
                Giấy được in bằng công nghệ offset. Giấy được sử dụng là giấy trắng be tự nhiên dịu nhẹ cho mắt, dày dặn chống thấm mực.
                Có 3 mẫu giấy: Giấy chấm (dot), giấy kẻ ngang dòng 8mm và giấy ô vuông cạnh 5mm
                Bìa nhựa dẻo, dễ dàng bỏ túi khi mang theo và không thấm nước. Tuy nhiên, vẫn cứng cáp, giữ hình thức sổ.
                Bìa sổ có màu theo phong cách cổ điển
                Gáy lò xo / xoắn được làm bằng chất liệu cao cấp, cứng cáp, chịu va đập, chống gỉ sét. Thiết kế cuộn đôi 180 độ dễ dàng lật mở và chứa được nhiều giấy',
                'amount' => '47',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ],
            [
                'category_id' => 6,
                'name' => 'Sổ tay ghi chép lò xo màu pastel Deli - Giấy kẻ ngang 80 trang khổ A5 / B5 - Phù hợp làm sổ kế hoạch, sổ nhật kí, tập vở ghi chép - 24202 / 24203',
                'price' => '39000',
                'description' => 'Sổ tay ghi chép lò xo màu pastel Deli 24202 /24203 phù hợp làm sổ kế hoạch, sổ nhật kí, tập vở ghi chép được thiết kế các màu tông pastel nhẹ nhàng, đơn giản.
                Cuốn sổ thích hợp dùng cho học sinh, sinh viên, nhân viên văn phòng để phục vụ công việc học tập hàng ngày.
                ️Gáy xoắn tiện lợi, có thể xoay được các trang. Có thể gập lại mà không để lại nếp gấp, đồng thời có thể xé rời các trang bên trong khi cần rất tiện lợi.
                Sổ có tới 80 trang với kích cỡ khổ giấy phù hợp, dòng kẻ rõ ràng, cho bạn thỏa sức ghi chép.
                ️Giấy chất lượng tốt, không lóa mắt giúp bảo vệ mắt người dùng, phù hợp để viết và vẽ rất dễ dàng. Mặt giấy láng, dày, thấm mực và nhanh khô.
                Kích thước: A5: 210x148mm / B5: 252x179mm',
                'amount' => '85',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ],
        ]);
    }
}
