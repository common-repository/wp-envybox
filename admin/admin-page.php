<?php 
$envybox = 'wp-envybox.php';  

function envybox_options() {
	global $envybox;
	add_options_page( 'WP EnvyBox', 'WP EnvyBox', 'manage_options', $envybox, 'envybox_option_page');  
}
add_action('admin_menu', 'envybox_options');
 
function envybox_option_page(){
	global $envybox;
	?><div class="wrap">
		<h2><?php echo __('EnvyBox Settings', 'wp-envybox') ?></h2>    
		<form method="post" enctype="multipart/form-data" action="options.php">
			<?php 
			settings_fields('envybox_options');
			do_settings_sections($envybox);
			?>
			<p class="submit">  
				<input type="submit" class="button-primary" value="<?php echo __('Save', 'wp-envybox'); ?>" />  
			</p>
		</form>
    <div class="more">
      <div class="title"><a href="//crm.promo-z.ru/lp/modul-envybox-kontent-na-vkladku-nastroiki" target="_blank">Наши продукты</a></div>
      <div class="content">
        <div class="item">
          <div class="img"><img src="<?php echo esc_url( plugins_url( '/assets/images/item1.png', dirname(__FILE__) ) );?>" alt=""/></div>
          <div class="name">Обратный звонок</div>
          <div class="desc">Получайте в 3,8 раз больше звонков в день сразу после установки виджета на Ваш сайт, без увеличения расходов на рекламу.Сервис окупает свой годовой тариф в первую же неделю.</div>
          <div class="link"><a href="//envbx.ru/url/f3358b/" target="_blank">Подробнее</a></div>
        </div>
        <div class="item">
          <div class="img"><img src="<?php echo esc_url( plugins_url( '/assets/images/item2.png', dirname(__FILE__) ) );?>" alt=""/></div>
          <div class="name">Онлайн-чат</div>
          <div class="desc">Эффективное общение с клиентами благодаря живым приглашениям и персонализации в чатедаст в 3,2 раза больше обращения на сайте, чем с других онлайн консультантов</div>
          <div class="link"><a href="//envbx.ru/url/e99001/" target="_blank">Подробнее</a></div>
        </div>
        <div class="item">
          <div class="img"><img src="<?php echo esc_url( plugins_url( '/assets/images/item3.png', dirname(__FILE__) ) );?>" alt=""/></div>
          <div class="name">Генератор клиентов</div>
          <div class="desc">Всплывающее окно с акцией, таймером и формой захватав 2,4 раз гарантированно увеличивает число заявок с сайта сразу после установки</div>
          <div class="link"><a href="//envbx.ru/url/1829b8/" target="_blank">Подробнее</a></div>
        </div>
        <div class="item">
          <div class="img"><img src="<?php echo esc_url( plugins_url( '/assets/images/item4.png', dirname(__FILE__) ) );?>" alt=""/></div>
          <div class="name">EnvyCRM</div>
          <div class="desc">Первая CRM-система, которой не нужно обучать менеджеров по продажам.Всё безумно просто и логично!</div>
          <div class="link"><a href="//envbx.ru/url/35004d/" target="_blank">Подробнее</a></div>
        </div>
        <div class="item">
          <div class="img"><img src="<?php echo esc_url( plugins_url( '/assets/images/item6.png', dirname(__FILE__) ) );?>" alt=""/></div>
          <div class="name">Стадный инстинкт</div>
          <div class="desc">Имитирует очередь из клиентов на сайте, мотивируя совершить покупку.В 1,7 раз гарантированно увеличивает число заявок с сайта сразу после установки</div>
          <div class="link"><a href="//envbx.ru/url/a61234/" target="_blank">Подробнее</a></div>
        </div>
        <div class="item">
          <div class="img"><img src="<?php echo esc_url( plugins_url( '/assets/images/item5.png', dirname(__FILE__) ) );?>" alt=""/></div>
          <div class="name">Захватчик клиентов</div>
          <div class="desc">Имитирует обращение менеджера к посетителю и перенаправляет его внимание на нужный элемент сайта.</div>
          <div class="link"><a href="//envbx.ru/url/0d8d67/" target="_blank">Подробнее</a></div>
        </div>        
        <div class="item">
          <div class="img"><img src="<?php echo esc_url( plugins_url( '/assets/images/item7.png', dirname(__FILE__) ) );?>" alt=""/></div>
          <div class="name">Мультикнопка</div>
          <div class="desc">Одна кнопка позволяет клиенту выбрать удобный способ для связи, скачать цифровой товар или перейти на страницу с акцией</div>
          <div class="link"><a href="//envbx.ru/url/73841b/" target="_blank">Подробнее</a></div>
        </div>
        <div class="item">
          <div class="img"><img src="<?php echo esc_url( plugins_url( '/assets/images/item8.png', dirname(__FILE__) ) );?>" alt=""/></div>
          <div class="name">Квизы</div>
          <div class="desc">Простой способ получить контакт клиента и узнать его мнение, предложив взамен выгодный бонус.В 4,8 раз гарантированно увеличивает число заявок с сайта сразу после установки</div>
          <div class="link"><a href="//envbx.ru/url/35b745/" target="_blank">Подробнее</a></div>
        </div>
      </div>
    </div>
    <style>
      .more .title{
        text-align: center;
        color: #000;
        line-height: 32px;
        font-size: 32px;
        margin: 20px 0;
      }
      .title a{
        color: #000;
        text-decoration: none;
      }
      .more .content{
        display: flex;
        justify-content: center;
        align-items: center;
        flex-wrap: wrap;
      }
      .more .content .item{
        padding: 20px;
        text-align: center;
        max-width: 300px;
      }
      .item .img {
        height: 300px;
        display: flex;
        align-items: center;
      }
      .item img{
        max-width: 100%;
        max-height: 100%;
      }
      .item .name{
        font-size: 24px;
        line-height: 48px;
      }
      .item .desc{
        margin-bottom: 15px;
        font-size: 14px;
        line-height: 1;
      }
      .item .link a{
        display: inline-block;
        padding: 10px;
        width: 100px;
        max-width: 100%;
        background: #1779fa;
        color: #ffffff;
        text-decoration: none;
      }
    </style>
	</div><?php
}
 
