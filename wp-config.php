<?php
/**
 * إعدادات ووردبريس الأساسية
 *
 * عملية إنشاء الملف wp-config.php تستخدم هذا الملف أثناء التنصيب. لا يجب عليك
 * استخدام الموقع، يمكنك نسخ هذا الملف إلى "wp-config.php" وبعدها ملئ القيم المطلوبة.
 *
 * هذا الملف يحتوي على هذه الإعدادات:
 *
 * * إعدادات قاعدة البيانات
 * * مفاتيح الأمان
 * * بادئة جداول قاعدة البيانات
 * * المسار المطلق لمجلد الووردبريس
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** إعدادات قاعدة البيانات - يمكنك الحصول على هذه المعلومات من مستضيفك ** //

/** اسم قاعدة البيانات لووردبريس */
define( 'DB_NAME', 'Bedo' );

/** اسم مستخدم قاعدة البيانات */
define( 'DB_USER', 'mohamedelshaer' );

/** كلمة مرور قاعدة البيانات */
define( 'DB_PASSWORD', '3030' );

/** عنوان خادم قاعدة البيانات */
define( 'DB_HOST', 'localhost' );

/** ترميز قاعدة البيانات */
define( 'DB_CHARSET', 'utf8mb4' );

/** نوع تجميع قاعدة البيانات. لا تغير هذا إن كنت غير متأكد */
define( 'DB_COLLATE', '' );

/**#@+
 * مفاتيح الأمان.
 *
 * تغيير هذه العبارات إلى عبارات فريدة مختلفة!
 * استخدم الرابط التالي لتوليد المفاتيح {@link https://api.wordpress.org/secret-key/1.1/salt/}
 * يمكنك تغيير هذه في أي وقت لإلغاء جميع ملفات تعريف الارتباط الموجودة. سيؤدي هذا إلى إجبار جميع المستخدمين على تسجيل الدخول مرة أخرى.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'd*/zBtp}m;nf|#!g2^f8{d.Wi/nO?jBLjJfJXG`?DEjn.x/v.i,<H[xKm0VLv-&-' );
define( 'SECURE_AUTH_KEY',  '(ztQIvZ1uYHj J)i$iu5IyQ3TIdT.6Dc&zO5AjX)eE_3Q0P`i$z$l^)W8Oe9HW(_' );
define( 'LOGGED_IN_KEY',    'i<i[svr&Hq7rALZYqzYTd9]6|*GGVZ[IGQZ#nR=9U6d:,p>SUJP4yLSrM388w9pN' );
define( 'NONCE_KEY',        '!pSf,=W*ROX`a!)9~`eTIS7i[!4nI8-{],>;/z~jXT3EC}aK@m;W4o(qBkzXiv`(' );
define( 'AUTH_SALT',        '$Qj*?m6*Al)qgw4pUk%`A1,Q5r+# ck5ZF79agO&8J7KBjZ.o5&[<XCHzP>1;[.|' );
define( 'SECURE_AUTH_SALT', ' S8e8sEt*K`1E>3G/xn~[1]_YwVVp+nGa}zeWP.1FCo?b^ XI4r.F1|.LSV_of&J' );
define( 'LOGGED_IN_SALT',   'bSERvF6wpqEl]{A>eKp[0}U;I4)Z^-)3jzB)d;^V&pM^PsT^OWCJZm_HpEh;vyKO' );
define( 'NONCE_SALT',       'I;4]K>!uT)w#q_``O7I(B1Rm5Mia)QkC^I$2h*,Ip/(Kp/A^mP9RvnZ#Lv[@z+56' );

/**#@-*/

/**
 * بادئة الجداول في قاعدة البيانات.
 *
 * تستطيع تركيب أكثر من موقع على نفس قاعدة البيانات إذا أعطيت لكل موقع بادئة جداول مختلفة
 * يرجى استخدام حروف، أرقام وخطوط سفلية فقط!
 */
$table_prefix = 'wp_';

/**
 * للمطورين: نظام تشخيص الأخطاء
 *
 * قم بتغييرالقيمة، إن أردت تمكين عرض الملاحظات والأخطاء أثناء التطوير.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* هذا هو المطلوب، توقف عن التعديل! نتمنى لك التوفيق. */

/** المسار المطلق لمجلد ووردبريس. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** إعداد متغيرات الووردبريس وتضمين الملفات. */
require_once ABSPATH . 'wp-settings.php';
