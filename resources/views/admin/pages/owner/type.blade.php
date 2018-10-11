@foreach ($categories as $category_list)

    <option value="{{$category_list->id or ""}}"

            @if(isset($type->id))

                @if ($type->parent_id == $category_list->id)
                selected=""
                @endif

                @if ($type->id == $category_list->id)
                hidden=""
                @endif

            @endif

    >
        {!! $delimiter or "" !!}{{$category_list->name or ""}}
    </option>

    @if (count($category_list->children) > 0)

        @include('admin.pages.owner.type', [
          'categories' => $category_list->children,
          'delimiter'  => ' - ' . $delimiter
        ])

    @endif
@endforeach

