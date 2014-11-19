
$(function () {
	$(window.document).on('click', '.write-review', write_review_open);
	$(window.document).on('click', '.social-icon-like', like_review);
});

function like_review(event) {
	event.preventDefault();
	var obj = $(this);
	var review_id = obj.closest('article.review').data('index');
	$.post(Routing.generate('card_review_like'), {
		id : review_id
	}, function(data, textStatus, jqXHR) {
		obj.find('.num').text(data);
	});
}

function write_review_open(event) {
	if(!DTDB.user.data) {
		alert('You must be logged in to write a card review.');
		return;
	}
	var form = $(this).parent('div').parent('div').find('form');
	$(this).remove();
	
	form.append('<div><div class="form-group">'
			+ '<textarea id="review-form-text" class="form-control" rows="20" name="review" placeholder="Write your analysis of the card, in at least 200 characters. You can write a number of card reviews equal to your reputation. This is not a place for questions or comments. Type # to enter a card name."></textarea>'
			+ '</div><div class="well text-muted" id="review-form-preview"><small>Preview. Look <a href="http://daringfireball.net/projects/markdown/dingus">here</a> for a Markdown syntax reference.</small></div>'
			+ '<button type="submit" class="btn btn-success">Submit review</button></div>');
	
	form.on('submit', function (event) {
		event.preventDefault();
		if($('#review-form-preview').text().length < 200) {
			alert('Your review must at least 200 characters long.');
			return;
		}
		var data = $(this).serialize();
		$.ajax(Routing.generate('card_review_post'), {
			data: data,
			type: 'POST',
			dataType: 'json',
			success: function(data, textStatus, jqXHR) {
				if(data === true) {
					form.replaceWith('<div class="alert alert-success" role="alert">Your review has been posted. It will appear on the site in a few minutes.</div>');
				} else {
					form.replaceWith('<div class="alert alert-danger" role="alert">An error occured while posting your review. '+data+'</div>');
				}
			},
			error: function(jqXHR, textStatus, errorThrown) {
				form.replaceWith('<div class="alert alert-danger" role="alert">An error occured while posting your review ('+jqXHR.responseText+'). Reload the page and try again.</div>');
			}
		});
	});
	
	var converter = new Markdown.Converter();
	$('#review-form-text').on(
		'keyup',
		function() {
			$('#review-form-preview').html(converter.makeHtml($('#review-form-text').val()));
		}
	);
	
	$('#review-form-text').textcomplete(
			[
					{
						match : /\B#([\-+\w]*)$/,
						search : function(term, callback) {
							callback(DTDB.data.cards({
								title : {
									likenocase : term
								}
							}).get());
						},
						template : function(value) {
							return value.title;
						},
						replace : function(value) {
							return '[' + value.title + ']('
									+ Routing.generate('cards_zoom', {card_code:value.code})
									+ ')';
						},
						index : 1
					} ]);

}
