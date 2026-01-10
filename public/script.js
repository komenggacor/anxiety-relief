// Copied from original src/script.js so Laravel public JS matches prior behavior.
"use strict";

/**
 * Anxiety Relief Tool - Premium JavaScript
 * Mengelola audio, UI interactions, dan animasi
 */

// Audio Management System
class AudioManager {
	constructor() {
		this.audio = null;
		this.isPlaying = false;
		this.isMuted = false;
		this.volume = 0.2;
		this.audioSources = [
			'https://assets.mixkit.co/music/preview/mixkit-deep-relaxation-445.mp3',
			'https://assets.mixkit.co/music/preview/mixkit-serene-view-443.mp3',
			'https://assets.mixkit.co/music/preview/mixkit-late-night-driving-445.mp3'
		];
		this.currentTrack = 0;
		this.init();
	}

	init() {
		this.createAudioElement();
		this.setupEventListeners();
	}

	createAudioElement() {
		this.audio = new Audio();
		this.audio.src = this.audioSources[this.currentTrack];
		this.audio.loop = true;
		this.audio.volume = this.volume;
		this.audio.preload = 'auto';
	}

	setupEventListeners() {
		this.audio.addEventListener('playing', () => this.onPlay());
		this.audio.addEventListener('pause', () => this.onPause());
		this.audio.addEventListener('ended', () => this.onEnd());
		this.audio.addEventListener('error', (e) => this.onError(e));
		this.audio.addEventListener('volumechange', () => this.updateVolumeDisplay());
	}

	play() {
		if (!this.audio) return;
		const playPromise = this.audio.play();
		if (playPromise !== undefined) {
			playPromise
				.then(() => {
					this.isPlaying = true;
					this.updateUI();
					this.createVisualFeedback();
					this.createNotification('Musik relaksasi dimulai', 'success');
				})
				.catch(error => {
					console.error('Playback failed:', error);
					this.handlePlaybackError();
				});
		}
	}

	pause() {
		if (!this.audio) return;
		this.audio.pause();
		this.isPlaying = false;
		this.updateUI();
	}

	togglePlay() {
		if (this.isPlaying) {
			this.pause();
		} else {
			this.play();
		}
	}

	toggleMute() {
		if (!this.audio) return;
		this.isMuted = !this.isMuted;
		this.audio.muted = this.isMuted;
		this.updateUI();
		this.createNotification(
			this.isMuted ? 'Audio dimatikan' : 'Audio diaktifkan',
			this.isMuted ? 'warning' : 'success'
		);
	}

	changeVolume(volume) {
		if (!this.audio) return;
		this.volume = volume;
		this.audio.volume = volume;
		this.updateVolumeDisplay();
	}

	nextTrack() {
		if (this.audioSources.length <= 1) return;
		this.currentTrack = (this.currentTrack + 1) % this.audioSources.length;
		this.audio.src = this.audioSources[this.currentTrack];
		if (this.isPlaying) {
			this.play();
		}
		this.createNotification(`Berpindah ke trek ${this.currentTrack + 1}`, 'info');
	}

	onPlay() { this.isPlaying = true; this.updateUI(); }
	onPause() { this.isPlaying = false; this.updateUI(); }
	onEnd() { this.isPlaying = false; this.updateUI(); }

	onError(error) {
		console.error('Audio error:', error);
		this.createNotification('Tidak dapat memutar audio', 'error');
	}

	updateUI() {
		const muteBtn = document.getElementById('muteBtn');
		const audioStatus = document.getElementById('audioStatus');
		const startBtns = document.querySelectorAll('#startRelaxation, #heroStartBtn, #mobileStartBtn');
		if (muteBtn) {
			const icon = muteBtn.querySelector('i');
			if (this.isMuted) {
				icon.className = 'fas fa-volume-mute';
				muteBtn.style.background = 'linear-gradient(135deg, #ef4444 0%, #dc2626 100%)';
			} else {
				icon.className = 'fas fa-volume-up';
				muteBtn.style.background = 'linear-gradient(135deg, #3b82f6 0%, #10b981 100%)';
			}
		}
		if (audioStatus) {
			audioStatus.textContent = this.isPlaying ? 'Musik Aktif' : 'Musik Relaksasi';
			audioStatus.style.color = this.isPlaying ? '#10b981' : '#64748b';
		}
		startBtns.forEach(btn => {
			const icon = btn.querySelector('i');
			const text = btn.querySelector('span') || btn;
			if (this.isPlaying) {
				icon.className = 'fas fa-pause-circle mr-2';
				text.textContent = text.textContent.replace('Mulai', 'Jeda');
				btn.style.background = 'linear-gradient(135deg, #10b981 0%, #059669 100%)';
			} else {
				icon.className = 'fas fa-play-circle mr-2';
				text.textContent = text.textContent.replace('Jeda', 'Mulai');
				btn.style.background = 'linear-gradient(135deg, #3b82f6 0%, #10b981 100%)';
			}
		});
	}

	updateVolumeDisplay() {
		const display = document.getElementById('volumeDisplay');
		if (display && this.audio) {
			const volumePercent = Math.round(this.audio.volume * 100);
			display.textContent = `${volumePercent}%`;
		}
	}

	createVisualFeedback() {
		const visual = document.querySelector('.animate-breathing');
		if (visual) {
			visual.style.animation = 'none';
			setTimeout(() => {
				visual.style.animation = 'breathing 4s ease-in-out infinite';
			}, 10);
		}
	}

