{{--
Template Name: Services Overview
--}}

@extends('layouts.app')

@section('content')
  @while(have_posts()) @php(the_post())
    <article class="services-overview-page">
      
      {{-- Hero Header --}}
      <section class="services-hero pt-32 pb-16" style="background: linear-gradient(135deg, #1a3d14 0%, #206d13 50%, #1a5a10 100%);">
        <div class="container mx-auto px-4">
          <div class="max-w-3xl mx-auto text-center">
            <h1 class="text-4xl md:text-5xl lg:text-6xl font-bold text-white mb-6">
              Our Services
            </h1>
            <p class="text-xl text-green-100">
              Comprehensive financial planning tailored to your unique circumstances and goals.
            </p>
          </div>
        </div>
      </section>

      {{-- Intro Section --}}
      <section class="services-intro py-12" style="background: #fafaf9;">
        <div class="container mx-auto px-4">
          <div class="max-w-3xl mx-auto text-left">
            <div class="prose prose-lg max-w-none">
              @php(the_content())
            </div>
          </div>
        </div>
      </section>

      {{-- Services Grid Section --}}
      <section class="services-grid py-12" style="background: #f5f5f4;">
        <div class="container mx-auto px-4">
          <div class="text-center mb-12">
            <h2 class="text-3xl font-bold text-gray-900">Explore Our Services</h2>
          </div>
          
          <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8 max-w-6xl mx-auto">
            <a href="{{ get_permalink(21) }}" class="block p-6 bg-white rounded-xl shadow-sm hover:shadow-lg transition border border-gray-100 no-underline">
              <h3 class="text-xl font-bold text-gray-900 mb-2">Wealth Management</h3>
              <p class="text-gray-600">Individual wealth management strategies designed to grow and protect your assets.</p>
            </a>
            
            <a href="{{ get_permalink(22) }}" class="block p-6 bg-white rounded-xl shadow-sm hover:shadow-lg transition border border-gray-100 no-underline">
              <h3 class="text-xl font-bold text-gray-900 mb-2">Retirement Planning</h3>
              <p class="text-gray-600">Retirement income planning to ensure financial security in your golden years.</p>
            </a>
            
            <a href="{{ get_permalink(23) }}" class="block p-6 bg-white rounded-xl shadow-sm hover:shadow-lg transition border border-gray-100 no-underline">
              <h3 class="text-xl font-bold text-gray-900 mb-2">Tax-Advantaged Legacy</h3>
              <p class="text-gray-600">Generational and charitable gifting strategies that minimize tax impact.</p>
            </a>
            
            <a href="{{ get_permalink(24) }}" class="block p-6 bg-white rounded-xl shadow-sm hover:shadow-lg transition border border-gray-100 no-underline">
              <h3 class="text-xl font-bold text-gray-900 mb-2">Insurance Planning</h3>
              <p class="text-gray-600">Life, disability, and long-term care insurance planning for complete protection.</p>
            </a>
            
            <a href="{{ get_permalink(25) }}" class="block p-6 bg-white rounded-xl shadow-sm hover:shadow-lg transition border border-gray-100 no-underline">
              <h3 class="text-xl font-bold text-gray-900 mb-2">College Planning</h3>
              <p class="text-gray-600">Education funding strategies to help prepare for your children's future.</p>
            </a>
            
            <a href="{{ get_permalink(26) }}" class="block p-6 bg-white rounded-xl shadow-sm hover:shadow-lg transition border border-gray-100 no-underline">
              <h3 class="text-xl font-bold text-gray-900 mb-2">Team Approach</h3>
              <p class="text-gray-600">Coordination with your CPA, attorney, and other professionals for holistic planning.</p>
            </a>
          </div>
        </div>
      </section>
      
    </article>
  @endwhile
@endsection