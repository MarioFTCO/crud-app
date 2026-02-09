@props(['type' => 'info'])

@php
  switch ($type) {
    case 'success':
      $class = 'bg-green-200 text-green-800';
      break;
    case 'error':
      $class = 'bg-red-200 text-red-800';
      break;
    case 'warning':
      $class = 'bg-yellow-200 text-yellow-800';
      break;

    case 'dark':
      $class = 'bg-gray-800 text-gray-100';
      break;
    case 'info':
    default:
      $class = 'bg-blue-200 text-blue-800';
      break;
  }
@endphp

<div class="p-4 m-4 text-sm w-max-12 text-fg-brand-strong rounded-lg {{ $class }}" role="alert">
  <span class="font-medium">{{ $title ?? 'Info alert!' }}</span> {{ $message ?? 'Change a few things up and try submitting again.' }}
</div>