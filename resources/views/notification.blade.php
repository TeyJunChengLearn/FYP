@php
    use App\Models\ForumPost;
    use App\Models\Announcement;
    use App\Models\LostAndFoundAnnouncement;
@endphp

@extends('layouts.forumlayout')
@section('css')
<link rel="stylesheet" href="/css/test.css">
<link rel="stylesheet" href="/css/nologin.css">
@endsection
@section('content')
    <div class="container">
        <h1>Notifications</h1>
        <ul class="list-group">
            @forelse ($notifications as $notification)
                <a href="{{ route('notifications.show', $notification->id) }}" class="btn btn-primary btn-sm float-right">
                    <li class="list-group-item">
                        {{ $notification->data['description'] }}|
                        @if ($notification->data['forumpost_id'])
                            @php
                                $forumPost = ForumPost::find($notification->data['forumpost_id']);
                            @endphp
                            {{ $forumPost->title }}
                        @endif
                        @if ($notification->data['lostandfoundannouncement_id'])
                            @php
                                $lostAndFoundAnnouncement = LostAndFoundAnnouncement::find($notification->data['lostandfoundannouncement_id']);
                            @endphp
                                {{ $lostAndFoundAnnouncement->title }}
                        @endif
                        @if ($notification->data['announcement_id'])
                            @php
                                $announcement = Announcement::find($notification->data['announcement_id']);
                            @endphp
                                {{ $announcement->title }}
                        @endif
                </li>
            </a>
            @empty
                <li class="list-group-item">No new notifications</li>
            @endforelse
        </ul>
    </div>
@endsection
