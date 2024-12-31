  <!-- Header Area -->
  <header class="header">

      <!-- Header Inner -->
      <div class="header-inner">
          <div class="container">
              <div class="inner">
                  <div class="row">
                      <div class="col-lg-3 col-md-3 col-12">
                          <!-- Start Logo -->
                          <div class="logo">
                              <x-application-logo />
                          </div>
                          <!-- End Logo -->
                          <!-- Mobile Nav -->
                          <div class="mobile-nav"></div>
                          <!-- End Mobile Nav -->
                      </div>
                      <div class="col-lg-7 col-md-9 col-12">
                          <!-- Main Menu -->
                          <div class="main-menu">
                              <nav class="navigation">
                                  <ul class="nav menu">
                                      <li class="active"><a href="#">Home <i class="fa-solid fa-down"></i></a>
                                      </li>
                                      <li><a href="{{ route('categories.index') }}">Categories</a>
                                          <ul class="dropdown">
                                              @foreach ($categories as $category)
											  	<li><a wire:navigate href="{{ route('categories.show', $category->slug) }}">{{ $category->name }} </a></li>
											  @endforeach
                                          </ul>
                                      </li>
                                      <li><a href="#">Services </a></li>
                                      <li><a href="#">Pages <i class="icofont-rounded-down"></i></a>
                                      </li>
                                      <li><a href="contact.html">Contact Us</a></li>
                                  </ul>
                              </nav>
                          </div>
                          <!--/ End Main Menu -->
                      </div>
                      <div class="col-lg-2 col-12">
                          <div class="get-quote">
                              <a href="" class="btn"><i class="fas fa-shopping-cart"></i></a>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </div>
      <!--/ End Header Inner -->
  </header>
  <!-- End Header Area -->
