<header>
    <div role="navigation" class="navbar navbar-default navbar-static-top">
        <center>
            <div class="container">
                <div class="navbar-header">
                    <button
                        data-toggle="offcanvas"
                        class="navbar-toggle"
                        type="button">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"> </span>
                        <span class="icon-bar"> </span>
                        <span class="icon-bar"> </span>
                    </button>
                    <a class="" href="/">
                        <img alt="BANNER" class="img-responsive" src="{{ asset('asset/Repository_logo.png') }}" />
                    </a>
                    <div
                        class="navbar-header pull-right visible-xs hidden-sm hidden-md hidden-lg">
                        <ul class="nav nav-pills pull-left "> </ul>
                    </div>
                </div>
                <div class="navbar-header pull-right">
                    <ul class="nav navbar-nav pull-left"> </ul>
                    <button
                        type="button"
                        class="navbar-toggle visible-sm"
                        data-toggle="offcanvas">
                            <span class="sr-only">Toggle
                            navigation</span>
                            <span class="icon-bar"> </span>
                            <span class="icon-bar"> </span>
                            <span class="icon-bar"> </span>
                        </button>
                    <div id="header-form">
                        <form
                            style="margin-bottom:20px;"
                            method="post"
                            id="ds-search-form"
                            action="/discover">
                            <fieldset>
                                <div class="input-group">
                                    <input
                                        placeholder="Search"
                                        type="text"
                                        class="ds-text-field form-control"
                                        name="query" />
                                        <span class="input-group-btn">
                                            <button title="Go" class="ds-button-field btn btn-primary">
                                                <span aria-hidden="true" class="glyphicon glyphicon-search">
                                            </button>
                                        </span>
                                </div>
                            </fieldset>
                        </form>
                    </div>
                </div>
            </div>
        </center>
    </div>
</header>
