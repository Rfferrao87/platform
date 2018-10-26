{{-- @if(!empty($childs) && Dashboard::menu()->showCountElement($slug)) --}}

@isset($groupname)
    <li class="nav-item m-t">
        <div class="hidden-folded padder m-t-xs m-b-xs text-muted text-xs m-l">{{ __($groupname) }}</div>
    </li>
@endisset
    <li class="nav-item @isset($active) {{active($active)}} @endisset">
        <a class="nav-link"
            @if (!empty($childs))
                href="#menu-{{$slug}}" data-toggle="collapse"
            @else
                href="{{$route ?? '#'}}"
            @endif
        >
            @isset($badge)
                <b class="badge {{$badge['class']}} pull-right">{{$badge['data']()}}</b>
            @endisset
            <i class="{{$icon}} m-r-xs"></i>
            {{ __($label) }}
        </a>
        @if (!empty($childs))
            <div class="collapse sub-menu" id="menu-{{$slug}}" data-parent="#headerMenuCollapse">
                @isset($groupname)
                    <div class="hidden-folded padder m-t-xs m-b-xs text-muted text-xs">{{ __($groupname) }}</div>
                @endisset
                {!! Dashboard::menu()->render($slug,'platform::partials.dropdownMenu') !!}
            </div>
        @endif
    </li>
@isset($divider)
    <li class="divider b-t b-dark"></li>
@endisset
{{-- @endif --}}