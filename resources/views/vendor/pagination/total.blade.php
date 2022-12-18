<div class="col-md-4 ">
    <div class="mr-4">
        <p class="text-sm text-gray-700 mb-1 leading-5">
            {!! __('Jami  ') !!}
            <span class="font-medium">{{'- '. $paginator->total() }}</span>
            {!! __(' Mahsulotlardan, ') !!}
            <span class="font-medium">{{ $paginator->firstItem().' '.'va'.' ' }}</span>

            <span class="font-medium">{{ $paginator->lastItem() }}</span>
            {!! __('Oʻrtasidagi mahsulotlarlar koʻrsatilmoqda') !!}

        </p>
    </div>
</div>
