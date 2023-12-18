    <!-- page header -->
    <header id="home" class="header">
        <div class="overlay"></div>
        <div class="header-content container">
            <h1 class="header-title">
                <span class="up">{{optional($pageHeaderData)->title}}</span>
                <span class="down">{{optional($pageHeaderData)->subtitle}}</span>
            </h1>
            <p class="header-subtitle">{{optional($pageHeaderData)->content}}</p>
        </div>
    </header><!-- end of page header -->