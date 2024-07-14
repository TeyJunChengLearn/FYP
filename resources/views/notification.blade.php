@php
    use App\Models\ForumPost;
    use App\Models\Announcement;
    use App\Models\LostAndFoundAnnouncement;
@endphp

@extends('layouts.forumlayout')
@section('css')
<link rel="stylesheet" href="/css/test.css">
<link rel="stylesheet" href="/css/nologin.css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

<style>
       .notification-list {
            display: flex;
            flex-direction: column;
            gap: 1rem; /* Adds space between notification items */
        }

        .notification-link {
            text-decoration: none; /* Removes underline from the link */
            color: inherit; /* Inherits the color of the parent element */
        }

        .notification-item {
            padding: 1rem;
            background-color: white; /* Light background color */
            border: 1px solid #e9ecef; /* Border for the notification container */
            border-radius: 0.25rem; /* Rounded corners */
            transition: background-color 0.3s; /* Smooth transition on hover */
        }

        .notification-item:hover {
            background-color: #e2e6ea; /* Slightly darker background on hover */
        }

</style>
@endsection
@section('content')
<body style="background-color: #fff8f2">
<div class="container m-5">
    <h4>Notifications</h4>
    <div class="notification-list">
        @forelse ($notifications as $notification)
            <a href="{{ route('notifications.show', $notification->id) }}" class="notification-link">
                <div class="notification-item">
                    {{ $notification->data['description'] }} (a new comment left on
                    @if ($notification->data['forumpost_id'])
                        @php
                            $forumPost = ForumPost::find($notification->data['forumpost_id']);
                        @endphp
                        {{ $forumPost->title }})
                    @endif
                    @if ($notification->data['lostandfoundannouncement_id'])
                        @php
                            $lostAndFoundAnnouncement = LostAndFoundAnnouncement::find($notification->data['lostandfoundannouncement_id']);
                        @endphp
                        {{ $lostAndFoundAnnouncement->title }})
                    @endif
                    @if ($notification->data['announcement_id'])
                        @php
                            $announcement = Announcement::find($notification->data['announcement_id']);
                        @endphp
                        {{ $announcement->title }})
                    @endif
                </div>
            </a>
        @empty
            <div class="notification-item">No new notifications</div>
        @endforelse
    </div>
</div>
</body>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/5.3.3/js/bootstrap.min.js"></script>


@endsection
