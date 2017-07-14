

<ul class="nav nav-pills">
        <li>
                @if(auth()->user()->role_id === 1)
                        {{ link_to_route('admin.panel', 'Administración', []) }}
                @endif
        </li>
        <li>{{ link_to_route('home', 'Dashboard', []) }}</li>
        <li>{{ link_to_action('admin\ProfessorController@index','Docentes', []) }}</li>
        <li>{{ link_to_action('admin\SubjectController@index', 'Asignatruas', []) }}</li>
</ul>


