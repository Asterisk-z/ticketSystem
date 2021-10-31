<div class="box box-widget widget-user-2">
    <div class="widget-user-header bg-secondary-light">
        <div class="widget-user-image">
            <div class="rounded-circle bg-danger w-25 text-center fs-26">
                {{ $guest->avatar() }}
            </div>
        </div>
    </div>
    <div class="box-footer no-padding">
        <ul class="nav d-block nav-stacked fs-16" id="pills-tab23" role="tablist">
            <li class="nav-item bb-1">
                <a class="py-10 nav-link active" id="pills-edit-tab" data-bs-toggle="pill" href="#pills-courses"
                    role="tab" aria-controls="pills-edit" aria-selected="true">
                    <span class="me-10 icon-Edit"><span class="path1"></span><span
                            class="path2"></span></span>My Tickets
                </a>
            </li>
            <li class="nav-item bb-1">
                <a class="py-10 nav-link" id="pills-courses-tab" data-bs-toggle="pill" href="#pills-edit" role="tab"
                    aria-controls="pills-courses" aria-selected="true">
                    <span class="me-10 icon-Book-open"><span class="path1"></span><span
                            class="path2"></span></span>Send Ticket
                </a>
            </li>
        </ul>
    </div>
</div>
