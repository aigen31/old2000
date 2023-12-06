<?php
if (isset($_POST) && $_SERVER['REQUEST_METHOD'] == 'POST') {
	old2000_email_verify(get_current_user_id());
?>
	<p>
		<?php
		echo esc_html('Письмо отправлено на ваш адрес. Не забудьте проверить папку «Спам», если письмо не будет найдено во «Входящие».')
		?>
	</p>
<?php
} else {
?>
	<p>
		<?php echo esc_html('Ваш адрес электронной почты не подтверждён.') ?>
	</p>
<?php } ?>
<form action="" method="POST">
	<button type="submit">
		Отправить подтверждение
	</button>
</form>