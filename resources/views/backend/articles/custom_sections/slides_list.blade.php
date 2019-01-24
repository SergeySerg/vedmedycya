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
                        <a href='{{ $url }}/categories/{{$type}}' data-id="{{ $admin_category->id }}"
                           class="category-delete">
                            <button class="btn btn-mini btn-danger">
                                <i class="icon-trash bigger-120"></i>
                            </button>
                        </a>
                    @endif

                </h3>
                <label class="control-label" for="form-field-select-2">Фільтр готелів</label>
                <select data-name='slides_list' name="article_id_2" id="form-field-select-2">
                    <option value="all" @if(Session::get('base_hotel_id') == 'all'))
                            selected="selected" @endIf> Всі готелі</option>
                    <option value="null" @if(Session::get('base_hotel_id') == 'null'))
                            selected="selected" @endIf> Brand Page</option>
                        @if(isset($hotels))
                            @foreach($hotels as $hotel)
                                @if($hotel->getAttributeTranslate('is_base_hotel'))
                                    <option value="{{ $hotel->id }}" @if(Session::get('base_hotel_id') == $hotel->id))
                                            selected="selected" @endIf>
                                        {{ $hotel->getTranslate('title') }}
                                    </option>
                                @endif
                            @endforeach
                        @endif

                </select>
                <label class="control-label" for="form-field-select-2">Фільтр сезонів</label>
                <select data-name='season_list' id="form-field-select-3">
                    <option value="all" @if(Session::get('season') == 'all'))selected="selected" @endIf></option>
                    <option value="is_winter" @if(Session::get('season') == 'is_winter')selected="selected" @endIf> Зима</option>
                    <option value="is_spring" @if(Session::get('season') == 'is_spring')selected="selected" @endIf> Весна</option>
                    <option value="is_summer" @if(Session::get('season') == 'is_summer')selected="selected" @endIf> Літо</option>
                    <option value="is_autumn" @if(Session::get('season') == 'is_autumn')selected="selected" @endIf> Осінь</option>
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
                <table id="sample-table-2" class="table table-striped table-bordered table-hover">
                    <thead>
                    <tr>
                        <th class="center">
                            ID
                        </th>
                        <th class="center">{{ trans('backend.title') }}</th>
                        <th class="center">Відображення на Brand Page</th>
                        <th class="center">Готель</th>
                        <th class="center">Сезон</th>
                        <th class="center">{{ trans('backend.status') }}</th>
                        <th>{{ trans('backend.priority') }}</th>
                        <th></th>
                    </tr>
                    </thead>

                    <tbody>
                    @foreach($admin_articles as $admin_article)
                        @if(Session::get('base_hotel_id') AND Session::get('base_hotel_id') != 'all')
                            @if($admin_article->article_id == Session::get('base_hotel_id'))
                                @include('backend.articles.custom_sections.row_for_slider_list')
                            @endif
                        @else
                            @include('backend.articles.custom_sections.row_for_slider_list')
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
