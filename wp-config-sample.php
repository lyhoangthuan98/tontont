<?php
/**
 * Cấu hình cơ bản cho WordPress
 *
 * Trong quá trình cài đặt, file "wp-config.php" sẽ được tạo dựa trên nội dung 
 * mẫu của file này. Bạn không bắt buộc phải sử dụng giao diện web để cài đặt, 
 * chỉ cần lưu file này lại với tên "wp-config.php" và điền các thông tin cần thiết.
 *
 * File này chứa các thiết lập sau:
 *
 * * Thiết lập MySQL
 * * Các khóa bí mật
 * * Tiền tố cho các bảng database
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** Thiết lập MySQL - Bạn có thể lấy các thông tin này từ host/server ** //
/** Tên database MySQL */
define('DB_NAME', 'uirl8kbn44j1r8ym	');

/** Username của database */
define('DB_USER', 'di1ktdy1swgd6x6g');

/** Mật khẩu của database */
define('DB_PASSWORD', 'ig9d0frwo79vv5gw');

/** Hostname của database */
define('DB_HOST', 'u615qyjzybll9lrm.chr7pe7iynqr.eu-west-1.rds.amazonaws.com');

/** Database charset sử dụng để tạo bảng database. */
define('DB_CHARSET', 'utf8');

/** Kiểu database collate. Đừng thay đổi nếu không hiểu rõ. */
define('DB_COLLATE', '');

/**#@+
 * Khóa xác thực và salt.
 *
 * Thay đổi các giá trị dưới đây thành các khóa không trùng nhau!
 * Bạn có thể tạo ra các khóa này bằng công cụ
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * Bạn có thể thay đổi chúng bất cứ lúc nào để vô hiệu hóa tất cả
 * các cookie hiện có. Điều này sẽ buộc tất cả người dùng phải đăng nhập lại.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '4=m5kk?M^`Q_ub<0.hK|m|0B|q{n|A4?,t|rVL>{4PaSa5_XW^qU9Wg|.i!>-S`5');
define('SECURE_AUTH_KEY',  'ZiqQ&qqneeJ)2hp-QD2kzIa/D|Uj|2vCbb5^tiqmie~XV|5*B&/+;hkm(fD,j4yY');
define('LOGGED_IN_KEY',    'Qcx#=O`oD`**4ciDt$>7f`0 C(YJBG zw&i6Zs?rD<av+&&LcbFzn%OZX0F!z_-Y');
define('NONCE_KEY',        ' +a|e5G<$uYyZ@I-x%pcX3MerOW!$?<{im-1i30{S=RGJ,y<-[4P2qtC^+xBAUFs');
define('AUTH_SALT',        '?UB,xiF#o`KZlz7bj]R$u_cj+X;mE,Z`zI-J!&mKlA%6i+N@vx#Aav|-/u,U!m(F');
define('SECURE_AUTH_SALT', '[,KDOIVx!k|2N*&p5sGYn<?X oBC@] Lda@=!l*Zb7@.eT5 )j#|/=*XO7WXB:_y');
define('LOGGED_IN_SALT',   'S]_m7|xhw!A`|Ja1zVfr:Q,)HyZ.o+Xsh4$~`:Q%<j|a-Jet7^J_h-1.jw,,kh|8');
define('NONCE_SALT',       '7M&bbYX52-/r;.DGqN:l-S/vdQb5X:`+E/5Bw]M]&W/lx?G3R2tMA8>m^T#+.-`9');

/**#@-*/

/**
 * Tiền tố cho bảng database.
 *
 * Đặt tiền tố cho bảng giúp bạn có thể cài nhiều site WordPress vào cùng một database.
 * Chỉ sử dụng số, ký tự và dấu gạch dưới!
 */
$table_prefix  = 'wp_';

/**
 * Dành cho developer: Chế độ debug.
 *
 * Thay đổi hằng số này thành true sẽ làm hiện lên các thông báo trong quá trình phát triển.
 * Chúng tôi khuyến cáo các developer sử dụng WP_DEBUG trong quá trình phát triển plugin và theme.
 *
 * Để có thông tin về các hằng số khác có thể sử dụng khi debug, hãy xem tại Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* Đó là tất cả thiết lập, ngưng sửa từ phần này trở xuống. Chúc bạn viết blog vui vẻ. */

/** Đường dẫn tuyệt đối đến thư mục cài đặt WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Thiết lập biến và include file. */
require_once(ABSPATH . 'wp-settings.php');
