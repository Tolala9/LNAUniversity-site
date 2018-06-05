import $ from 'jquery';

class Like {
	constructor() {
		this.events();
	}

	events() {
		$(".like-box").on("click", this.ourClickDispatcher.bind(this));
	}

	//methods
	ourClickDispatcher(e) {

		var currentLikeBox = $(e.target).closest(".like-box")

		if (currentLikeBox.data('exists') == 'yes') {
			this.deleteLike(currentLikeBox);
		} else {
			this.createLike(currentLikeBox);
		} 
	}

	createLike(currentLikeBox) {
		$.ajax({
			beforeSend: (xhr) => {
				xhr.setRequestHeader('X-WP-Nonce', universityData.nonce);
			},
			url: universityData.root_url + '/wp-json/university/v1/manageLike',
			type: 'POST', 
			data: {'professorId': currentLikeBox.data('professor')},
			success: (responce) => {
				console.log(responce);
				currentLikeBox.attr('data-exists', 'yes');
				var likeCount = parseInt(currentLikeBox.find(".like-count").html(), 10);
				likeCount++; 
				currentLikeBox.find(".like-count").html(likeCount);
			},
			error: (responce) => {
				console.log(responce);
			}
		});
	}

	deleteLike() {
		$.ajax({
			url: universityData.root_url + '/wp-json/university/v1/manageLike',
			type: 'DELETE', 
			success: (responce) => {
				
				console.log(responce);
			}, 
			error: (responce) => {
				console.log(responce);
			}
		});
}
}


export default Like;