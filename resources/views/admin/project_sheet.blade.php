<style>
    body { font-size: 0.8em }
</style>

<h1>Project Sheet: {{ $project->formattedID() }}</h1>
<h3>Requested by: {{ $project->requester_name }} - {{ $project->requester_email }}</h3>
<h4>Evaluated by: {{ $evaluator }}</h4>
<hr>
<table width="100%">
    <tr>
        <td width="50%" valign="top">
            <b>Project:</b>
            <p>{{ $project->location_address }}<br />
            {{ $project->location_city }}, {{ $project->location_state }} {{ $project->location_zipcode }}<br />
            <b>Point of Contact:</b> {{ $project->event_poc }} ({{$project->event_phone}})<br />
            <b>Description:</b> {{ $project->project_description }}<br />
            <b>Date/Time:</b> {{ $project->workdate->formattedDate() }} - {{ $project->project_time }}<br /></p>
        </td>
        <td valign="top">
            <b>Volunteers:</b><br />
            <ul>
                @foreach ($project->volunteers as $vol)
                    <li>{{$vol->name}} ({{$vol->email}}) - {{$vol->phone}}</li>
                @endforeach
            </ul>

        </td>
    </tr>
</table>
<hr>
<table width="100%">
    <tr>
        <td width="50%" valign="top">
            <b>Materials Supplied:</b><br />
            {{ $project->materials_provided }}
        </td>
        <td valign="top">
            <b>Materials Needed:</b><br />
            {{ $project->materials_not_provided }}
        </td>
    </tr>
</table>
<hr>
<p><b>Directions:</b><br />
{{$project->project_direction}}</p>
<hr>
<p><b>Parking:</b><br />
    {{$project->project_parking}}</p>
<hr>
<p><b>How Volunteers will be used:</b><br />
    {{$project->volunteer_use}}</p>
<hr>
<p><b>Notes:</b><br />
    {{$project->notes}}</p>
