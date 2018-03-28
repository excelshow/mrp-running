<tr>
    <td>
        <a href="{{ route('events.show', $event->slug) }}" style="text-decoration: none;">
            <h5>{{ $event->name }}</h5>
        </a>
    </td>
    <td> {{ $event->union }} </td>
    <td> {{ $event->client->first_name }} {{ $event->client->last_name }} </td>

    <td>
        <a href="{{ route('events.code', $event->slug) }}" target="blank">
            <span class="label label-danger">{{ $event->code }}</span>
        </a>
    </td>
    
    <td class="center"> 
        @php
            $start = str_replace('/', '-', $event->start);
            $date = date('d M Y', strtotime($start));
        @endphp
        {{ $date }}
    </td>

    <td> 
        @php
            $status = 'primary';
            if($event->status == 'planned' || $event->status == 'upcoming') {
                $status = 'primary';
            } else if ($event->status == 'active') {
                $status = 'success';
            } else if ($event->status == 'completed') {
                $status = 'danger';
            } else {
                $status = 'info';
            }
        @endphp
        <span class="label label-md label-{{ $status }}">
            {{ __(ucwords($event->status)) }}
        </span>
    </td>

    <td>
        <div class="dropdown pull-right">
            <a href="#" class="dropdown-toggle card-drop" data-toggle="dropdown" aria-expanded="false">
                <i class="zmdi zmdi-more-vert"></i>
            </a>
            <ul class="dropdown-menu" role="menu">
                <li>
                    <a href="{{ route('events.show', $event->slug) }}">
                        {{ __('View Details') }}
                    </a>
                </li>
                {{-- <li>
                    <a href="{{ route('headlines.index', $event->slug) }}">
                        Headlines 
                    </a>
                </li> --}}
                <li>
                    <a href="{{ route('topics.index', $event->slug) }}">
                        {{ __('Topics') }}
                    </a>
                </li>
                <li>
                    <a href="{{ route('participants.index', $event->slug) }}">
                        {{ __('Participants') }}
                    </a>
                </li>
                <li>
                    <a href="{{ route('events.invitations', $event->slug) }}">
                        {{ __('Invitations') }}
                    </a>
                </li>
                <li>
                    <a href="{{ route('editorial-teams.index', $event->slug) }}">
                        {{ __('Editorial Teams') }} 
                    </a>
                </li>
                <li>
                    <a href="{{ route('events.reporting', $event->slug) }}">
                        {{ __('Reporting') }} 
                    </a>
                </li>
                <li class="divider"></li>
                <li>
                    <a href="{{ route('events.permissions', $event->slug) }}">
                        {{ __('Permissions') }} 
                    </a>
                    <a href="{{ route('events.settings', $event->slug) }}">
                        {{ __('Settings') }} 
                    </a>
                </li>
                <li class="divider"></li>
                <li>
                    <a href="{{ route('admin.events.edit', $event->id) }}">
                        {{ __('Edit') }} 
                    </a>
                </li>
                <li>
                    <a class="remove-event" data-id="{{ encrypt($event->id) }}">
                        {{ __('Delete') }} 
                    </a>
                </li>
                <li class="divider"></li>
                {{-- @if($event->status == 'planned' || $event->status == 'upcoming')
                @else
                @endif --}}
                <li>
                    <a class="btn-change-event" data-toggle="modal" href="#modal-change-event" data-event-status="upcoming" data-event-id="{{ encrypt($event->id) }}" data-event-name="{{ $event->name }}">
                        {{ __('Set as Upcoming') }}
                    </a>
                </li>
                {{-- <li>
                    <a class="btn-change-event" data-toggle="modal" href="#modal-change-event" data-event-status="planned" data-event-id="{{ encrypt($event->id) }}" data-event-name="{{ $event->name }}">
                        {{ __('Set as Planned') }}
                    </a>
                </li> --}}
                <li>
                    <a class="btn-change-event" data-toggle="modal" href="#modal-change-event" data-event-status="active" data-event-id="{{ encrypt($event->id) }}" data-event-name="{{ $event->name }}">
                        {{ __('Set as Active') }} 
                    </a>
                </li>
                <li>
                    <a class="btn-change-event" data-toggle="modal" href="#modal-change-event" data-event-status="completed" data-event-id="{{ encrypt($event->id) }}" data-event-name="{{ $event->name }}">
                        {{ __('Set as Completed') }}
                    </a>
                </li>
            </ul>
        </div>
    </td>
</tr>