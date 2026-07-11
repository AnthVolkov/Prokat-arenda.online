<div class="booking-form">
<h3>Заявка на аренду</h3>

<form method="post">

<?php wp_nonce_field('prokat_booking_action','prokat_booking_nonce'); ?>

<p>
<label>Имя</label>
<input type="text" name="client_name" required>
</p>

<p>
<label>Телефон</label>
<input type="tel" name="client_phone" required>
</p>

<p>
<label>Оборудование</label>
<input type="text" name="equipment_name" value="<?php echo esc_attr(get_the_title()); ?>">
</p>

<p>
<label>Дата аренды</label>
<input type="date" name="rent_date">
</p>

<p>
<label>Срок аренды</label>
<input type="text" name="rent_period" placeholder="Например: 3 дня">
</p>

<p>
<label>Комментарий</label>
<textarea name="client_comment"></textarea>
</p>

<button class="button" type="submit">Отправить заявку</button>

</form>
</div>