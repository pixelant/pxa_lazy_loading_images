document.addEventListener('DOMContentLoaded', function () {

  let lazyImages = [].slice.call(document.querySelectorAll('img[data-src]'));
	if ('IntersectionObserver' in window) {
		let lazyImageObserver = new IntersectionObserver(function (entries) {
			entries.forEach(function (entry) {
				if (entry.isIntersecting) {
          let lazyImage = entry.target;
          lazyImage.src = lazyImage.dataset.src;
          lazyImage.parentNode.classList.add('_ready')
          lazyImageObserver.unobserve(lazyImage)
				}
			})
		});
		lazyImages.forEach(function (lazyImage) {
      var wrapper = document.createElement('span');
      lazyImage.parentNode.insertBefore(wrapper, lazyImage);
      wrapper.className = 'lazy-load'
      wrapper.appendChild(lazyImage);
			lazyImageObserver.observe(lazyImage)
		})
	} else {
		console.error('Browser doesn\'t support "IntersectionObserver".');
	}
});
