<!-- Begin of home page -->
<div class="section page-home page page-cent" id="s-home">
				
    <!-- Logo -->
    <div class="logo-container">
        <img class="h-logo" src="assets/img/logo_only.png" alt="Logo">
    </div>
    <!-- Content -->
    <section class="content">
        
        <header class="header">
            <div class="h-left">
                <h2>{{ setting('site-home.title') }}<strong>{{ setting('site-home.title_bold') }}</strong></h2>
            </div>
            <div class="h-right">
                <h3> {{ setting('site-home.title_type') }} </h3>
                <h4 class="subhead"><a href="#contact">{{ setting('site-home.title_opace') }}</a></h4>
            </div>
        </header>
        <br><br>
        <p class="invite center">{{ setting('site-home.description') }}</p>
                
    </section>
    
    <!-- Scroll down button -->
    <footer class="p-footer p-scrolldown">
        <a href="#about-us">
            <div class="arrow-d">
                <div class="before">{{ setting('site-home.footer_b') }}</div>
                <div class="after">{{ setting('site-home.footer_a') }}</div>
                <div class="circle"></div>
            </div>
        </a>                        
    </footer>
</div>
<!-- End of home page -->