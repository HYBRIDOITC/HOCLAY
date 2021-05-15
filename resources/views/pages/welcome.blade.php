@extends('layouts.appbn')

@section('content')
        
        <!-- BEGIN OF site cover -->
        <div class="page-cover" id="home">
            <!-- Cover Background -->
            <div style="z-index: " class="cover-bg pos-abs full-size bg-img" data-image-src="assets/img/bg-default.jpg"></div>            
        </div>
        <!--END OF site Cover -->

        @include('partials.leftnav')

        <div id="parallax">
            <div data-depth="0.05" class="layer">
              <div id="particles-js"></div>
            </div>
          <div data-depth="0.3" class="layer">
              <canvas id="scene" style="z-index: 4;"></canvas>
          </div>
        </div>
        
        <!-- BEGIN OF site main content content here -->
        <main class="page-main" id="mainpage">  

            <!-- Begin of home page -->
			@include('sections.home')
            <!-- End of home page -->

            <!-- Begin of about us page -->
            @include('sections.about')
            <!-- End of about us page -->
                
            <!-- Begin of timer page -->
            @include('sections.when')
            <!-- End of timer page -->
            
            <!-- Begin of projects page -->
            @include('sections.projects')
            <!-- End of projects page -->
            
            <!-- Begin of research page -->
            @include('sections.research')
            <!-- End of research page -->
            
            <!-- Begin of hiring page -->
            @include('sections.hiring')
            <!-- End of hiring page -->
            
            <!-- Begin of Contact page   -->
            @include('sections.contact')
            <!-- End of Contact page  -->   
        
        </main>
@endsection

