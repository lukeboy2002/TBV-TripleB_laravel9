<div class="breadcrumb">
    <ul>
        <li class="flex items-center">
            <a href="{{ route('home') }}" class="py-2 px-3 font-bold text-xs text-center text-gray-900 dark:text-white hover:text-orange-500 hover:dark:text-orange-500 focus:ring-orange-500 focus:ring-4 focus:outline-none uppercase inactive">Home</a>

        <?php $link = "" ?>
        @for($i = 1; $i <= count(Request::segments()); $i++)
            @if($i < count(Request::segments()) & $i > 0)
                <?php $link .= "/" . Request::segment($i); ?>
                @if ($i == 1)
                    <a href="<?= $link ?>" class="py-2 font-bold text-xs text-center text-gray-900 dark:text-white hover:text-orange-500 hover:dark:text-orange-500 focus:ring-orange-500 focus:ring-4 focus:outline-none uppercase inactive"><i class="fa-solid fa-angles-right mr-2"></i>{{ ucwords(str_replace('-',' ',Request::segment($i)))}}</a>
                @else
                    <a href="<?= $link ?>" class="py-2 font-bold text-xs text-center text-gray-900 dark:text-white hover:text-orange-500 hover:dark:text-orange-500 focus:ring-orange-500 focus:ring-4 focus:outline-none uppercase inactive"><i class="fa-solid fa-angles-right mr-2"></i>{{ ucwords(str_replace('-',' ',Request::segment($i)))}}</a>
                @endif
            @else
                <a class="hidden sm:block py-2 px-3 font-bold text-xs text-center text-orange-500 uppercase active"><i class="fa-solid fa-angles-right mr-2"></i>{{ucwords(str_replace('-',' ',Request::segment($i)))}}&nbsp;</a>
            @endif
        @endfor
        </li>
    </ul>
</div>
