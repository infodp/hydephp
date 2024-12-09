@extends('hyde::layouts.app')

@section('content')

<main id="content" class="mx-auto max-w-7xl py-16 px-8">        
    <div class="relative">        
        <div class="overflow-hidden rounded-lg">
            <div class="flex transition-transform duration-500" id="slider">                
                <div class="w-full flex-shrink-0">
                    <img src="https://placehold.co/800x400/000000/fffC00?text=JAVASCRIPT" alt="Slide 1" class="w-full object-cover">
                </div>                
                <div class="w-full flex-shrink-0">
                    <img src="https://placehold.co/800x400/5D26C1/12c2e9?text=PYTHON" alt="Slide 2" class="w-full object-cover">
                </div>                
                <div class="w-full flex-shrink-0">
                    <img src="https://placehold.co/800x400/302b63/a17fe0?text=PHP" alt="Slide 3" class="w-full object-cover">
                </div>
            </div>
        </div>
        
        <button id="prev" class="absolute top-1/2 left-4 transform -translate-y-1/2 bg-gray-800 text-white px-3 py-2 rounded-full hover:bg-gray-700">
            &larr;
        </button>
        <button id="next" class="absolute top-1/2 right-4 transform -translate-y-1/2 bg-gray-800 text-white px-3 py-2 rounded-full hover:bg-gray-700">
            &rarr;
        </button>
    </div>
</main>

<script>
    document.addEventListener('DOMContentLoaded', () => {
        const slider = document.getElementById('slider');
        const prev = document.getElementById('prev');
        const next = document.getElementById('next');
        const slides = slider.children;
        const totalSlides = slides.length;
        let index = 0;

        const updateSlider = () => {
            slider.style.transform = `translateX(-${index * 100}%)`;
        };

        prev.addEventListener('click', () => {
            index = (index > 0) ? index - 1 : totalSlides - 1;
            updateSlider();
        });

        next.addEventListener('click', () => {
            index = (index < totalSlides - 1) ? index + 1 : 0;
            updateSlider();
        });
    });
</script>

@endsection
