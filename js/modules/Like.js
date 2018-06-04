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
			this.deleteLike();
		} else {
			this.createLike();
		}
	}

	createLike() {
		$.ajax({
			url: universityData.root_url + '/wp-json/university/v1/manageLike',
			type: 'POST', 
			success: (responce) => {
				console.log(responce);
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