<tr>
        <td class="center">
            <label>
                <span class="lbl">{{ $admin_article->id }}</span>
            </label>
        </td>
        <td>
            <a href="{{ $url }}/articles/{{$type}}/{{$admin_article->id}}">{!! $admin_article->getTranslate('title') !!}</a>
        </td>

        <td class="center">
            @if($admin_article->getAttributeTranslate('show_main_page') == 1)
                <span class="badge badge-success"><i class="icon-ok bigger-120"></i></span>
            @else
                <span class="badge badge-important"><i class="icon-remove"></i></span>
            @endif
        </td>
        <td class="center">
            @if($admin_article->article_parent)
                {{ $admin_article->article_parent->getTranslate('title') }}
            @endif
        </td>
        <td class="center">
            @if($admin_article->getAttributeTranslate('is_summer'))
                Літо </br>
            @endif
            @if($admin_article->getAttributeTranslate('is_winter'))
                Зима</br>
            @endif
            @if($admin_article->getAttributeTranslate('is_autumn'))
                Осінь</br>
            @endif
            @if($admin_article->getAttributeTranslate('is_spring'))
                Весна</br>
            @endif
        </td>
        <td class="center">
            @if($admin_article->active)
                <span class="badge badge-success"><i class="icon-ok bigger-120"></i></span>
            @else
                <span class="badge badge-important"><i class="icon-remove"></i></span>
            @endif
        </td>
        <td class="center">
            {{ $admin_article->priority }}
        </td>
        <td class="td-actions">
            <div class="hidden-phone visible-desktop action-buttons">
                <a class="green" href="{{ $url }}/articles/{{$type}}/{{$admin_article->id}}">
                    <i class="icon-pencil bigger-130"></i>
                </a>
                <a href='{{ $url }}/articles/{{$type}}/{{$admin_article->id}}' data-id='{{$admin_article->id}}' class='resource-delete'>
                    <i class="icon-trash bigger-130"></i>
                </a>

            </div>

            <div class="hidden-desktop visible-phone">
                <div class="inline position-relative">
                    <button class="btn btn-minier btn-yellow dropdown-toggle"
                            data-toggle="dropdown">
                        <i class="icon-caret-down icon-only bigger-120"></i>
                    </button>
                    <ul class="dropdown-menu dropdown-icon-only dropdown-yellow pull-right dropdown-caret dropdown-close">
                        <li>
                            <a href="{{ $url }}/articles/{{$type}}/{{$admin_article->id}}"
                               class="tooltip-info" data-rel="tooltip" title="View">
                                                        <span class="blue">
                                                            <i class="icon-zoom-in bigger-120"></i>
                                                        </span>
                            </a>
                        </li>

                        <li>
                            <a href="{{ $url }}/articles/{{$type}}/{{$admin_article->id}}"
                               class="tooltip-success" data-rel="tooltip" title="Edit">
                                                        <span class="green">
                                                            <i class="icon-edit bigger-120"></i>
                                                        </span>
                            </a>
                        </li>
                        <li>
                            <a href='{{ $url }}/articles/{{$type}}/{{$admin_article->id}}' data-id='{{$admin_article->id}}' class='resource-delete' class="tooltip-error" data-rel="tooltip" title="Delete">
                                                        <span class="red">
                                                            <i class="icon-trash bigger-120"></i>
                                                        </span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </td>
    </tr>
