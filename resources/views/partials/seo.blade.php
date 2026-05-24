@php
    $pageTitle = trim($__env->yieldContent('title'));
    if(empty($pageTitle)) $pageTitle = 'Portofolio Darz - Full Stack Developer';

    $pageDesc = trim($__env->yieldContent('description'));
    if(empty($pageDesc)) $pageDesc = 'Portofolio digital Darz, seorang Full Stack Developer & AI Enthusiast yang membangun solusi digital elegan.';
@endphp

<title>{{ $pageTitle }}</title>
<meta name="description" content="{{ $pageDesc }}">
<meta property="og:title" content="{{ $pageTitle }}">
<meta property="og:description" content="{{ $pageDesc }}">
<meta property="og:type" content="website">
<meta name="twitter:card" content="summary">
<meta name="twitter:title" content="{{ $pageTitle }}">
<meta name="twitter:description" content="{{ $pageDesc }}">

@if(Route::currentRouteName() === 'projects.show' && isset($project))
<script type="application/ld+json">
{
  "@@context": "https://schema.org",
  "@type": "CreativeWork",
  "name": "{{ $project->title }}",
  "description": "{{ Str::limit($project->description, 150) }}",
  "url": "{{ $project->project_url ?? url()->current() }}",
  "author": {
    "@type": "Person",
    "name": "Darz"
  }
}
</script>
@else
<script type="application/ld+json">
{
  "@@context": "https://schema.org",
  "@type": "Person",
  "name": "Darz",
  "url": "{{ url('/') }}",
  "jobTitle": "Full Stack Developer",
  "sameAs": [
    "https://linkedin.com/in/darz",
    "https://github.com/darz"
  ]
}
</script>
@endif
