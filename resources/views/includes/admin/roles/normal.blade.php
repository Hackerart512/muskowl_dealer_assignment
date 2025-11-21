@if (Auth::guard('admin')->user()->role_id != 0)

@if (Auth::guard('admin')->user()->sectionCheck('score_team'))
<li>
    <a href="{{route('admin-score-index')}}" class=" wave-effect"><i class="fas fa-user-tag"></i>{{ __('Score Team') }}</a>
</li>
@endif

@if (Auth::guard('admin')->user()->sectionCheck('manage_staffs'))
<li>
    <a href="{{ route('admin-staff-index') }}" class=" wave-effect"><i class="fas fa-user-secret"></i>{{ __('Manage Staffs') }}</a>
</li>
<li>
    <a href="{{route('admin-team-index')}}" class="wave-effect"><i class="fas fa-users"></i>{{ __('My Team') }}</a>
</li>
@endif
@if (Auth::guard('admin')->user()->sectionCheck('assign_kpi'))
<li>
    <!-- Key performance indigator -->
    <a href="{{route('admin-kpi-index')}}" class=" wave-effect"><i class="fas fa-chart-line"></i>{{ __('Assign KPI') }}</a> 
</li>
@endif
@if (Auth::guard('admin')->user()->sectionCheck('assign_course'))
<li>
    <a href="{{ route('admin-course-folderview') }}" class=" wave-effect"><i class="fas fa-user-graduate"></i>{{ __('Assign Cources') }}</a>
</li>
@endif


<li>
    <a href="{{ route('admin-kpi-mykpi') }}" class=" wave-effect"><i class="fas fa-chart-line"></i>{{ __('My KPIs') }}</a>
</li>

<li>
    <a href="{{route('kpi-report-view')}}" class=" wave-effect"><i class="fas fa-user-secret"></i>{{ __('My Report') }}</a>
</li>

<li>
    <a href="{{route('admin-course-folderview')}}" class=" wave-effect"><i class="fas fa-user-graduate"></i>{{ __('My Course') }}</a>
</li>


@if (Auth::guard('admin')->user()->sectionCheck('report_to_admin'))
<li>
    <a href="#" class=" wave-effect"><i class="fas fa-list"></i> {{ __('Report To Admin') }}</a>
</li>
@endif

<li>
    <a href="{{ route('admin-glossary-view') }}" class=" wave-effect"><i class="fas fa-list"></i> {{ __('Glossary') }}</a>
</li>



@endif