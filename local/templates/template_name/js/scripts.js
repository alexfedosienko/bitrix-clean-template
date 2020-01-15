$(document).ready(function() {
	// Добавление в корзину
	$('body').on('submit', '.btn-basket', function(event) {
		event.preventDefault();
		var formData = $(this).serialize();
		formData = formData+"&RND="+Math.random(); // RND - чтобы убрать кеширование
		$.ajax({
			url: '/basket/basketAdd.php', // линк на добавление в корзину
			type: "POST",
			data: formData,
			beforeSend: function(xhr) {
				// Событие перед добавлением
			},
			success: function(html) { // html / json
				// Запрос успешно отработал
			},
			error: function(error) {
				// Ошибка во время запроса
			}
		});
	});
});