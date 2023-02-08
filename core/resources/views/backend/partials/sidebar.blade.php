<div class="span3">
    <div class="sidebar">
        <ul class="widget widget-menu unstyled">
            <li class="active">
                <a href="{{ route('admin.home') }}"><i class="menu-icon icon-dashboard"></i>Dashboard</a>
            </li>
            <li>
                <a class="collapsed" data-toggle="collapse" href="#togglePages1">
                    <i class="menu-icon icon-qrcode"></i>
                    <i class="icon-chevron-down pull-right"></i>
                    <i class="icon-chevron-up pull-right">
                    </i>History Category</a>
                <ul id="togglePages1" class="collapse unstyled"
                    @if(request()->path() == 'admin/add/category') style="display: block;"
                    @elseif(request()->path() == 'manage/category') style="display: block"
                        @endif>
                    <li><a href="{{ route('add.category') }}" class="nav-link @if(request()->path() == 'admin/add/category') bg-success @endif"><i class="icon-question-sign"></i>Add Category</a></li>
                    <li><a href="{{ route('manage.category') }}" class="nav-link @if(request()->path() == 'admin/manage/category') bg-success @endif"><i class="icon-quote-left"></i>Manage Category</a></li>
                </ul>
            </li>
            <li>
                <a class="collapsed" data-toggle="collapse" href="#togglePages2">
                    <i class="menu-icon icon-qrcode"></i>
                    <i class="icon-chevron-down pull-right"></i>
                    <i class="icon-chevron-up pull-right">
                    </i>History Place</a>
                <ul id="togglePages2" class="collapse unstyled"
                    @if(request()->path() == 'add/history/place') style="display: block;"
                    @elseif(request()->path() == 'admin/manage/history/place') style="display: block"
                        @endif>
                    <li><a href="{{ route('add.history.place') }}" class="nav-link @if(request()->path() == 'add/history/place') bg-success @endif"><i class="icon-question-sign"></i>Add Place</a></li>
                    <li><a href="{{ route('manage.history.place') }}" class="nav-link @if(request()->path() == 'manage/history/place') bg-success @endif"><i class="icon-quote-left"></i>Manage Place</a></li>
                </ul>
            </li>
            <li>
                <a class="collapsed" data-toggle="collapse" href="#togglePages3">
                    <i class="menu-icon icon-qrcode"></i>
                    <i class="icon-chevron-down pull-right"></i>
                    <i class="icon-chevron-up pull-right">
                    </i>Art & Culture</a>
                <ul id="togglePages3" class="collapse unstyled"
                    @if(request()->path() == 'add/art/culture') style="display: block;"
                    @elseif(request()->path() == 'admin/manage/art/culture') style="display: block"
                        @endif>
                    <li><a href="{{ route('add.art.culture') }}" class="nav-link @if(request()->path() == 'admin/add/art/culture') bg-success @endif"><i class="icon-question-sign"></i>Add Art& Culture</a></li>
                    <li><a href="{{ route('manage.art.culture') }}" class="nav-link @if(request()->path() == 'admin/manage/art/culture') bg-success @endif"><i class="icon-quote-left"></i>Manage Art & Culture</a></li>
                </ul>
            </li>
            <li>
                <a class="collapsed" data-toggle="collapse" href="#togglePages4">
                    <i class="menu-icon icon-qrcode"></i>
                    <i class="icon-chevron-down pull-right"></i>
                    <i class="icon-chevron-up pull-right">
                    </i>Team Member</a>
                <ul id="togglePages4" class="collapse unstyled"
                    @if(request()->path() == 'add/team') style="display: block;"
                    @elseif(request()->path() == 'manage/team') style="display: block"
                        @endif>
                    <li><a href="{{ route('add.team') }}" class="nav-link @if(request()->path() == 'add/team') bg-success @endif"><i class="icon-question-sign"></i>Add Member</a></li>
                    <li><a href="{{ route('manage.team') }}" class="nav-link @if(request()->path() == 'manage/team') bg-success @endif"><i class="icon-quote-left"></i>Manage Member</a></li>
                </ul>
            </li>
            <li>
                <a class="collapsed" data-toggle="collapse" href="#togglePages5">
                    <i class="menu-icon icon-qrcode"></i>
                    <i class="icon-chevron-down pull-right"></i>
                    <i class="icon-chevron-up pull-right">
                    </i>Slider & About</a>
                <ul id="togglePages5" class="collapse unstyled"
                    @if(request()->path() == 'add/slider') style="display: block;"
                    @elseif(request()->path() == 'add/about') style="display: block"
                        @endif>
                    <li><a href="{{ route('add.slider') }}" class="nav-link @if(request()->path() == 'add/slider') bg-success @endif"><i class="icon-question-sign"></i>Add Slider</a></li>
                    <li><a href="{{ route('add.about') }}" class="nav-link @if(request()->path() == 'add/about') bg-success @endif"><i class="icon-quote-left"></i>Add About</a></li>
                </ul>
            </li>
            <li>
                <a class="collapsed" data-toggle="collapse" href="#togglePages6">
                    <i class="menu-icon icon-qrcode"></i>
                    <i class="icon-chevron-down pull-right"></i>
                    <i class="icon-chevron-up pull-right">
                    </i>Contact Form</a>
                <ul id="togglePages6" class="collapse unstyled"
                    @if(request()->path() == 'show/contact') style="display: block;"
                        @endif>
                    <li><a href="{{ route('show.contact') }}" class="nav-link @if(request()->path() == 'show/contact') bg-success @endif"><i class="icon-question-sign"></i>Show Contact</a></li>
                </ul>
            </li>
        </ul>
        <!--/.widget-nav-->
    </div>
    <!--/.sidebar-->
</div>