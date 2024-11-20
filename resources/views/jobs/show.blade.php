<x-layout>
    <x-slot:heading>
        Job
    </x-slot:heading>
   <h2 class='font-bold text-lg'>{{ $job->title }}</h2>
   <p>
    This Job Pays {{ $job->salary }} per year.
    </p>
    <p class="mt-6">
        <x-button href="/jobs/{{ $job->id }}/edit">Edit Jobs</x-button>
    </p>
</x-layout>
