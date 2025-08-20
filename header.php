<!DOCTYPE html>
<html <?php language_attributes(); ?>>
  <head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php wp_head(); ?>
  </head>
  <body <?php body_class(); ?>>
    <?php wp_body_open(); ?>
    <!-- Sticky Navigation -->
    <nav class="sticky top-0 z-50 bg-white/80 backdrop-blur border-b border-gray-200">
      <div class="max-w-6xl mx-auto px-4">
        <div class="flex items-center justify-between py-3">
          <a href="<?php echo esc_url( home_url('/#top') ); ?>" class="font-semibold text-gray-900 hover:text-teal-600">Allied Business Management</a>
          <div class="hidden md:flex items-center gap-6 text-sm">
            <a href="<?php echo esc_url( home_url('/#about') ); ?>" class="text-gray-700 hover:text-teal-600">About</a>
            <a href="<?php echo esc_url( home_url('/#services') ); ?>" class="text-gray-700 hover:text-teal-600">Services</a>
            <a href="<?php echo esc_url( home_url('/#why') ); ?>" class="text-gray-700 hover:text-teal-600">Why Us</a>
            <a href="<?php echo esc_url( home_url('/#testimonials') ); ?>" class="text-gray-700 hover:text-teal-600">Testimonials</a>
            <a href="<?php echo esc_url( home_url('/#contact') ); ?>" class="inline-flex items-center rounded-md bg-teal-600 px-3 py-2 text-white hover:bg-teal-700 transition">Schedule</a>
          </div>
          <button id="mobileMenuBtn" class="md:hidden inline-flex items-center justify-center rounded-md p-2 text-gray-700 hover:text-teal-600" aria-label="Toggle menu">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" /></svg>
          </button>
        </div>
        <div id="mobileMenu" class="md:hidden hidden pb-4 text-sm">
          <div class="grid gap-2">
            <a href="<?php echo esc_url( home_url('/#about') ); ?>" class="block py-2 text-gray-700 hover:text-teal-600">About</a>
            <a href="<?php echo esc_url( home_url('/#services') ); ?>" class="block py-2 text-gray-700 hover:text-teal-600">Services</a>
            <a href="<?php echo esc_url( home_url('/#why') ); ?>" class="block py-2 text-gray-700 hover:text-teal-600">Why Us</a>
            <a href="<?php echo esc_url( home_url('/#testimonials') ); ?>" class="block py-2 text-gray-700 hover:text-teal-600">Testimonials</a>
            <a href="<?php echo esc_url( home_url('/#contact') ); ?>" class="inline-flex w-max items-center rounded-md bg-teal-600 px-3 py-2 text-white hover:bg-teal-700 transition">Schedule</a>
          </div>
        </div>
      </div>
    </nav>