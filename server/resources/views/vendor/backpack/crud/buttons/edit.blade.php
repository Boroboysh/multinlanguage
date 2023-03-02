@if ($crud->hasAccess('edit'))
  <a href="{{ url($crud->route.'/'.$entry->getKey().'/edit') }}" class="btn btn-sm btn-link text-capitalize"><i class="la la-question"></i> edit</a>
@endif