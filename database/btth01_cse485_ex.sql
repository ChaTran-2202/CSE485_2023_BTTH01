/*a. Liệt kê các bài viết về các bài hát thuộc thể loại Nhạc trữ tình*/
SELECT
    baiviet.*
FROM
    baiviet
INNER JOIN theloai ON baiviet.ma_tloai = theloai.ma_tloai
WHERE
    theloai.ten_tloai = "Nhạc trữ tình";

    /*b. Liệt kê các bài viết của tác giả “Nhacvietplus”*/
SELECT
    baiviet.*
FROM
    baiviet
INNER JOIN tacgia ON baiviet.ma_tgia = tacgia.ma_tgia
WHERE
    tacgia.ten_tgia = "Nhacvietplus";

    /*c. Liệt kê các thể loại nhạc chưa có bài viết cảm nhận nào*/
SELECT
    theloai.ten_tloai
FROM
    theloai
WHERE NOT
    EXISTS(
    SELECT
        *
    FROM
        baiviet
    WHERE
        theloai.ma_tloai = baiviet.ma_tloai
);

/*d. Liệt kê các bài viết với các thông tin sau: mã bài viết, tên bài viết, tên bài hát, tên tác giả, tên thể loại, ngày viết.*/
SELECT
    ma_bviet,
    tieude,
    ten_bhat,
    ten_tgia,
    ten_tloai,
    ngayviet
FROM
    baiviet
LEFT JOIN tacgia ON baiviet.ma_tgia = tacgia.ma_tgia
LEFT JOIN theloai ON baiviet.ma_tloai = theloai.ma_tloai;

    /*e. Tìm thể loại có số bài viết nhiều nhất*/
SELECT
    theloai.ten_tloai,
    COUNT(baiviet.ma_tloai) AS soluong_tloai
FROM
    theloai
JOIN baiviet ON theloai.ma_tloai = baiviet.ma_tloai
GROUP BY
    baiviet.ma_tloai
HAVING
    soluong_tloai >= ALL(
    SELECT
        COUNT(baiviet.ma_tloai)
    FROM
        baiviet
    GROUP BY
        baiviet.ma_tloai
);

/*f. Liệt kê 2 tác giả có số bài viết nhiều nhất*/
CREATE TEMPORARY TABLE groupmatg AS SELECT
    ma_tgia,
    COUNT(*) AS so_bai_viet
FROM
    baiviet
GROUP BY
    ma_tgia;

SELECT
    tacgia.ten_tgia,
    groupmatg.so_bai_viet
FROM
    tacgia
INNER JOIN groupmatg ON tacgia.ma_tgia = groupmatg.ma_tgia
WHERE
    so_bai_viet IN(
    SELECT
        MAX(so_bai_viet)
    FROM
        groupmatg
    UNION
SELECT
    MAX(so_bai_viet)
FROM
    groupmatg
WHERE
    so_bai_viet <(
    SELECT
        MAX(so_bai_viet)
    FROM
        groupmatg
)
);

/*g. Liệt kê các bài viết về các bài hát có tựa bài hát chứa 1 trong các từ “yêu”, “thương”, “anh”, “em”*/
SELECT
    *
FROM
    baiviet
WHERE
    ten_bhat LIKE "%yêu%" OR ten_bhat LIKE "%thương%" OR ten_bhat LIKE "%anh%" OR ten_bhat LIKE "%em%";

    /*h. Liệt kê các bài viết về các bài hát có tiêu đề bài viết hoặc tựa bài hát chứa 1 trong các từ “yêu”, “thương”, “anh”, “em”*/
SELECT
    *
FROM
    baiviet
WHERE
    ten_bhat LIKE "%yêu%" OR ten_bhat LIKE "%thương%" OR ten_bhat LIKE "%anh%" OR ten_bhat LIKE "%em%" OR tieude LIKE "%yêu%" OR tieude LIKE "%thương%" OR tieude LIKE "%anh%" OR tieude LIKE "%em%";

    /*i. Tạo layout vw_Music hiển thị thông tin Danh sách bài viết + tên thể loại + tên tác giả*/
    /* View: bảng ảo, không chứa dữ liệu về mặt vật lí. Bản chất là 1 đoạn mã SQL được lưu vào server CSDL. Giúp dễ dàng truy vấn, tăng lớp bảo mật (các bảng với dữ liệu bảo mật sẽ không được truy vấn trực tiếp mà chỉ có những dữ liệu xác định được tuồn qua layout mà thôi)*/
CREATE VIEW vw_Music AS SELECT
    ma_bviet,
    tieude,
    ten_tloai,
    ten_tgia
FROM
    baiviet
LEFT JOIN tacgia ON baiviet.ma_tgia = tacgia.ma_tgia
LEFT JOIN theloai ON baiviet.ma_tloai = theloai.ma_tloai;

    /*j. Tạo 1 thủ tục có tên sp_DSBaiViet với tham số truyền vào là Tên thể loại và trả về danh sách Bài viết của thể loại đó. Nếu thể loại không tồn tại thì hiển thị thông báo lỗi*/
DROP
PROCEDURE `sp_DSBaiViet`;
CREATE DEFINER = `root`@`localhost` PROCEDURE `sp_DSBaiViet`(
    IN `ten_tloai` VARCHAR(50) CHARSET utf8
) NOT DETERMINISTIC CONTAINS SQL SQL SECURITY DEFINER
SELECT
    ten_tloai,
    ma_bviet,
    tieude
FROM
    baiviet
JOIN theloai ON baiviet.ma_tloai = theloai.ma_tloai AND theloai.ten_tloai = ten_tloai;

    /*k. Tạo trigger tg_CapNhatTheLoai để khi thêm/sửa/xóa bài viết thì số lượng bài viết trong bảng theloai được cập nhật theo*/
    /*Trigger: Dùng để kiểm tra tính dàng buộc, ngăn chặn thao tác xóa các dữ liệu quan trọng hoặc được tận dụng để có các hàm chạy ngầm.*/
ALTER TABLE theloai ADD SLBaiViet INT;
    /*Tạo bảng Users*/
CREATE TABLE `btth01_cse485`.`users` (`ma_user` INT NOT NULL AUTO_INCREMENT , `name` VARCHAR(200) NOT NULL , `pass` VARCHAR(200) NOT NULL , `phanloai` BOOLEAN NOT NULL , PRIMARY KEY (`ma_user`)) ENGINE = InnoDB;