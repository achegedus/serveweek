<h3>Project Registered</h3>
<p>The following project was just submitted for ServeWeek:</p>

<bold>{{$project->formattedID()}}</bold>
<ul>
    <li><strong>Request:</strong>
        <ul>
            <li><strong>Requester Org:</strong> {{ $project->requester_organization }}</li>
            <li><strong>Requester Name:</strong> {{ $project->requester_name }}</li>
            <li><strong>Requester Email:</strong> {{ $project->requester_email }}</li>
            <li><strong>Requester Church:</strong> {{ $project->requester_church }}</li>
            <li><strong>Event POC:</strong> {{ $project->event_poc }}</li>
            <li><strong>Event Phone:</strong> {{ $project->event_phone }}</li>
        </ul>
    </li>
    <li><strong>Location:</strong>
        <ul>
            <li><strong>Address:</strong> {{ $project->location_address }}</li>
            <li><strong>City:</strong> {{ $project->location_city }}</li>
            <li><strong>State:</strong> {{ $project->location_state }}</li>
            <li><strong>Zip:</strong> {{ $project->location_zipcode }}</li>
            <li><strong>Phone:</strong> {{ $project->location_phone }}</li>
        </ul>
    </li>
    <li><strong>Details:</strong>
        <ul>
            <li><strong>Project Date:</strong> {{ $project->workdate->formattedDate() }}</li>
            <li><strong>Description:</strong> {{ $project->project_description }}</li>
            <li><strong>Directions:</strong> {{ $project->project_direction }}</li>
            <li><strong>Parking:</strong> {{ $project->project_parking }}</li>
            <li><strong>Volunteers:</strong> {{ $project->volunteers_needed }}</li>
            <li><strong>Volunteer Use:</strong> {{ $project->volunteer_use }}</li>
            <li><strong>Skills Requested:</strong> {{ $project->skills_requested }}</li>
            <li><strong>Materials Provided:</strong> {{ $project->materials_provided }}</li>
            <li><strong>Materials Not Provided:</strong> {{ $project->materials_not_provided }}</li>
        </ul>
    </li>
</ul>
