<p>商品名：{{ $productName }}</p>
<p>商品カテゴリ：{{ $category }}</p>
<p>商品説明：{{ $amount }}</p>
@if ($image_url)
<p>画像：<img src ="/{{ $image_url }}"></p>
@endif