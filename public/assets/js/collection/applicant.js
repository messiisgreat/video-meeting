$(document).ready(function () {
	$(".nav-link").click(function () {
		$(".nav-link").removeClass("active");
		$(this).addClass("active");
		let id = $(this).attr("href");
		$(".tab-pane").removeClass("active");
		$(id).addClass("active");
	})

	// answer item clicked    
	var player = new Plyr('video', {
		muted: false,
		volume: 1,
		controls: ['play-large', 'play', 'progress', 'current-time', 'mute', 'volume', 'fullscreen'],
	});
	$(".answer-item").click(function () {
		$(".answer-item").removeClass("active");
		$(this).addClass("active");
		let privewEle = document.getElementById("preview-pane")

		let type = $(this).attr("data-type");
		if (type == "writing") {
			let data = $(this).find("div.data").html();
			privewEle.innerHTML = data;
			$("#download").attr("href","#")
			$("#download").css("visibility","hidden")
		}
		else if (type == "video") {
			let data = $(this).find("video").parent().html();
			privewEle.innerHTML = data;
			$(privewEle.children[0]).attr("controls", true);

			var player = new Plyr('video', {
				muted: false,
				volume: 1,
				controls: ['play-large', 'play', 'progress', 'current-time', 'mute', 'volume', 'fullscreen'],
			});
			let url = $(this).attr("data-url");
			$("#download").attr("href",url)
			$("#download").css("visibility","visibility")
		} else if (type == "voice") {
			let data = $(this).attr("data-url");
			let ele = '<audio id="audio-player" controls="controls" src="' + data + '" type="audio/mpeg">';

			privewEle.innerHTML = ele;
			$("#download").attr("href",data)
			$("#download").css("visibility","visibility")
		} else if (type == "file") {
			let data = $(this).attr("data-url");
			$("#download").css("visibility","visibility")
			$("#download").attr("href", data)
			let name = data.split("/");
			name = name[name.length - 1];
			privewEle.innerHTML = "<a href='" + data + "'>" + name + "</a>";
		} else if (type == "chat") {
			let data = $(this).attr("data-url");
			$("#download").attr("href", data)
			$("#download").css("visibility","hidden")
			
			privewEle.innerHTML = "チャットメッセージチャットメッセージチャットメッセージチャットメッセージ";
		}
	})

	$(".meeting-book td").click(function () {
		// $(this).toggleClass("active");
	})

	///slick 
	$('.slider-for').slick({
	});
	$("#slider_before").click(function () {
		$("button[aria-label=Previous]").click();
	})
	$("#slider_next").click(function () {
		$("button[aria-label=Next]").click();
	})

})