	createNotification(message, type = 'info') {
		// Notifikasi popup dinonaktifkan agar tidak mengganggu pengguna.
		// Tetap log ke console untuk kebutuhan debugging internal saja.
		if (window && window.console) {
			console.log(`[Notification:${type}]`, message);
		}
	}

	createNotificationContainer() {
		const container = document.createElement('div');
		container.id = 'notificationContainer';
		container.className = 'fixed top-6 right-6 z-50 space-y-3 max-w-sm';
		document.body.appendChild(container);
		return container;
	}

	handlePlaybackError() {
		this.createNotification(
			'Perangkat mungkin tidak mendukung autoplay. Coba klik "Mulai Relaksasi" lagi.',
			'warning'
		);
	}
}

class UIManager {
	constructor() {
		this.audioManager = null;
		this.init();
	}

	init() {
		this.setupAudioManager();
		this.setupMobileMenu();
		this.setupSmoothScroll();
		this.setupEventListeners();
		this.setupIntersectionObserver();
		this.setupHeaderScroll();
	}

	setupAudioManager() {
		// Audio feature intentionally disabled (per product requirement).
		// Keep a no-op manager so existing buttons don't throw errors.
		this.audioManager = {
			togglePlay() {},
			toggleMute() {},
			changeVolume() {},
			nextTrack() {},
		};
	}

	setupMobileMenu() {
		const menuBtn = document.getElementById('mobileMenuBtn');
		const mobileMenu = document.getElementById('mobileMenu');
		if (menuBtn && mobileMenu) {
			menuBtn.addEventListener('click', () => {
				mobileMenu.classList.toggle('hidden');
				const icon = menuBtn.querySelector('i');
				icon.className = mobileMenu.classList.contains('hidden') ? 'fas fa-bars' : 'fas fa-times';
			});
			document.addEventListener('click', (e) => {
				if (!menuBtn.contains(e.target) && !mobileMenu.contains(e.target)) {
					mobileMenu.classList.add('hidden');
					menuBtn.querySelector('i').className = 'fas fa-bars';
				}
			});
		}
	}

	setupSmoothScroll() {
		const links = document.querySelectorAll('a[href^="#"]');
		links.forEach(link => {
			link.addEventListener('click', (e) => {
				const href = link.getAttribute('href');
				if (href === '#') return;
				e.preventDefault();
				const target = document.querySelector(href);
				if (!target) return;
				const mobileMenu = document.getElementById('mobileMenu');
				if (mobileMenu && !mobileMenu.classList.contains('hidden')) {
					mobileMenu.classList.add('hidden');
					document.getElementById('mobileMenuBtn').querySelector('i').className = 'fas fa-bars';
				}
				window.scrollTo({ top: target.offsetTop - 80, behavior: 'smooth' });
			});
		});
	}

	setupEventListeners() {
		const startButtons = [
			document.getElementById('startRelaxation'),
			document.getElementById('heroStartBtn'),
			document.getElementById('mobileStartBtn')
		].filter(Boolean);
		startButtons.forEach(btn => {
			btn.addEventListener('click', () => this.audioManager.togglePlay());
		});
		const muteBtn = document.getElementById('muteBtn');
		if (muteBtn) {
			muteBtn.addEventListener('click', () => this.audioManager.toggleMute());
		}
	}

	setupIntersectionObserver() {
		const observer = new IntersectionObserver(
			(entries) => {
				entries.forEach(entry => {
					if (entry.isIntersecting) {
						entry.target.classList.add('animate-fade-in-up');
					}
				});
			},
			{ threshold: 0.1, rootMargin: '0px 0px -50px 0px' }
		);
		const elements = document.querySelectorAll('.feature-card, .benefit-item, .step-item');
		elements.forEach(el => observer.observe(el));
	}

	setupHeaderScroll() {
		const header = document.getElementById('header');
		window.addEventListener('scroll', () => {
			if (window.scrollY > 100) {
				header.classList.add('shadow-md', 'bg-white/98');
				header.classList.remove('bg-white/95');
			} else {
				header.classList.remove('shadow-md', 'bg-white/98');
				header.classList.add('bg-white/95');
			}
			this.updateActiveNavLink();
		});
	}

	updateActiveNavLink() {
		const sections = document.querySelectorAll('section[id]');
		const navLinks = document.querySelectorAll('.nav-item');
		let current = '';
		sections.forEach(section => {
			if (window.scrollY >= section.offsetTop - 150) {
				current = section.getAttribute('id');
			}
		});
		navLinks.forEach(link => {
			link.classList.remove('bg-blue-50', 'text-blue-600');
			if (link.getAttribute('href') === `#${current}`) {
				link.classList.add('bg-blue-50', 'text-blue-600');
			}
		});
	}
}

document.addEventListener('DOMContentLoaded', () => {
		const uiManager = new UIManager();
		const style = document.createElement('style');
	style.textContent = `
		@keyframes fadeInUp {
			from { opacity: 0; transform: translateY(20px); }
			to { opacity: 1; transform: translateY(0); }
		}
		.animate-fade-in-up { animation: fadeInUp 0.6s ease-out forwards; }
		.notification { animation: fadeInUp 0.3s ease-out; transition: all 0.3s ease; }
		.notification.exit { opacity: 0; transform: translateX(100%); }
	`;
	document.head.appendChild(style);
});

