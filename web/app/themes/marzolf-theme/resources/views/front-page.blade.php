@extends('layouts.app')

@section('content')
  <div class="front-page">
    
    {{-- Hero Section --}}
    <section class="hero bg-gradient-to-br from-blue-900 via-blue-800 to-blue-700 text-white py-24 md:py-32">
      <div class="container mx-auto px-4">
        <div class="max-w-3xl mx-auto text-center">
          <h1 class="text-4xl md:text-5xl lg:text-6xl font-bold mb-6 leading-tight">
            Wisdom Applied to Your Financial Future
          </h1>
          <p class="text-xl md:text-2xl text-blue-100 mb-8 leading-relaxed">
            Nearly 30 years of experience helping individuals and families achieve their financial goals through trust, integrity, and personalized planning.
          </p>
          <div class="flex flex-col sm:flex-row gap-4 justify-center">
            <a href="#contact" class="bg-white text-blue-800 px-8 py-4 rounded-lg font-semibold hover:bg-blue-50 transition inline-flex items-center justify-center">
              Schedule a Consultation
              <svg class="w-5 h-5 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/>
              </svg>
            </a>
            <a href="#team" class="border-2 border-white text-white px-8 py-4 rounded-lg font-semibold hover:bg-white/10 transition inline-flex items-center justify-center">
              Meet Our Team
            </a>
          </div>
        </div>
      </div>
    </section>

    {{-- Services Section --}}
    <section class="services py-20 bg-white">
      <div class="container mx-auto px-4">
        <div class="text-center mb-16">
          <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4">Our Services</h2>
          <p class="text-xl text-gray-600 max-w-2xl mx-auto">
            Comprehensive financial planning tailored to your unique circumstances and goals.
          </p>
        </div>
        
        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8 max-w-6xl mx-auto">
          {{-- Service 1 --}}
          <div class="service-card bg-gray-50 rounded-xl p-8 hover:shadow-lg transition">
            <div class="w-14 h-14 bg-blue-100 rounded-lg flex items-center justify-center mb-6">
              <svg class="w-7 h-7 text-blue-700" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>
              </svg>
            </div>
            <h3 class="text-xl font-bold text-gray-900 mb-3">Wealth Management</h3>
            <p class="text-gray-600">Individual wealth management strategies designed to grow and protect your assets.</p>
          </div>
          
          {{-- Service 2 --}}
          <div class="service-card bg-gray-50 rounded-xl p-8 hover:shadow-lg transition">
            <div class="w-14 h-14 bg-blue-100 rounded-lg flex items-center justify-center mb-6">
              <svg class="w-7 h-7 text-blue-700" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"/>
              </svg>
            </div>
            <h3 class="text-xl font-bold text-gray-900 mb-3">Retirement Planning</h3>
            <p class="text-gray-600">Retirement income planning to ensure financial security in your golden years.</p>
          </div>
          
          {{-- Service 3 --}}
          <div class="service-card bg-gray-50 rounded-xl p-8 hover:shadow-lg transition">
            <div class="w-14 h-14 bg-blue-100 rounded-lg flex items-center justify-center mb-6">
              <svg class="w-7 h-7 text-blue-700" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/>
              </svg>
            </div>
            <h3 class="text-xl font-bold text-gray-900 mb-3">Tax-Advantaged Legacy</h3>
            <p class="text-gray-600">Generational and charitable gifting strategies that minimize tax impact.</p>
          </div>
          
          {{-- Service 4 --}}
          <div class="service-card bg-gray-50 rounded-xl p-8 hover:shadow-lg transition">
            <div class="w-14 h-14 bg-blue-100 rounded-lg flex items-center justify-center mb-6">
              <svg class="w-7 h-7 text-blue-700" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"/>
              </svg>
            </div>
            <h3 class="text-xl font-bold text-gray-900 mb-3">Insurance Planning</h3>
            <p class="text-gray-600">Life, disability, and long-term care insurance planning for complete protection.</p>
          </div>
          
          {{-- Service 5 --}}
          <div class="service-card bg-gray-50 rounded-xl p-8 hover:shadow-lg transition">
            <div class="w-14 h-14 bg-blue-100 rounded-lg flex items-center justify-center mb-6">
              <svg class="w-7 h-7 text-blue-700" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 14l9-5-9-5-9 5 9 5z"/>
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 14l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14z"/>
              </svg>
            </div>
            <h3 class="text-xl font-bold text-gray-900 mb-3">College Planning</h3>
            <p class="text-gray-600">Education funding strategies to help prepare for your children's future.</p>
          </div>
          
          {{-- Service 6 --}}
          <div class="service-card bg-gray-50 rounded-xl p-8 hover:shadow-lg transition">
            <div class="w-14 h-14 bg-blue-100 rounded-lg flex items-center justify-center mb-6">
              <svg class="w-7 h-7 text-blue-700" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"/>
              </svg>
            </div>
            <h3 class="text-xl font-bold text-gray-900 mb-3">Team Approach</h3>
            <p class="text-gray-600">Coordination with your CPA, attorney, and other professionals for holistic planning.</p>
          </div>
        </div>
      </div>
    </section>

    {{-- Team Section --}}
    <section id="team" class="team py-20 bg-gray-50">
      <div class="container mx-auto px-4">
        <div class="text-center mb-16">
          <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4">Meet Our Team</h2>
          <p class="text-xl text-gray-600 max-w-2xl mx-auto">
            Experienced professionals dedicated to helping you achieve financial success.
          </p>
        </div>
        
        <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-8 max-w-6xl mx-auto">
          {{-- Jeff Marzolf --}}
          <a href="{{ get_permalink(10) }}" class="team-card group bg-white rounded-xl overflow-hidden shadow-sm hover:shadow-xl transition">
            <div class="aspect-[3/4] overflow-hidden">
              <img src="/app/uploads/jeff-marzolf.jpg" alt="Jeff Marzolf" class="w-full h-full object-cover group-hover:scale-105 transition duration-500">
            </div>
            <div class="p-6">
              <h3 class="text-xl font-bold text-gray-900 mb-1">Jeff Marzolf</h3>
              <p class="text-blue-700 font-medium mb-3">Branch Manager</p>
              <p class="text-gray-600 text-sm">CFP®, AAMS®, 30 years experience</p>
            </div>
          </a>
          
          {{-- Jesse Giles --}}
          <a href="{{ get_permalink(11) }}" class="team-card group bg-white rounded-xl overflow-hidden shadow-sm hover:shadow-xl transition">
            <div class="aspect-[3/4] overflow-hidden">
              <img src="/app/uploads/jesse-giles.jpg" alt="Jesse Giles" class="w-full h-full object-cover group-hover:scale-105 transition duration-500">
            </div>
            <div class="p-6">
              <h3 class="text-xl font-bold text-gray-900 mb-1">Jesse Giles</h3>
              <p class="text-blue-700 font-medium mb-3">Financial Advisor</p>
              <p class="text-gray-600 text-sm">17 years wealth management</p>
            </div>
          </a>
          
          {{-- Sam Shelley --}}
          <a href="{{ get_permalink(12) }}" class="team-card group bg-white rounded-xl overflow-hidden shadow-sm hover:shadow-xl transition">
            <div class="aspect-[3/4] overflow-hidden">
              <img src="/app/uploads/sam-shelley.jpg" alt="Sam Shelley" class="w-full h-full object-cover group-hover:scale-105 transition duration-500">
            </div>
            <div class="p-6">
              <h3 class="text-xl font-bold text-gray-900 mb-1">Sam Shelley</h3>
              <p class="text-blue-700 font-medium mb-3">Financial Advisor</p>
              <p class="text-gray-600 text-sm">CFP® Professional</p>
            </div>
          </a>
          
          {{-- Brandi Shipwash --}}
          <a href="{{ get_permalink(13) }}" class="team-card group bg-white rounded-xl overflow-hidden shadow-sm hover:shadow-xl transition">
            <div class="aspect-[3/4] overflow-hidden">
              <img src="/app/uploads/brandi-shipwash.jpg" alt="Brandi Shipwash" class="w-full h-full object-cover group-hover:scale-105 transition duration-500">
            </div>
            <div class="p-6">
              <h3 class="text-xl font-bold text-gray-900 mb-1">Brandi Shipwash</h3>
              <p class="text-blue-700 font-medium mb-3">Client Service Associate</p>
              <p class="text-gray-600 text-sm">20+ years experience</p>
            </div>
          </a>
        </div>
      </div>
    </section>

    {{-- Contact CTA Section --}}
    <section id="contact" class="contact py-20 bg-blue-900 text-white">
      <div class="container mx-auto px-4">
        <div class="max-w-4xl mx-auto text-center">
          <h2 class="text-3xl md:text-4xl font-bold mb-6">Ready to Start Your Financial Journey?</h2>
          <p class="text-xl text-blue-100 mb-8">
            Contact us today to schedule a consultation and discover how we can help you achieve your financial goals.
          </p>
          
          <div class="flex flex-col md:flex-row gap-8 justify-center items-center mb-12">
            <div class="flex items-center gap-3">
              <div class="w-12 h-12 bg-blue-800 rounded-lg flex items-center justify-center">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/>
                </svg>
              </div>
              <div class="text-left">
                <p class="text-sm text-blue-300">Call Us</p>
                <p class="text-xl font-semibold">(865) 670-7432</p>
              </div>
            </div>
            
            <div class="flex items-center gap-3">
              <div class="w-12 h-12 bg-blue-800 rounded-lg flex items-center justify-center">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                </svg>
              </div>
              <div class="text-left">
                <p class="text-sm text-blue-300">Email Us</p>
                <p class="text-xl font-semibold">jeff.marzolf@raymondjames.com</p>
              </div>
            </div>
          </div>
          
          <div class="bg-blue-800 rounded-xl p-8 inline-block">
            <h3 class="text-xl font-semibold mb-4">Visit Our Office</h3>
            <p class="text-blue-100">
              Marzolf Investment Group, LLC<br>
              412 N. Cedar Bluff Road, Suite 101<br>
              Knoxville, TN 37923
            </p>
            <a href="https://maps.app.goo.gl/qf6PkMQBaM3etotL8" target="_blank" class="inline-flex items-center mt-4 text-white hover:text-blue-200 transition">
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