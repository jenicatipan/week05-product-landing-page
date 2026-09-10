const navigationLinks = document.querySelectorAll('[data-nav-link]');
const navigationSections = [...navigationLinks]
	.map((link) => document.getElementById(link.dataset.navLink))
	.filter(Boolean);

const setActiveNavigation = (sectionId) => {
	navigationLinks.forEach((link) => {
		const isActive = link.dataset.navLink === sectionId;
		link.classList.toggle('is-active', isActive);
		link.setAttribute('aria-current', isActive ? 'location' : 'false');
	});
};

navigationLinks.forEach((link) => {
	link.addEventListener('click', () => {
		setActiveNavigation(link.dataset.navLink);

		const mobileMenu = document.getElementById('mobile-menu');
		const menuToggle = document.getElementById('menu-toggle');

		if (mobileMenu && menuToggle) {
			mobileMenu.classList.add('hidden');
			menuToggle.setAttribute('aria-expanded', 'false');
		}
	});
});

if (navigationSections.length) {
	const sectionObserver = new IntersectionObserver(
		(entries) => {
			const visibleSections = entries
				.filter((entry) => entry.isIntersecting)
				.sort((first, second) => second.intersectionRatio - first.intersectionRatio);

			if (visibleSections[0]) {
				setActiveNavigation(visibleSections[0].target.id);
			}
		},
		{ rootMargin: '-20% 0px -65% 0px', threshold: [0, 0.25, 0.5, 0.75, 1] },
	);

	navigationSections.forEach((section) => sectionObserver.observe(section));
}
