if ($(".single-blog").length) {

if ($(window).width() > 767) {
	var scrollSidebar = gsap.timeline();
	scrollSidebar.to(".fixed-sidebar", {
		scrollTrigger: {
			trigger: ".fixed-sidebar",
			start: "top top",
			endTrigger: ".blog-post-content__contnet",
			end: (self) =>
				"bottom bottom" +
				(window.innerHeight > self.trigger.offsetHeight
					? "-=" + (window.innerHeight - self.trigger.offsetHeight)
					: ""),
			toggleActions: "play none none reset",
			// markers: true,
			pin: ".fixed-sidebar-holder",
			toggleClass: {
				targets: ".fixed-sidebar",
				className: "fixed-sidebar--active",
			},
		},
	});
}
}
