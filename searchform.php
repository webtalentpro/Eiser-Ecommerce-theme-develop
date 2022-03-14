<aside class="single_sidebar_widget search_widget">
    <form action="<?php echo esc_url(home_url()) ?>" method="get">
        <div class="form-group">
            <div class="input-group mb-3">
                <input
                    type="text"
                    class="form-control"
                    placeholder="Search Keyword"
                    name="s"
                    value="<?php echo get_search_query(); ?>">
                <div class="input-group-append">
                    <button class="btn" type="button">
                        <i class="ti-search"></i>
                    </button>
                </div>
            </div>
        </div>
        <button class="main_btn rounded-0 w-100" type="submit">Search</button>
    </form>
</aside>