function envybox_option_settings() {
	global $envybox;
  register_setting( 'envybox_options', 'envybox_options' ); 
	add_settings_section( 'envybox_section_main', __('Basic settings', 'wp-envybox'), '', $envybox );	
	$envybox_field_params = array(
		'type'      => 'textarea',
		'id'        => 'integration',
    'placeholder' => __('Integration Code', 'wp-envybox'),
		'label_for' => 'integration',
    'desc' => '<b>'.__('You need to copy this code in your personal account', 'wp-envybox').' <a href="//cbkiller.ru/url/c2bef8/" target="_blank">EnvyBox.io</a></b>'
	);
	add_settings_field( 'integration_field', __('Your Integration Code', 'wp-envybox'), 'envybox_option_display_settings', $envybox, 'envybox_section_main', $envybox_field_params );
}
add_action( 'admin_init', 'envybox_option_settings' );

function envybox_option_display_settings($args) {
	extract( $args ); 
	$option_name = 'envybox_options'; 
	$o = get_option( $option_name );
  $add_param = "";
  if($placeholder != '') $add_param .= "placeholder='".$placeholder."' ";
	switch ( $type ) { 
		case 'url':  
			$o[$id] = esc_attr( stripslashes($o[$id]) );
			echo "<input class='regular-text' type='url' id='$id' name='" . $option_name . "[$id]' value='$o[$id]' ".$add_param."/>";  
			echo ($desc != '') ? "<br /><span class='description'>$desc</span>" : "";  
		break;
		case 'text':  
			$o[$id] = esc_attr( stripslashes($o[$id]) );
			echo "<input class='regular-text' type='text' id='$id' name='" . $option_name . "[$id]' value='$o[$id]' ".$add_param."/>";  
			echo ($desc != '') ? "<br /><span class='description'>$desc</span>" : "";  
		break;
		case 'textarea':  
			$o[$id] = esc_attr( stripslashes($o[$id]) );
			echo "<textarea class='code large-text' cols='50' rows='4' type='text' id='$id' name='" . $option_name . "[$id]' ".$add_param.">$o[$id]</textarea>";  
			echo ($desc != '') ? "<br /><span class='description'>$desc</span>" : "";  
		break;
		case 'checkbox':
			$checked = ($o[$id] == 'on') ? " checked='checked'" :  '';  
			echo "<label><input type='checkbox' id='$id' name='" . $option_name . "[$id]' $checked /> ";  
			echo ($desc != '') ? $desc : "";
			echo "</label>";  
		break;
		case 'select':
			echo "<select id='$id' name='" . $option_name . "[$id]'>";
			foreach($vals as $v=>$l){
				$selected = ($o[$id] == $v) ? "selected='selected'" : '';  
				echo "<option value='$v' $selected>$l</option>";
			}
			echo ($desc != '') ? $desc : "";
			echo "</select>";  
		break;
		case 'radio':
			echo "<fieldset>";
			foreach($vals as $v=>$l){
				$checked = ($o[$id] == $v) ? "checked='checked'" : '';  
				echo "<label><input type='radio' name='" . $option_name . "[$id]' value='$v' $checked />$l</label><br />";
			}
			echo "</fieldset>";  
		break; 
	}
}
