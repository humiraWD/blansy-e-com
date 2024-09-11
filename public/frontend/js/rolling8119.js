window.addEventListener("load", function(event) {
	// PC/Mobile �� Mobile
	if ( $(".roll_slide").length ) {
		$(".roll_slide").slick({
			lazyLoad: "ondemand",
			fade: true,
			infinite: true,
			autoplay: true,
			autoplaySpeed: ($(".roll_slide_area").data("delay")||4)*1000,
			pauseOnFocus: true,
			arrows: false,
		});
	}
	// PC
	if ( $(".main_roll_slide").length ) {
		$(".main_roll_slide").slick({
			lazyLoad: "ondemand",
			fade: false,
			infinite: true,
			autoplay: true,
			autoplaySpeed: ($(".main_roll_area").data("delay")||4)*1000,
			pauseOnFocus: true,
			arrows: true,
			prevArrow: $(".roll_left"),
			nextArrow: $(".roll_right"),
		});
		// �����̵� �� ó��
		$(".main_roll_slide").on("beforeChange", function (event, slick, currentSlide, nextSlide) {
			$(".main_roll_title_area div").removeClass("active");
			$(".main_roll_title_area .mrt"+nextSlide).addClass("active");
		});
		// Ÿ��Ʋ Ŭ�� �� �ش� �����̵� �̵�
		$(document).on("mouseenter click", ".mrt", function (e) {
			e.preventDefault();
			$(".main_roll_slide").slick("slickGoTo", $(this).attr("class").match(/mrt(\d)/)[1]);
		});
	}
});
