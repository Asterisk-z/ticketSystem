<div class="table-responsive">
    <table class="table no-border">
        <thead>
            <tr class="text-uppercase bg-lightest">
                <th><span class="text-dark">Subgect</span></th>
                <th><span class="text-fade">Message</span></th>
                {{-- <th><span class="text-fade">Replies</span></th> --}}
                <th><span class="text-fade">Status</span></th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            @if (count($tickets) > 0)
                @foreach ($tickets as $ticket)
                    <tr>
                        <td>
                            <div class="d-flex align-items-center">

                                <div>
                                    <a href="{{ route('guest.ticket', $ticket->uuid) }}"
                                        class="text-dark fw-600 hover-primary mb-1 fs-16">
                                        {{ $ticket->subject }}</a>
                                    <span class="text-fade d-block">Ticket Id = {{ $ticket->uuid }}</span>
                                </div>
                            </div>
                        </td>
                        <td>
                            {{ $ticket->message }}
                        </td>
                        {{-- <td>
                            {{ count($ticket->replies) }}
                        </td> --}}
                        <td>
                            <span class="badge badge-success badge-lg">{{ $ticket->status }}</span>
                        </td>
                        <td>

                        </td>
                        <td>
                            {{-- <div class="d-flex justify-content-end gap-items-1">
                                <a href="#" class="waves-effect waves-light btn btn-primary btn-xs btn-circle"><span
                                        class="icon-Bookmark"></span></a>
                                <a href="#" class="waves-effect waves-light btn btn-primary btn-xs btn-circle"><span
                                        class="icon-Arrow-right"><span class="path1"></span><span
                                            class="path2"></span></span></a>
                            </div> --}}
                        </td>
                    </tr>
                @endforeach

            @else
                <tr>
                    <td colspan="4">
                        <div class="d-flex align-items-center">
                            <div>
                                <a href="#" class="text-dark fw-600 hover-primary mb-1 fs-16">
                                    No Tickets</a>
                            </div>
                        </div>
                    </td>

                </tr>
            @endif


        </tbody>
    </table>
</div>
