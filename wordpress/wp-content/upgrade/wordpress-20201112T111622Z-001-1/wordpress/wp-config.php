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
define( 'DB_NAME', 'wordpress' );

/** Username của database */
define( 'DB_USER', 'wordpress' );

/** Mật khẩu của database */
define( 'DB_PASSWORD', '111111' );

/** Hostname của database */
define( 'DB_HOST', 'localhost' );

/** Database charset sử dụng để tạo bảng database. */
define( 'DB_CHARSET', 'utf8mb4' );

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
define( 'AUTH_KEY',         '<JCt9qj@KeM(m`%|7!<BZ=+H=X3#8k.&@}-_R<$n[&sVG&wG|VH yoSIaxqwh{:[' );
define( 'SECURE_AUTH_KEY',  '|u7Xbb|d[THADqn)[5>A+F3S6UiL-,C^`-o72ZWx2#C,zY*C<MpKaQ`r?vrZ9[WI' );
define( 'LOGGED_IN_KEY',    'n!$Gj!*!uE%XNxHO_u>9b`A~=b(B7LyH|}oPgHKIJ5AT1#+0mIj?6z2[enrqwnkv' );
define( 'NONCE_KEY',        'rEBMyneF/1fzj4dzE{UAdL*!?ww0DV|# hSB>qONUb&K#WM?/KEtyBl{:![YX=|%' );
define( 'AUTH_SALT',        'u;;;93EM+ef8hgIqRVW<YQpe1HmvTi3tDt,I-o*qdb~Mp`~*ihF,mS:5^JcqFa*:' );
define( 'SECURE_AUTH_SALT', 'XQRNzal|FD&=G>lXJWpD%RMR](Yi6%bNM(%F^=:S<-j/8@lb{=su`#k|48Rd6b.P' );
define( 'LOGGED_IN_SALT',   'xoP;bVyDA,7;k@F?(~;*|v,I;p_gkFd2C-R<IY)OpN$nIMm}tOt=`QwV[}6n-X,{' );
define( 'NONCE_SALT',       'AF0i!(d8wo,e&?LXN:2^A!mpTm~i)6o#MiVX=jtc+1C$z{]tUDc~hvP|V}{bq%B9' );

/**#@-*/

/**
 * Tiền tố cho bảng database.
 *
 * Đặt tiền tố cho bảng giúp bạn có thể cài nhiều site WordPress vào cùng một database.
 * Chỉ sử dụng số, ký tự và dấu gạch dưới!
 */
$table_prefix = 'wp_';

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
