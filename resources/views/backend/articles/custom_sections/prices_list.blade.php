<div class="page-content">
    <div class="row-fluid">
        <div class="span12">
             <!--PAGE CONTENT BEGINS-->
            <div class="row-fluid">

                <h3 class="header smaller lighter blue">
                    {{$admin_category->getTranslate('title')}}&nbsp;&nbsp;&nbsp;&nbsp;
                    @if( (Auth::user()->name) == 'root' )
                        <a href='{{ $url }}/categories/{{$type}}' class="line_none">
                            <button class="btn btn-mini btn-success">
                                <i class="icon-edit bigger-120"></i>
                            </button>
                        </a>
                    <a href='{{ $url }}/categories/{{$type}}' data-id="{{ $admin_category->id }}" class="category-delete">
                        <button class="btn btn-mini btn-danger"  >
                            <i class="icon-trash bigger-120"></i>
                        </button>
                    </a>
                    @endif
                </h3>
                <label class="control-label" for="form-field-select-2">Фильтр отелей</label>
                <select data-name='hotel_list' name="article_id_2" id="form-field-select-2">
                    <option value=""> Все отели
                    @if(isset($hotels))
                        @foreach($hotels as $hotel)
                            </option><option value="{{ $hotel->id }}" @if(Session::get('hotel_id') == $hotel->id)) selected="selected" @endIf> {{ $hotel->getTranslate('title') }} 
                        @endforeach
                    @endif
                    </option>
                </select>

                <div class="table-header">
                    {{ trans('backend.list_category') }} {{$admin_category->getTranslate('title')}}
                    <a href="{{ $url }}/articles/{{$type}}/create" class="line_none">
                        <button class="btn btn-warning">
                            <i class="icon-plus"></i>
                            {{ trans('backend.add_element') }} {{$admin_category->getTranslate('title')}}
                        </button>
                    </a>
                </div>
                <table id="sample-table-2" class="table table-striped table-bordered table-hover" >
                    <thead>
                    <tr>
                        <th class="center">
                            ID
                        </th>
                        <th class="center">Сезон</th>
                        <th class="center">Отель</th>
                        <th class="center">Номер</th>
                        <th class="center">Цена номера</th>
                        <th class="center">Цена за дополнительное место(за взрослого)</th>
                        <th class="center">Цена за дополнительное место (за ребенка)</th>
                        <th class="center">Одномесное поселение</th>
                        <th class="center">Статус</th>
                        <!-- <th>{{ trans('backend.priority') }}</th> -->
                        <th></th>
                    </tr>
                    </thead>

                    <tbody>
                        @foreach($admin_articles as $admin_article)
                            @if(Session::get('hotel_id') && isset($admin_article) && isset($admin_article->article_parent))
                                @if($admin_article->article_parent->article_parent->id == Session::get('hotel_id'))
                                    <tr>
                                        <td class="center">
                                            <label>
                                                <span class="lbl">{{ $admin_article->id }}</span>
                                            </label>
                                        </td>
                                        <td>
                                            @if($admin_article->article_parent) 
                                                {{ $admin_article->article_parent->getTranslate('title') }}
                                            @endif    
                                        
                                        <td  class="center">
                                            @if($admin_article->article_parent) 
                                                {{ $admin_article->article_parent->article_parent->getTranslate('title') }}
                                            @endif  
                                        </td>
                                        <td class="center">
                                            @if($admin_article->article_parent_price) 
                                                {{ $admin_article->article_parent_price->getTranslate('title')}}
                                            @endif                                 
                                        </td>
                                        <td  class="center">{{ $admin_article->getAttributeTranslate('base_price') }}</td>
                                        <td  class="center">{{ $admin_article->getAttributeTranslate('surchange') }}</td>
                                        <td  class="center">{{ $admin_article->getAttributeTranslate('surchange_children') }}</td>
                                        <td  class="center">{{ $admin_article->getAttributeTranslate('solo_settle') }}</td>
                                        <td class="center">
                                            @if($admin_article->active)
                                                <span class="badge badge-success"><i class="icon-ok bigger-120"></i></span>
                                            @else
                                                <span class="badge badge-important"><i class="icon-remove"></i></span>
                                            @endif
                                        </td>
                                        <td class="td-actions">
                                            <div class="hidden-phone visible-desktop action-buttons">
                                                <a class="green" href="{{ $url }}/articles/{{$type}}/{{$admin_article->id}}">
                                                    <i class="icon-pencil bigger-130"></i>
                                                </a>
                                                @if(!$admin_article->article_parent->getAttributeTranslate('base_season'))
                                                    <a href='{{ $url }}/articles/{{$type}}/{{$admin_article->id}}' data-id='{{$admin_article->id}}' class='resource-delete'>
                                                        <i class="icon-trash bigger-130"></i>
                                                    </a>
                                                @endif    
                                            </div>

                                            <div class="hidden-desktop visible-phone">
                                                <div class="inline position-relative">
                                                    <button class="btn btn-minier btn-yellow dropdown-toggle" data-toggle="dropdown">
                                                        <i class="icon-caret-down icon-only bigger-120"></i>
                                                    </button>

                                                    <ul class="dropdown-menu dropdown-icon-only dropdown-yellow pull-right dropdown-caret dropdown-close">
                                                        <li>
                                                            <a href="{{ $url }}/articles/{{$type}}/{{$admin_article->id}}" class="tooltip-info" data-rel="tooltip" title="View">
                                                                <span class="blue">
                                                                    <i class="icon-zoom-in bigger-120"></i>
                                                                </span>
                                                            </a>
                                                        </li>

                                                        <li>
                                                            <a href="{{ $url }}/articles/{{$type}}/{{$admin_article->id}}" class="tooltip-success" data-rel="tooltip" title="Edit">
                                                                <span class="green">
                                                                    <i class="icon-edit bigger-120"></i>
                                                                </span>
                                                            </a>
                                                        </li>
                                                        @if(!$admin_article->getAttributeTranslate('base_season'))
                                                            <li>
                                                                <a href='{{ $url }}/articles/{{$type}}/{{$admin_article->id}}' data-id='{{$admin_article->id}}' class='resource-delete' class="tooltip-error" data-rel="tooltip" title="Delete">
                                                                    <span class="red">
                                                                        <i class="icon-trash bigger-120"></i>
                                                                    </span>
                                                                </a>
                                                            </li>
                                                        @endif    
                                                    </ul>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                @endif
                            @else
                                <tr>
                                    <td class="center">
                                        <label>
                                            <span class="lbl">{{ $admin_article->id }}</span>
                                        </label>
                                    </td>
                                    <td>
                                        @if($admin_article->article_parent) 
                                            {{ $admin_article->article_parent->getTranslate('title') }}
                                        @endif    
                                    
                                    <td  class="center">
                                        @if($admin_article->article_parent) 
                                            {{ $admin_article->article_parent->article_parent->getTranslate('title') }}
                                        @endif  
                                    </td>
                                    <td class="center">
                                        @if($admin_article->article_parent_price) 
                                            {{ $admin_article->article_parent_price->getTranslate('title')}}
                                        @endif                                 
                                    </td>
                                    <td  class="center">{{ $admin_article->getAttributeTranslate('base_price') }}</td>
                                    <td  class="center">{{ $admin_article->getAttributeTranslate('surchange') }}</td>
                                    <td  class="center">{{ $admin_article->getAttributeTranslate('surchange_children') }}</td>
                                    <td  class="center">{{ $admin_article->getAttributeTranslate('solo_settle') }}</td>
                                    <td class="center">
                                        @if($admin_article->active)
                                            <span class="badge badge-success"><i class="icon-ok bigger-120"></i></span>
                                        @else
                                            <span class="badge badge-important"><i class="icon-remove"></i></span>
                                        @endif
                                    </td>
                                    <td class="td-actions">
                                        <div class="hidden-phone visible-desktop action-buttons">
                                            <a class="green" href="{{ $url }}/articles/{{$type}}/{{$admin_article->id}}">
                                                <i class="icon-pencil bigger-130"></i>
                                            </a>
                                            @if(!$admin_article->article_parent->getAttributeTranslate('base_season'))
                                                <a href='{{ $url }}/articles/{{$type}}/{{$admin_article->id}}' data-id='{{$admin_article->id}}' class='resource-delete'>
                                                    <i class="icon-trash bigger-130"></i>
                                                </a>
                                            @endif
                                        </div>

                                        <div class="hidden-desktop visible-phone">
                                            <div class="inline position-relative">
                                                <button class="btn btn-minier btn-yellow dropdown-toggle" data-toggle="dropdown">
                                                    <i class="icon-caret-down icon-only bigger-120"></i>
                                                </button>

                                                <ul class="dropdown-menu dropdown-icon-only dropdown-yellow pull-right dropdown-caret dropdown-close">
                                                    <li>
                                                        <a href="{{ $url }}/articles/{{$type}}/{{$admin_article->id}}" class="tooltip-info" data-rel="tooltip" title="View">
                                                            <span class="blue">
                                                                <i class="icon-zoom-in bigger-120"></i>
                                                            </span>
                                                        </a>
                                                    </li>

                                                    <li>
                                                        <a href="{{ $url }}/articles/{{$type}}/{{$admin_article->id}}" class="tooltip-success" data-rel="tooltip" title="Edit">
                                                            <span class="green">
                                                                <i class="icon-edit bigger-120"></i>
                                                            </span>
                                                        </a>
                                                    </li>
                                                    @if(!$admin_article->getAttributeTranslate('base_season'))
                                                        <li>
                                                            <a href='{{ $url }}/articles/{{$type}}/{{$admin_article->id}}' data-id='{{$admin_article->id}}' class='resource-delete' class="tooltip-error" data-rel="tooltip" title="Delete">
                                                                <span class="red">
                                                                    <i class="icon-trash bigger-120"></i>
                                                                </span>
                                                            </a>
                                                        </li>
                                                    @endif    
                                                </ul>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                            @endif

                         @endforeach
                    </tbody>
                </table>
            </div>
         <!--PAGE CONTENT ENDS-->
        </div><!--/.span-->
    </div><!--/.row-fluid-->
</div>
<div id="token" style="display: none">{{csrf_token()}}</div>

<script>
    $( document ).ready(function() {
        $(function(){
            var oTable1 = $('#sample-table-2').dataTable( {
                "aaSorting": [[1,'asc']],
                "iDisplayLength": 25,
                "aoColumns": [
                    { "bSortable": false },
                    null, null,null, null,null,null,null,null,
                    { "bSortable": false }
                ] } );
        });
    })
</script>