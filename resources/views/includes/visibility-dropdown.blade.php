<div class="btn-group">
    <button class="btn btn-sm btn-outline-twitter dropdown-toggle"
            type="button"
            id="visibilityDropdownButton"
            data-mdb-toggle="dropdown"
            aria-expanded="false"
    >
        <i class="fa fa-{{['globe-americas', 'lock-open', 'user-friends', 'lock'][auth()->user()?->default_status_visibility ?? 0]}}"
           aria-hidden="true"></i>
    </button>
    <ul class="dropdown-menu" aria-labelledby="visibilityDropdownButton">
        @foreach(\App\Enum\StatusVisibility::getList() as $visibility)
            @if(auth()->check() && auth()->user()->default_status_visibility <= $visibility)
                <li class="dropdown-item trwl-visibility-item" data-trwl-visibility="{{$visibility}}">
                    <i class="fa fa-{{['globe-americas', 'lock-open', 'user-friends', 'lock'][$visibility]}}"
                       aria-hidden="true"></i> {{ __('status.visibility.' . $visibility) }}
                    <br/>
                    <span class="text-muted"> {{ __('status.visibility.' . $visibility . '.detail') }}</span>
                </li>
            @endif
        @endforeach
    </ul>
    <input type="hidden" id="checkinVisibility" name="checkinVisibility"
           value="{{auth()->user()?->default_status_visibility ?? 0}}"/>
</div>
