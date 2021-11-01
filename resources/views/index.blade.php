@extends('layouts.app')

@section('content')
  @include('components.hero_home')
  @include('components.our-partners')
  @include('components.features')
  @include('components.testimonial')
  @include('components.achievements')
  @include('components.headline')
  @include('components.trends')
  @include('components.download')
  
  
  {{-- @if (!have_posts())
    <div class="alert alert-warning">
      {{ __('Sorry, no results were found.', 'sage') }}
    </div>
    {!! get_search_form(false) !!}
  @endif

  @while (have_posts()) @php the_post() @endphp
    @include('partials.content-'.get_post_type())
  @endwhile

  {!! get_the_posts_navigation() !!} --}}
@endsection