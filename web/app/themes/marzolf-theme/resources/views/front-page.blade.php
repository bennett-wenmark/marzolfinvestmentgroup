@extends('layouts.app')

@section('content')
  <div class="front-page">
    
    {{-- Hero Section - Sophisticated Motion --}}
    <section class="hero relative min-h-[85vh] flex items-center overflow-hidden pt-24" style="background: linear-gradient(135deg, #1a3d14 0%, #206d13 50%, #2d8a1d 100%);">
      {{-- Particle Network Canvas --}}
      <canvas id="particle-network" class="absolute inset-0 w-full h-full opacity-30"></canvas>
      
      {{-- Subtle Pattern Overlay --}}
      <div class="absolute inset-0 opacity-10" style="background-image: url('data:image/svg+xml,%3Csvg width=\'60\' height=\'60\' viewBox=\'0 0 60 60\' xmlns=\'http://www.w3.org/2000/svg\'%3E%3Cg fill=\'none\' fill-rule=\'evenodd\'%3E%3Cg fill=\'%23ffffff\' fill-opacity=\'0.4\'%3E%3Cpath d=\'M36 34v-4h-2v4h-4v2h4v4h2v-4h4v-2h-4zm0-30V0h-2v4h-4v2h4v4h2V6h4V4h-4zM6 34v-4H4v4H0v2h4v4h2v-4h4v-2H6zM6 4V0H4v4H0v2h4v4h2V6h4V4H6z\'/%3E%3C/g%3E%3C/g%3E%3C/svg%3E');"></div>
      
      <div class="container-modern relative z-10">
        <div class="max-w-3xl">
          <div class="hero-badge inline-flex items-center gap-2 bg-white/10 backdrop-blur-sm px-4 py-2 rounded-full mb-6 opacity-0">
            <span class="w-2 h-2 bg-green-300 rounded-full animate-pulse"></span>
            <span class="text-green-100 text-sm font-medium">Serving East Tennessee Since 1989</span>
          </div>
          
          <h1 class="hero-headline text-5xl md:text-6xl lg:text-7xl font-bold text-white mb-6 leading-tight">
            <span class="hero-word inline-block opacity-0">Wisdom</span>
            <span class="hero-word inline-block opacity-0">Applied</span>
            <span class="hero-word inline-block opacity-0">to</span>
            <span class="hero-word inline-block opacity-0">Your</span>
            <span class="hero-word inline-block text-green-200 opacity-0">Financial</span>
            <span class="hero-word inline-block text-green-200 opacity-0">Future</span>
          </h1>
          
          <p class="hero-subhead text-xl md:text-2xl text-green-50 mb-10 leading-relaxed max-w-2xl opacity-0">
            Nearly 30 years of experience helping individuals and families achieve their goals through trust, integrity, and personalized planning.
          </p>
          
          <div class="hero-buttons flex flex-col sm:flex-row gap-4 opacity-0">
            <a href="#contact" class="btn-primary bg-white text-green-800 hover:bg-green-50 no-underline" style="text-decoration: none;">
              Schedule a Consultation
              <svg class="w-5 h-5 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/>
              </svg>
            </a>
            <a href="#team" class="inline-flex items-center justify-center px-8 py-4 rounded-xl font-semibold text-white border-2 border-white/30 hover:bg-white/10 transition backdrop-blur-sm no-underline" style="text-decoration: none;">
              Meet Our Team
            </a>
          </div>
          
          {{-- Trust Indicators --}}
          <div class="hero-trust mt-16 flex flex-wrap items-center gap-6 text-green-100/80">
            <div class="trust-badge flex items-center gap-2 bg-white/10 backdrop-blur-sm px-4 py-2 rounded-full opacity-0 transform translate-y-4">
              <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                <path fill-rule="evenodd" d="M6.267 3.455a3.066 3.066 0 001.745-.723 3.066 3.066 0 013.976 0 3.066 3.066 0 001.745.723 3.066 3.066 0 012.812 2.812c.051.643.304 1.254.723 1.745a3.066 3.066 0 010 3.976 3.066 3.066 0 00-.723 1.745 3.066 3.066 0 01-2.812 2.812 3.066 3.066 0 00-1.745.723 3.066 3.066 0 01-3.976 0 3.066 3.066 0 00-1.745-.723 3.066 3.066 0 01-2.812-2.812 3.066 3.066 0 00-.723-1.745 3.066 3.066 0 010-3.976 3.066 3.066 0 00.723-1.745 3.066 3.066 0 012.812-2.812zm7.44 5.252a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
              </svg>
              <span class="text-sm font-medium">CFP® Professional</span>
            </div>
            <div class="trust-badge flex items-center gap-2 bg-white/10 backdrop-blur-sm px-4 py-2 rounded-full opacity-0 transform translate-y-4">
              <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                <path fill-rule="evenodd" d="M6.267 3.455a3.066 3.066 0 001.745-.723 3.066 3.066 0 013.976 0 3.066 3.066 0 001.745.723 3.066 3.066 0 012.812 2.812c.051.643.304 1.254.723 1.745a3.066 3.066 0 010 3.976 3.066 3.066 0 00-.723 1.745 3.066 3.066 0 01-2.812 2.812 3.066 3.066 0 00-1.745.723 3.066 3.066 0 01-3.976 0 3.066 3.066 0 00-1.745-.723 3.066 3.066 0 01-2.812-2.812 3.066 3.066 0 00-.723-1.745 3.066 3.066 0 010-3.976 3.066 3.066 0 00.723-1.745 3.066 3.066 0 012.812-2.812zm7.44 5.252a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
              </svg>
              <span class="text-sm font-medium">30+ Years Experience</span>
            </div>
            <div class="trust-badge flex items-center gap-2 bg-white/10 backdrop-blur-sm px-4 py-2 rounded-full opacity-0 transform translate-y-4">
              <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                <path fill-rule="evenodd" d="M6.267 3.455a3.066 3.066 0 001.745-.723 3.066 3.066 0 013.976 0 3.066 3.066 0 001.745.723 3.066 3.066 0 012.812 2.812c.051.643.304 1.254.723 1.745a3.066 3.066 0 010 3.976 3.066 3.066 0 00-.723 1.745 3.066 3.066 0 01-2.812 2.812 3.066 3.066 0 00-1.745.723 3.066 3.066 0 01-3.976 0 3.066 3.066 0 00-1.745-.723 3.066 3.066 0 01-2.812-2.812 3.066 3.066 0 00-.723-1.745 3.066 3.066 0 010-3.976 3.066 3.066 0 00.723-1.745 3.066 3.066 0 012.812-2.812zm7.44 5.252a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
              </svg>
              <span class="text-sm font-medium">Fiduciary Duty</span>
            </div>
          </div>
        </div>
      </div>
      
      <style>
        @keyframes fadeInUp {
          from {
            opacity: 0;
            transform: translateY(20px);
          }
          to {
            opacity: 1;
            transform: translateY(0);
          }
        }
        
        @keyframes fadeIn {
          from { opacity: 0; }
          to { opacity: 1; }
        }
        
        @keyframes floatBadge {
          0%, 100% {
            transform: translateY(4px);
            opacity: 1;
          }
          50% {
            transform: translateY(-4px);
            opacity: 1;
          }
        }
        
        .hero-badge.animate {
          animation: fadeIn 0.6s ease forwards;
        }
        
        .hero-word.animate {
          animation: fadeInUp 0.5s ease forwards;
        }
        
        .hero-subhead.animate {
          animation: fadeInUp 0.6s ease 0.8s forwards;
        }
        
        .hero-buttons.animate {
          animation: fadeInUp 0.6s ease 1s forwards;
        }
        
        .trust-badge.animate {
          animation: floatBadge 0.6s ease forwards;
        }
        
        .trust-badge:nth-child(1).animate { animation-delay: 1.2s; }
        .trust-badge:nth-child(2).animate { animation-delay: 1.4s; }
        .trust-badge:nth-child(3).animate { animation-delay: 1.6s; }
      </style>
      
      <script>
        // Staggered text reveal
        document.addEventListener('DOMContentLoaded', () => {
          const words = document.querySelectorAll('.hero-word');
          const badge = document.querySelector('.hero-badge');
          const subhead = document.querySelector('.hero-subhead');
          const buttons = document.querySelector('.hero-buttons');
          const trustBadges = document.querySelectorAll('.trust-badge');
          
          // Animate badge first
          setTimeout(() => badge.classList.add('animate'), 100);
          
          // Animate words with stagger
          words.forEach((word, index) => {
            setTimeout(() => {
              word.classList.add('animate');
            }, 300 + (index * 100));
          });
          
          // Animate subhead
          setTimeout(() => subhead.classList.add('animate'), 800);
          
          // Animate buttons
          setTimeout(() => buttons.classList.add('animate'), 1000);
          
          // Animate trust badges
          trustBadges.forEach((badge, index) => {
            setTimeout(() => {
              badge.classList.add('animate');
            }, 1200 + (index * 200));
          });
          
          // Particle Network
          const canvas = document.getElementById('particle-network');
          if (canvas) {
            const ctx = canvas.getContext('2d');
            let width, height;
            let particles = [];
            const particleCount = 25;
            const connectionDistance = 100;
            const maxConnections = 3;
            
            function resize() {
              width = canvas.width = canvas.offsetWidth;
              height = canvas.height = canvas.offsetHeight;
            }
            
            function createParticles() {
              particles = [];
              for (let i = 0; i < particleCount; i++) {
                particles.push({
                  x: Math.random() * width,
                  y: Math.random() * height,
                  vx: (Math.random() - 0.5) * 0.5,
                  vy: (Math.random() - 0.5) * 0.5,
                  radius: Math.random() * 2 + 1
                });
              }
            }
            
            function drawParticles() {
              ctx.clearRect(0, 0, width, height);
              
              // Draw connections
              ctx.strokeStyle = 'rgba(255, 255, 255, 0.15)';
              ctx.lineWidth = 1;
              
              for (let i = 0; i < particles.length; i++) {
                let connections = 0;
                for (let j = i + 1; j < particles.length; j++) {
                  const dx = particles[i].x - particles[j].x;
                  const dy = particles[i].y - particles[j].y;
                  const distance = Math.sqrt(dx * dx + dy * dy);
                  
                  if (distance < connectionDistance && connections < maxConnections) {
                    ctx.beginPath();
                    ctx.moveTo(particles[i].x, particles[i].y);
                    ctx.lineTo(particles[j].x, particles[j].y);
                    ctx.stroke();
                    connections++;
                  }
                }
              }
              
              // Draw particles
              ctx.fillStyle = 'rgba(255, 255, 255, 0.3)';
              for (let particle of particles) {
                ctx.beginPath();
                ctx.arc(particle.x, particle.y, particle.radius, 0, Math.PI * 2);
                ctx.fill();
                
                // Update position
                particle.x += particle.vx;
                particle.y += particle.vy;
                
                // Wrap around
                if (particle.x < 0) particle.x = width;
                if (particle.x > width) particle.x = 0;
                if (particle.y < 0) particle.y = height;
                if (particle.y > height) particle.y = 0;
              }
              
              requestAnimationFrame(drawParticles);
            }
            
            resize();
            createParticles();
            drawParticles();
            
            window.addEventListener('resize', () => {
              resize();
              createParticles();
            });
          }
        });
      </script>
      
      {{-- Decorative Wave --}}
      <div class="absolute bottom-0 left-0 right-0">
        <svg viewBox="0 0 1440 120" fill="none" xmlns="http://www.w3.org/2000/svg">
          <path d="M0 120L60 110C120 100 240 80 360 70C480 60 600 60 720 65C840 70 960 80 1080 85C1200 90 1320 90 1380 90L1440 90V120H1380C1320 120 1200 120 1080 120C960 120 840 120 720 120C600 120 480 120 360 120C240 120 120 120 60 120H0Z" fill="#fafaf9"/>
        </svg>
      </div>
    </section>

    {{-- Our Process Section - New --}}
    <section class="process section-padding" style="background: #fafaf9;">
      <div class="container-modern">
        <div class="text-center mb-16">
          <span class="inline-block text-sm font-semibold tracking-wider uppercase mb-3" style="color: var(--color-primary);">How We Work</span>
          <h2 class="text-4xl md:text-5xl font-bold mb-6" style="color: var(--color-neutral-900);">Our Process</h2>
          <p class="text-xl max-w-3xl mx-auto" style="color: var(--color-neutral-600);">
            Here's an overview of what you can expect when you work with us. We start by getting to know you and your needs. Then we develop a plan that addresses your unique investment needs and goals.
          </p>
        </div>
        
        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8 max-w-6xl mx-auto">
          {{-- Step 1 --}}
          <div class="process-card bg-white rounded-2xl p-8 card-hover relative">
            <div class="absolute -top-4 -left-4 w-12 h-12 rounded-full flex items-center justify-center text-white font-bold text-lg" style="background: var(--color-primary);">1</div>
            <h3 class="text-xl font-bold mb-4 mt-2" style="color: var(--color-neutral-900);">1st Meeting</h3>
            <p style="color: var(--color-neutral-600);">Our 1st meeting is a time to get to know each other and talk about your objectives. Plan to bring any relevant information such as wills, statements, budgets, etc...</p>
          </div>
          
          {{-- Step 2 --}}
          <div class="process-card bg-white rounded-2xl p-8 card-hover relative">
            <div class="absolute -top-4 -left-4 w-12 h-12 rounded-full flex items-center justify-center text-white font-bold text-lg" style="background: var(--color-primary);">2</div>
            <h3 class="text-xl font-bold mb-4 mt-2" style="color: var(--color-neutral-900);">2nd Meeting</h3>
            <p style="color: var(--color-neutral-600);">The 2nd meeting is when we discuss details. Together we will agree on a strategy that is in your best interest. This tends to be a collaborative process where Jeff explains your options, and you work together to develop a strategy that suits you.</p>
          </div>
          
          {{-- Step 3 --}}
          <div class="process-card bg-white rounded-2xl p-8 card-hover relative">
            <div class="absolute -top-4 -left-4 w-12 h-12 rounded-full flex items-center justify-center text-white font-bold text-lg" style="background: var(--color-primary);">3</div>
            <h3 class="text-xl font-bold mb-4 mt-2" style="color: var(--color-neutral-900);">Process & Strategy</h3>
            <p style="color: var(--color-neutral-600);">We use a time-tested process to help organize and prioritize your objectives. We then design an individual strategy just for you with one goal in mind – your success!</p>
          </div>
          
          {{-- Step 4 --}}
          <div class="process-card bg-white rounded-2xl p-8 card-hover relative">
            <div class="absolute -top-4 -left-4 w-12 h-12 rounded-full flex items-center justify-center text-white font-bold text-lg" style="background: var(--color-primary);">4</div>
            <h3 class="text-xl font-bold mb-4 mt-2" style="color: var(--color-neutral-900);">Review</h3>
            <p style="color: var(--color-neutral-600);">Jeff likes to review accounts based on the preferences of his clients – some clients prefer to review monthly or quarterly – but Jeff will want to meet with you at least annually.</p>
          </div>
          
          {{-- Step 5 --}}
          <div class="process-card bg-white rounded-2xl p-8 card-hover relative">
            <div class="absolute -top-4 -left-4 w-12 h-12 rounded-full flex items-center justify-center text-white font-bold text-lg" style="background: var(--color-primary);">5</div>
            <h3 class="text-xl font-bold mb-4 mt-2" style="color: var(--color-neutral-900);">Services</h3>
            <p style="color: var(--color-neutral-600);">At Raymond James Jeff is able to address the full spectrum of your financial needs, including but not limited to retirement and retirement income planning, estate, trust and generational planning, life insurance and long term care needs, and educational funding.</p>
          </div>
          
          {{-- Step 6 --}}
          <div class="process-card bg-white rounded-2xl p-8 card-hover relative">
            <div class="absolute -top-4 -left-4 w-12 h-12 rounded-full flex items-center justify-center text-white font-bold text-lg" style="background: var(--color-primary);">6</div>
            <h3 class="text-xl font-bold mb-4 mt-2" style="color: var(--color-neutral-900);">Referrals</h3>
            <p style="color: var(--color-neutral-600);">Jeff considers your referrals the highest and best form of compliment and values them greatly. We will treat those you send to us with the highest amount of respect and care.</p>
          </div>
        </div>
      </div>
    </section>

    {{-- Services Section --}}
    <section id="services" class="services section-padding" style="background: #f5f5f4;">
      <div class="container-modern">
        <div class="text-center mb-16">
          <span class="inline-block text-sm font-semibold tracking-wider uppercase mb-3" style="color: var(--color-primary);">What We Offer</span>
          <h2 class="text-4xl md:text-5xl font-bold mb-6" style="color: var(--color-neutral-900);">Our Services</h2>
          <p class="text-xl max-w-2xl mx-auto" style="color: var(--color-neutral-600);">
            Comprehensive financial planning tailored to your unique circumstances and goals.
          </p>
        </div>
        
        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8 max-w-6xl mx-auto">
          {{-- Service 1 --}}
          <a href="{{ get_permalink(21) }}" class="service-card bg-white rounded-2xl p-8 card-hover shadow-sm border border-gray-200 no-underline group">
            <div class="w-14 h-14 rounded-2xl flex items-center justify-center mb-6 group-hover:scale-110 transition" style="background: var(--color-primary-bg);">
              <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24" style="color: var(--color-primary);">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>
              </svg>
            </div>
            <h3 class="text-xl font-bold mb-3" style="color: var(--color-neutral-900);">Wealth Management</h3>
            <p style="color: var(--color-neutral-600);">Individual wealth management strategies designed to grow and protect your assets.</p>
          </a>
          
          {{-- Service 2 --}}
          <a href="{{ get_permalink(22) }}" class="service-card bg-white rounded-2xl p-8 card-hover border border-neutral-100 no-underline group">
            <div class="w-14 h-14 rounded-2xl flex items-center justify-center mb-6 group-hover:scale-110 transition" style="background: var(--color-primary-bg);">
              <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24" style="color: var(--color-primary);">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"/>
              </svg>
            </div>
            <h3 class="text-xl font-bold mb-3" style="color: var(--color-neutral-900);">Retirement Planning</h3>
            <p style="color: var(--color-neutral-600);">Retirement income planning to ensure financial security in your golden years.</p>
          </a>
          
          {{-- Service 3 --}}
          <a href="{{ get_permalink(23) }}" class="service-card bg-white rounded-2xl p-8 card-hover border border-neutral-100 no-underline group">
            <div class="w-14 h-14 rounded-2xl flex items-center justify-center mb-6 group-hover:scale-110 transition" style="background: var(--color-primary-bg);">
              <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24" style="color: var(--color-primary);">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/>
              </svg>
            </div>
            <h3 class="text-xl font-bold mb-3" style="color: var(--color-neutral-900);">Tax-Advantaged Legacy</h3>
            <p style="color: var(--color-neutral-600);">Generational and charitable gifting strategies that minimize tax impact.</p>
          </a>
          
          {{-- Service 4 --}}
          <a href="{{ get_permalink(24) }}" class="service-card bg-white rounded-2xl p-8 card-hover border border-neutral-100 no-underline group">
            <div class="w-14 h-14 rounded-2xl flex items-center justify-center mb-6 group-hover:scale-110 transition" style="background: var(--color-primary-bg);">
              <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24" style="color: var(--color-primary);">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"/>
              </svg>
            </div>
            <h3 class="text-xl font-bold mb-3" style="color: var(--color-neutral-900);">Insurance Planning</h3>
            <p style="color: var(--color-neutral-600);">Life, disability, and long-term care insurance planning for complete protection.</p>
          </a>
          
          {{-- Service 5 --}}
          <a href="{{ get_permalink(25) }}" class="service-card bg-white rounded-2xl p-8 card-hover border border-neutral-100 no-underline group">
            <div class="w-14 h-14 rounded-2xl flex items-center justify-center mb-6 group-hover:scale-110 transition" style="background: var(--color-primary-bg);">
              <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24" style="color: var(--color-primary);">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 14l9-5-9-5-9 5 9 5z"/>
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 14l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14z"/>
              </svg>
            </div>
            <h3 class="text-xl font-bold mb-3" style="color: var(--color-neutral-900);">College Planning</h3>
            <p style="color: var(--color-neutral-600);">Education funding strategies to help prepare for your children's future.</p>
          </a>
          
          {{-- Service 6 --}}
          <a href="{{ get_permalink(26) }}" class="service-card bg-white rounded-2xl p-8 card-hover border border-neutral-100 no-underline group">
            <div class="w-14 h-14 rounded-2xl flex items-center justify-center mb-6 group-hover:scale-110 transition" style="background: var(--color-primary-bg);">
              <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24" style="color: var(--color-primary);">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"/>
              </svg>
            </div>
            <h3 class="text-xl font-bold mb-3" style="color: var(--color-neutral-900);">Team Approach</h3>
            <p style="color: var(--color-neutral-600);">Coordination with your CPA, attorney, and other professionals for holistic planning.</p>
          </a>
        </div>
        
        <div class="text-center mt-12">
          <p class="text-sm" style="color: var(--color-neutral-500);">
            *Raymond James Financial Services does not provide tax or legal services. Please discuss these matters with the appropriate professional.
          </p>
        </div>
      </div>
    </section>

    {{-- Team Section --}}
    <section id="team" class="team section-padding" style="background: linear-gradient(180deg, #fafaf9 0%, #f5f5f4 100%);">
      <div class="container-modern">
        <div class="text-center mb-16">
          <span class="inline-block text-sm font-semibold tracking-wider uppercase mb-3" style="color: var(--color-primary);">The Experts</span>
          <h2 class="text-4xl md:text-5xl font-bold mb-6" style="color: var(--color-neutral-900);">Meet Our Team</h2>
          <p class="text-xl max-w-2xl mx-auto" style="color: var(--color-neutral-600);">
            Experienced professionals dedicated to helping you achieve financial success.
          </p>
        </div>
        
        <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-8 max-w-6xl mx-auto">
          {{-- Jeff Marzolf --}}
          <a href="{{ get_permalink(10) }}" class="team-card group bg-white rounded-2xl overflow-hidden card-hover no-underline">
            <div class="aspect-[3/4] overflow-hidden">
              <img src="/app/uploads/jeff-marzolf.jpg" alt="Jeff Marzolf" class="w-full h-full object-cover group-hover:scale-105 transition duration-700">
            </div>
            <div class="p-6">
              <h3 class="text-xl font-bold mb-1" style="color: var(--color-neutral-900);">Jeff Marzolf</h3>
              <p class="font-medium mb-2" style="color: var(--color-primary);">Branch Manager</p>
              <p class="text-sm" style="color: var(--color-neutral-600);">CFP®, AAMS®, 30 years experience</p>
            </div>
          </a>
          
          {{-- Jesse Giles --}}
          <a href="{{ get_permalink(11) }}" class="team-card group bg-white rounded-2xl overflow-hidden card-hover no-underline">
            <div class="aspect-[3/4] overflow-hidden">
              <img src="/app/uploads/jesse-giles.jpg" alt="Jesse Giles" class="w-full h-full object-cover group-hover:scale-105 transition duration-700">
            </div>
            <div class="p-6">
              <h3 class="text-xl font-bold mb-1" style="color: var(--color-neutral-900);">Jesse Giles</h3>
              <p class="font-medium mb-2" style="color: var(--color-primary);">Financial Advisor</p>
              <p class="text-sm" style="color: var(--color-neutral-600);">17 years wealth management</p>
            </div>
          </a>
          
          {{-- Sam Shelley --}}
          <a href="{{ get_permalink(12) }}" class="team-card group bg-white rounded-2xl overflow-hidden card-hover no-underline">
            <div class="aspect-[3/4] overflow-hidden">
              <img src="/app/uploads/sam-shelley.jpg" alt="Sam Shelley" class="w-full h-full object-cover group-hover:scale-105 transition duration-700">
            </div>
            <div class="p-6">
              <h3 class="text-xl font-bold mb-1" style="color: var(--color-neutral-900);">Sam Shelley</h3>
              <p class="font-medium mb-2" style="color: var(--color-primary);">Financial Advisor</p>
              <p class="text-sm" style="color: var(--color-neutral-600);">CFP® Professional</p>
            </div>
          </a>
          
          {{-- Brandi Shipwash --}}
          <a href="{{ get_permalink(13) }}" class="team-card group bg-white rounded-2xl overflow-hidden card-hover no-underline">
            <div class="aspect-[3/4] overflow-hidden">
              <img src="/app/uploads/brandi-shipwash.jpg" alt="Brandi Shipwash" class="w-full h-full object-cover group-hover:scale-105 transition duration-700">
            </div>
            <div class="p-6">
              <h3 class="text-xl font-bold mb-1" style="color: var(--color-neutral-900);">Brandi Shipwash</h3>
              <p class="font-medium mb-2" style="color: var(--color-primary);">Client Service Associate</p>
              <p class="text-sm" style="color: var(--color-neutral-600);">20+ years experience</p>
            </div>
          </a>
        </div>
      </div>
    </section>

    {{-- Contact CTA Section --}}
    <section id="contact" class="contact section-padding" style="background: linear-gradient(135deg, #1a3d14 0%, #206d13 50%, #1a5a10 100%);">
      <div class="container-modern">
        <div class="max-w-4xl mx-auto text-center text-white">
          <h2 class="text-3xl md:text-5xl font-bold mb-6">Ready to Start Your Financial Journey?</h2>
          <p class="text-xl text-green-100 mb-12 max-w-2xl mx-auto">
            Contact us today to schedule a consultation and discover how we can help you achieve your financial goals.
          </p>
          
          <div class="grid md:grid-cols-3 gap-8 mb-12">
            <div class="bg-white/10 backdrop-blur-sm rounded-2xl p-6">
              <div class="w-14 h-14 bg-white/20 rounded-xl flex items-center justify-center mx-auto mb-4">
                <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/>
                </svg>
              </div>
              <p class="text-green-200 text-sm mb-1">Call Us</p>
              <p class="text-2xl font-bold">(865) 670-7432</p>
            </div>
            
            <div class="bg-white/10 backdrop-blur-sm rounded-2xl p-6">
              <div class="w-14 h-14 bg-white/20 rounded-xl flex items-center justify-center mx-auto mb-4">
                <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                </svg>
              </div>
              <p class="text-green-200 text-sm mb-1">Email Us</p>
              <p class="text-lg font-semibold">jeff.marzolf@raymondjames.com</p>
            </div>
            
            <div class="bg-white/10 backdrop-blur-sm rounded-2xl p-6">
              <div class="w-14 h-14 bg-white/20 rounded-xl flex items-center justify-center mx-auto mb-4">
                <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/>
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/>
                </svg>
              </div>
              <p class="text-green-200 text-sm mb-1">Visit Us</p>
              <p class="text-lg font-semibold">Knoxville, TN</p>
            </div>
          </div>
          
          <div class="bg-white rounded-2xl p-8 inline-block text-left max-w-2xl w-full">
            <h3 class="text-2xl font-bold mb-4" style="color: var(--color-neutral-900);">Marzolf Investment Group, LLC</h3>
            <p class="mb-6" style="color: var(--color-neutral-600);">
              412 N. Cedar Bluff Road, Suite 101<br>
              Knoxville, TN 37923
            </p>
            <a href="https://maps.app.goo.gl/qf6PkMQBaM3etotL8" target="_blank" class="btn-primary w-full justify-center">
              Get Directions
              <svg class="w-5 h-5 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14"/>
              </svg>
            </a>
          </div>
        </div>
      </div>
    </section>

  </div>
@endsection