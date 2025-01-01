<x-app-layout>
	<section class="why-choose section" >
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="section-title">
						<h2>{{ $category->name }}</h2>
						<img src="{{ asset('img/logo/tiles-svgrepo-com.svg') }}" alt="tiles-svg">
						<p>{{ $category->description }}</p>
					</div>
				</div>
			</div>
			<div class="row">
				@foreach ($category->products as $product)
				<div class="col-lg-4 col-md-6 col-12 mb-4">
					<!-- Single Blog -->
					<div class="single-news">
						<div class="news-head">
							<img src="{{asset($product->image_url)}}" alt="{{$product->name}}-image">
						</div>
						<div class="news-body">
							<div class="news-content">
								<div class="date">${{ $product->price }}</div>
								<h2><a href="blog-single.html">{{ $product->name }}</a></h2>
								<p class="text">{{ Str::limit($product->description, 150, '...') }} <a style="color: #1a76d1" href="{{ route('products.show', $product->slug)}}">read more </a></p>
								<small class="text-muted">{{ $product->created_at->diffForHumans() }}</small>
							</div>
						</div>
					</div>
					<!-- End Single Blog -->
				</div>
				@endforeach
			</div>
		</div>
	</section>
</x-app-layout>