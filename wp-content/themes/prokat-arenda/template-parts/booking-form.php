<div class="booking-form">
<h3>Заявка на аренду</h3>

<form method="post">
<p><label>Имя</label><input type="text" name="client_name" required></p>
<p><label>Телефон</label><input type="tel" name="client_phone" required></p>
<p><label>Оборудование</label><input type="text" name="equipment_name" value="<?php echo esc_attr(get_the_title()); ?>"></p>

<button class="button" type="submit">Отправить заявку</button>
</form>
</div>